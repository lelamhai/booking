<?php
function get_data_taxonomy($id) 
{
    return services_get_taxonomy($id);
}

function get_data_times() 
{
    return times_get_data_taxonomy();
}

add_action('wp_ajax_deleteTaxonomy', 'deleteTaxonomy_function');
add_action('wp_ajax_nopriv_deleteTaxonomy', 'deleteTaxonomy_function');
function deleteTaxonomy_function() {
    if($_GET['id'] != null && $_GET['taxonomy'] != null)
    {
        delete_term($_GET['id'], $_GET['taxonomy']);
    }
    wp_die(); 
}

add_action('wp_ajax_createMenu', 'createMenu_function');
add_action('wp_ajax_nopriv_createMenu', 'createMenu_function');
function createMenu_function() {
    if($_GET['taxonomy'] != null && $_GET['parentId']  != null)
    {
        $insert_res = wp_insert_term(
            $_GET['title'],
            $_GET['taxonomy'],
            array(
                'description' => $_GET['description'],
                'parent'      =>  $_GET['parentId']
            )
        );

        if ( ! is_wp_error( $insert_res ) ) {
            $termId = 0;
            foreach($insert_res as $value)
            {   
                $termId = $value;
            }
            update_term_meta($termId, 'services-price', sanitize_text_field( $_GET['price']));
            update_term_meta($termId, 'services-index', sanitize_text_field( $_GET['index'] ) );
            echo $termId;
        }
    }
    wp_die(); 
}

add_action('wp_ajax_updateMenu', 'updateMenu_function');
add_action('wp_ajax_nopriv_updateMenu', 'updateMenu_function');
function updateMenu_function() {
    if($_GET['taxonomy'] != null && $_GET['parentId']  != null)
    {
        $update = wp_update_term( 
            $_GET['id'], 
            $_GET['taxonomy'], 
            array(
            'name' => $_GET['title'],
            'description' => $_GET['description']
        ) );

        if ( ! is_wp_error( $update ) ) {

            $termId = 0;
            foreach($insert_res as $value)
            {   
                $termId = $value;
            }
            update_term_meta($_GET['id'], 'services-price', sanitize_text_field( $_GET['price'] ) );
            update_term_meta($_GET['id'], 'services-index', sanitize_text_field( $_GET['index'] ) );
            echo 'Success!';
        }
    }
    wp_die(); 
}


add_action('wp_ajax_createTime', 'createTime_function');
add_action('wp_ajax_nopriv_createTime', 'createTime_function');
function createTime_function() {
    if($_GET['taxonomy'] != null && $_GET['time'])
    {
        $insert_res = wp_insert_term(
            $_GET['time'],
            $_GET['taxonomy'],
            array(
                'description' => "",
                'parent'      =>  0
            )
        );

        if ( ! is_wp_error( $insert_res ) ) {
            $termId = 0;
            foreach($insert_res as $value)
            {   
                $termId = $value;
            }
            update_term_meta($termId, 'times-slots', sanitize_text_field( $_GET['slots'] ) );
            update_term_meta($termId, 'times-index', sanitize_text_field( $_GET['index'] ) );
            echo $termId;
        }
    }
    wp_die(); 
}


add_action('wp_ajax_updateTime', 'updateTime_function');
add_action('wp_ajax_nopriv_updateTime', 'updateTime_function');
function updateTime_function() {
    if($_GET['taxonomy'] != null && $_GET['time']  != null)
    {
        $update = wp_update_term( 
            $_GET['id'], 
            $_GET['taxonomy'], 
            array(
            'name' => $_GET['time'],
            'description' => ''
        ) );

        if ( ! is_wp_error( $update ) ) {

            $termId = 0;
            foreach($insert_res as $value)
            {   
                $termId = $value;
            }
            update_term_meta($_GET['id'], 'times-slots', sanitize_text_field( $_GET['slots'] ) );
            update_term_meta($_GET['id'], 'times-index', sanitize_text_field( $_GET['index'] ) );
            echo 'Success!';
        }
    }
    wp_die(); 
}