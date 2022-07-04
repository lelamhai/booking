<?php
    add_action('wp_ajax_selectTime', 'selectTime_function');
    add_action('wp_ajax_nopriv_selectTime', 'selectTime_function');
    function selectTime_function() {
        if($_GET['time_id'] != null)
        {
            $time_id = $_GET['time_id'];
            ?>
                <div class="wrap-guest">
                    <div class="wrap-number-of-guest">
                        <div class="guest-title">NUMBER OF GUEST<span class="red">*</span></div>
                        <div class="select-nember over-hide">
                            <?php
                                $first = true;
                                for($i=1; $i<=(int)time_data_by_id($time_id)[0]->time_slots; $i++)
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
                            ?>
                                        
                        </div>            
                    </div>
                    
                    <?php
                        $first = true;
                        for($i=1; $i<=(int)time_data_by_id($time_id)[0]->time_slots; $i++)
                        {
                            if($first)
                            {
                                ?>
                               <div class="wrap-service-parent wrap-service-parent-<?php echo $i?>" style="display: block">
                                    <div class="guest-item-title">GUEST <?php echo $i?><span class="red">*</span></div>
                                    <div class="wrap-button-number">
                                        <?php
                                            $index = 1;
                                            foreach(service_select() as $parent)
                                            {
                                                ?>
                                                    <label class="number"><?php  echo $parent->service_name?>
                                                        <input type="checkbox" class="checkbox-menu" onchange="onChangeCheckbox(this)" data-id="<?php echo $parent->service_id?>" data-name="<?php echo $parent->service_name?>" value="<?php echo $index?>">
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
                                            foreach(service_select() as $parent)
                                            {
                                                ?>
                                                    <div class="wrap-service-item hidden wrap-service-item-<?php echo $index?>">
                                                        <div class="service-title"><?php echo $parent->service_name?></div>
                                                            <div class="service-content">
                                                            <select class="basic-single" style="width: 100%">
                                                                <?php 
                                                                    foreach(service_select($parent->service_id) as $child)
                                                                    {
                                                                        ?>
                                                                            <option value="<?php echo $child->service_id?>"><?php echo $child->service_name?></option>
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
                                                foreach(service_select() as $parent)
                                                {
                                                    ?>
                                                        <label class="number"><?php  echo $parent->service_name?>
                                                            <input type="checkbox" class="checkbox-menu" onchange="onChangeCheckbox(this)" data-id="<?php echo $parent->service_id?>" data-name="<?php echo $parent->service_name?>" value="<?php echo $index?>">
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
                                                foreach(service_select() as $parent)
                                                {
                                                    ?>
                                                        <div class="wrap-service-item hidden wrap-service-item-<?php echo $index?>">
                                                            <div class="service-title"><?php echo $parent->service_name?></div>
                                                                <div class="service-content">
                                                                <select class="basic-single" style="width: 100%">
                                                                    <?php 
                                                                        foreach(service_select($parent->service_id) as $child)
                                                                        {
                                                                            ?>
                                                                                <option  value="<?php echo $child->service_id?>"><?php echo $child->service_name?></option>
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
                        <div class="wrap-input-form wrap-input-message choose-person">
                            <div class="label-card">Your message</div>
                            <textarea class="message" name="message" rows="6" cols="50" placeholder="Message"></textarea>
                        </div>
                    
                </div>
            <?php
        }
        wp_die(); 
    }




    add_action('wp_ajax_insert', 'insert_function');
    add_action('wp_ajax_nopriv_insert', 'insert_function');
    function insert_function() {

        if($_GET['phoneNumber'] != null && $_GET['fullName'] != null && $_GET['time_id'] != null )
        {
            $phoneNumber = $_GET['phoneNumber'];
            $fullName = $_GET['fullName'];
            $time_id = $_GET['time_id'];
            booking_insert($phoneNumber, $fullName, $time_id);
        }
        wp_die(); 
    }

?>