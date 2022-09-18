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

add_action('wp_ajax_edit_data_books', 'edit_data_books_function');
add_action('wp_ajax_nopriv_edit_data_books', 'edit_data_books_function');
function edit_data_books_function() {
    if($_GET["id"] != "")
    {
        $books = get_data_by_id_books($_GET["id"])[0];
        $id = $books->ID;
        $times = get_the_terms($id, 'times')[0];
        $date = get_post_meta($id, 'booking_date', true );
        $phone = get_post_meta($id, 'booking_phone', true );
        $services = get_post_meta($id, 'booking_services', true );
        $status = get_post_meta($id, 'booking_status', true );
        $slots = get_post_meta($id, 'booking_slots', true );
        $email = get_post_meta($id, 'booking_email', true );
        $location = get_post_meta($id, 'booking_location', true );

        $jsonData = json_decode($services);
        ?>
            <div class="modal fade in" id="modalEditBook" style="display: block; padding-right: 15px;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="wrap-modal-books">
                                <div class="wrap-input-form wrap-input-full">
                                    <div class="label-card TextColorBody">Your name<span class="red">*</span></div>
                                    <input type="text" class="full-name" value="<?php echo $books->post_title?>">
                                    <div class="error red">Error</div>
                                </div>
                                <div class="wrap-input-form wrap-input-phone-number">
                                    <div class="label-card TextColorBody">Phone number<span class="red">*</span></div>
                                    <input type="tel" class="phone-number" value="<?php echo $phone?>">
                                    <div class="error red">Error</div>
                                </div>
                                <div class="wrap-input-form wrap-input-email">
                                    <div class="label-card TextColorBody">Your email</div>
                                    <input type="email" class="email" value="<?php echo $email?>">
                                    <div class="error red">Error</div>
                                </div>
                                <div class="wrap-input-form wrap-input-location">
                                    <div class="label-card TextColorBody">Your location</div>
                                    <input type="text" class="location" value="<?php echo $location?>">
                                    <div class="error red">Error</div>
                                </div>
                                <div class="wrap-input-form wrap-input-datepicker">
                                    <div class="label-card TextColorBody">Pick a day<span class="red">*</span></div>
                                    <input type="text" id="datepickerCalendarEdit" class="hasDatepicker" value="<?php echo $date?>">
                                    <!-- <img src="http://localhost/booking/wp-content/themes/book/assets/img/icon-theme/icon-time.png" alt="" class="calendar"> -->
                                    <div class="error red">Error</div>
                                </div>
                                <div class="wrap-input-form wrap-input-single-main">
                                    <div class="label-card TextColorBody">Pick a preferred time<span class="red">*</span></div>
                                   
                                   <?php
                                        $terms = get_terms( array(
                                            'taxonomy' => 'times',
                                            'orderby'  => 'id',
                                            'order'    => 'ASC',
                                            'hide_empty' => false,
                                        ) );
                                    ?>

                                    <select id="single-main" class="single-main" style="width: 100%">
                                        <?php
                                        foreach($terms as $term)
                                        {
                                            if($times->term_id == $term->term_id)
                                            {
                                                ?>
                                                    <option value="<?php echo $term->term_id?>" selected><?php echo $term->name?></option>
                                                <?php
                                            } else {
                                                ?>
                                                    <option value="<?php echo $term->term_id?>"><?php echo $term->name?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>

                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-single-main-container"><span class="select2-selection__rendered" id="select2-single-main-container" role="textbox" aria-readonly="true" title="8:20 AM"><span class="select2-selection__clear" data-select2-id="3">×</span>8:20 AM</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <div class="error red">Error</div>
                                </div>
                                <div class="wrap-data-ajax">
                                    <!-- load ajax -->
                                    <?php
                                        $sloted = count($jsonData);
                                        $slots = booking_get_slots($date , $times->term_id);
                                    ?>
                                    <div class="wrap-guest">
                                        <div class="wrap-number-of-guest">
                                        <div class="guest-title TextColorBody">Number of guest<span class="red">*</span></div>
                                        <div class="select-nember over-hide">
                                           <?php
                                                if($slots > 0)
                                                {
                                                    for($i=1; $i<=$slots; $i++)
                                                    {
                                                       if($i <= $sloted )
                                                       {
                                                        ?>
                                                            <div class="item-slot">
                                                                <input class="checkbox-budget" type="radio" name="budget" id="budget-<?php echo $i?>" value="<?php echo $i?>" checked>
                                                                <label class="for-checkbox-budget TextColorBody" for="budget-<?php echo $i?>">
                                                                    <span data-hover="<?php echo $i?>"><?php echo $i?></span>
                                                                </label>
                                                            </div>
                                                        <?php
                                                       }else {
                                                        ?>
                                                            <div class="item-slot">
                                                                <input class="checkbox-budget" type="radio"  name="budget" id="budget-<?php echo $i?>" value="<?php echo $i?>">
                                                                    <label class="for-checkbox-budget TextColorBody" for="budget-<?php echo $i?>">
                                                                    <span data-hover="<?php echo $i?>"><?php echo $i?></span>
                                                                </label>
                                                            </div>
                                                        <?php
                                                       }
                                                    }
                                                } else {
                                                    echo "<div style='padding: 15px 0 30px 0'>There are no available seats. Please call us or select another time.";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                        <?php
                                            for($i=1; $i<=$slots; $i++)
                                            {
                                                if($i <= $sloted)
                                                {
                                                    $parents = services_get_taxonomy();
                                                    ?>
                                                        <div class="wrap-service-parent wrap-service-parent-<?php echo $i?>" style="display: block">
                                                            <div class="guest-item-title TextColorBody">Guest <?php echo $i?><span class="red">*</span></div>
                                                            <div class="wrap-button-number">
                                                                <?php
                                                                    $index = 1;
                                                                    foreach($parents as $parent)
                                                                    {
                                                                        ?>
                                                                            <label class="number TextColorBody"><?php  echo $parent->name?>
                                                                                <input type="checkbox" class="checkbox-menu" data-id="<?php echo $parent->term_id?>" data-name="<?php echo $parent->name?>" value="<?php echo $index?>">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        <?php
                                                                        $index ++;
                                                                    }
                                                                ?>
                                                            </div>
                                                            <div class="wrap-service-child">
                                                                <?php
                                                                    $index=1;
                                                                    foreach($parents as $parent)
                                                                    {
                                                                        $children = services_get_taxonomy($parent->term_id);
                                                                        ?>
                                                                                <?php
                                                                                    if(count($children ) > 0)
                                                                                    {
                                                                                    ?>
                                                                                        <div class="wrap-service-item hidden wrap-service-item-<?php echo $index?>">
                    
                                                                                            <div class="service-title TextColorBody" data=""><?php echo $parent->name?></div>
                                                                                            <div class="service-content">
                                                                                                <select class="basic-single" style="width: 100%">
                                                                                                    <?php 
                                                                                                        foreach($children as $child)
                                                                                                        {
                                                                                                            ?>
                                                                                                                <option data-parent="<?php echo $parent->term_id?>" value="<?php echo $child->term_id?>"><?php echo $child->name;?></option>
                                                                                                            <?php
                                                                                                        }
                                                                                                    ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php
                                                                                    } else {
                                                                                        ?>
                                                                                            <div class="wrap-service-item hidden hidden-child wrap-service-item-<?php echo $index?>">
                                                                                                <div class="service-title TextColorBody" data=""><?php echo $parent->name?></div>
                                                                                                <div class="service-content">
                                                                                                    <select class="basic-single" style="width: 100%">
                                                                                                        <option data-parent="<?php echo $parent->term_id?>" value="0">NULL</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php
                                                                                    }
                                                                                ?>
                                                                        <?php
                                                                        $index ++;
                                                                    }
                                                                ?>
                                                                <div class="error-checkbox red">Field with * is required.</div>
                                                        
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="wrap-service-parent wrap-service-parent-<?php echo $i?>">
                                                            <div class="guest-item-title TextColorBody">Guest <?php echo $i?><span class="red">*</span></div>
                                                            <div class="wrap-button-number">
                                                                <?php
                                                                    $index = 1;
                                                                    foreach(services_get_taxonomy() as $parent)
                                                                    {
                                                                        ?>
                                                                            <label class="number TextColorBody"><?php  echo $parent->name?>
                                                                                <input type="checkbox" class="checkbox-menu" data-id="<?php echo $parent->term_id?>" data-name="<?php echo $parent->name?>" value="<?php echo $index?>">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        <?php
                                                                        $index ++;
                                                                    }
                                                                ?>
                                                            </div>
                                                            <div class="wrap-service-child">
                                                                <?php
                                                                    $index = 1;
                                                                    foreach(services_get_taxonomy() as $parent)
                                                                    {
                                                                        $children = services_get_taxonomy($parent->term_id);
                                                                        ?>
                                                                                <?php
                                                                                if(count($children ) > 0)
                                                                                {
                                                                                   ?>
                                                                                    <div class="wrap-service-item hidden wrap-service-item-<?php echo $index?>">
                    
                                                                                        <div class="service-title TextColorBody" data=""><?php echo $parent->name?></div>
                                                                                        <div class="service-content">
                                                                                            <select class="basic-single" style="width: 100%">
                                                                                                <?php 
                                                                                                    foreach($children as $child)
                                                                                                    {
                                                                                                        ?>
                                                                                                            <option data-parent="<?php echo $parent->term_id?>" value="<?php echo $child->term_id?>"><?php echo $child->name;?></option>
                                                                                                        <?php
                                                                                                    }
                                                                                                ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                   <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <div class="wrap-service-item hidden hidden-child wrap-service-item-<?php echo $index?>">
                                                                                            <div class="service-title TextColorBody" data=""><?php echo $parent->name?></div>
                                                                                            <div class="service-content">
                                                                                                <select class="basic-single" style="width: 100%">
                                                                                                    <option data-parent="<?php echo $parent->term_id?>" value="0">NULL</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                        <?php
                                                                        $index ++;
                                                                    }
                                                                ?>
                                                                <div class="error-checkbox red">Field with * is required.</div>
                                                        
                                                            </div>
                                                        </div>
                                                    <?php
                                                }
                                            }
                                        ?>
                                        <div class="wrap-input-form wrap-input-message choose-person">
                                        <div class="label-card">Your message</div>
                                        <textarea class="message" name="message" rows="6" cols="50" placeholder="Message..."><?php echo $books->post_excerpt?></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
    wp_die(); 
}