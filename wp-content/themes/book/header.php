<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title><?php echo get_bloginfo()?></title>
    <?php
        wp_head();
    ?>
</head>
  

<body class="BackgroundColorBody">
   <header>
<!--       style="background: url('--><?php //echo get_template_directory_uri(); ?><!--/assets/img/header-bg.jpg')"-->
        <div id="header" class="header BackgroundColorHeader">
            <div class="mobile-container not-showmenu">
                <div class="header-logo">
                    <a href="./" class="TextColorHeader">
                        <?php
                        if(get_option("business-logo-header"))
                        {
                            ?>
                            <img src="<?php echo get_option("business-logo-header")?>" alt="">
<!--                            <img src="--><?php //echo get_template_directory_uri()."/assets/img/icon-theme/topRated-1.png" ?><!--" alt="">-->
                            <?php
                        } else if(get_option("business-name")){
                            $name = "Softkeymarketing";
                            if(get_option("business-name"))
                            {
                                $name = get_option("business-name");
                            }
//                            echo $name;
                            ?>
                        <img src="<?php echo get_template_directory_uri()."/assets/img/icon-theme/topRated-1.png" ?>" alt=""> <?php
                        }
                        ?>
                    </a>
                </div>
                <section class="wrap-header">
                    <ul class="header-list-menu">
                        <li>
                            <a href="<?php echo get_home_url() ?>/#OurMenu" class="TextColorHeader">Our menu</a>
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

                        <li>
                            <a href="#BookOnline" class="TextColorHeader">Book online</a>
                        </li>

                        <li>
                            <a href="#Gift" class="TextColorHeader">Buy gift cards</a>
                        </li>
                    </ul>
                </section>
            </div>

            <a class="header-login TextColorHeader" href="./wp-admin"><i class="fas fa-user"></i>Login</a>

            <div class="menu-mobile mobile">
                <div class="logo-mobile anim left-right js-anim">
                    <div class="logo">
                        <a href="./" class="TextColorHeader">
                            <?php
                            if (get_option("business-logo-header")) {
                                ?>
                                <img src="<?php echo get_option("business-logo-header") ?>" alt="">
                                <?php
                            } else if (get_option("business-name")) {
                                $name = "Softkeymarketing";
                                if (get_option("business-name")) {
                                    $name = get_option("business-name");
                                }
                                echo $name;
                            }
                            ?>
                        </a>
                    </div>
                </div>
                <button class="menu-open anim right-left js-anim">
                    <i class="fas fa-bars"></i>
                </button>
                <button class="menu-close hidden">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

    </header>