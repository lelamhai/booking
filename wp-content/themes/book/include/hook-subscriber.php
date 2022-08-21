<?php
function dashboard_redirect(){
    wp_redirect(admin_url('profile.php'));
}
add_action('load-index.php','dashboard_redirect');

function login_redirect( $redirect_to, $request, $user ){
    return admin_url('profile.php');
}
add_filter('login_redirect','login_redirect',10,3);

function remove_menus () {
    global $menu;
    $restricted = array(__('Dashboard'));
    //$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
    end($menu);
    while(prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0]!= NULL?$value[0]:'',$restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu','remove_menus');