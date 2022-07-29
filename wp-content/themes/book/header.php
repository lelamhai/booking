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
                            <li>
                                <a href="#OurMenu">Our menu</a>
                            </li>
        
                            <li>
                                <a href="#BookOnline">Book online</a>
                            </li>
        
                            <li>
                                <a href="#Gift">Buy gift cards</a>
                            </li>

                            <?php if( have_rows('menu_header', 'option') ): ?>
                                <?php while( have_rows('menu_header', 'option') ): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a>
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