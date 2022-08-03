<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <?php
        wp_head();
    ?>
    <?php
        $colorText = "#ffffff";
        if(get_option("business-text-color-header"))
        {
            $colorText = get_option("business-text-color-header");
        }
    ?>
    <style>
        .wrap-header a {
            color: <?php echo $colorText?>;
        }
    </style>
</head>
  
<body>
   <header>
        <?php
            $color = "#008037";
            if(get_option("business-backgroundcolor-header"))
            {
                $color = get_option("business-backgroundcolor-header");
            }
        ?>
        <div class="header" style="background-color: <?php echo $color ?>">
            <div class="container mobile-container not-showmenu" style="background-color: <?php echo $color ?>">
                <div class="close-menu mobile">
                    <button class="menu-close"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/icon_close.png" alt=""></button>
                 </div>
                <section class="wrap-header">
                    <div class="header-logo">
                        <a href="./">
                            <?php
                                if(get_option("business-logo-header"))
                                {
                                    ?>
                                        <img src="<?php echo get_option("business-logo-header")?>" alt="">
                                    <?php
                                } else if(get_option("business-name")){
                                    $name = "Softkeymarketing";
                                    if(get_option("business-name"))
                                    {
                                        $name = get_option("business-name");
                                    }
                                    echo $name;
                                }
                            ?>
                        </a>
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
                            
                            <?php
                                if(get_option("business-addmenu-header") && get_option("business-linkmenu-header"))
                                {
                                    ?>
                                        <li>
                                            <a href="<?php echo get_option("business-linkmenu-header")?>"><?php echo get_option("business-addmenu-header")?></a>
                                        </li>
                                    <?php
                                } 
                            ?>
                        </ul>
                    </div>
        
                    <div class="header-login">
                        <a href="#">Login</a>
                    </div>
                </section>
            </div>

            <div class="menu-mobile mobile" style="background-color: <?php echo $color ?>;">
                <div class="logo-mobile anim left-right js-anim">
                   <div class="logo">
                        <a href="./" style="color: <?php echo $colorText ?>">
                            <?php
                                $name = " Softkeymarketing";
                                if(get_option("business-name"))
                                {
                                    $name = get_option("business-name");
                                }
                                echo $name;
                            ?>
                        </a>
                   </div>
                </div>
                <button class="menu-open anim right-left js-anim"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/icon_menu.png" alt=""></button>
             </div>
        </div>

    </header>