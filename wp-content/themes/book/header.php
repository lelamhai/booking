<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <?php
        wp_head();
    ?>
</head>
  
<body style="background-color: <?php the_field('background_color_body', 'options'); ?>">
    <div class="popup">
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
                    <input type="hidden" id="linkgood" value="https://www.google.com/">
                    <div class="submit-good"><button>Review now</button></div>
                </div>
            </div>
        </div>
    </div>


    <header>
        <div class="header" style="background-color: <?php the_field('background_color_header', 'options'); ?>">
            <div class="container mobile-container not-showmenu" style="background-color: <?php the_field('background_color_header', 'options'); ?>">
                <div class="close-menu mobile">
                    <button class="menu-close"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/icon_close.png" alt=""></button>
                 </div>
                <section class="wrap-header">
                    <div class="header-logo">
                        <a href="./"><?php the_field('name_company_header', 'options'); ?></a>
                    </div>
        
                    <div class="header-menu">
                        <ul class="header-list-menu">
                            <?php if( have_rows('menu_header', 'option') ): ?>
                                <?php while( have_rows('menu_header', 'option') ): the_row(); ?>
                                    <li>
                                        <a href="#BookOnline"><?php echo get_sub_field('text')?></a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
        
                    <div class="header-login">
                        <a href="#">Login</a>
                    </div>
                </section>
            </div>

            <div class="menu-mobile mobile" style="background-color: <?php the_field('background_color_header', 'options'); ?>;">
                <div class="logo-mobile anim left-right js-anim">
                   <div class="logo">
                      <a href="./"><?php the_field('name_company_header', 'options'); ?></a>
                   </div>
                </div>
                <button class="menu-open anim right-left js-anim"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/icon_menu.png" alt=""></button>
             </div>
        </div>

    </header>