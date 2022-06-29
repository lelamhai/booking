<?php
function regsiter_styles()
{
    $version = "21";
    
    wp_enqueue_style('book-style',   get_template_directory_uri() ."/assets/css/style.css", array(), $version);
    wp_enqueue_style('book-responsive',   get_template_directory_uri() ."/assets/css/responsive.css", array(), $version);
    wp_enqueue_style('book-slick',   get_template_directory_uri() ."/assets/slick/slick.css", array(), $version);
    wp_enqueue_style('book-slick-theme',   get_template_directory_uri() ."/assets/slick/slick-theme.css", array(), $version);
    wp_enqueue_style('book-jquery-ui',   get_template_directory_uri() ."/assets/datetimepicker/jquery-ui.css", array(), $version);
    wp_enqueue_style('book-select2.min',   get_template_directory_uri() ."/assets/css/select2.min.css", array(), $version);

    wp_enqueue_script('book-jquery-3.6.0.min', get_template_directory_uri() . "/assets/js/jquery-3.6.0.min.js", array(), $version, true);
    wp_enqueue_script('book-select2.min', get_template_directory_uri() . "/assets/js/select2.min.js", array(), $version, true);
    wp_enqueue_script('book-jquery-ui', get_template_directory_uri() . "/assets/datetimepicker/jquery-ui.js", array(), $version, true);
    wp_enqueue_script('boook-slick', get_template_directory_uri() . "/assets/slick/slick.js", array(), $version, true);
    wp_enqueue_script('boook-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);

}
add_action('wp_enqueue_scripts', 'regsiter_styles');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array('page_title'=>'Web Editor','page_title'=>'Web Editor','menu_slug'=>'acf-options-theme-options'));
}

add_filter('acf/validate_value/name=content_frame_body', 'my_acf_validate_value', 10, 4);
function my_acf_validate_value( $valid, $value, $field, $input ){
    
    // bail early if value is already invalid
    if( !$valid ) {
        
        return $valid;
        
    }
    
    if( strlen(strip_tags($value)) > 550 ) {
        
        $valid = 'You can\'t enter more that 550 chars';
        
    }
    // return
    return $valid;
}

add_filter('acf/validate_value/name=text_up_review', 'my_acf_validate_value_text', 10, 4);
function my_acf_validate_value_text( $valid, $value, $field, $input ){
    
    // bail early if value is already invalid
    if( !$valid ) {
        
        return $valid;
        
    }
    
    if( strlen(strip_tags($value)) > 110 ) {
        
        $valid = 'You can\'t enter more that 110 chars';
        
    }
    // return
    return $valid;
}


add_action('wp_ajax_select2', 'select2_function');
add_action('wp_ajax_nopriv_select2', 'select2_function');
function select2_function() {
    $first = true;
    if($_GET['slots'] != null)
    {
        ?>
            <div class="choose-person">
                <div class="choose-number">
                    NUMBER OF GUEST<span class="red">*</span>
                </div>

                <div class="wrap-button-number">
                    <div class="select-nember over-hide">
                        <?php if( have_rows('pick_time_body', 'option') ): ?>
                                <?php while( have_rows('pick_time_body', 'option') ): the_row(); ?>
                                    <?php
                                        if($_GET['index'] == get_row_index())
                                        {
                                            for($i=1; $i<=$_GET['slots']; $i++)
                                            {
                                                if($first)
                                                {
                                                    ?>
                                                        <div class="item-slot">
                                                            <input class="checkbox-budget" type="radio" name="budget"onchange="raidoChange(<?php echo $_GET['slots'] ?>, <?php echo $i?>)" id="budget-<?php echo $i?>" value="<?php echo $i?>" checked>
                                                            <label class="for-checkbox-budget" for="budget-<?php echo $i?>">
                                                                <span data-hover="<?php echo $i?>"><?php echo $i?></span>
                                                            </label>
                                                        </div>
                                                        
                                                    <?php
                                                } else {
                                                    ?>
                                                        <div class="item-slot">
                                                            <input class="checkbox-budget" type="radio" name="budget"onchange="raidoChange(<?php echo $_GET['slots'] ?>, <?php echo $i?>)" id="budget-<?php echo $i?>" value="<?php echo $i?>">
                                                            <label class="for-checkbox-budget" for="budget-<?php echo $i?>">
                                                                <span data-hover="<?php echo $i?>"><?php echo $i?></span>
                                                            </label>
                                                        </div>
                                                    <?php
                                                }
                                                $first = false;
                                            }
                                        }
                                    ?>
                                    
                                <?php endwhile; ?>
                        <?php endif; ?>
                     </div>
                </div>
            </div>


            <?php
                 for($i=1; $i <= $_GET['slots']; $i ++)
                 {
                    ?>
                        <div class="choose-person frame-guests" id="guest-<?php echo $i?>">
                            <div class="choose-number">
                                GUEST <?php echo $i?><span class="red">*</span>
                            </div>
                            <div class="wrap-button-number">
                                <?php $tempValue = 1 ?>
                                    <?php if( have_rows('menu', 'option') ): ?>
                                        <?php while( have_rows('menu', 'option') ): the_row(); ?>
                                            <label class="number"><?php echo get_sub_field('title_parent') ?>
                                                <input type="checkbox" class="checkbox-menu" onchange="checkboxChange('guest<?php echo $i?>-<?php echo $tempValue ?>', this)" value="guest<?php echo $i?>-<?php echo $tempValue ?>">
                                                <span class="checkmark"></span>
                                            </label>
                                            <?php $tempValue++ ?>
                                        <?php endwhile; ?>
                                    <?php endif;?>
                            </div>

                            <div class="wrap-guests">
                                <?php if( have_rows('menu', 'option') ): ?>
                                    <?php $temp = 1 ?>
                                    <?php while( have_rows('menu', 'option') ): the_row(); ?>
                                        <?php
                                            $title =  get_sub_field('title_parent');
                                            if(have_rows('menu_child'))
                                            {
                                                ?>
                                                    <div class="guest<?php echo $i?>-<?php echo $temp?> wrap-required">
                                                        <div class="title-required"><?php echo  $title?></div>
                                                        <div class="input-required input-menu">
                                                            <select class="js-states form-control basic-single" style="width: 100%">
                                                                <?php if( have_rows('menu_child') ): ?>
                                                                    <?php while( have_rows('menu_child') ): the_row(); ?>
                                                                        <option><?php echo get_sub_field('title'); ?></option>
                                                                    <?php endwhile; ?>
                                                                <?php endif;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php
                                            } else {
                                                ?>
                                                    <div class="guest<?php echo $i?>-<?php echo $temp?> wrap-required">
                                                        <div class="title-required"><?php echo  $title?></div>
                                                            <div class="input-required input-menu">
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                        <?php $temp++ ?>
                                    <?php endwhile; ?>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php

                    
                 }
            
            ?>


            








        <?php
    }
    wp_die(); 
}
