<?php
    get_header();
?>
<?php
    // header
    if(get_option($businessBackgroundColorHeader))
    {
       $BackgroundColorHeader = get_option($businessBackgroundColorHeader);
    }

    if(get_option($businessTextColorHeader))
    {
       $TextColorHeader = get_option($businessTextColorHeader);
    }

    // body
    if(get_option($businessBackgroundColorBody))
    {
       $BackgroundColorBody = get_option($businessBackgroundColorBody);
    }

    if(get_option($businessTextColorBody))
    {
       $TextColorBody = get_option($businessTextColorBody);
    }

    if(get_option($businessBackgroundButtonBody))
    {
       $BackgroundButtonBody = get_option($businessBackgroundButtonBody);
    }

    if(get_option($businessTextColorButtonBody))
    {
       $TextColorButtonBody = get_option($businessTextColorButtonBody);
    }
    // reviews
    if(get_option($businessBackgroundColorReviews))
    {
        $BackgroundColorReviews = get_option($businessBackgroundColorReviews);
    }

    if(get_option($businessTextColorReviews))
    {
        $TextColorReviews = get_option($businessTextColorReviews);
    }

    // footer
    if(get_option($businessBackgroundColorFooter))
    {
        $BackgroundColorFooter = get_option($businessBackgroundColorFooter);
    }

    if(get_option($businessTextColorFooter ))
    {
        $TextColorFooter = get_option($businessTextColorFooter );
    }
?>

      


<style>
    /* header */
    .BackgroundColorHeader {
        background-color: <?php echo $BackgroundColorHeader?>;
    }

    .TextColorHeader {
        color: <?php echo $TextColorHeader?> !important;
    }

    /* body */
    .BackgroundColorBody {
        background-color: <?php echo $BackgroundColorBody?> !important;
    }

    .TextColorBody {
        color: <?php echo $TextColorBody?> !important;
    }

    .BackgroundButtonBody {
        background-color: <?php echo $BackgroundButtonBody?> !important;
    }

    .checkbox-budget:checked + label::before,
    .checkbox-budget:not(:checked) + label::before {
        background-color: <?php echo $BackgroundButtonBody?>;
    }

    .checkbox-budget:not(:checked) + label:hover {
        background-color: <?php echo $BackgroundButtonBody?>;
    }

    .checkbox-budget:checked + label, .checkbox-budget:not(:checked) + label {
        border: 1px solid <?php echo $BackgroundButtonBody?>;
    }

    .TextColorButtonBody {
        color: <?php echo $TextColorButtonBody?> !important;
    }
    /* reviews */
    .BackgroundColorReviews {
        background-color: <?php echo $BackgroundColorReviews?> !important;
    }

    .TextColorReviews {
        color: <?php echo $TextColorReviews?> !important;
    }
    /* footer */
    .BackgroundColorFooter {
        background-color: <?php echo $BackgroundColorFooter?> !important;
    }

    .TextColorFooter {
        color: <?php echo $TextColorFooter?> !important;
    }

</style>

        <div class="modal fade" id="listIcon">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="box-title">How satisfied were you with the service overall?</div>
                        <div class="box-list-icon">
                            <div class="box-icon">
                                <div class="box-report-icon" data-toggle="modal" data-target="#reviewsBad">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/1.png">
                                </div>
                            </div>
                            <div class="box-icon">
                                <div class="box-report-icon" data-toggle="modal" data-target="#reviewsBad">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/2.png">
                                </div>
                            </div>
                            <div class="box-icon">
                                <div class="box-report-icon"  data-toggle="modal" data-target="#reviewsBad">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/3.png">
                                </div>
                            </div>
                            <div class="box-icon">
                                <div class="box-good-icon" data-toggle="modal" data-target="#reviewsGood">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/4.png">
                                </div>
                            </div>
                            <div class="box-icon">
                                <div class="box-good-icon" data-toggle="modal" data-target="#reviewsGood">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/5.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reviewsGood">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wrap-box">
                            <div class="box-title">Thank you! Leave us a review on Google</div>
                            <?php 
                                $url = "#";
                                if(get_option($businessGoogleReview))
                                {
                                    $url = get_option($businessGoogleReview);
                                }
                            ?>
                            <div class="submit-good"><button><a href="<?php echo $url ?>" target="_blank">Review now</a></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reviewsBad">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wrap-box">
                            <div class="box-title">We're sorry. We'd love your feedback!</div>
                            <div class="box-content">
                                <textarea cols="10" rows="3"></textarea>
                            </div>
                            <div class="box-submit"><button>Submit</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <main class="main BackgroundColorBody">
        <section class="video">
            <?php
                $embed = "LKChoK8R4-Q";
                if(get_option($businessYoutubeVideoBanner))
                {
                    $embed = get_option($businessYoutubeVideoBanner);
                }
            ?>
            <iframe id="video-youtube" width="100%" src="https://www.youtube.com/embed/<?php echo $embed?>?autoplay=1&mute=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>

        <div class="container">
            <section class="nail">
                <div class="nail-address TextColorBody">
                    <?php
                        if(get_option($businessAddress))
                        {
                            echo get_option($businessAddress);
                        }
                    ?>
                </div>
                <div class="nail-call">
                    <?php
                        $phone = "";
                        if(get_option($businessPhoneNumber))
                        {
                            $phone = get_option($businessPhoneNumber);
                            ?>
                                <a class ="TextColorBody" href="tel:<?php echo $phone ?>">Tel: <?php echo $phone ?></a>
                            <?php
                        }
                    ?>
                </div>

                <div class="info">
                    <div class="item-info bgColorButtonBody BackgroundButtonBody">
                        <a href="tel: <?php echo $phone ?>" class="TextColorButtonBody">
                            Call Us
                        </a>
                    </div>
                    <div class="item-info bgColorButtonBody BackgroundButtonBody">
                        <?php 
                            $googleMaps = "";
                            if(get_option($businessGoogleMap))
                            {
                                $googleMaps = get_option($businessGoogleMap);
                            }
                        ?>
                        <a target="_blank" href="<?php echo $googleMaps?>" class="TextColorButtonBody">
                            Get Directions
                        </a>
                    </div>
                </div>
                <div class="nail-open-time">
                    <a href="#Opening" class="TextColorBody">Our opening hours &gt;&gt;</a>
                </div>
            </section>

            <section class="welcome">
                <div class="wrap-welcome">
                    <div class="welcome-nail">
                        <div class="column-left">
                            <div class="title-welcome-nail TextColorBody">
                                <?php
                                    if(get_option($businessTitleWelcome))
                                    {
                                        echo get_option($businessTitleWelcome);
                                    }
                                ?>
                            </div>
                            <div class="content-welcome-nail TextColorBody">
                                <?php
                                    if(get_option($businessContentWelcome))
                                    {
                                        echo get_option($businessContentWelcome);
                                    }
                                ?>
                            </div>
                            <div class="button-welcome">
                                <div class="wrap-review BackgroundButtonBody TextColorButtonBody" data-toggle="modal" data-target="#listIcon">
                                    WRITE A REVIEW
                                </div>
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="slider">
                                <?php
                                    $url = "";
                                    if(get_option($businessSlider1Welcome))
                                    {
                                        $url = get_option($businessSlider1Welcome);
                                    }
                                ?>
                                <div class="item-slide">
                                    <img src="<?php echo $url?>" alt="">
                                </div>
                                
                                <?php
                                    $url = "";
                                    if(get_option($businessSlider2Welcome))
                                    {
                                        $url = get_option($businessSlider2Welcome);
                                    }
                                ?>
                                <div class="item-slide">
                                    <img src="<?php echo $url?>" alt="">
                                </div>

                                <?php
                                    $url = "";
                                    if(get_option($businessSlider3Welcome))
                                    {
                                        $url = get_option($businessSlider3Welcome);
                                    }
                                ?>
                                <div class="item-slide">
                                    <img src="<?php echo $url?>" alt="">
                                </div>

                                <?php
                                    $url = "";
                                    if(get_option($businessSlider4Welcome))
                                    {
                                        $url = get_option($businessSlider4Welcome);
                                    }
                                ?>
                                <div class="item-slide">
                                    <img src="<?php echo $url?>" alt="">
                                </div>
                                
                                <?php
                                    $url = "";
                                    if(get_option($businessSlider5Welcome))
                                    {
                                        $url = get_option($businessSlider5Welcome);
                                    }
                                ?>
                                <div class="item-slide">
                                    <img src="<?php echo $url?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
            
          

            <section class="list-reviews BackgroundColorReviews">
                <div class="wrap-list-reviews TextColorReviews">
                    <div class="title-reviews title-gift">
                        <?php 
                            if(get_option($businessTitleReviews))
                            {
                                echo stripslashes(get_option($businessTitleReviews));
                            }
                        ?>
                    </div>
                    <div class="slider-reviews">
                        <div class="item-slider-reviews">
                           <?php
                                $content = "";
                                if(get_option($businessContent1Reviews))
                                {
                                    $content = stripslashes(get_option($businessContent1Reviews));
                                }
                                echo $content;
                           ?>
                        </div>
                        <div class="item-slider-reviews">
                           <?php
                                $content = "";
                                if(get_option($businessContent2Reviews))
                                {
                                    $content = stripslashes(get_option($businessContent2Reviews));
                                }
                                echo $content;
                           ?>
                        </div>
                        <div class="item-slider-reviews">
                           <?php
                                $content = "";
                                if(get_option($businessContent3Reviews))
                                {
                                    $content = stripslashes(get_option($businessContent3Reviews));
                                }
                                echo $content;
                           ?>
                        </div>
                    </div>
                </div>
            </section>
        
        <div class="container">                           
            <section class="gift anim move js-anim" id="Gift">
                <div class="wrap-gift">
                    <div class="column-left">
                        <div class="image-gift">
                            <?php
                                $url = get_template_directory_uri()."/assets/img/gift.jpg";
                                if(get_option($businessImageGift ))
                                {
                                    $url = get_option($businessImageGift);
                                }
                            ?>
                            <img src="<?php echo $url ?>" alt="">
                        </div>
                    </div>

                    <div class="column-right">
                        <div class="title-gift TextColorBody">
                            <?php
                                $text = "Gift Cards";
                                if(get_option($businessTitleGift))
                                {
                                    $text = get_option($businessTitleGift);
                                }
                                echo $text;
                            ?>
                        </div>
                        <div class="content-gift TextColorBody">
                            <?php
                                $text = "Buy gift cards for your beloved ones Buy gift cards for your beloved ones Buy gift cards for your beloved ones";
                                if(get_option($businessContentGift))
                                {
                                    $text = get_option($businessContentGift);
                                }
                                echo $text;
                            ?>
                        </div>
                        <div class="group-button">
                            <div class="buy-gift BackgroundButtonBody TextColorButtonBody">Buy Now</div>
                            <div class="Check-gift BackgroundButtonBody TextColorButtonBody">Check Balance</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="menu anim move js-anim" id="OurMenu">
                <div class="wrap-menu">
                    <div class="menu-column1 TextColorBody">Our Menu</div>
                    <div class="form-hr BackgroundButtonBody"></div>
                </div>

                <div class="info-menu-app">
                    <div class="menu-column2">
                        <div class="wrap-menu-column2">
                            <a href="#BookOnline" class="BackgroundButtonBody TextColorButtonBody">BOOK ONLINE</a>
                        </div>
                    </div>
                    <div class="menu-column3">
                        <div class="wrap-menu-column3">
                            <a href="tel:0969999999" class="BackgroundButtonBody TextColorButtonBody">
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
                        <div class="menu-label-right TextColorBody">
                            PRICE
                        </div>
                    </div>
                </div>

                <?php
                    if(count(get_data_taxonomy(0))> 0)
                    {
                        foreach(get_data_taxonomy(0) as $parent)
                        {
                            $childrens = get_data_taxonomy($parent->term_id);
                            ?>
                                <div class="menu-main-row">
                                    <div class="wrap-menu-parent">
                                        <div class="menu-label-left">
                                            <div class="menu-title-parent TextColorBody">
                                                <?php echo $parent->name ?>
                                            </div>
                                            <div class="menu-description-parent TextColorBody">
                                                <?php echo $parent->description ?>
                                            </div>
                                        </div>
                                       
                                        <div class="menu-label-right TextColorBody">
                                            <?php
                                                if(count($childrens) > 0)
                                                {
                                                    ?>
                                                        <div class="menu-right-more">
                                                            More
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "$".get_term_meta( $parent->term_id, 'services-price', true );
                                                }
                                            ?>
                                            
                                        </div>

                                    </div>
                                    <div class="content-menu-child menu-hide">
                                        <?php
                                            foreach($childrens as $child)
                                            {
                                                ?>
                                                    <div class="wrap-menu-main">
                                                        <div class="menu-label-left">
                                                            <div class="menu-main-title TextColorBody">
                                                                <?php echo $child->name?>
                                                            </div>
                                                            <div class="meun-main-title TextColorBody">
                                                                <?php echo $child->description?>
                                                            </div>
                                                        </div>
                                                        <div class="menu-label-right TextColorBody">
                                                            <?php echo "$".get_term_meta( $child->term_id, 'services-price', true );?>
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            <?php
                        }
                    } 
                ?>
                
            </section>

            <section class="form anim move js-anim" id="BookOnline">
                <div class="wrap-form">
                    <div class="form-top-title TextColorBody">
                        MAKE A RESERVATION
                    </div>

                    <div class="form-hr BackgroundButtonBody"></div>

                    <div class="form-content TextColorBody">
                        Book online, chat with us or you can always call us during our business hours.<br>
                        Please cancel your appointment if your schedule changes. We appreciate you. Thank you!
                    </div>

                    <div class="wrap-form-card">
                        <div class="wrap-input-form wrap-input-full">
                            <div class="label-card TextColorBody">Your name<span class="red">*</span></div>
                            <input type="text" class="full-name">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-phone-number">
                            <div class="label-card TextColorBody">Phone number<span class="red">*</span></div>
                            <input type="tel" class="phone-number">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-email">
                            <div class="label-card TextColorBody">Your email</div>
                            <input type="email" class="email">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-email">
                            <div class="label-card TextColorBody">Your location</div>
                            <input type="text" class="location">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-datepicker">
                            <div class="label-card TextColorBody">Pick a day<span class="red">*</span></div>
                            <input type="text" id="datepicker" class="datepicker">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/icon/calendar.png" alt="" class="calendar">
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-input-form wrap-input-single-main">
                            <div class="label-card TextColorBody">Pick a preferred time<span class="red">*</span></div>
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
                                        $list = array("AM", "PM");
                                        $timeExplode = explode('-', $term->name);
                                        $index = 0;
                                        if($timeExplode[1] != "")
                                        {
                                            $index = $timeExplode[1];
                                        }
                                        

                                        ?>
                                            <option value="<?php echo $term->term_id?>"><?php echo $timeExplode[0]." ".$list[$index]?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                            <div class="error red">Error</div>
                        </div>
                        
                        <div class="form-hr BackgroundButtonBody"></div>
                        
                        <div class="wrap-data-ajax">
                            <!-- load ajax -->
                        </div>

                        <div class="wrap-button submit ">
                            <button class="BackgroundButtonBody TextColorButtonBody">Submit</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <section class="google-map">
            <?php
                if(get_option($businessMapIframe))
                {
                    echo stripslashes(get_option($businessMapIframe));
                } else {
                    ?>
                        <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15689.767389861054!2d105.39633022801672!3d10.544555375080055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a14d3db232923%3A0xb99c5080400238a9!2zQ2jhu6MgTeG7m2ksIENo4bujIE3hu5tpIERpc3RyaWN0LCBBbiBHaWFuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1659429583916!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php
                }
            ?>
        </section>

        <div class="social-network">
            <div class="item-social-network">
                <?php
                    $url = "#";
                    if(get_option($businessInstagram))
                    {
                        $url = get_option($businessInstagram);
                    }
                ?>
                <a href="<?php echo $url?>"><img src="<?php echo get_template_directory_uri() ."/assets/img/icon/icon_instagram.png"?>" alt=""></a>
            </div>
            <div class="item-social-network">
                <?php
                    $url = "#";
                    if(get_option($businessYoutube))
                    {
                        $url = get_option($businessYoutube);
                    }
                ?>
                <a href="<?php echo $url?>"><img src="<?php echo get_template_directory_uri() ."/assets/img/icon/icon_youtube.png"?>" alt=""></a>
            </div>
            <div class="item-social-network">
                <?php
                    $url = "#";
                    if(get_option($businessFacebook))
                    {
                        $url = get_option($businessFacebook);
                    }
                ?>
                <a href="<?php echo $url?>"><img src="<?php echo get_template_directory_uri() ."/assets/img/icon/icon_facebook.png"?>" alt=""></a>
            </div>
        </div>
       
        <section class="contact BackgroundColorFooter" id="Opening">
            <div class="wrap-contact">
                <div class="contact-column6">
                    <div class="title-contact TextColorFooter">About Us</div>
                    <div class="content-contact TextColorFooter">
                        <?php
                            if(get_option($businessAboutUsFooter ))
                            {
                                echo get_option($businessAboutUsFooter );
                            }
                        ?>
                    </div>
                </div>
                <div class="contact-column4">
                    <div class="wrap-contact-time">
                        <div class="contact-time" >
                            <b class="TextColorFooter">Opening Hours</b>
                            <div class="list-time">
                                <?php
                                    for($i=0; $i<7; $i++)
                                    {
                                        $key = "week".($i+2);
                                        $value = "";
                                        if(get_option($key))
                                        {
                                            $value = get_option($key);
                                            $arr = explode('-', $value);
                                        }
                                        $list = array("AM", "PM");
                                        if($i == 0)
                                        {
                                            $time = "Closed";
                                            if($arr[4] != 0)
                                            {
                                                $time = $arr[0]." ".$list[$arr[1]]." - ".$arr[2]." ".$list[$arr[3]];
                                            }
                                            ?>
                                                <p class="TextColorFooter"><span>Mon: <?php echo $time; ?></span></p>
                                            <?php
                                        }

                                        if($i == 1)
                                        {
                                            $time = "Closed";
                                            if($arr[4] != 0)
                                            {
                                                $time = $arr[0]." ".$list[$arr[1]]." - ".$arr[2]." ".$list[$arr[3]];
                                            }
                                            ?>
                                                <p class="TextColorFooter"><span>Tue: <?php echo $time; ?></span></p>
                                            <?php
                                        }

                                        if($i == 2)
                                        {
                                            $time = "Closed";
                                            if($arr[4] != 0)
                                            {
                                                $time = $arr[0]." ".$list[$arr[1]]." - ".$arr[2]." ".$list[$arr[3]];
                                            }
                                            ?>
                                                <p class="TextColorFooter"><span>Wed: <?php echo $time; ?></span></p>
                                            <?php
                                        }

                                        if($i == 3)
                                        {
                                            $time = "Closed";
                                            if($arr[4] != 0)
                                            {
                                                $time = $arr[0]." ".$list[$arr[1]]." - ".$arr[2]." ".$list[$arr[3]];
                                            }
                                            ?>
                                                <p class="TextColorFooter"><span>Thu: <?php echo $time; ?></span></p>
                                            <?php
                                        }

                                        if($i == 4)
                                        {
                                            $time = "Closed";
                                            if($arr[4] != 0)
                                            {
                                                $time = $arr[0]." ".$list[$arr[1]]." - ".$arr[2]." ".$list[$arr[3]];
                                            }
                                            ?>
                                                <p class="TextColorFooter"><span>Fri: <?php echo $time; ?></span></p>
                                            <?php
                                        }

                                        if($i == 5)
                                        {
                                            $time = "Closed";
                                            if($arr[4] != 0)
                                            {
                                                $time = $arr[0]." ".$list[$arr[1]]." - ".$arr[2]." ".$list[$arr[3]];
                                            }
                                            ?>
                                                <p class="TextColorFooter"><span>Sat: <?php echo $time; ?></span></p>
                                            <?php
                                        }

                                        if($i == 6)
                                        {
                                            $time = "Closed";
                                            if($arr[4] != 0)
                                            {
                                                $time = $arr[0]." ".$list[$arr[1]]." - ".$arr[2]." ".$list[$arr[3]];
                                            }
                                            ?>
                                                <p class="TextColorFooter"><span>Sun: <?php echo $time; ?></span></p>
                                            <?php
                                        }
                                    }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="footer-row1">
                <div class="footer-service"><a class="TextColorFooter" href="<?php echo esc_url( get_page_link( $policyId ) ); ?>" style="<?php echo $colorFooter?>"><?php echo get_the_title( $policyId ) ?></a></div>
                <div class="footer-service"><a class="TextColorFooter" href="<?php echo esc_url( get_page_link( $termsId ) ); ?>" style="<?php echo $colorFooter?>"><?php  echo get_the_title( $termsId ) ?></a></div>
           </div>
        </section>

        
    </main>
<?php
    get_footer();
?>      