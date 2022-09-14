<?php
// footer
$businessBackgroundColorFooter = "business-backgroundcolor-footer";
$businessTextColorFooter = "business-textcolor-footer";
$businessAboutUsFooter = "business-aboutus-footer";
$businessAddress = "business-address";
$businessPhoneNumber = "business-phone-number";
$businessGoogleMap = "business-google-map";
$businessFacebook = "business-facebook";
$businessInstagram = "business-intergram";
$businessYoutube = "business-youtube";

if (get_option('business-backgroundcolor-footer')) {
    $BackgroundColorFooter = get_option('business-backgroundcolor-footer');
}
if (get_option('business-textcolor-footer')) {
    $TextColorFooter = get_option('business-textcolor-footer');
}
?>
<style>
    /* footer */
    .BackgroundColorFooter {
        background-color: <?php echo $BackgroundColorFooter?> !important;
    }

    .TextColorFooter {
        color: <?php echo $TextColorFooter?> !important;
    }
</style>
<footer>
    <section class="contact BackgroundColorFooter" id="Opening">
        <div class="container wrap-contact">
            <div class="row">
                <div class="col-md-4 contact-about">
                    <div class="title-contact TextColorFooter">About Us</div>
                    <div class="content-contact TextColorFooter">
                        <?php
                        if (get_option($businessAboutUsFooter)) {
                            echo get_option($businessAboutUsFooter);
                        }
                        ?>
                    </div>
                    <div class="nail-address TextColorBody">
                        <?php
                        if (get_option($businessAddress)) {
                            if (get_option($businessGoogleMap)) {
                                $google_map_link = get_option($businessGoogleMap);
                            } else {
                                $google_map_link = '#';
                            }
                            echo '<a class="TextColorBody" href="' . $google_map_link . '" target="_blank"><i class="fas fa-map-marker-alt"></i> Address: ' . get_option($businessAddress) . '</a>';
                        }
                        ?>
                    </div>
                    <div class="footer-phone">
                        <?php
                        $phone = "";
                        if (get_option($businessPhoneNumber)) {
                            $phone = get_option($businessPhoneNumber);
                            ?>
                            <a class="TextColorFooter" href="tel:<?php echo $phone ?>"><i class="fas fa-phone-alt"></i>
                                Tel: <?php echo $phone ?></a>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="social-network">
                        <div class="item-social-network">
                            <?php
                            $url = "#";
                            if (get_option($businessYoutube)) {
                                $url = get_option($businessYoutube);
                            }
                            ?>
                            <a href="<?php echo $url ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-theme/youtube.png"
                                     width="" height="" alt=""/>
                            </a>
                        </div>
                        <div class="item-social-network">
                            <?php
                            $url = "#";
                            if (get_option($businessFacebook)) {
                                $url = get_option($businessFacebook);
                            }
                            ?>
                            <a href="<?php echo $url ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-theme/facebook.png"
                                     width="" height="" alt=""/>
                            </a>
                        </div>
                        <div class="item-social-network">
                            <?php
                            $url = "#";
                            if (get_option($businessInstagram)) {
                                $url = get_option($businessInstagram);
                            }
                            ?>
                            <a href="<?php echo $url ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-theme/instagram.png"
                                     width="" height="" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-menu">
                    <div class="title-menu-footer TextColorFooter">Explore</div>
                    <div class="content-menu-footer">
                        <ul>
                            <li><a class="TextColorFooter" href="<?php echo get_home_url() ?>/#OurMenu">Our menu</a>
                            </li>
                            <?php
                            if (get_option("business-addmenu-header") && get_option("business-linkmenu-header")) {
                                ?>
                                <li>
                                    <a class="TextColorFooter"
                                       href="<?php echo get_option("business-linkmenu-header") ?>"><?php echo get_option("business-addmenu-header") ?></a>
                                </li>
                                <?php
                            }
                            ?>
                            <li><a class="TextColorFooter" href="#BookOnline">Book online</a></li>
                            <li><a class="TextColorFooter" href="#Gift">Buy gift cards</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 contact-hours">
                    <div class="wrap-contact-time">
                        <div class="contact-time">
                            <b class="TextColorFooter">Opening Hours</b>
                            <div class="list-time">
                                <?php
                                for ($i = 0; $i < 7; $i++) {
                                    $key = "week" . ($i + 2);
                                    $value = "";
                                    if (get_option($key)) {
                                        $value = get_option($key);
                                        $arr = explode('-', $value);
                                    }
                                    $list = array("AM", "PM");
                                    if ($i == 0) {
                                        $time = "Closed";
                                        if ($arr[4] != 0) {
                                            $time = $arr[0] . " " . $list[$arr[1]] . " - " . $arr[2] . " " . $list[$arr[3]];
                                        }
                                        ?>
                                        <p class="TextColorFooter">Mon:<span> <?php echo $time; ?></span></p>
                                        <?php
                                    }

                                    if ($i == 1) {
                                        $time = "Closed";
                                        if ($arr[4] != 0) {
                                            $time = $arr[0] . " " . $list[$arr[1]] . " - " . $arr[2] . " " . $list[$arr[3]];
                                        }
                                        ?>
                                        <p class="TextColorFooter">Tue:<span> <?php echo $time; ?></span></p>
                                        <?php
                                    }

                                    if ($i == 2) {
                                        $time = "Closed";
                                        if ($arr[4] != 0) {
                                            $time = $arr[0] . " " . $list[$arr[1]] . " - " . $arr[2] . " " . $list[$arr[3]];
                                        }
                                        ?>
                                        <p class="TextColorFooter">Wed:<span> <?php echo $time; ?></span></p>
                                        <?php
                                    }

                                    if ($i == 3) {
                                        $time = "Closed";
                                        if ($arr[4] != 0) {
                                            $time = $arr[0] . " " . $list[$arr[1]] . " - " . $arr[2] . " " . $list[$arr[3]];
                                        }
                                        ?>
                                        <p class="TextColorFooter">Thu:<span> <?php echo $time; ?></span></p>
                                        <?php
                                    }

                                    if ($i == 4) {
                                        $time = "Closed";
                                        if ($arr[4] != 0) {
                                            $time = $arr[0] . " " . $list[$arr[1]] . " - " . $arr[2] . " " . $list[$arr[3]];
                                        }
                                        ?>
                                        <p class="TextColorFooter">Fri:<span> <?php echo $time; ?></span></p>
                                        <?php
                                    }

                                    if ($i == 5) {
                                        $time = "Closed";
                                        if ($arr[4] != 0) {
                                            $time = $arr[0] . " " . $list[$arr[1]] . " - " . $arr[2] . " " . $list[$arr[3]];
                                        }
                                        ?>
                                        <p class="TextColorFooter">Sat:<span> <?php echo $time; ?></span></p>
                                        <?php
                                    }

                                    if ($i == 6) {
                                        $time = "Closed";
                                        if ($arr[4] != 0) {
                                            $time = $arr[0] . " " . $list[$arr[1]] . " - " . $arr[2] . " " . $list[$arr[3]];
                                        }
                                        ?>
                                        <p class="TextColorFooter">Sun:<span> <?php echo $time; ?></span></p>
                                        <?php
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-bottom">
            <div class="row">
                <div class="col-md-12 footer-row-2">
                    <div class="footer-service"><a class="TextColorFooter"
                                                   href="<?php echo esc_url(get_page_link($policyId)); ?>"
                                                   style="<?php echo $colorFooter ?>">Privacy Policy</a></div>
                    <div class="footer-service"><a class="TextColorFooter"
                                                   href="<?php echo esc_url(get_page_link($termsId)); ?>"
                                                   style="<?php echo $colorFooter ?>"><?php echo get_the_title($termsId) ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wrap-footer">
        <div class="footer-row2">©All Rights Reserved. Powered by <a href="http://softkeymarketing.com/">Softkeymarketing.com</a>
        </div>
    </div>
</footer>

<?php
wp_footer();
?>
</body></html>