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

    .slick-dots li.slick-active button:before {
        background-color: <?php echo $BackgroundButtonBody?> !important;
        opacity: 1 !important;
    }

    .slick-dots li button:before {
        background: transparent !important;
        border: 1px solid <?php echo $BackgroundButtonBody?> !important;
    }

    .slider-reviews .slick-prev:before,
    .slider-reviews .slick-next:before {
        color: <?php echo $BackgroundButtonBody?> !important;
    }

    .select2-container--default .select2-selection--single,
    .wrap-input-form input,
    .wrap-input-message textarea,
    .checkmark,
    .checkbox-budget:checked + label, .checkbox-budget:not(:checked) + label {
        border: 1px solid <?php echo $BackgroundButtonBody?> !important;
    }

    .main-title:before,
    .main-title:after {
        background: <?php echo $BackgroundButtonBody?> !important;
    }

    .nail-call a svg path,
    .scrollToTop svg path {
        fill: <?php echo $BackgroundButtonBody?> !important;
    }

    .TextColorBody {
        color: <?php echo $TextColorBody?> !important;
    }

    .wrap-input-message .label-card {
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


    .number:hover input ~ .checkmark {
        background: <?php echo $BackgroundButtonBody?>
    }

    .number input:checked ~ .checkmark:after{
        color: <?php echo $BackgroundButtonBody?>;
        display: block;
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



    .mobile-container {
        /*background: */<?php //echo $BackgroundColorHeader?>/*;*/
    }

    body { padding-right: 0 !important }
    .modal { padding-right: 0 !important }
    .modal-open {overflow-y: scroll !important;}
</style>

        <div class="modal" id="listIcon">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
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

        <div class="modal" id="reviewsGood">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
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
                            <div class="submit-good"><button><a href="<?php echo $url ?>" target="_blank">Review Now</a></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reviewsBad">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
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

        <!--Modal BuyNow-->
        <div class="modal fade" id="modalBuynow">
            <div class="modal-dialog" style="width: auto;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="popup--text">E-Gift card-Delivered via email and is also printable. The e-gift card code will be emailed to the recipient email below.</p>
                        <p class="popup--text">If you don’t see the email in your inbox, please check your spam/junk folder</p>
                        <form action="#" class="wrap-box" style="padding: 0 50px">
                            <label for="from">From *</label>
                            <div class="box-content">
                                <input type="text" name="from">
                            </div>

                            <label for="to">To *</label>
                            <div class="box-content"><input type="text" name="from"></div>
                            <label for="to">Amount *</label>
                                <div class="box-content"><input type="text" name="amount" placeholder="$"></div>
                            <label for="re-email">Recipient email *</label>
                                    <div class="box-content"><input type="email" name="re-email"></div>
                            <label for="comfirm-email">Confirm email *</label>
                                        <div class="box-content"><input type="email" name="comfirm-email"></div>
                            <button type="submit" class="submit">
                                <a href="#">Payment</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!--Modal BuyNow2-->
    <div class="modal fade" id="modalCheckbalance">
        <div class="modal-dialog" style="width: auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="popup--text">E-Gift card-Delivered via email and is also printable. The e-gift card code will be emailed to the recipient email below.</p>
                    <p class="popup--text">If you don’t see the email in your inbox, please check your spam/junk folder</p>
                    <form action="#" class="wrap-box" style="padding: 0 50px">
                        <label for="from">From *</label>
                        <div class="box-content">
                            <input type="text" name="from">
                        </div>

                        <label for="to">To *</label>
                        <div class="box-content"><input type="text" name="from"></div>
                        <label for="to">Amount *</label>
                        <div class="box-content"><input type="text" name="amount" placeholder="$"></div>
                        <label for="re-email">Recipient email *</label>
                        <div class="box-content"><input type="email" name="re-email"></div>
                        <label for="comfirm-email">Confirm email *</label>
                        <div class="box-content"><input type="email" name="comfirm-email"></div>
                        <button type="submit" class="submit">
                            <a href="#">Payment</a>
                        </button>
                    </form>
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
                    <div class="nail-call">
                        <?php
                        $phone = "";
                        if(get_option($businessPhoneNumber))
                        {
                            $phone = get_option($businessPhoneNumber);
                            ?>
                            <a class ="telephone TextColorBody" href="tel:<?php echo $phone ?>"><i class="fas fa-phone-alt"></i> Tel: <?php echo $phone ?></a>
                            <?php
                        }
                        ?>
                        <a href="#Opening" class="opening TextColorBody"><i class="far fa-clock"></i> Opening hours</a>
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
                <div class="col-md-5 column-left">
                    <h3 class="title-welcome-nail TextColorBody">
                        <span class="subtitle">
                            <?php
                            if(get_option($businessSubTitleWelcome))
                            {
                                echo get_option($businessSubTitleWelcome);
                            }
                            ?>
                        </span>
                        <span class="main-title TextColorBody">
                            <?php
                            if(get_option($businessTitleWelcome))
                            {
                                echo get_option($businessTitleWelcome);
                            }
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="17" viewBox="0 0 41 17">
                                <image id="Layer_0" data-name="Layer 0" width="41" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAARCAMAAAB3l3UEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABVlBMVEUAAAC+rv6/rv3ctPvftPuzrP+zrP6yrP+1rP6xrP/Er/3UsvvTsvzotvnrt/rvuPn1uPmuq/+3rP66rf7Cr/3IsP3ktfrmtvrrtvnvt/nxuPn1ufmwq/+5rf7Arv3LsfzftfvftPrmtvrktfrwuPnzuPiuq/+6rf7Br/3OsfzNsfzas/vftPrtt/n5ufitq//Cr/3GsP3Ws/vZs/v0uPj4ufisq//itfrrtvnvt/n3ufivq/+9rv7Fr/3KsP3RsvzRsvzktfr4ufizrP7Fr/3Usvv6ufjhtfr4ufj7uvjLsfzWs/v7uviuq//Ar/36ufj8uvirqv/7uviqqv/HsPzctPuvq/+5rf67rf3Br/3Zs/vetPvjtfrntvqvq/+yrP62rP7SsvvUsvvPsfy5rf7Msfztt/m7rf3JsPzxuPnzuPi9rv3Fr/31uPj4ufj7uvisqv8AAABLdLGLAAAAWXRSTlMAYKAQQGCwwHBQcGDQ8LBdEJDQEPAw0MDA8KAg8NBA8PBwPICAPeCw4E/gsODgcICQoKCQsDAQYHDQ8DCAIGCAQJDw8ODgwKDQQLB8wKBkoDDgYMDQMJDwwIq/Nq4AAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH5gkIEzgNsyPFzgAAAWRJREFUKM+N0llTwjAQAOAUlEqLBcUKAgJiFVqVW1CLUG9FRfEOtwcICIX//2STiq2jw7gvSSbfJNnNAqALAvw3DIbRzDiBwvibTJrIKWUwQwovaUupVC5XKtVpxmr7AWdq9Xpj1g4AnFNWrOX5Bct5h8PpXHC5ddKDZGPRDiD0Atb3iqR/KbDMOJwMZ13RyVUs34IgBHkgNJFc49eV26utDYbjwpqMqPI9SsAYaCMZT+B3MgFXq9NNbn7LlEeVH0S0xyIZT+CM0mCL2+50+zsaFT2qhJldKisIOQlntIf33Mm+vK9lJR6oEh5GeSlHHyHpH5XTJcvH2lNFUpW9dlvgJVylk9Ge7VQenOmrH8Qyn+Xz51imgUYHF/i4yCVJkqYM4S1QBSrma0o0kn7dX9quBtfAXBwOa19VUm/PAiP6zTTQx00YpG5/yjsWNQidu/+jg8xFTYay47tNfCAV+fiUYcegT+/0ZXDntm3iAAAAAElFTkSuQmCC"/>
                            </svg>
                        </span>
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
                <div class="col-md-7 column-right">
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

        <div class="info-menu-app">
            <a href="#BookOnline" class="wrap-menu-column2 BackgroundButtonBody TextColorButtonBody">Book Online</a>
            <div class="wrap-menu-column3 BackgroundButtonBody TextColorButtonBody"  data-toggle="modal" data-target="#modalPhone" data-backdrop="static" data-keyboard="false">
                Confirm/ Cancel
            </div>
            <a href="#header" class="scrollToTop"><i class="fas fa-arrow-circle-up"></i></a>
        </div>

        <section class="list-reviews BackgroundColorReviews">
            <div class="container wrap-list-reviews TextColorReviews">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="TextColorReviews title-gift">
                            <span class="subtitle">
                               <?php
                               if(get_option($businessSubTitleReviews))
                               {
                                   echo get_option($businessSubTitleReviews);
                               }
                               ?>
                            </span>
                            <span class="main-title TextColorBody">
                            <?php
                            if(get_option($businessTitleReviews))
                            {
                                echo stripslashes(get_option($businessTitleReviews));
                            }
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="17" viewBox="0 0 41 17">
                                <image id="Layer_0" data-name="Layer 0" width="41" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAARCAMAAAB3l3UEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABVlBMVEUAAAC+rv6/rv3ctPvftPuzrP+zrP6yrP+1rP6xrP/Er/3UsvvTsvzotvnrt/rvuPn1uPmuq/+3rP66rf7Cr/3IsP3ktfrmtvrrtvnvt/nxuPn1ufmwq/+5rf7Arv3LsfzftfvftPrmtvrktfrwuPnzuPiuq/+6rf7Br/3OsfzNsfzas/vftPrtt/n5ufitq//Cr/3GsP3Ws/vZs/v0uPj4ufisq//itfrrtvnvt/n3ufivq/+9rv7Fr/3KsP3RsvzRsvzktfr4ufizrP7Fr/3Usvv6ufjhtfr4ufj7uvjLsfzWs/v7uviuq//Ar/36ufj8uvirqv/7uviqqv/HsPzctPuvq/+5rf67rf3Br/3Zs/vetPvjtfrntvqvq/+yrP62rP7SsvvUsvvPsfy5rf7Msfztt/m7rf3JsPzxuPnzuPi9rv3Fr/31uPj4ufj7uvisqv8AAABLdLGLAAAAWXRSTlMAYKAQQGCwwHBQcGDQ8LBdEJDQEPAw0MDA8KAg8NBA8PBwPICAPeCw4E/gsODgcICQoKCQsDAQYHDQ8DCAIGCAQJDw8ODgwKDQQLB8wKBkoDDgYMDQMJDwwIq/Nq4AAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH5gkIEzgNsyPFzgAAAWRJREFUKM+N0llTwjAQAOAUlEqLBcUKAgJiFVqVW1CLUG9FRfEOtwcICIX//2STiq2jw7gvSSbfJNnNAqALAvw3DIbRzDiBwvibTJrIKWUwQwovaUupVC5XKtVpxmr7AWdq9Xpj1g4AnFNWrOX5Bct5h8PpXHC5ddKDZGPRDiD0Atb3iqR/KbDMOJwMZ13RyVUs34IgBHkgNJFc49eV26utDYbjwpqMqPI9SsAYaCMZT+B3MgFXq9NNbn7LlEeVH0S0xyIZT+CM0mCL2+50+zsaFT2qhJldKisIOQlntIf33Mm+vK9lJR6oEh5GeSlHHyHpH5XTJcvH2lNFUpW9dlvgJVylk9Ge7VQenOmrH8Qyn+Xz51imgUYHF/i4yCVJkqYM4S1QBSrma0o0kn7dX9quBtfAXBwOa19VUm/PAiP6zTTQx00YpG5/yjsWNQidu/+jg8xFTYay47tNfCAV+fiUYcegT+/0ZXDntm3iAAAAAElFTkSuQmCC"/>
                            </svg>
                        </span>
                        </h3>
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
                </div>
            </div>
        </section>


        <section class="container gift anim move js-anim" id="Gift">
            <div class="row wrap-gift">
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
                <div class="col-md-4">
                    <h3 class="title-gift-card TextColorBody">
                        <span class="subtitle">
                            <?php
                            $text = "for your beloved ones";
                            if(get_option($businessContentGift))
                            {
                                $text = get_option($businessContentGift);
                            }
                            echo $text;
                            ?>
                        </span>
                        <span class="main-title TextColorBody">
                           <?php
                           $text = "Buy gift cards";
                           if(get_option($businessTitleGift))
                           {
                               $text = get_option($businessTitleGift);
                           }
                           echo $text;
                           ?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="17" viewBox="0 0 41 17">
                                <image id="Layer_0" data-name="Layer 0" width="41" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAARCAMAAAB3l3UEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABVlBMVEUAAAC+rv6/rv3ctPvftPuzrP+zrP6yrP+1rP6xrP/Er/3UsvvTsvzotvnrt/rvuPn1uPmuq/+3rP66rf7Cr/3IsP3ktfrmtvrrtvnvt/nxuPn1ufmwq/+5rf7Arv3LsfzftfvftPrmtvrktfrwuPnzuPiuq/+6rf7Br/3OsfzNsfzas/vftPrtt/n5ufitq//Cr/3GsP3Ws/vZs/v0uPj4ufisq//itfrrtvnvt/n3ufivq/+9rv7Fr/3KsP3RsvzRsvzktfr4ufizrP7Fr/3Usvv6ufjhtfr4ufj7uvjLsfzWs/v7uviuq//Ar/36ufj8uvirqv/7uviqqv/HsPzctPuvq/+5rf67rf3Br/3Zs/vetPvjtfrntvqvq/+yrP62rP7SsvvUsvvPsfy5rf7Msfztt/m7rf3JsPzxuPnzuPi9rv3Fr/31uPj4ufj7uvisqv8AAABLdLGLAAAAWXRSTlMAYKAQQGCwwHBQcGDQ8LBdEJDQEPAw0MDA8KAg8NBA8PBwPICAPeCw4E/gsODgcICQoKCQsDAQYHDQ8DCAIGCAQJDw8ODgwKDQQLB8wKBkoDDgYMDQMJDwwIq/Nq4AAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH5gkIEzgNsyPFzgAAAWRJREFUKM+N0llTwjAQAOAUlEqLBcUKAgJiFVqVW1CLUG9FRfEOtwcICIX//2STiq2jw7gvSSbfJNnNAqALAvw3DIbRzDiBwvibTJrIKWUwQwovaUupVC5XKtVpxmr7AWdq9Xpj1g4AnFNWrOX5Bct5h8PpXHC5ddKDZGPRDiD0Atb3iqR/KbDMOJwMZ13RyVUs34IgBHkgNJFc49eV26utDYbjwpqMqPI9SsAYaCMZT+B3MgFXq9NNbn7LlEeVH0S0xyIZT+CM0mCL2+50+zsaFT2qhJldKisIOQlntIf33Mm+vK9lJR6oEh5GeSlHHyHpH5XTJcvH2lNFUpW9dlvgJVylk9Ge7VQenOmrH8Qyn+Xz51imgUYHF/i4yCVJkqYM4S1QBSrma0o0kn7dX9quBtfAXBwOa19VUm/PAiP6zTTQx00YpG5/yjsWNQidu/+jg8xFTYay47tNfCAV+fiUYcegT+/0ZXDntm3iAAAAAElFTkSuQmCC"/>
                            </svg>
                        </span>
                    </h3>
                    <button class="buy-gift BackgroundButtonBody TextColorButtonBody">Buy Now</button>
                    <button class="check-gift BackgroundButtonBody TextColorButtonBody">Check Balance</button>
                </div>
            </div>
        </section>

        <section class="menu-main anim move js-anim" id="OurMenu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-main-row">
                            <h3 class="TextColorBody">
                                <span class="subtitle">Services</span>
                                <span class="main-title TextColorBody">
                                    Our services
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="17" viewBox="0 0 41 17">
                                            <image id="Layer_0" data-name="Layer 0" width="41" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAARCAMAAAB3l3UEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABVlBMVEUAAAC+rv6/rv3ctPvftPuzrP+zrP6yrP+1rP6xrP/Er/3UsvvTsvzotvnrt/rvuPn1uPmuq/+3rP66rf7Cr/3IsP3ktfrmtvrrtvnvt/nxuPn1ufmwq/+5rf7Arv3LsfzftfvftPrmtvrktfrwuPnzuPiuq/+6rf7Br/3OsfzNsfzas/vftPrtt/n5ufitq//Cr/3GsP3Ws/vZs/v0uPj4ufisq//itfrrtvnvt/n3ufivq/+9rv7Fr/3KsP3RsvzRsvzktfr4ufizrP7Fr/3Usvv6ufjhtfr4ufj7uvjLsfzWs/v7uviuq//Ar/36ufj8uvirqv/7uviqqv/HsPzctPuvq/+5rf67rf3Br/3Zs/vetPvjtfrntvqvq/+yrP62rP7SsvvUsvvPsfy5rf7Msfztt/m7rf3JsPzxuPnzuPi9rv3Fr/31uPj4ufj7uvisqv8AAABLdLGLAAAAWXRSTlMAYKAQQGCwwHBQcGDQ8LBdEJDQEPAw0MDA8KAg8NBA8PBwPICAPeCw4E/gsODgcICQoKCQsDAQYHDQ8DCAIGCAQJDw8ODgwKDQQLB8wKBkoDDgYMDQMJDwwIq/Nq4AAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH5gkIEzgNsyPFzgAAAWRJREFUKM+N0llTwjAQAOAUlEqLBcUKAgJiFVqVW1CLUG9FRfEOtwcICIX//2STiq2jw7gvSSbfJNnNAqALAvw3DIbRzDiBwvibTJrIKWUwQwovaUupVC5XKtVpxmr7AWdq9Xpj1g4AnFNWrOX5Bct5h8PpXHC5ddKDZGPRDiD0Atb3iqR/KbDMOJwMZ13RyVUs34IgBHkgNJFc49eV26utDYbjwpqMqPI9SsAYaCMZT+B3MgFXq9NNbn7LlEeVH0S0xyIZT+CM0mCL2+50+zsaFT2qhJldKisIOQlntIf33Mm+vK9lJR6oEh5GeSlHHyHpH5XTJcvH2lNFUpW9dlvgJVylk9Ge7VQenOmrH8Qyn+Xz51imgUYHF/i4yCVJkqYM4S1QBSrma0o0kn7dX9quBtfAXBwOa19VUm/PAiP6zTTQx00YpG5/yjsWNQidu/+jg8xFTYay47tNfCAV+fiUYcegT+/0ZXDntm3iAAAAAElFTkSuQmCC"/>
                                        </svg>
                                    </span>
                            </h3>
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
                        <span class="subtitle">Booking Calendar</span>
                        <span class="main-title TextColorBody">
                            Make a reservation
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="17" viewBox="0 0 41 17">
                                <image id="Layer_0" data-name="Layer 0" width="41" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAARCAMAAAB3l3UEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABVlBMVEUAAAC+rv6/rv3ctPvftPuzrP+zrP6yrP+1rP6xrP/Er/3UsvvTsvzotvnrt/rvuPn1uPmuq/+3rP66rf7Cr/3IsP3ktfrmtvrrtvnvt/nxuPn1ufmwq/+5rf7Arv3LsfzftfvftPrmtvrktfrwuPnzuPiuq/+6rf7Br/3OsfzNsfzas/vftPrtt/n5ufitq//Cr/3GsP3Ws/vZs/v0uPj4ufisq//itfrrtvnvt/n3ufivq/+9rv7Fr/3KsP3RsvzRsvzktfr4ufizrP7Fr/3Usvv6ufjhtfr4ufj7uvjLsfzWs/v7uviuq//Ar/36ufj8uvirqv/7uviqqv/HsPzctPuvq/+5rf67rf3Br/3Zs/vetPvjtfrntvqvq/+yrP62rP7SsvvUsvvPsfy5rf7Msfztt/m7rf3JsPzxuPnzuPi9rv3Fr/31uPj4ufj7uvisqv8AAABLdLGLAAAAWXRSTlMAYKAQQGCwwHBQcGDQ8LBdEJDQEPAw0MDA8KAg8NBA8PBwPICAPeCw4E/gsODgcICQoKCQsDAQYHDQ8DCAIGCAQJDw8ODgwKDQQLB8wKBkoDDgYMDQMJDwwIq/Nq4AAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH5gkIEzgNsyPFzgAAAWRJREFUKM+N0llTwjAQAOAUlEqLBcUKAgJiFVqVW1CLUG9FRfEOtwcICIX//2STiq2jw7gvSSbfJNnNAqALAvw3DIbRzDiBwvibTJrIKWUwQwovaUupVC5XKtVpxmr7AWdq9Xpj1g4AnFNWrOX5Bct5h8PpXHC5ddKDZGPRDiD0Atb3iqR/KbDMOJwMZ13RyVUs34IgBHkgNJFc49eV26utDYbjwpqMqPI9SsAYaCMZT+B3MgFXq9NNbn7LlEeVH0S0xyIZT+CM0mCL2+50+zsaFT2qhJldKisIOQlntIf33Mm+vK9lJR6oEh5GeSlHHyHpH5XTJcvH2lNFUpW9dlvgJVylk9Ge7VQenOmrH8Qyn+Xz51imgUYHF/i4yCVJkqYM4S1QBSrma0o0kn7dX9quBtfAXBwOa19VUm/PAiP6zTTQx00YpG5/yjsWNQidu/+jg8xFTYay47tNfCAV+fiUYcegT+/0ZXDntm3iAAAAAElFTkSuQmCC"/>
                            </svg>
                        </span>
                    </h3>

                    <div class="form-content TextColorBody">
                        Book online, chat with us or you can always call us during our business hours.<br>
                        Please cancel your appointment if your schedule changes. We appreciate you. Thank you!
                    </div>

                    <div class="wrap-form-card">
                       <div class="wrap-form-card-box">
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

                           <div class="wrap-input-form wrap-input-location">
                               <div class="label-card TextColorBody">Your location</div>
                               <input type="text" class="location">
                               <div class="error red">Error</div>
                           </div>

                           <div class="wrap-input-form wrap-input-datepicker">
                               <div class="label-card TextColorBody">Pick a day<span class="red">*</span></div>
                               <input type="text" id="datepicker" class="datepicker">
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

    </div>
<?php
get_footer();
