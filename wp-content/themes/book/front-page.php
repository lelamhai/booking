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
                <div class="nail-address">
                    <?php the_field('address_body', 'options'); ?>
                </div>
                <div class="nail-call">
                    <a href="tel:<?php the_field('number_phone_body', 'options'); ?>">Tel: <?php the_field('number_phone_body', 'options'); ?></a>
                </div>

                <div class="info">
                    <div class="item-info">
                        <a href="tel: <?php the_field('number_phone_body', 'options'); ?>">
                            Call Us
                        </a>
                    </div>
                    <div class="item-info">
                        <a target="_blank" href="<?php the_field('get_direction_body', 'options'); ?>">
                            Get Directions
                        </a>
                    </div>
                </div>
                <div class="nail-open-time">
                    <a href="#Opening">Our opening hours &gt;&gt;</a>
                </div>
            </section>

            <!-- <section class="welcome">
                <div class="wrap-welcome">
                    <div class="content-frame">
                        <?php the_field('content_frame_body', 'options'); ?>
                    </div>
                </div>
            </section> -->

            <section class="welcome">
                <div class="wrap-welcome">
                    <div class="welcome-nail">
                        <div class="column-left">
                            <div class="title-welcome-nail">
                                Welcome to Flower Nail & Spa
                            </div>
                            <div class="content-welcome-nail">
                                Add a little bit of body text Add a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit
                            </div>
                            <div class="button-welcome">
                                <div class="wrap-review">
                                    WRITE A REVIEW
                                </div>
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="image-welcome-nail">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/welcome.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="rating-review">
                    <div class="wrap-review">
                       WRITE A REVIEW
                    </div>
                </div> -->

                <!-- <div class="star">
                    <img src="<?php the_field('star_body', 'options'); ?>" alt="">
                </div> -->
            </section>

            <section class="gift" id="Gift">
                <div class="wrap-gift">
                    <div class="column-left">
                        <div class="image-gift">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/gift.jpg" alt="">
                        </div>
                    </div>

                    <div class="column-right">
                        <div class="title-gift">Gift Cards</div>
                        <div class="content-gift">
                            Buy gift cards for your beloved ones Buy gift cards for your beloved ones Buy gift cards for your beloved ones
                        </div>
                        <div class="group-button">
                            <div class="buy-gift">Buy Now</div>
                            <div class="Check-gift">Check Balance</div>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="gift-heart1"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/new_heart.png" alt=""></div>
                <div class="wrap-gift">
                    <div class="gift-title">Buy gift cards for your beloved ones</div>
                    <div class="gift-buy">
                        <div class="wrap-gift-buy">BUY NOW</div>
                    </div>
                </div> -->
            </section>


            <section class="video">
                <div class="wrap-video">
                    <?php the_field('video_body', 'options'); ?>
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
                                CANCEL APPT
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="menu-main">
                <div class="menu-main-row">
                    <div class="wrap-menu-title">
                        <div class="menu-label-left">
                            <!-- NAME -->
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
                                <div class="menu-right-more">
                                    More
                                </div>
                            </div>
                        </div>
                        <div class="content-menu-child menu-hide">
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
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
            </section>

            <section class="form" id="BookOnline">
                <div class="wrap-form">
                    <div class="form-top-title">
                        RESERVATION
                    </div>

                    <div class="form-title">
                        MAKE A RESERVATION
                    </div>

                    <div class="form-content">
                        Book online, chat with us or you can always call us during our business hours.<br>
                        Please cancel your appointment if your schedule changes. We appreciate you. Thank you!
                    </div>

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

                            <?php 
                                
                            ?>

                        <div class="wrap-input-form wrap-input-single-main">
                            <div class="label-card">Pick a preferred time<span class="red">*</span></div>
                            <select id="single-main" class="single-main" style="width: 100%">
                                <?php 
                                    foreach(time_list() as $time)
                                    {
                                        ?>
                                            <option><?php echo $time->time_hour?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                            
                            <div class="error red">Error</div>
                        </div>
                        
                        <div class="form-hr"></div>
                        
                        <style>
                            .wrap-slots {
                                display: flex;
                            }

                            .select2-selection__clear {
                                display: none;
                            }
                        </style>
                        <div class="wrap-data-ajax">
                            <div class="wrap-guest-1">
                                <div class="wrap-number-of-guest">
                                    <div class="guest-title">NUMBER OF GUEST<span class="red">*</span></div>
                                    <div class="select-nember over-hide">
                                        <div class="item-slot">
                                            <input class="checkbox-budget" type="radio" name="budget" id="budget-1" value="1" checked="">
                                            <label class="for-checkbox-budget" for="budget-1">
                                                <span data-hover="1">1</span>
                                            </label>
                                        </div>

                                        <div class="item-slot">
                                            <input class="checkbox-budget" type="radio" name="budget" id="budget-2" value="2">
                                            <label class="for-checkbox-budget" for="budget-2">
                                                <span data-hover="2">2</span>
                                            </label>
                                        </div>
                                        <div class="item-slot">
                                            <input class="checkbox-budget" type="radio" name="budget" id="budget-3" value="3">
                                            <label class="for-checkbox-budget" for="budget-3">
                                                <span data-hover="3">3</span>
                                            </label>
                                        </div>
                                        <div class="item-slot">
                                            <input class="checkbox-budget" type="radio" name="budget" id="budget-4" value="4">
                                            <label class="for-checkbox-budget" for="budget-4">
                                                <span data-hover="4">4</span>
                                            </label>
                                        </div>
                                        <div class="item-slot">
                                                <input class="checkbox-budget" type="radio" name="budget" id="budget-5" value="5">
                                                <label class="for-checkbox-budget" for="budget-5">
                                                <span data-hover="5">5</span>
                                                </label>
                                        </div>
                                        <div class="item-slot">
                                            <input class="checkbox-budget" type="radio" name="budget" id="budget-6" value="6">
                                            <label class="for-checkbox-budget" for="budget-6">
                                                <span data-hover="6">6</span>
                                            </label>
                                        </div>
                                    </div>            
                                </div>
                                
                                <div class="wrap-item-guest">
                                    <div class="guest-item-title">GUEST 1<span class="red">*</span></div>
                                    <div class="wrap-button-number">
                                        <label class="number">Nails
                                            <input type="checkbox" class="checkbox-menu guest1" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="number">Nail designs                                                            
                                            <input type="checkbox" class="checkbox-menu guest1" value="2">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="number">manicure                                                            
                                            <input type="checkbox" class="checkbox-menu guest1" value="3">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="number">lelamhai                                                            
                                            <input type="checkbox" class="checkbox-menu guest1" value="4">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <!-- <?php
                                        var_dump(service_list_children(1));
                                    ?> -->

                                    <div class="wrap-guest-service">
                                        <?php
                                            foreach(service_list_parent() as $parent)
                                            {
                                                ?>
                                                    <div class="service-title"><?php echo $parent->service_name?></div>

                                                    <div class="service-content">
                                                        <select class="basic-single" style="width: 100%">
                                                        <?php 
                                                            foreach(service_list_children($parent->service_id) as $child)
                                                            {
                                                                ?>
                                                                    <option><?php echo $child->service_name?></option>
                                                                <?php
                                                            }
                                                        ?>
                                                        </select>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
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
                <div class="contact-column6">
                    <div class="title-contact">About Us</div>
                    <div class="content-contact">
                    Add a little bit of body text Add a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body text
                    </div>
                </div>
                <div class="contact-column4">
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
            <div class="footer-row1">
                <?php if( have_rows('footer', 'option') ): ?>
                    <?php while( have_rows('footer', 'option') ): the_row(); ?>
                        <div class="footer-service"><a href="./privacy-policy" style="color: #fff"><?php echo get_sub_field('text_term_of_service') ?></a></div>
                        <div class="footer-service"><a href="./terms" style="color: #fff"><?php  echo get_sub_field('text_privacy_policy', 'options'); ?></a></div>
                    <?php endwhile; ?>
                <?php endif; ?>
           </div>
        </section>
    </main>
<?php
    get_footer();
?>      