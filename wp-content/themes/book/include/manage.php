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
        $start = date('Y-m-d', strtotime("0 day", strtotime($_GET["startDate"])));
        $end = date('Y-m-d', strtotime("0 day", strtotime($_GET["endDate"])));
        
        $monday = date('F j', strtotime("0 day", strtotime($start)));
        $sunday = date('F j', strtotime("0 day", strtotime($end)));
        ?>
            <div class="list-data-books">
                <div class="group-calendar">
                    <span><button class="previous-books" data-date="<?php echo  $start?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/white-left-arrow.png" alt="" style="width: 20px; height: auto"></button></span>
                    <div class="calendar-books">
                        <?php
                            if($amount == 1)
                            {
                                echo $monday;
                            } else {
                                echo $monday . " - " .$sunday;
                            }
                        ?>
                    </div>
                    <span><button class="next-books" data-date="<?php echo  $end?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/white-right-arrow.png" alt="" style="width: 20px; height: auto"></button></span>
                </div>

                <style>
                    .item-book-header {
                        display: inline-flex;
                    }

                    .item-book-body {
                        display: inline-flex;
                    }

                    .cell-book {
                        margin: 5px;
                        width: 200px;
                    }

                    .item-book-header .cell-book:nth-child(1) {
                        width: 100px;
                    }

                    .item-book-body .cell-book:nth-child(1) {
                        width: 100px;
                    }
                </style>
               
                <div class="count-books" style="text-align: center;" ><?php echo $countDatePoint?> Appointments</div>
                <div class="list-calendar">
                    <div class="item-book-header">
                        <div class="cell-book"></div>
                        <?php
                            for($i=0; $i<$amount; $i++)
                            {
                                $date = date('D M j', strtotime($i." day", strtotime($monday)));
                                ?>
                                    <div class="cell-book"><?php echo $date?></div>
                                <?php
                            }
                        ?>
                    </div>
                    
                        <?php
                            foreach(get_data_times() as $time )
                            { 
                                ?>
                                    <div class="item-book-body">
                                        <div class="cell-book"><?php echo $time->name?></div>
                                        <?php
                                            for($i=0; $i<$amount; $i++){
                                                $date = date('Y-m-d', strtotime($i." day", strtotime($monday)));
                                                $books = get_list_books($date,$time->term_id );
                                                if(count($books)>0) {
                                                    ?>
                                                        <div class="cell-book">
                                                            <?php
                                                                foreach($books as $book) {
                                                                    ?>
                                                                        <div>
                                                                            <?php echo $book->post_title?>
                                                                        </div>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <div class="cell-book"></div>
                                                    <?php
                                                }

                                                
                                            }
                                        ?>
                                    </div>
                                <?php
                            }
                        ?>  
                </div>
            </div>
            
        <?php
    }
    wp_die(); 
}