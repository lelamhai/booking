<?php
                                        $first = true;
                                        for($i=1; $i<=(int)time_data_first()[0]->time_slots; $i++)
                                        {
                                            if($first)
                                            {
                                                ?>
                                                    <div class="wrap-service-parent wrap-service-parent-<?php echo $i?>">
                                                        <div class="guest-item-title">GUEST <?php echo $i?><span class="red">*</span></div>
                                                        <div class="wrap-button-number">
                                                            <?php
                                                                $index = 1;
                                                                foreach(service_select() as $parent)
                                                                {
                                                                    ?>
                                                                        <label class="number"><?php echo $parent->service_name?>
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
                                                                    $index++;
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
                                            }
                                            $first = false;
                                        }
                                    ?>