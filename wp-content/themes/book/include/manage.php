<?php
function get_list_books($date, $id) 
{
    return books_get_data($date, $id);
}

add_action('wp_ajax_get_data_books_date', 'get_data_books_date_function');
add_action('wp_ajax_nopriv_get_data_books_date', 'get_data_books_date_function');
function get_data_books_date_function() {
    if($_GET["startDate"] != "" && $_GET["endDate"] != "")
    {
        ?>
            <div class="list-data-books">
                <div class="calendar-books">
                    <?php
                        $start = date('Y-m-d', strtotime("0 day", strtotime($_GET["startDate"])));
                        $end = date('Y-m-d', strtotime("0 day", strtotime($_GET["endDate"])));
                        
                        $monday = date('F j', strtotime("0 day", strtotime($start)));
                        $sunday = date('F j', strtotime("0 day", strtotime($end)));
                        echo $monday . " - " .$sunday;
                    ?>
                </div>
                <div class="list-calendar">
                    <table class="table-data-books">
                        <thead>
                                        <th></th>
                                        <?php
                                            for($i=0; $i<7; $i++)
                                            {
                                                $date = date('D M j', strtotime($i." day", strtotime($monday)));
                                                ?>
                                                    <th><?php echo $date?></th>
                                                <?php
                                            }
                                        ?>
                        </thead>
                        <tbody>
                            <?php
                                foreach(get_data_times() as $time )
                                { 
                                    ?>
                                        <tr class="item-time">
                                            <td><?php echo $time->name?></td>
                                            <?php
                                                for($i=0; $i<7; $i++)
                                                {
                                                    $date = date('Y-m-d', strtotime($i." day", strtotime($monday)));
                                                    $books = get_list_books($date,$time->term_id );
                                                    if(count($books)>0)
                                                    {
                                                        ?>
                                                            <td>
                                                                <?php
                                                                    foreach($books as $book)
                                                                    {
                                                                        ?>
                                                                            <div><?php echo $book->post_title?></div>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </td>
                                                        <?php
                                                    } else {
                                                        ?><td><?php echo ""?></td><?php
                                                    }
                                                                
                                                }
                                            ?>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table> 
                </div>
            </div>
            
        <?php
    }
    wp_die(); 
}