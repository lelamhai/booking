<?php
    get_header();
?>
    <main class="main">
        <section class="banner">
                
            <div class="slider">
                <div class="slider">

                    <?php if( have_rows('slider_body', 'option') ): ?>
                        <?php while( have_rows('slider_body', 'option') ): the_row(); ?>
                            <div class="item-slide">
                                <img src="<?php echo get_sub_field('image1') ?>" alt="">
                            </div>

                            <div class="item-slide">
                                <img src="<?php echo get_sub_field('image2') ?>" alt="">
                            </div>

                            <div class="item-slide">
                                <img src="<?php echo get_sub_field('image3') ?>" alt="">
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
             </div>
        </section>
        <div class="container">
            <section class="nail">
                <div class="nail-title" style="color: #991113;">
                    <?php the_field('name_company_header', 'options'); ?>
                </div>
                <div class="nail-address">
                    <?php the_field('address_body', 'options'); ?>
                </div>
                <div class="nail-call">
                    <a href="tel:<?php the_field('number_phone_body', 'options'); ?>">Tel: <?php the_field('number_phone_body', 'options'); ?></a>
                </div>
                <div class="nail-social-network">
                    <div class="nail-list-social">

                    <?php if( have_rows('social_network', 'option') ): ?>
                        <?php while( have_rows('social_network', 'option') ): the_row(); ?>

                            <div class="item-social">
                                <a href="<?php echo get_sub_field('link_facebook')?>">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/icon_facebook.png" alt="">
                                </a>
                            </div>

                            <div class="item-social">
                                <a href="<?php echo get_sub_field('link_instagram')?>">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/icon_instagram.png" alt="">
                                </a>
                            </div>

                            <div class="item-social">
                                <a href="<?php echo get_sub_field('link_youtube')?>">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/icon_youtube.png" alt="">
                                </a>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>


                    </div>
                </div>

                <div class="info">
                    <div class="item-info">
                        <a href="tel: <?php the_field('number_phone_body', 'options'); ?>">
                            Call Us &gt;&gt;
                        </a>
                    </div>
                    <div class="item-info">
                        <a target="_blank" href="<?php the_field('get_direction_body', 'options'); ?>">
                            Get Directions &gt;&gt;
                        </a>
                    </div>
                </div>
                <div class="nail-open-time">
                    <a href="#Opening">Our opening hours &gt;&gt;</a>
                </div>
                <div class="nail-heart pc">
                    <img src="<?php the_field('heart_big_body', 'options'); ?>" alt="">
                </div>
            </section>

            <section class="welcome">
                <div class="wrap-welcome">
                    <div class="content-frame">
                        <?php the_field('content_frame_body', 'options'); ?>
                    </div>
                </div>
            </section>

            <section class="rating">
                <div class="rating-content"><?php the_field('text_up_review', 'options'); ?></div>
                <div class="rating-review">
                    <div class="wrap-review">
                       WRITE A REVIEW
                    </div>
                </div>

                <div class="star">
                    <img src="<?php the_field('star_body', 'options'); ?>" alt="">
                </div>
            </section>

            <section class="video">
                <div class="wrap-video">
                    <?php the_field('video_body', 'options'); ?>
                </div>
            </section>

            <section class="gift" id="Gift">
                <div class="gift-heart1"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/new_heart.png" alt=""></div>
                <div class="wrap-gift">
                    <div class="gift-title">Buy gift cards for your beloved ones</div>
                    <div class="gift-buy">
                        <div class="wrap-gift-buy">BUY NOW</div>
                    </div>
                </div>
            </section>

            <section class="menu" id="OurMenu">
                <div class="wrap-menu">
                    <div class="menu-column1">Our Menu</div>
                </div>

                <div class="info-menu-app">
                    <div class="menu-column2">
                        <div class="wrap-menu-column2">
                            <a href="#BookOnline">BOOK ONLINE</a>
                        </div>
                    </div>
                    <div class="menu-column3">
                        <div class="wrap-menu-column3">
                            <a href="tel:0969999999">
                                CONFIRM/CANCEL APPT
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="menu-main">
                <div class="menu-main-row">
                    <div class="wrap-menu-title">
                        <div class="menu-label-left">
                            NAME
                        </div>
                        <div class="menu-label-right">
                            PRICE
                        </div>
                    </div>
                </div>

                <?php if( have_rows('menu', 'option') ): ?>
                    <?php while( have_rows('menu', 'option') ): the_row(); ?>
                   
                    <div class="menu-main-row">
                        <div class="wrap-menu-parent">
                            <div class="menu-label-left">
                                <div class="menu-title-parent">
                                    <?php echo get_sub_field('title_parent') ?>
                                </div>
                                <?php 
                                    if(get_sub_field('title_parent') != null)
                                    {
                                        ?>
                                             <div class="menu-description-parent">
                                                <?php echo get_sub_field('description_parent') ?>
                                            </div>
                                        <?php
                                    }
                                ?>
                               
                            </div>
                            
                            <div class="menu-label-right">
                                <?php 
                                    if(get_sub_field('price_parent') != null)
                                    {
                                        ?>
                                            <div class="menu-description-parent">
                                                <?php echo get_sub_field('price_parent')?>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <?php if( have_rows('menu_child') ): ?>
                            <?php while( have_rows('menu_child') ): the_row(); ?>
                                <div class="wrap-menu-main">
                                    <div class="menu-label-left">
                                        <div class="menu-main-title">
                                            <?php echo get_sub_field('title')?>
                                        </div>
                                        <div class="meun-main-title">
                                            <?php echo get_sub_field('description')?>
                                        </div>
                                    </div>
                                    <div class="menu-label-right">
                                        <?php echo get_sub_field('price')?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
            </section>

            <section class="form" id="BookOnline">
                <div class="wrap-form">
                    <div class="form-top-title">
                        RESERVATION
                    </div>
                    <div class="form-star">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/stars.png" alt="">
                    </div>

                    <div class="form-title">
                        MAKE A RESERVATION
                    </div>

                    <div class="form-content">
                        Book online, chat with us or you can always call us during our business hours.<br>
                        Please cancel your appointment if your schedule changes. We appreciate you. Thank you!
                    </div>

                    <style>
                       
                    </style>

                    <div class="wrap-form-card">
                        <div class="wrap-input-form wrap-input-full">
                            <div class="label-card">Your name<span class="red">*</span></div>
                            <input type="text" class="full-name">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-phone-number">
                            <div class="label-card">Phone number<span class="red">*</span></div>
                            <input type="tel" class="phone-number">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-email">
                            <div class="label-card">Your email</div>
                            <input type="email" class="email">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-datepicker">
                            <div class="label-card">Pick a day<span class="red">*</span></div>
                            <input type="text" id="datepicker" class="datepicker">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/calendar.png" alt="" class="calendar">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-single-main">
                            <div class="label-card">Pick a preferred time<span class="red">*</span></div>
                            <select id="single-main" class="single-main" style="width: 100%">
                                <?php if( have_rows('pick_time_body', 'option') ): ?>
                                    <?php while( have_rows('pick_time_body', 'option') ): the_row(); ?>
                                        <option value="<?php echo get_sub_field('time')?>" data-index="<?php echo get_row_index()?>" data-slot="<?php echo get_sub_field('slot')?>"><?php echo get_sub_field('time')?></option>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </select>
                            <div class="error red">Error</div>
                        </div>
                        
                        <div class="form-hr"></div>
                        
                        <div class="wrap-data-ajax">
                            <div class="choose-person">
                                <div class="choose-number">
                                    NUMBER OF GUEST<span class="red">*</span>
                                </div>

                                <div class="wrap-button-number">
                                    <div class="select-nember over-hide">
                                        
                                        <?php
                                            $index = 1;
                                            $list = 0;
                                            $first = true;
                                        ?>
                                        <?php if( have_rows('pick_time_body', 'option') ): ?>
                                            <?php while( have_rows('pick_time_body', 'option') ): the_row(); ?>
                                                <?php
                                                    if($index == get_row_index())
                                                    {
                                                        $list = get_sub_field('slot');
                                                        ?>
                                                            <input type="hidden" value="<?php echo $list?>" id="slots">
                                                        <?php
                                                        for($i=1; $i<=$list; $i++)
                                                        {
                                                            if($first)
                                                            {
                                                                ?>
                                                                    <div class="item-slot">
                                                                        <input class="checkbox-budget" type="radio" name="budget" onchange="raidoChange(<?php echo $list?>, <?php echo $i?>)" data-slot="<?php echo $list?>" id="budget-<?php echo $i?>" value="<?php echo $i?>" checked>
                                                                        <label class="for-checkbox-budget" for="budget-<?php echo $i?>">
                                                                            <span data-hover="<?php echo $i?>"><?php echo $i?></span>
                                                                        </label>
                                                                    </div>
                                                                    
                                                                <?php
                                                            } else {
                                                                ?>
                                                                    <div class="item-slot">
                                                                        <input class="checkbox-budget" type="radio" name="budget"  onchange="raidoChange(<?php echo $list?>, <?php echo $i?>)" data-slot="<?php echo $list?>" id="budget-<?php echo $i?>" value="<?php echo $i?>">
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
                                for($i=1; $i <= $list; $i ++)
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
                        </div>
                        

                      

                        <div class="wrap-button submit">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="contact" id="Opening" style="background-color: <?php the_field('background_color_contact', 'options'); ?>">
            <div class="wrap-contact">
                <div class="contact-column1">
                    <div class="wrap-contact-call">
                        <div class="contact-call">
                            <div class="call-title">Contact</div>
                            <div class="wrap-tel">
                                <a href="tel:<?php the_field('number_phone_body', 'options'); ?>">CALL NOW</a>
                            </div>
                            <p><?php the_field('number_phone_body', 'options'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="contact-column2">
                    <div class="wrap-contact-address">
                        <div class="contact-address">
                            <div class="address-title">Address</div>
                            <div class="wrap-direction">
                                <a target="_blank" href="<?php the_field('get_direction_body', 'options'); ?>">GET DIRECTIONS</a>
                            </div>
                            <p><?php the_field('address_body', 'options'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="contact-column3">
                    <div class="wrap-contact-time">
                        <div class="contact-time">
                            <b>Opening Hours</b>
                            <div class="list-time">
                                <?php if( have_rows('open_time_body', 'option') ): ?>
                                    <?php while( have_rows('open_time_body', 'option') ): the_row(); ?>
                                        <p><span><?php echo get_sub_field('time-body')?></span></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
    get_footer();
?>      