<?php
require get_template_directory() . '/include/hook.php';
require get_template_directory() . '/include/taxonomies.php';
require get_template_directory() . '/include/post-types.php';
require get_template_directory() . '/include/query.php';
require get_template_directory() . '/include/ajax.php';
require get_template_directory() . '/include/input-ajax.php';
require get_template_directory() . '/include/manage.php';

$businessName = "business-name";
$businessAddress = "business-address";
$businessPhoneNumber = "business-phone-number";
$businessGoogleMap = "business-google-map";
$businessGoogleReview = "business-google-review";
$businessFacebook = "business-facebook";
$businessInstagram = "business-intergram";
$businessYoutube = "business-youtube";
// $businessOpenHours = "business-open-hours";

$businessBackgroundColorHeader = "business-backgroundcolor-header";
$businessTextColorHeader = "business-text-color-header";
$businessLogoHeader = "business-logo-header";
$businessAddMenuHeader = "business-addmenu-header";
$businessLinkMenuHeader = "business-linkmenu-header";
$businessYoutubeVideoBanner = "business-youtubevideo-banner";

$businessBackgroundColorBody = "business-backgroundcolor-body";
$businessTextColorBody = "business-text-color-body";
$businessBackgroundButtonBody = "business-backgroundbutton-body";
$businessTextColorButtonBody = "business-text-colorbutton-body";

$businessTitleWelcome = "business-title-welcome";
$businessSubTitleWelcome = "business-sub-title-welcome";
$businessContentWelcome = "business-content-welcome";
$businessSlider1Welcome = "business-slider1-welcome";
$businessSlider2Welcome = "business-slider2-welcome";
$businessSlider3Welcome = "business-slider3-welcome";
$businessSlider4Welcome = "business-slider4-welcome";
$businessSlider5Welcome = "business-slider5-welcome";

$businessBackgroundColorReviews = "business-backgroundcolor-reviews";
$businessTextColorReviews = "business-textcolor-reviews";
$businessTitleReviews = "business-title-reviews";
$businessSubTitleReviews = "business-subtitle-reviews";
$businessContent1Reviews = "business-content1-reviews";
$businessContent2Reviews = "business-content2-reviews";
$businessContent3Reviews = "business-content3-reviews";

$businessTitleGift = "business-title-gift";
$businessContentGift = "business-content-gift";
$businessImageGift = "business-image-gift";

$businessMapIframe = "business-map-iframe";

$businessBackgroundColorFooter = "business-backgroundcolor-footer";
$businessTextColorFooter = "business-textcolor-footer";
$businessAboutUsFooter = "business-aboutus-footer";

add_action('wp_enqueue_scripts', 'regsiter_styles');
function regsiter_styles()
{
    $version = "375";
    
    wp_enqueue_style('book-fonts',   get_template_directory_uri() ."/assets/css/font.css", array(), $version);
    wp_enqueue_style('book-base',   get_template_directory_uri() ."/assets/css/base.css", array(), $version);
    wp_enqueue_style('book-bootstrap', get_template_directory_uri() ."/assets/bootstrap/bootstrap.min.css", array(), $version);
    wp_enqueue_style('book-animation', get_template_directory_uri() ."/assets/css/animation.css", array(), $version);
    wp_enqueue_style('book-jquery-ui',   get_template_directory_uri() ."/assets/datetimepicker/jquery-ui.css", array(), $version);
    

    wp_enqueue_script('book-jquery-3.6.0.min', get_template_directory_uri() . "/assets/js/jquery-3.6.0.min.js", array(), $version, true);
    wp_enqueue_script('boook-bootstrap', get_template_directory_uri() . "/assets/bootstrap/bootstrap.min.js", array(), $version, true);
    wp_enqueue_script('boook-animation', get_template_directory_uri() . "/assets/js/animation.js", array(), $version, true);
    wp_enqueue_script('book-jquery-ui', get_template_directory_uri() . "/assets/datetimepicker/jquery-ui.js", array(), $version, true);
   
    if(is_page_template("edit-books.php"))
    {
        wp_enqueue_style('book-input',   get_template_directory_uri() ."/assets/css/input.css", array(), $version);
        wp_enqueue_script('boook-input', get_template_directory_uri() . "/assets/js/input.js", array(), $version, true);
    } else {
        if(is_page_template("manage.php"))
        {
            wp_enqueue_style('book-manage',   get_template_directory_uri() ."/assets/css/manage.css", array(), $version);
            wp_enqueue_style('book-select2.min',   get_template_directory_uri() ."/assets/css/select2.min.css", array(), $version);
            
            wp_enqueue_script('book-select2.min', get_template_directory_uri() . "/assets/js/select2.min.js", array(), $version, true);
            wp_enqueue_script('boook-manage', get_template_directory_uri() . "/assets/js/manage.js", array(), $version, true);
        } else {
            wp_enqueue_style('book-style',   get_template_directory_uri() ."/assets/css/style.css", array(), $version);
            wp_enqueue_style('book-responsive',   get_template_directory_uri() ."/assets/css/responsive.css", array(), $version);
            wp_enqueue_style('book-slick',   get_template_directory_uri() ."/assets/slick/slick.css", array(), $version);
            wp_enqueue_style('book-slick-theme',   get_template_directory_uri() ."/assets/slick/slick-theme.css", array(), $version);
            wp_enqueue_style('book-select2.min',   get_template_directory_uri() ."/assets/css/select2.min.css", array(), $version);
            wp_enqueue_style('popup',   get_template_directory_uri() ."/assets/css/popup.css", array(), $version);

            wp_enqueue_script('book-select2.min', get_template_directory_uri() . "/assets/js/select2.min.js", array(), $version, true);
            wp_enqueue_script('boook-slick', get_template_directory_uri() . "/assets/slick/slick.js", array(), $version, true);
            wp_enqueue_script('boook-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
            wp_enqueue_script('popup', get_template_directory_uri() . "/assets/js/popup.js", array(), $version, true);
        }
       
    }

    $user = wp_get_current_user();
    $allowed_roles = array('subscriber');
    if( array_intersect($allowed_roles, $user->roles ) ) { 
        wp_enqueue_style('book-subscriber',   get_template_directory_uri() ."/assets/css/subscriber.css", array(), $version);
    } 
}

add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );
function wpdocs_selectively_enqueue_admin_script( $hook ) {
    $version = "12";
    $user = wp_get_current_user();
    $allowed_roles = array('subscriber');
    if( array_intersect($allowed_roles, $user->roles ) ) { 
        wp_enqueue_style('admin-style',   get_template_directory_uri() ."/assets/admin/style.css", array(), $version);
    }

    wp_enqueue_script('custom-admin', get_template_directory_uri().'/assets/js/custom-admin.js');
}

$user = wp_get_current_user();
$allowed_roles = array('subscriber');
if( array_intersect($allowed_roles, $user->roles ) ) { 
    require get_template_directory() . '/include/hook-subscriber.php';
}
