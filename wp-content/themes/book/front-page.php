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
        background: <?php echo $BackgroundColorHeader?>;
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
        background: <?php echo $BackgroundButtonBody?> !important;
    }

    .checkbox-budget:checked + label::before {
        background: <?php echo $BackgroundButtonBody?>;
    }

    .checkbox-budget:not(:checked) + label:hover {
        background: <?php echo $BackgroundButtonBody?>;
    }

    .checkbox-budget:checked + label,
    .checkbox-budget:not(:checked) + label:hover,
    .number input:checked ~ .checkmark,
    .number:hover input ~ .checkmark{
        border: 1px solid <?php echo $BackgroundButtonBody?>;
    }

    .number input:checked ~ .checkmark,
    .number:hover input ~ .checkmark {
        background: <?php echo $BackgroundButtonBody?>
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: <?php echo $BackgroundButtonBody?> !important;
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

    .mobile-container {
        background: <?php echo $BackgroundColorHeader?>;
    }

    body { padding-right: 0 !important } 
    .modal { padding-right: 0 !important }
    .modal-open {overflow-y: scroll !important;} 
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
							<?php
								echo do_shortcode( '[contact-form-7 id="107" title="Feedback"]' ); 
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            .not-data-books {
                color: red;
            }

            .not-data-books {
                opacity: 0;
            }
        </style>


        <div class="modal fade" id="modalPhone">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Please enter your booking phone number</h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-phone-popup">
                            <input type="tel" class="modal-input-phone">
                        </div>
                        
                        <div class="not-data-books">There is no appointment with this phone number</div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="modal-button-phone">Enter</button>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            button[disabled], 
            html input[disabled] {
                background-color: #00803775;
            }

            .modal-dialog .modal-header .close span {
                font-size: 40px
            }

            .wrap-book-title {
                display: flex;
                margin-top: 30px;
                margin-bottom: 10px;
                font-size: 18px;
                font-weight: bold;
            }

            .wrap-book-item {
                display: flex;
                margin-bottom: 30px;
            }

            .book-name {
                width: 20%;
            }

            .book-date {
                width: 15%;
            }

            .book-time {
                width: 15%;
            }

            .book-serivces {
                width:25%;
            }

            .book-control {
                width:25%;
            }

            .book-control {
                display: flex;
                align-items: flex-start;
            }

            .book-control button {
                margin: 0 5px;
                padding: 5px;
                color: #fff;
            }

            .button-confirm-books {
                background-color: #008037;
            }

            .button-cancel-books {
                background-color: #ff5757;
            }

            #modalBooks .modal-dialog {
                width: 760px;
            }
        </style>

        <div class="modal fade" id="modalBooks">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Your appointment</h5>
                    </div>

                    <div class="modal-body" id="ajax-books">
                        <div class="wrap-book-title">
                            <div class="book-name">Name</div>
                            <div class="book-date">Date</div>
                            <div class="book-time">Time</div>
                            <div class="book-serivces">Services</div>
                            <div class="book-control"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalComfirm">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Your appointment has been comfirmed</h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalCancel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Do you want to cancel this appointment?</h5>
                        <input type="hidden" id="idBooks" value="">
                        <input type="hidden" id="statusBooks" value="">
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary yes-cancel-books">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalCancelYes">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Your appointment has been cancelled</h5>
                    </div>
                </div>
            </div>
        </div>

    <div class="main">
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

        <section class="container nail">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="nail-address TextColorBody">
                        <img src="<?php echo get_template_directory_uri() ."/assets/img/icon-theme/icon-location.png"?>" alt="">
                        <?php
                        if(get_option($businessAddress))
                        {
                            if (get_option($businessGoogleMap)) {
                                $google_map_link = get_option($businessGoogleMap);
                            } else {
                                $google_map_link = '#';
                            }
                            echo '<a class="TextColorBody" href="'.$google_map_link.'" target="_blank">'.get_option($businessAddress).'</a>';
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
                            <div class="nail-call-small">
                                <img src="<?php echo get_template_directory_uri() ."/assets/img/icon-theme/icon-phone.png"?>" alt="">
                                <a class ="telephone TextColorBody" href="tel:<?php echo $phone ?>">Tel: <?php echo $phone ?></a>
                            </div>
                            <?php
                        }
                        ?>
                        <a href="#Opening" class="TextColorBody">Opening hours &gt;&gt;</a>
                    </div>
<!--                    <div class="info">-->
<!--                        <div class="item-info bgColorButtonBody BackgroundButtonBody">-->
<!--                            <a href="tel: --><?php //echo $phone ?><!--" class="TextColorButtonBody">-->
<!--                                Call Us-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-info bgColorButtonBody BackgroundButtonBody">-->
<!--                            --><?php
//                            $googleMaps = "";
//                            if(get_option($businessGoogleMap))
//                            {
//                                $googleMaps = get_option($businessGoogleMap);
//                            }
//                            ?>
<!--                            <a target="_blank" href="--><?php //echo $googleMaps?><!--" class="TextColorButtonBody">-->
<!--                                Get Directions-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="col-md-1"></div>
            </div>
        </section>

        <section class="container welcome">
            <div class="row">
                <div class="col-md-3 column-left">
                    <h3 class="title-welcome-nail TextColorBody">
                        <?php
                        if(get_option($businessTitleWelcome))
                        {
                            echo get_option($businessTitleWelcome);
                        }
                        ?>
                    </h3>
                    <div class="content-welcome-nail TextColorBody">
                        <?php
                        if(get_option($businessContentWelcome))
                        {
                            echo get_option($businessContentWelcome);
                        }
                        ?>
                    </div>
                    <div class="button-welcome">
                        <button class="wrap-review BackgroundButtonBody TextColorButtonBody" data-toggle="modal" data-target="#listIcon">
                            Write a Review
                        </button>
                    </div>
                </div>
                <div class="col-md-9 column-right">
                    <div class="slider">
                        <?php
                        $url = "";
                        if(get_option($businessSlider1Welcome))
                        {
                            $url = get_option($businessSlider1Welcome);
                        }
                        ?>
                        <div class="item-slide">
<!--                            <img src="--><?php //echo $url ?><!--" alt="">-->
                            <img src="<?php echo get_template_directory_uri()."/assets/img/icon-theme/hinhhoa.png" ?>" alt="">
                        </div>

                        <?php
                        $url = "";
                        if(get_option($businessSlider2Welcome))
                        {
                            $url = get_option($businessSlider2Welcome);
                        }
                        ?>
                        <div class="item-slide">
<!--                            <img src="--><?php //echo $url ?><!--" alt="">-->
                            <img src="<?php echo get_template_directory_uri()."/assets/img/icon-theme/hinhhoa.png" ?>" alt="">
                        </div>

                        <?php
                        $url = "";
                        if(get_option($businessSlider3Welcome))
                        {
                            $url = get_option($businessSlider3Welcome);
                        }
                        ?>
                        <div class="item-slide">
<!--                            <img src="--><?php //echo $url ?><!--" alt="">-->
                            <img src="<?php echo get_template_directory_uri()."/assets/img/icon-theme/hinhhoa.png" ?>" alt="">
                        </div>

                        <?php
                        $url = "";
                        if(get_option($businessSlider4Welcome))
                        {
                            $url = get_option($businessSlider4Welcome);
                        }
                        ?>
                        <div class="item-slide">
<!--                            <img src="--><?php //echo $url ?><!--" alt="">-->
                            <img src="<?php echo get_template_directory_uri()."/assets/img/icon-theme/hinhhoa.png" ?>" alt="">
                        </div>

                        <?php
                        $url = "";
                        if(get_option($businessSlider5Welcome))
                        {
                            $url = get_option($businessSlider5Welcome);
                        }
                        ?>
                        <div class="item-slide">
<!--                            <img src="--><?php //echo $url ?><!--" alt="">-->
                            <img src="<?php echo get_template_directory_uri()."/assets/img/icon-theme/hinhhoa.png" ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="list-reviews BackgroundColorReviews">
            <div class="container wrap-list-reviews TextColorReviews">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="TextColorReviews title-gift">
                            <?php
                            if(get_option($businessTitleReviews))
                            {
                                echo stripslashes(get_option($businessTitleReviews));
                            }
                            ?>
                        </h3>
                        <div class="slider-reviews">
                            <div class="item-slider-reviews">
                                <svg class="icon-client-1" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"/></svg>
                                <?php
                                $content = "";
                                if(get_option($businessContent1Reviews))
                                {
                                    $content = stripslashes(get_option($businessContent1Reviews));
                                }
                                echo $content;
                                ?>
                                <svg class="icon-client-2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"/></svg>
                            </div>
                            <div class="item-slider-reviews">
                                <svg class="icon-client-1" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"/></svg>
                                <?php
                                $content = "";
                                if(get_option($businessContent2Reviews))
                                {
                                    $content = stripslashes(get_option($businessContent2Reviews));
                                }
                                echo $content;
                                ?>
                                <svg class="icon-client-2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"/></svg>
                            </div>
                            <div class="item-slider-reviews">
                                <svg class="icon-client-1" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"/></svg>
                                <?php
                                $content = "";
                                if(get_option($businessContent3Reviews))
                                {
                                    $content = stripslashes(get_option($businessContent3Reviews));
                                }
                                echo $content;
                                ?>
                                <svg class="icon-client-2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container gift anim move js-anim" id="Gift">
            <div class="row wrap-gift">
                <div class="col-md-4">
                    <h3 class="title-gift-card TextColorBody">
                        <?php
                        $text = "Buy gift cards";
                        if(get_option($businessTitleGift))
                        {
                            $text = get_option($businessTitleGift);
                        }
                        echo $text;
                        ?>
                    </h3>
                    <div class="content-gift TextColorBody">
                        <?php
                        $text = "Buy gift cards for your beloved ones";
                        if(get_option($businessContentGift))
                        {
                            $text = get_option($businessContentGift);
                        }
                        echo $text;
                        ?>
                    </div>
                    <button class="buy-gift BackgroundButtonBody TextColorButtonBody">Buy Now</button>
                    <button class="check-gift BackgroundButtonBody TextColorButtonBody">Check Balance</button>
                </div>
                <div class="col-md-8">
                    <div class="image-gift">
                        <?php
                        $url = get_template_directory_uri()."/assets/img/gift.jpg";
                        if(get_option($businessImageGift ))
                        {
                            $url = get_option($businessImageGift);
                        }
                        ?>
<!--                        <img src="--><?php //echo $url ?><!--" alt="">-->
                        <img src="<?php echo get_template_directory_uri()."/assets/img/icon-theme/example.png" ?>" alt="">
                    </div>
                </div>
            </div>
        </section>

        <div class="info-menu-app">
            <a href="#BookOnline" class="wrap-menu-column2 BackgroundButtonBody TextColorButtonBody">Book Online</a>
            <div class="wrap-menu-column3 BackgroundButtonBody TextColorButtonBody"  data-toggle="modal" data-target="#modalPhone" data-backdrop="static" data-keyboard="false">
                Confirm/ Cancel
            </div>
            <a href="#header" class="scrollToTop">pagetotop</a>
        </div>

        <section class="menu-main anim move js-anim BackgroundColorReviews">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-main-row">
                            <div class="menu-main-row">
                                <h3 class="TextColorBody">Our services</h3>
                            </div>
                            <div class="wrap-menu-title">
                                <div class="menu-label-left">
                                    <!-- NAME -->
                                </div>
                                <div class="menu-label-right">Price</div>
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
                                            <h4 class="menu-title-parent TextColorBody">
                                                <?php echo $parent->name ?>
                                            </h4>
                                            <div class="menu-description-parent TextColorBody">
                                                <?php echo $parent->description ?>
                                            </div>
                                        </div>

                                        <?php
                                        if(count($childrens) > 0)
                                        {
                                            ?>
                                            <div class="menu-label-right menu-right-more TextColorBody">See More</div>
                                            <?php
                                        } else {
                                            echo "<span>$".get_term_meta( $parent->term_id, 'services-price', true ).'</span>';
                                        }
                                        ?>
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
                                                    <div class="menu-main-desc TextColorBody">
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
                    </div>
                </div>
            </div>
        </section>

        <section class="container form anim move js-anim" id="BookOnline">
            <div class="row">
                <div class="col-md-12 wrap-form">
                    <h3 class="form-top-title TextColorBody">
                        Make a reservation
                    </h3>

                    <div class="form-hr"></div>

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
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-theme/icon-time.png" alt="" class="calendar">
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
                                    ?>
                                    <option value="<?php echo $term->term_id?>"><?php echo $term->name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <div class="error red">Error</div>
                        </div>

                        <div class="wrap-data-ajax">
                            <!-- load ajax -->
                        </div>

                        <div class="wrap-button submit ">
                            <button class="BackgroundButtonBody TextColorButtonBody">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container google-map">
           <div class="row">
               <div class="col-md-12">
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
               </div>
           </div>
        </section>

        <section class="contact BackgroundColorFooter" id="Opening">
            <div class="container wrap-contact">
                <div class="row">
                    <div class="col-md-4 contact-about">
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
                    <div class="col-md-4 footer-menu">
                        <div class="title-menu-footer TextColorFooter">Explore</div>
                        <div class="content-menu-footer">
                            <ul>
                                <li><a class="TextColorFooter" href="<?php echo get_home_url() ?>/#OurMenu">OUR MENU</a></li>
                                <?php
                                if(get_option("business-addmenu-header") && get_option("business-linkmenu-header"))
                                {
                                    ?>
                                    <li>
                                        <a  class="TextColorFooter" href="<?php echo get_option("business-linkmenu-header")?>"><?php echo get_option("business-addmenu-header")?></a>
                                    </li>
                                    <?php
                                }
                                ?>
                                <li><a class="TextColorFooter" href="#BookOnline">BOOK ONLINE</a></li>
                                <li><a class="TextColorFooter" href="#Gift">BUY GIFT CARDS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 contact-hours">
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
                                            <p class="TextColorFooter">Mon:<span> <?php echo $time; ?></span></p>
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
                                            <p class="TextColorFooter">Tue:<span> <?php echo $time; ?></span></p>
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
                                            <p class="TextColorFooter">Wed:<span> <?php echo $time; ?></span></p>
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
                                            <p class="TextColorFooter">Thu:<span> <?php echo $time; ?></span></p>
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
                                            <p class="TextColorFooter">Fri:<span> <?php echo $time; ?></span></p>
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
                                            <p class="TextColorFooter">Sat:<span> <?php echo $time; ?></span></p>
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
                    <div class="col-md-12 footer-row-1">
                        <div class="social-network">
                            <div class="item-social-network">
                                <?php
                                $url = "#";
                                if(get_option($businessInstagram))
                                {
                                    $url = get_option($businessInstagram);
                                }
                                ?>
                                <a href="<?php echo $url?>"><img src="<?php echo get_template_directory_uri() ."/assets/img/icon-theme/icon-insta.png"?>" alt=""></a>
                            </div>
                            <div class="item-social-network">
                                <?php
                                $url = "#";
                                if(get_option($businessYoutube))
                                {
                                    $url = get_option($businessYoutube);
                                }
                                ?>
                                <a href="<?php echo $url?>"><img src="<?php echo get_template_directory_uri() ."/assets/img/icon-theme/icon-youtube.png"?>" alt=""></a>
                            </div>
                            <div class="item-social-network">
                                <?php
                                $url = "#";
                                if(get_option($businessFacebook))
                                {
                                    $url = get_option($businessFacebook);
                                }
                                ?>
                                <a href="<?php echo $url?>"><img src="<?php echo get_template_directory_uri() ."/assets/img/icon-theme/icon-facebook.png"?>" alt=""></a>
                            </div>
                        </div>
                        <div class="footer-phone">
                        <?php
                        $phone = "";
                        if(get_option($businessPhoneNumber))
                        {
                        $phone = get_option($businessPhoneNumber);
                        ?>
                        <img src="<?php echo get_template_directory_uri() ."/assets/img/icon-theme/icon-phone.png"?>" alt="">
                        <a class ="TextColorFooter" href="tel:<?php echo $phone ?>">Tel: <?php echo $phone ?></a>
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                    <div class="col-md-12 footer-row-2">
                        <div class="footer-service"><a class="TextColorFooter" href="<?php echo esc_url( get_page_link( $policyId ) ); ?>" style="<?php echo $colorFooter?>"><?php echo get_the_title( $policyId ) ?></a></div>
                        <div class="footer-service"><a class="TextColorFooter" href="<?php echo esc_url( get_page_link( $termsId ) ); ?>" style="<?php echo $colorFooter?>"><?php  echo get_the_title( $termsId ) ?></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
get_footer();
