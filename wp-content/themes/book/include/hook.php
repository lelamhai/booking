<?php
// add_filter( 'login_redirect', 'themeprefix_login_redirect', 10, 3 );
// function themeprefix_login_redirect( $redirect_to, $request, $user ){
//     //is there a user to check?
//     if ( isset( $user->roles ) && is_array( $user->roles ) ) {
//         //check for admins
//         if ( in_array( 'subscriber', $user->roles ) ) {
//             $redirect_to = './edit-web/'; // Your redirect URL
//         }
//     }
//     return $redirect_to;
// }


// function admin_redirects() {
//     $user = wp_get_current_user()->roles[0];
//     if($user == 'subscriber')
//     {
//         $url = home_url() . "/edit-web";
//         wp_redirect($url);
//     } 
// }
// add_action('admin_init', 'admin_redirects');

add_action( 'wp_before_admin_bar_render', 'example_admin_bar_remove_logo', 0 );
function example_admin_bar_remove_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );
}


add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url() {
    return home_url();
}

if(get_option("business-logo-header"))
{
    add_action( 'login_enqueue_scripts', 'my_login_logo_one' );
    function my_login_logo_one() { 
        ?> 
            <style type="text/css"> 
                body.login div#login h1 a {
                    background-image: url(<?php echo get_option("business-logo-header")?>);
                    background-size: 130px;
                    width: 135px;
                } 
            </style>
         <?php 
    } 
} else {
    add_filter( 'login_headertext', 'wpdoc_customize_login_headertext' );
    function wpdoc_customize_login_headertext( $headertext ) {
        ?>
            <style type="text/css"> 
                body.login div#login h1 a {
                    display: contents;
                } 
            </style>
        <?php
        $name = get_option("business-name");
        $headertext = esc_html__($name, 'plugin-textdomain' );
        return $headertext;
    }
}


/*
* add a group of links under a parent link
*/
  
// Add a parent shortcut link
  
function custom_toolbar_link($wp_admin_bar) {
    $args = array(
        'id' => 'wpbeginner',
        'title' => '<span class="ab-icon"></span><span class="ab-label">Home</span>',
        'href' => home_url(), 
        'meta' => array(
            'class' => 'wpbeginner', 
            'title' => 'Home'
            )
    );
    $wp_admin_bar->add_node($args);
  
// Add the first child link 
      
    $args = array(
        'id' => 'wpbeginner-guides',
        'title' => 'Edit web', 
        'href' => home_url()."/edit-web",
        'parent' => 'wpbeginner', 
        'meta' => array(
            'class' => 'wpbeginner-guides', 
            'title' => 'Edit web'
            )
    );
    $wp_admin_bar->add_node($args);
  
// Add another child link
$args = array(
        'id' => 'wpbeginner-tutorials',
        'title' => 'List booking', 
        'href' => '#',
        'parent' => 'wpbeginner', 
        'meta' => array(
            'class' => 'wpbeginner-tutorials', 
            'title' => 'List booking'
            )
    );
    $wp_admin_bar->add_node($args);

}
  
add_action('admin_bar_menu', 'custom_toolbar_link', 999);