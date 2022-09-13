<?php
function get_list_books($date, $id) 
{
    return books_get_data($date, $id);
}

function get_data_manage_times() 
{
    return times_get_data_taxonomy();
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
                                                                        
                                                                        $color = "#00ff85";//"#ccccfe";
                                                                        $status ="";
                                                                        if($statusBook == 0)
                                                                        {
                                                                            $color = "#e0e0e0";
                                                                            $status = "Cancel";
                                                                        } else if($statusBook == 2) {
                                                                            $color = "#ccccfe";//"#66cc9a";
                                                                            $status = "Comfirm";
                                                                        }
                                                                        ?>
                                                                            <div class="item-boook" data-id="<?php echo $book->ID?>" style="background-color: <?php echo  $color?>">
                                                                                <div class="icon-collapse">
                                                                                    <span class="dashicons dashicons-minus first-minus"></span>
                                                                                    <span class="dashicons dashicons-minus"></span>
                                                                                </div>
                                                                                <div class="status-books">
                                                                                    <?php echo $status?>
                                                                                </div>
                                                                                <div>
                                                                                    <?php echo $book->post_title?>
                                                                                </div>
                                                                                <div>
                                                                                    tel: <?php echo $phoneBook?>
                                                                                </div>

                                                                                <div class="wrap-content-books hide-card">
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

                                                                                    <div class="group-button" data-id="<?php echo $book->ID?>">
                                                                                        <button class="edit">Edit</button>
                                                                                        <button class="delete">Delete</button>
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
                   
                </div>
            </div>
            
        <?php
    }
    wp_die(); 
}

add_action('wp_ajax_delete_data_books', 'delete_data_books_function');
add_action('wp_ajax_nopriv_delete_data_books', 'delete_data_books_function');
function delete_data_books_function() {
    if($_GET["id"] != "")
    {
        delete_by_id_books($_GET["id"]);
    }
    wp_die(); 
}