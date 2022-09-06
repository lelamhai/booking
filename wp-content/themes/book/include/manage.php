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
        $amount = $_GET["amount"];
        $countDatePoint = count(books_get_count_book_date($_GET["startDate"], $_GET["endDate"]));
        ?>
            <div class="list-data-books">
                <div class="calendar-books">
                    <?php
                        $start = date('Y-m-d', strtotime("0 day", strtotime($_GET["startDate"])));
                        $end = date('Y-m-d', strtotime("0 day", strtotime($_GET["endDate"])));
                        
                        $monday = date('F j', strtotime("0 day", strtotime($start)));
                        $sunday = date('F j', strtotime("0 day", strtotime($end)));
                        
                        if($amount == 1)
                        {
                            echo $monday;
                        } else {
                            echo $monday . " - " .$sunday;
                        }
                    ?>
                </div>
                <div class="count-books" style="text-align: center;" ><?php echo $countDatePoint?> Appointments</div>
                <div class="list-calendar">
                    <table class="table-data-books">
                        <thead>
                                        <th></th>
                                        <?php
                                            for($i=0; $i<$amount; $i++)
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
                                                for($i=0; $i<$amount; $i++)
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

add_action('wp_ajax_search_phone_books', 'search_phone_books_function');
add_action('wp_ajax_nopriv_search_phone_books', 'search_phone_books_function');
function search_phone_books_function() {
    if($_GET["phone"] != "")
    {
        $args = array(  
            'post_type'		    => 'books',
            'posts_per_page'    => -1,
            'meta_key'          => 'booking_date', // Grab the "start date" field created via "More Fields" plugin (stored in YYYY-MM-DD format)
            'orderby'           => 'meta_value', // We want to organize the events by date    
            'order'             => 'ASC',
            'meta_query'	    => array(
                array(
                    'key' => 'booking_phone',
                    'value' => $_GET["phone"],
                    'type' => 'numeric',
                    'compare' => '=',
                )
            )
        );
        $books = get_posts($args);
        $countBooks = count($books);
    
        ?>
             <div class="list-data-books">
                <div class="calendar-books">
                   Tìm thấy <?php echo $countBooks?> kết quả với số điện thoại <?php echo $_GET["phone"] ?>
                </div>
                <div class="list-calendar">
                    <?php
                        if($countBooks > 0)
                        {
                            ?>
                                <table class="table-data-books">
                                    <thead>
                                            <th></th>
                                            <?php 
                                                foreach($books as $book)
                                                {
                                                    $id = $book->ID;
                                                    $dateData = get_post_meta( $id, 'booking_date', true );
                                                    $date = date('D M j', strtotime($dateData));
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
                                                            foreach($books as $book)
                                                            {
                                                                $termTimeBooks = get_the_terms($book->ID, 'times')[0];
                                                                if($time->term_id == $termTimeBooks->term_id)
                                                                {
                                                                    ?>
                                                                        <td><?php echo $book->post_title?></td>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                        <td></td>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </tr>
                                                <?php
                                        }
                                        ?>
                                    </tbody>
                                </table> 
                            <?php
                        } else {
                            ?>
                                <div style="text-align: center;">Không tìm thấy kết quả</div>
                            <?php
                        }
                    ?>
                    
                </div>
            </div>
        <?php
    }
    wp_die(); 
}