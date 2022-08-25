<?php
add_filter( 'login_redirect', 'themeprefix_login_redirect', 10, 3 );
function themeprefix_login_redirect( $redirect_to, $request, $user ){
    $redirect_to = './manage';
    return $redirect_to;
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

// add links cho my account admin bar in /wp-admin/
if (!function_exists('add_custom_link_in_my_account_admin_bar_menu')) {
    function add_custom_link_in_my_account_admin_bar_menu($wp_admin_bar)
    {

        if ($wp_admin_bar->get_node('user-actions')) {
            $parent = 'user-actions';
        } else {
            return;
        }

        $wp_admin_bar->add_node(array(
            'parent' => $parent,
            'id' => 'manage-appts',
            'title' => esc_html__('Manage Appts', 'textdomain'),
            'href' => get_site_url() . '/manage',
        ));

        $wp_admin_bar->add_node(array(
            'parent' => $parent,
            'id' => 'edit-web',
            'title' => esc_html__('Edit Website', 'textdomain'),
            'href' => get_site_url() . '/edit-web',
        ));
    }
}
add_action( 'admin_bar_menu', 'add_custom_link_in_my_account_admin_bar_menu', 11 );