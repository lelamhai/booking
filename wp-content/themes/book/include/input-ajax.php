<?php
function get_data_taxonomy($id) 
{
    return services_get_taxonomy($id);
}

function get_data_times() 
{
    return times_get_data_taxonomy();
}

add_action('wp_ajax_addOption', 'addOption_function');
add_action('wp_ajax_nopriv_addOption', 'addOption_function');
function addOption_function() {
    if(!empty($_GET['key'])) 
    {
		$option_name = $_GET['key'] ;
		$new_value = $_GET['name'] ;
		if ( get_option( $option_name ) != $new_value ) {
			update_option( $option_name, $new_value );
		} else {
			$deprecated = ' ';
			$autoload = 'no';
			add_option( $option_name, $new_value, $deprecated, $autoload );
		}
    }
    wp_die(); 
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

// ===================== tab2 ===============\\
add_action("wp_ajax_upload_image", "upload_image");
add_action("wp_ajax_nopriv_upload_image", "upload_image");
function upload_image()
{
    if (isset($_FILES['file']['name'])) { 
        if(! function_exists('wp_handle_upload')){
            require_once(ABSPATH.'wp-admin/includes/file.php');
        }
        $uploadedfile = $_FILES['file'];
        $upload_overrides = array('test_form' => false);
        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
        if($movefile && !isset($movefile['error']))
        {
            $option_name = $_POST['keyFile'] ;
            $new_value = $movefile['url'];
            if ( get_option( $option_name ) != $new_value ) {
                update_option( $option_name, $new_value );
            } else {
                $deprecated = ' ';
                $autoload = 'no';
                add_option( $option_name, $new_value, $deprecated, $autoload );
            }
        } else {
            echo $movefile['error'];
        }
    }

    $option_name = $_POST['keyHeaderColor'] ;
	$new_value = $_POST['headerColor'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}



    $option_name = $_POST['keyTextColor'] ;
	$new_value = $_POST['textColor'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyadditionalMenu'] ;
	$new_value = $_POST['additionalMenu'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}


    $option_name = $_POST['keyLinkMenu'] ;
	$new_value = $_POST['linkMenu'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyYoutubeHeader'] ;
	$new_value = $_POST['youtubeHeader'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}
    wp_die();
}

