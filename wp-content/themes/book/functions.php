<?php
function regsiter_styles()
{
    $version = "3";
    
    wp_enqueue_style('book-style',   get_template_directory_uri() ."/assets/css/style.css", array(), $version);
    wp_enqueue_style('book-responsive',   get_template_directory_uri() ."/assets/css/responsive.css", array(), $version);
    wp_enqueue_style('book-slick',   get_template_directory_uri() ."/assets/slick/slick.css", array(), $version);
    wp_enqueue_style('book-slick-theme',   get_template_directory_uri() ."/assets/slick/slick-theme.css", array(), $version);
    wp_enqueue_style('book-jquery-ui',   get_template_directory_uri() ."/assets/css/jquery-ui.css", array(), $version);
    wp_enqueue_style('book-select2.min',   get_template_directory_uri() ."/assets/css/select2.min.css", array(), $version);

    wp_enqueue_script('book-jquery-3.6.0.min', get_template_directory_uri() . "/assets/js/jquery-3.6.0.min.js", array(), $version, true);
    wp_enqueue_script('book-select2.min', get_template_directory_uri() . "/assets/js/select2.min.js", array(), $version, true);
    wp_enqueue_script('book-jquery-ui', get_template_directory_uri() . "/assets/js/jquery-ui.js", array(), $version, true);
    wp_enqueue_script('boook-slick', get_template_directory_uri() . "/assets/slick/slick.js", array(), $version, true);
    wp_enqueue_script('boook-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);

}
add_action('wp_enqueue_scripts', 'regsiter_styles');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array('page_title'=>'Home Configs','page_title'=>'Home Configs','menu_slug'=>'acf-options-theme-options'));
}