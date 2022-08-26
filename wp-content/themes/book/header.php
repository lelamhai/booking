<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script defer src="https://use.fontawesome.com/releases/v6.1.2/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title><?php echo get_bloginfo()?></title>
    <?php
        wp_head();
    ?>
</head>
  

<body class="BackgroundColorBody">
   <header>
        <div class="header BackgroundColorHeader">
            <div class="container mobile-container not-showmenu BackgroundColorHeader">
                <div class="close-menu mobile">
                    <button class="menu-close"><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/icon_close.png" alt=""></button>
                 </div>
                <section class="wrap-header">
                    <div class="header-logo">
                        <a href="./" class="TextColorHeader">
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
                                <a href="#OurMenu" class="TextColorHeader">Our menu</a>
                            </li>
        
                            <li>
                                <a href="#BookOnline" class="TextColorHeader">Book online</a>
                            </li>
        
                            <li>
                                <a href="#Gift" class="TextColorHeader">Buy gift cards</a>
                            </li>
                            
                            <?php
                                if(get_option("business-addmenu-header") && get_option("business-linkmenu-header"))
                                {
                                    ?>
                                        <li>
                                            <a  class="TextColorHeader" href="<?php echo get_option("business-linkmenu-header")?>"><?php echo get_option("business-addmenu-header")?></a>
                                        </li>
                                    <?php
                                } 
                            ?>
                        </ul>
                    </div>
        
                    <div class="header-login">
                        <a href="./wp-admin" class="TextColorHeader">Login</a>
                    </div>
                </section>
            </div>

            <div class="menu-mobile mobile BackgroundColorHeader">
                <div class="logo-mobile anim left-right js-anim">
                   <div class="logo">
                        <a href="./" class="TextColorHeader">
                            <?php
                                $name = "Softkeymarketing";
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