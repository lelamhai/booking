<?php
add_filter( 'login_redirect', 'themeprefix_login_redirect', 10, 3 );
function themeprefix_login_redirect( $redirect_to, $request, $user ){
    $redirect_to = './manage';
    return $redirect_to;
}

add_action( 'admin_menu', 'wpdocs_register_edit_web' );
function wpdocs_register_edit_web() {
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'Edit Website',
        'read',
        '../edit-web',
        '',
        'dashicons-welcome-write-blog',
        99
    );
}

add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'Manage Appts',
        'read',
        '../manage',
        '',
        'dashicons-calendar-alt',
        98
    );
}


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
                    background-size: 90%;
                    width: 100%;
                    margin: 0;
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
?>