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
add_action("wp_ajax_header", "header_function");
add_action("wp_ajax_nopriv_header", "header_function");
function header_function()
{
    if (isset($_FILES['file']['name'])) { 
        if(! function_exists('wp_handle_upload')){
            require_once(ABSPATH.'wp-admin/includes/file.php');
            require_once(ABSPATH . 'wp-admin/includes/image.php');

        }
        $uploadedfile = $_FILES['file'];
        $upload_overrides = array('test_form' => false);
        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);


        $wp_upload_dir    = wp_upload_dir();
	    $file_name        = basename( $_FILES['file']['name'] );
        $file = $wp_upload_dir['path'] . '/' . $file_name;
        $attachment = array (
            'guid'           => $wp_upload_dir['url'] . '/' . $file_name,
            'post_mime_type' => $movefile[ 'type' ],
            'post_title'     =>  $_FILES['file']['name'],
            'post_content'   => '',
            'post_type' => 'listing_type',
            'post_status'    => 'inherit',
        );
        $attach_id = wp_insert_attachment($attachment, $file);
        $attach_data = wp_generate_attachment_metadata($attach_id, $file);



        
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
    } else if($_POST['file'] == "") {

        $option_name = $_POST['keyFile'] ;
        $new_value = $_POST['file'];

        if ( get_option( $option_name ) != $new_value ) {
            update_option( $option_name, $new_value );
        } else {
            $deprecated = ' ';
            $autoload = 'no';
            add_option( $option_name, $new_value, $deprecated, $autoload );
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

add_action("wp_ajax_body", "body_function");
add_action("wp_ajax_nopriv_body", "body_function");
function body_function() {
    $option_name = $_POST['keyBackgroundColor'] ;
	$new_value = $_POST['backgroundColor'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyTextColorBody'] ;
	$new_value = $_POST['textColorBody'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyButtonColor'] ;
	$new_value = $_POST['buttonColor'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyTextColorButtonBody'] ;
	$new_value = $_POST['textColorButtonBody'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyTitleWelcome'] ;
	$new_value = $_POST['titleWelcome'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['subKeyTitleWelcome'] ;
    $new_value = $_POST['subTitleWelcome'] ;
    if ( get_option( $option_name ) != $new_value ) {
        update_option( $option_name, $new_value );
    } else {
        $deprecated = ' ';
        $autoload = 'no';
        add_option( $option_name, $new_value, $deprecated, $autoload );
    }

    $option_name = $_POST['keyTextBodyContent'] ;
	$new_value = $_POST['textBodyContent'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyMap'] ;
    $new_value = $_POST['map'] ;
    if ( get_option( $option_name ) != $new_value ) {
        update_option( $option_name, $new_value );
    } else {
        $deprecated = ' ';
        $autoload = 'no';
        add_option( $option_name, $new_value, $deprecated, $autoload );
    }

    $option_name = $_POST['keyTitleGift'] ;
    $new_value = $_POST['titleGift'] ;
    if ( get_option( $option_name ) != $new_value ) {
        update_option( $option_name, $new_value );
    } else {
        $deprecated = ' ';
        $autoload = 'no';
        add_option( $option_name, $new_value, $deprecated, $autoload );
    }

    $option_name = $_POST['keyContentGift'] ;
    $new_value = $_POST['contentGift'] ;
    if ( get_option( $option_name ) != $new_value ) {
        update_option( $option_name, $new_value );
    } else {
        $deprecated = ' ';
        $autoload = 'no';
        add_option( $option_name, $new_value, $deprecated, $autoload );
    }

    $option_name = $_POST['keyBackgroundColorReviews'] ;
    $new_value = $_POST['backgroundColorReviews'] ;
    if ( get_option( $option_name ) != $new_value ) {
        update_option( $option_name, $new_value );
    } else {
        $deprecated = ' ';
        $autoload = 'no';
        add_option( $option_name, $new_value, $deprecated, $autoload );
    }

    $option_name = $_POST['keyTextColorReviews'] ;
    $new_value = $_POST['textColorReviews'] ;
    if ( get_option( $option_name ) != $new_value ) {
        update_option( $option_name, $new_value );
    } else {
        $deprecated = ' ';
        $autoload = 'no';
        add_option( $option_name, $new_value, $deprecated, $autoload );
    }

    $option_name = $_POST['keyTitleReviews'] ;
    $new_value = $_POST['titleReviews'] ;
    if ( get_option( $option_name ) != $new_value ) {
        update_option( $option_name, $new_value );
    } else {
        $deprecated = ' ';
        $autoload = 'no';
        add_option( $option_name, $new_value, $deprecated, $autoload );
    }

    $option_name = $_POST['keySubTitleReviews'] ;
    $new_value = $_POST['valueSubTitleReviews'] ;
    if ( get_option( $option_name ) != $new_value ) {
        update_option( $option_name, $new_value );
    } else {
        $deprecated = ' ';
        $autoload = 'no';
        add_option( $option_name, $new_value, $deprecated, $autoload );
    }

    for($i=1; $i<=3; $i++)
    {
        $key = "keyTextBodyReviews".$i;
        $value = "textBodyReviews".$i;

        $option_name = $_POST[$key] ;
        $new_value = $_POST[$value] ;

        if ( get_option( $option_name ) != $new_value ) {
            update_option( $option_name, $new_value );
        } else {
            $deprecated = ' ';
            $autoload = 'no';
            add_option( $option_name, $new_value, $deprecated, $autoload );
        }
    }

    if(! function_exists('wp_handle_upload')){
        require_once(ABSPATH.'wp-admin/includes/file.php');
    }

    for($i=1; $i<=5; $i++)
    {
        $file = "file".$i;
        $key = "keyFile".$i;

        if (isset($_FILES[$file]['name'])) { 
            $uploadedfile = $_FILES[$file];
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            $wp_upload_dir    = wp_upload_dir();
            $file_name        = basename( $_FILES[$file]['name'] );
            $filePath = $wp_upload_dir['path'] . '/' . $file_name;
            $attachment = array (
                'guid'           => $wp_upload_dir['url'] . '/' . $file_name,
                'post_mime_type' => $movefile[ 'type' ],
                'post_title'     =>  $_FILES[$file]['name'],
                'post_content'   => '',
                'post_type' => 'listing_type',
                'post_status'    => 'inherit',
            );
            $attach_id = wp_insert_attachment($attachment, $filePath);
            $attach_data = wp_generate_attachment_metadata($attach_id, $filePath);


            if($movefile && !isset($movefile['error']))
            {
                $option_name = $_POST[$key] ;
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
        } else if($_POST[$file] == "") {
            $option_name = $_POST[$key] ;
            $new_value = $_POST[$file];

            if ( get_option( $option_name ) != $new_value ) {
                update_option( $option_name, $new_value );
            } else {
                $deprecated = ' ';
                $autoload = 'no';
                add_option( $option_name, $new_value, $deprecated, $autoload );
            }
        }
    }


    // Gift card
    if (isset($_FILES['file']['name'])) {
        $uploadedfile1 = $_FILES['file'];
        $upload_overrides1 = array('test_form' => false);
        $movefile1 = wp_handle_upload($uploadedfile1, $upload_overrides1);

        $wp_upload_dir    = wp_upload_dir();
        $file_name        = basename( $_FILES['file']['name'] );
        $file = $wp_upload_dir['path'] . '/' . $file_name;
        $attachment = array (
            'guid'           => $wp_upload_dir['url'] . '/' . $file_name,
            'post_mime_type' => $movefile1[ 'type' ],
            'post_title'     => $_FILES['file']['name'] ,
            'post_content'   => '',
            'post_type' => 'listing_type',
            'post_status'    => 'inherit',
        );
        $attach_id = wp_insert_attachment($attachment, $file);
        $attach_data = wp_generate_attachment_metadata($attach_id, $file);

        if($movefile1 && !isset($movefile1['error']))
        {
            $option_name = $_POST['keyFile'] ;
            $new_value = $movefile1['url'];
            if ( get_option( $option_name ) != $new_value ) {
                update_option( $option_name, $new_value );
            } else {
                $deprecated = ' ';
                $autoload = 'no';
                add_option( $option_name, $new_value, $deprecated, $autoload );
            }
        } else {
            echo $movefile1['error'];
        }
    } else if($_POST['file'] == "") {
        $option_name = $_POST['keyFile'];
        $new_value = "";
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

//add_action("wp_ajax_reviews", "reviews_function");
//add_action("wp_ajax_nopriv_reviews", "reviews_function");
//function reviews_function() {
//    $option_name = $_POST['keyBackgroundColorReviews'] ;
//	$new_value = $_POST['backgroundColorReviews'] ;
//	if ( get_option( $option_name ) != $new_value ) {
//		update_option( $option_name, $new_value );
//	} else {
//		$deprecated = ' ';
//		$autoload = 'no';
//		add_option( $option_name, $new_value, $deprecated, $autoload );
//	}
//
//    $option_name = $_POST['keyTextColorReviews'] ;
//	$new_value = $_POST['textColorReviews'] ;
//	if ( get_option( $option_name ) != $new_value ) {
//		update_option( $option_name, $new_value );
//	} else {
//		$deprecated = ' ';
//		$autoload = 'no';
//		add_option( $option_name, $new_value, $deprecated, $autoload );
//	}
//
//    $option_name = $_POST['keyTitleReviews'] ;
//	$new_value = $_POST['titleReviews'] ;
//	if ( get_option( $option_name ) != $new_value ) {
//		update_option( $option_name, $new_value );
//	} else {
//		$deprecated = ' ';
//		$autoload = 'no';
//		add_option( $option_name, $new_value, $deprecated, $autoload );
//	}
//
//    for($i=1; $i<=3; $i++)
//    {
//        $key = "keyTextBodyReviews".$i;
//        $value = "textBodyReviews".$i;
//
//        $option_name = $_POST[$key] ;
//        $new_value = $_POST[$value] ;
//
//        if ( get_option( $option_name ) != $new_value ) {
//            update_option( $option_name, $new_value );
//        } else {
//            $deprecated = ' ';
//            $autoload = 'no';
//            add_option( $option_name, $new_value, $deprecated, $autoload );
//        }
//    }
//
//    wp_die();
//}

//add_action("wp_ajax_gift", "gift_function");
//add_action("wp_ajax_nopriv_gift", "gift_function");
//function gift_function() {
//
//    $option_name = $_POST['keyTitleGift'] ;
//	$new_value = $_POST['titleGift'] ;
//	if ( get_option( $option_name ) != $new_value ) {
//		update_option( $option_name, $new_value );
//	} else {
//		$deprecated = ' ';
//		$autoload = 'no';
//		add_option( $option_name, $new_value, $deprecated, $autoload );
//	}
//
//    $option_name = $_POST['keyContentGift'] ;
//	$new_value = $_POST['contentGift'] ;
//	if ( get_option( $option_name ) != $new_value ) {
//		update_option( $option_name, $new_value );
//	} else {
//		$deprecated = ' ';
//		$autoload = 'no';
//		add_option( $option_name, $new_value, $deprecated, $autoload );
//	}
//
//    if(! function_exists('wp_handle_upload')){
//        require_once(ABSPATH.'wp-admin/includes/file.php');
//    }
//
//    if (isset($_FILES['file']['name'])) {
//        $uploadedfile = $_FILES['file'];
//        $upload_overrides = array('test_form' => false);
//        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
//
//        $wp_upload_dir    = wp_upload_dir();
//	    $file_name        = basename( $_FILES['file']['name'] );
//        $file = $wp_upload_dir['path'] . '/' . $file_name;
//        $attachment = array (
//            'guid'           => $wp_upload_dir['url'] . '/' . $file_name,
//            'post_mime_type' => $movefile[ 'type' ],
//            'post_title'     => $_FILES['file']['name'] ,
//            'post_content'   => '',
//            'post_type' => 'listing_type',
//            'post_status'    => 'inherit',
//        );
//        $attach_id = wp_insert_attachment($attachment, $file);
//        $attach_data = wp_generate_attachment_metadata($attach_id, $file);
//
//        if($movefile && !isset($movefile['error']))
//        {
//            $option_name = $_POST['keyFile'] ;
//            $new_value = $movefile['url'];
//            if ( get_option( $option_name ) != $new_value ) {
//                update_option( $option_name, $new_value );
//            } else {
//                $deprecated = ' ';
//                $autoload = 'no';
//                add_option( $option_name, $new_value, $deprecated, $autoload );
//            }
//        } else {
//            echo $movefile['error'];
//        }
//    } else if($_POST['file'] == "") {
//        $option_name = $_POST['keyFile'];
//        $new_value = "";
//        if ( get_option( $option_name ) != $new_value ) {
//            update_option( $option_name, $new_value );
//        } else {
//            $deprecated = ' ';
//            $autoload = 'no';
//            add_option( $option_name, $new_value, $deprecated, $autoload );
//        }
//    }
//
//    wp_die();
//}

//add_action("wp_ajax_map", "map_function");
//add_action("wp_ajax_nopriv_map", "map_function");
//function map_function() {
//    $option_name = $_POST['keyMap'] ;
//	$new_value = $_POST['map'] ;
//	if ( get_option( $option_name ) != $new_value ) {
//		update_option( $option_name, $new_value );
//	} else {
//		$deprecated = ' ';
//		$autoload = 'no';
//		add_option( $option_name, $new_value, $deprecated, $autoload );
//	}
//    wp_die();
//}


add_action("wp_ajax_footer", "footer_function");
add_action("wp_ajax_nopriv_footer", "footer_function");
function footer_function() {
    $option_name = $_POST['keyFooterColor'] ;
	$new_value = $_POST['footerColor'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyTextColorFooter'] ;
	$new_value = $_POST['textColorFooter'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $option_name = $_POST['keyContentAboutUs'] ;
	$new_value = $_POST['contentAboutUs'] ;
	if ( get_option( $option_name ) != $new_value ) {
		update_option( $option_name, $new_value );
	} else {
		$deprecated = ' ';
		$autoload = 'no';
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}

    $contentTermsId =  $_POST['termsId'];
    $contentTerms =  $_POST['terms'];
    $my_post_terms = array(
        'ID'           => $contentTermsId,
        'post_content' => $contentTerms,
    );
    wp_update_post( $my_post_terms );

    $contentTermsId =  $_POST['privacyPolicyId'];
    $contentTerms =  $_POST['privacyPolicy'];
    $my_post_terms = array(
        'ID'           => $contentTermsId,
        'post_content' => $contentTerms,
    );
    wp_update_post( $my_post_terms );

    wp_die(); 
}