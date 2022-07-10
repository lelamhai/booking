<?php
    add_action('wp_ajax_insert', 'insert_function');
    add_action('wp_ajax_nopriv_insert', 'insert_function');
    function insert_function() {

        if($_GET['phoneNumber'] != null && $_GET['fullName'] != null && $_GET['time_id'] != null && $_GET['datepicker'] && $_GET['slots'])
        {
            $phoneNumber = $_GET['phoneNumber'];
            $fullName = $_GET['fullName'];
            $time_id = $_GET['time_id'];
            $datepicker = $_GET['datepicker'];
            $message = $_GET['message'];
            $slots = $_GET['slots'];
            $email = $_GET['email'];
            $services = $_GET['services'];
            
            books_insert($phoneNumber, $fullName, $time_id, $datepicker, $message, $slots, $email, $services);
        }
        wp_die(); 
    }



    add_action('wp_ajax_getSlots', 'getSlots_function');
    add_action('wp_ajax_nopriv_getSlots', 'getSlots_function');
    function getSlots_function() {
        
        if($_GET["date"] != null && $_GET["time_id"] != null)
        {

            $date=date_create($_GET["date"]);
            $dateNew = date_format($date,"Y/m/d");


            // $taxonomies = get_terms( array(
            //     'taxonomy' => 'services',
            //     'hide_empty' => false,
            //     'parent'   => 0
            // ) );

            
            $slots= booking_get_slots($dateNew, $_GET["time_id"]);

            ?>
                   <div class="wrap-guest">
                    <div class="wrap-number-of-guest">
                        <div class="guest-title">NUMBER OF GUEST<span class="red">*</span></div>
                        <div class="select-nember over-hide">
                            <?php
                                if($slots > 0)
                                {
                                    $first = true;
                                    for($i=1; $i<=$slots; $i++)
                                    {
                                        if($first)
                                        {
                                            ?>
                                                <div class="item-slot">
                                                    <input class="checkbox-budget" type="radio" onchange="onChangeRadio(this)" name="budget" id="budget-<?php echo $i?>" value="<?php echo $i?>" checked>
                                                    <label class="for-checkbox-budget" for="budget-<?php echo $i?>">
                                                        <span data-hover="<?php echo $i?>"><?php echo $i?></span>
                                                    </label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="item-slot">
                                                    <input class="checkbox-budget" type="radio"  onchange="onChangeRadio(this)" name="budget" id="budget-<?php echo $i?>" value="<?php echo $i?>">
                                                        <label class="for-checkbox-budget" for="budget-<?php echo $i?>">
                                                        <span data-hover="<?php echo $i?>"><?php echo $i?></span>
                                                    </label>
                                                </div>
                                            <?php
                                        }
                                        $first = false;
                                    }
                                } else {
                                    echo "<div style='padding: 15px 0 30px 0'>There are no available seats. Please call us or select another time.";
                                }
                            ?>
                                        
                        </div>            
                    </div>
                    
                    <?php
                        $first = true;
                        for($i=1; $i<=$slots; $i++)
                        {
                            if($first)
                            {
                                ?>
                               <div class="wrap-service-parent wrap-service-parent-<?php echo $i?>" style="display: block">
                                    <div class="guest-item-title">GUEST <?php echo $i?><span class="red">*</span></div>
                                    <div class="wrap-button-number">
                                        <?php
                                            $index = 1;
                                            foreach(services_get_taxonomy() as $parent)
                                            {
                                                ?>
                                                    <label class="number"><?php  echo $parent->name?>
                                                        <input type="checkbox" class="checkbox-menu" onchange="onChangeCheckbox(this)" data-id="<?php echo $parent->term_id?>" data-name="<?php echo $parent->name?>" value="<?php echo $index?>">
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
                                            foreach(services_get_taxonomy() as $parent)
                                            {
                                                ?>
                                                    <div class="wrap-service-item hidden wrap-service-item-<?php echo $index?>">
                                                        <div class="service-title"><?php echo $parent->name?></div>
                                                            <div class="service-content">
                                                            <select class="basic-single" style="width: 100%">
                                                                <?php 
                                                                    foreach(services_get_taxonomy($parent->term_id) as $child)
                                                                    {
                                                                        ?>
                                                                            <option value="<?php echo $child->term_id?>"><?php echo $child->name?></option>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
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
                                        <div class="guest-item-title">GUEST <?php echo $i?><span class="red">*</span></div>
                                        <div class="wrap-button-number">
                                            <?php
                                                $index = 1;
                                                foreach(services_get_taxonomy() as $parent)
                                                {
                                                    ?>
                                                        <label class="number"><?php  echo $parent->name?>
                                                            <input type="checkbox" class="checkbox-menu" onchange="onChangeCheckbox(this)" data-id="<?php echo $parent->term_id?>" data-name="<?php echo $parent->name?>" value="<?php echo $index?>">
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
                                                    ?>
                                                        <div class="wrap-service-item hidden wrap-service-item-<?php echo $index?>">
                                                            <div class="service-title"><?php echo $parent->name?></div>
                                                                <div class="service-content">
                                                                <select class="basic-single" style="width: 100%">
                                                                    <?php 
                                                                        foreach(services_get_taxonomy($parent->term_id) as $child)
                                                                        {
                                                                            ?>
                                                                                <option  value="<?php echo $child->term_id?>"><?php echo $child->name?></option>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    $index ++;
                                                }
                                            ?>
                                            <div class="error-checkbox red">Field with * is required.</div>
                                    
                                        </div>
                                    </div>
                                <?php
                            }
                            $first = false;
                        }
                    ?>
                    <?php
                        if($slots > 0)
                        {
                            ?>
                                <div class="wrap-input-form wrap-input-message choose-person">
                                    <div class="label-card">Your message</div>
                                    <textarea class="message" name="message" rows="6" cols="50" placeholder="Message"></textarea>
                                </div>
                            <?php
                        }
                    ?>
                        
                    
                </div>
            <?php
        }

        wp_die(); 
    }
?>