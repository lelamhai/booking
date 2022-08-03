<?php
    get_header();
?>
    <!-- <div class="popup">
        <div class="box">
            <div class="box-main">
                <div class="wrap-box">
                    <div class="box-title">How satisfied were you with the service overall?</div>
                    <div class="box-list-icon">
                        <div class="box-icon">
                            <div class="box-report-icon">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/1.png" alt="">
                            </div>
                        </div>
                        <div class="box-icon">
                            <div class="box-report-icon">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/2.png" alt="">
                            </div>
                        </div>
                        <div class="box-icon">
                            <div class="box-report-icon">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/3.png" alt="">
                            </div>
                        </div>
                        <div class="box-icon">
                            <div class="box-good-icon">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/4.png" alt="">
                            </div>
                        </div>
                        <div class="box-icon">
                            <div class="box-good-icon">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-report">
            <div class="box-main">
                <div class="wrap-box">
                    <div class="box-title">We're sorry. We'd love your feedback!</div>
                    <div class="box-content">
                        <textarea cols="10" rows="3"></textarea>
                    </div>
                    <div class="box-submit"><button>Submit</button></div>
                </div>
            </div>
        </div>

        <div class="box box-good">
            <div class="box-main">
                <div class="wrap-box">
                    <div class="box-title">Thank you! Leave us a review on Google</div>
                    <input type="hidden" id="linkgood" value="<?php the_field('popup_body', 'options'); ?>">
                    <div class="submit-good"><button>Review now</button></div>
                </div>
            </div>
        </div>
    </div> -->




    <main class="main">
        <section class="video">
            <iframe id="video-youtube" width="100%" src="https://www.youtube.com/embed/LKChoK8R4-Q?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    </div>
                </div>
            </section>
        </div>
            
            
            <section class="list-reviews">
                <div class="wrap-list-reviews">
                    <div class="title-reviews title-gift">
                        Our Client's Reviews
                    </div>
                    <div class="slider-reviews">
                        <div class="item-slider-reviews">1Before calling this company I had a couple estimates done but not one compared to them. Pricing was reasonable and their work turned out amazing. I'll definitely be contacting them in the near future for more work. The best part about it was that all the cement and rocks put in my home was done within a week. Satisfied customer.</div>
                        <div class="item-slider-reviews">2Thanks for high desert affordable landscapes. Him and he's brother did a very good job and left it really clean and I really recommend them. They have great ideas and they also have great services to.</div>
                        <div class="item-slider-reviews">3Responsive communication, fair and honest estimate, and work done promptly & professionally. Have no complaints at all and recommend highly to anyone in the area.</div>
                    </div>
                </div>
            </section>
        
        <div class="container">                           
            <section class="gift anim move js-anim" id="Gift">
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
            </section>

            <section class="menu anim move js-anim" id="OurMenu">
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

            <section class="menu-main anim move js-anim">
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

            <section class="form anim move js-anim" id="BookOnline">
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

                        <div class="wrap-input-form wrap-input-email">
                            <div class="label-card">Your location</div>
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
                                        ?>
                                            <option value="<?php echo $term->term_id?>"><?php echo $term->name?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                            <div class="error red">Error</div>
                        </div>
                        
                        <div class="form-hr"></div>
                        
                        <div class="wrap-data-ajax">
                            <!-- load ajax -->
                        </div>

                        <div class="wrap-button submit">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <section class="google-map">
            <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15689.767389861054!2d105.39633022801672!3d10.544555375080055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a14d3db232923%3A0xb99c5080400238a9!2zQ2jhu6MgTeG7m2ksIENo4bujIE3hu5tpIERpc3RyaWN0LCBBbiBHaWFuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1659429583916!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <div class="social-network">
            <div class="item-social-network">
                <a href=""><img src="<?php echo get_template_directory_uri() ."/assets/img/icon/icon_instagram.png"?>" alt=""></a>
            </div>
            <div class="item-social-network">
                <a href=""><img src="<?php echo get_template_directory_uri() ."/assets/img/icon/icon_youtube.png"?>" alt=""></a>
            </div>
            <div class="item-social-network">
                <a href=""><img src="<?php echo get_template_directory_uri() ."/assets/img/icon/icon_facebook.png"?>" alt=""></a>
            </div>
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