<?php
require get_template_directory() . '/include/taxonomies.php';
require get_template_directory() . '/include/post-types.php';
require get_template_directory() . '/include/query.php';
require get_template_directory() . '/include/ajax.php';
require get_template_directory() . '/include/input-ajax.php';

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
$businessContentWelcome = "business-content-welcome";
$businessSlider1Welcome = "business-slider1-welcome";
$businessSlider2Welcome = "business-slider2-welcome";
$businessSlider3Welcome = "business-slider3-welcome";
$businessSlider4Welcome = "business-slider4-welcome";
$businessSlider5Welcome = "business-slider5-welcome";

$businessBackgroundColorReviews = "business-backgroundcolor-reviews";
$businessTextColorReviews = "business-textcolor-reviews";
$businessTitleReviews = "business-title-reviews";
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
    
$termsId = 72;
$policyId = 184;

add_action('wp_enqueue_scripts', 'regsiter_styles');
function regsiter_styles()
{
    $version = "335";
    
    wp_enqueue_style('book-fonts',   get_template_directory_uri() ."/assets/css/font.css", array(), $version);
    wp_enqueue_style('book-bootstrap', get_template_directory_uri() ."/assets/bootstrap/bootstrap.min.css", array(), $version);
    wp_enqueue_style('book-animation', get_template_directory_uri() ."/assets/css/animation.css", array(), $version);
    
    wp_enqueue_script('book-jquery-3.6.0.min', get_template_directory_uri() . "/assets/js/jquery-3.6.0.min.js", array(), $version, true);
    wp_enqueue_script('boook-bootstrap', get_template_directory_uri() . "/assets/bootstrap/bootstrap.min.js", array(), $version, true);
    wp_enqueue_script('boook-animation', get_template_directory_uri() . "/assets/js/animation.js", array(), $version, true);
    if(is_page_template("edit-books.php"))
    {
        wp_enqueue_style('book-input',   get_template_directory_uri() ."/assets/css/input.css", array(), $version);
        wp_enqueue_script('boook-input', get_template_directory_uri() . "/assets/js/input.js", array(), $version, true);
    } else {
        wp_enqueue_style('book-style',   get_template_directory_uri() ."/assets/css/style.css", array(), $version);
        wp_enqueue_style('book-responsive',   get_template_directory_uri() ."/assets/css/responsive.css", array(), $version);
        wp_enqueue_style('book-slick',   get_template_directory_uri() ."/assets/slick/slick.css", array(), $version);
        wp_enqueue_style('book-slick-theme',   get_template_directory_uri() ."/assets/slick/slick-theme.css", array(), $version);
        wp_enqueue_style('book-jquery-ui',   get_template_directory_uri() ."/assets/datetimepicker/jquery-ui.css", array(), $version);
        wp_enqueue_style('book-select2.min',   get_template_directory_uri() ."/assets/css/select2.min.css", array(), $version);
        
        wp_enqueue_script('book-select2.min', get_template_directory_uri() . "/assets/js/select2.min.js", array(), $version, true);
        wp_enqueue_script('book-jquery-ui', get_template_directory_uri() . "/assets/datetimepicker/jquery-ui.js", array(), $version, true);
        wp_enqueue_script('boook-slick', get_template_directory_uri() . "/assets/slick/slick.js", array(), $version, true);
        wp_enqueue_script('boook-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
    }
}

add_filter( 'login_redirect', 'themeprefix_login_redirect', 10, 3 );
function themeprefix_login_redirect( $redirect_to, $request, $user ){
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'subscriber', $user->roles ) ) {
            $redirect_to = './edit-web/'; // Your redirect URL
        }
    }
    return $redirect_to;
}


function admin_redirects() {
    $user = wp_get_current_user()->roles[0];
    if($user == 'subscriber')
    {
        $url = home_url() . "/edit-web";
        wp_redirect($url);
    } 
}
add_action('admin_init', 'admin_redirects');

?>