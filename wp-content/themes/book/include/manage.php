<?php
function get_list_books($date, $id) 
{
    return books_get_data($date, $id);
}

function get_data_manage_times() 
{
    return times_get_data_manage();
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
                        transform: rotateX(180deg);
                        background-color: #00ff85;
                    }

                    .item-book-body {
                        display: inline-flex;
                        transform: rotateX(180deg);
                    }

                    .cell-book {
                        margin: 5px;
                        width: 250px;
                    }

                    .item-book-header .cell-book:nth-child(1) {
                        width: 100px;
                    }

                    .item-book-body .cell-book:nth-child(1) {
                        width: 100px;
                    }

                    .group-button {
                        text-align: center;
                    }
                </style>
               
                <div class="count-books" style="text-align: center;" ><?php echo $countDatePoint?> Appointments</div>
                <div class="list-calendar">
                    
                    
                        <?php
                            foreach(get_data_manage_times() as $time )
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
                                                                    foreach($books as $book)
                                                                    {
                                                                        $phoneBook = get_post_meta( $book->ID, 'booking_phone', true );
                                                                        $statusBook = get_post_meta( $book->ID, 'booking_status', true );
                                                                        $servicesBook = get_post_meta( $book->ID, 'booking_services', true );
                                                                        $locationBook = get_post_meta( $book->ID, 'booking_location', true );
                                                                        $jsonData = json_decode($servicesBook);
                                                                        
                                                                        $color = "#ccccfe";
                                                                        if($statusBook == 0)
                                                                        {
                                                                            $color = "#e0e0e0";
                                                                        } else if($statusBook == 2) {
                                                                            $color = "#66cc9a";
                                                                        }
                                                                        ?>
                                                                            <div class="item-boook" style="background-color: <?php echo  $color?>">
                                                                              
                                                                                <div>
                                                                                    <?php echo $book->post_title?>
                                                                                </div>
                                                                                <div>
                                                                                    tel: <?php echo $phoneBook?>
                                                                                </div>

                                                                                <div class="wrap-content-books">
                                                                                    <div class="services">

                                                                                        <?php
                                                                                            for($j=0 ; $j<count($jsonData); $j++) {
                                                                                                $data = $jsonData[$j]->children;
                                                                                                $guest = $j +1;
                                                                                                echo "Guest ". $guest . ": ";

                                                                                                for($k=0; $k< count($data); $k++)
                                                                                                {
                                                                                                    $arr = explode('-', $data[$k]);
                                                                                                    $parent = get_term($arr[0])->name;
                                                                                                    $child = get_term($arr[1])->name;
                                                                                                    
                                                                                                    $parentPrice = get_term_meta($arr[0], 'services-price', true );
                                                                                                    $childrentPrice = get_term_meta($arr[1], 'services-price', true );
                                                                                                    
                                                                                                    $price = 0;
                                                                                                    $name = "";
                                                                                                    if($child == 0)
                                                                                                    {
                                                                                                        $name = $parent;
                                                                                                        $price = $parentPrice;
                                                                                                    } else {
                                                                                                        $name = $child;
                                                                                                        $price = $childrentPrice;
                                                                                                    }
                                                                                                    echo $name." $". $price. ", ";
                                                                                                }
                                                                                                echo "<br>";
                                                                                            }
                                                                                        ?>
                                                                                    </div>
                                                                                    <div class="services">
                                                                                        Location: <?php echo $locationBook?>
                                                                                    </div>
                                                                                    <div class="message">
                                                                                        Message: <?php echo $book->post_excerpt?>
                                                                                    </div>

                                                                                    <div class="group-button">
                                                                                        <button>Edit</button>
                                                                                        <button>Delete</button>
                                                                                    </div>
                                                                                </div>

                                                                               
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
                </div>
            </div>
            
        <?php
    }
    wp_die(); 
}