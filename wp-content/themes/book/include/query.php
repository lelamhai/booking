<?php
function booking_get_slots($date, $timeId) 
{
    $time = strtotime($date);
    $newformat = date('Y-m-d',$time);

    $args = array(
        'post_type'       => 'books',
        'post_status'     => 'publish',
        'posts_per_page'  => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'times',
                'field' => 'term_id',
                'terms' => $timeId
            )
        ),
        
        'meta_query'	=> array(
            array(
                'key'	 	=> 'booking_date',
                'value'	  	=> $newformat,
                'compare' 	=> '=',
            ),
        )
    );

    $booked = 0;
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $booked  = $booked + (int)get_post_meta( get_the_ID(), 'booking_slots' )[0];
        }
    } 
    $slots = time_get_slots($timeId) - $booked;
    return $slots;
}

function time_get_slots($timeId)
{
    $value = get_term_meta($timeId, 'times-slots')[0];
    return $value;
}

function services_get_taxonomy($id=0)
{
    $args = array(  
        'taxonomy' => 'services',
        'parent'   => $id,
        'hide_empty' => false,
        'meta_key' => 'services-index',
        'orderby' => 'meta_value',
        'order' => 'ASC'

        // 'taxonomy' => 'services',
        // 'parent'   => $id,
        // 'hide_empty' => false,
    );

    $taxonomies = get_terms($args);
    return $taxonomies;
}


function books_insert($phone, $fullName, $timeid, $datepicker, $message, $slots, $email, $location, $services)
{
    $time = strtotime($datepicker);
    $newformat = date('Y-m-d',$time);

    $new_post = array(
        'post_type'     => 'books',
        'post_title'    => $fullName,
        'post_excerpt'  => $message,
        'post_status'   => 'publish',
    );

    $id = wp_insert_post($new_post);
    if ( is_wp_error( $id ) ) {
        echo "System errors";
    } 
    wp_set_object_terms( $id, intval( $timeid ), 'times' );

	update_post_meta( $id, 'booking_date', sanitize_text_field( $newformat ) );
	update_post_meta( $id, 'booking_phone', sanitize_text_field( $phone ) );
	update_post_meta( $id, 'booking_email', sanitize_text_field( $email) );
    update_post_meta( $id, 'booking_location', sanitize_text_field( $location) );
	update_post_meta( $id, 'booking_services', sanitize_text_field( $services ) );
    update_post_meta( $id, 'booking_status', sanitize_text_field(1));
    update_post_meta( $id, 'booking_slots', sanitize_text_field($slots ));

    echo "Booking finish";
}

function delete_term($id, $taxonomy)
{
    $id = wp_delete_term($id, $taxonomy );
    if ( is_wp_error( $id ) ) {
        echo "System errors";
    } 
    echo "Delete finish";
}

function times_get_data_taxonomy()
{
    $args = array(  
        'taxonomy' => 'times',
        'parent'   => 0,
        'hide_empty' => false,
        'meta_key' => 'times-index',
        'orderby' => 'meta_value',
        'order' => 'ASC'


        // 'taxonomy' => 'times',
        // 'parent'   => 0,
        // 'hide_empty' => false,
        // 'meta_key' => 'times-index',
        // 'orderby' => 'meta_value',
        // 'order' => 'DESC'
    );

    $taxonomies = get_terms($args);
    return $taxonomies;
}

function times_get_data_manage()
{
    $args = array(  
        'taxonomy' => 'times',
        'parent'   => 0,
        'hide_empty' => false,
        'meta_key' => 'times-index',
        'orderby' => 'meta_value',
        'order' => 'DESC'
    );

    $taxonomies = get_terms($args);
    return $taxonomies;
}


function books_get_data($date, $termId)
{
    $args = array(  
        'post_type'		    => 'books',
        'posts_per_page'    => -1,
        'tax_query'         => array(
            array(
                'taxonomy'  => 'times',
                'field'     => 'term_id',
                'terms'     => $termId,
            )
        ),
        'meta_query'	    => array(
            array(
                'key' => 'booking_date',
                'value' => $date,
                'type' => 'date',
                'compare' => '=',
            )
        )
    );
    $listBooks = get_posts($args);
    return $listBooks;
}

function books_get_count_book_date($begin, $end)
{
    $args = array(  
        'post_type'		    => 'books',
        'posts_per_page'    => -1,
        'meta_query'	    => array(
            'relation'		=> 'AND',
            array(
                'key' => 'booking_date',
                'value' => $begin,
                'type' => 'date',
                'compare' => '>=',
            ),
            array(
                'key' => 'booking_date',
                'value' => $end,
                'type' => 'date',
                'compare' => '<=',
            )
        )
    );
    $listBooks = get_posts($args);
    return $listBooks;
}

function get_data_books($phone)
{
    $json = array();
    $args = array(  
        'post_type'		    => 'books',
        'posts_per_page'    => -1,
        'meta_query'	    => array(
            'relation'		=> 'AND',
            array(
                'key'	 	=> 'booking_status',
                'value'	  	=>  array(1,2),
                'compare' 	=> 'IN',
                
            ),
            array(
                'key' => 'booking_date',
                'value' => date('Y-m-d'),
                'type' => 'date',
                'compare' => '>=',
            ),
            array(
                'key' => 'booking_phone',
                'value' => $phone,
                'compare' => '=',
            )
        ),
    );

    $listBooks = get_posts($args);
    if(count($listBooks) > 0)
    {
        $json['postType'] = $listBooks;

        $customField = array();
        foreach ( $listBooks as $post ) {
            $arrayTemp = array();

            $date = get_post_meta( $post->ID, 'booking_date', true );
            $services = get_post_meta( $post->ID, 'booking_services', true );
            $status = get_post_meta( $post->ID, 'booking_status', true );
            $time = get_the_terms( $post->ID, 'times' );

            $jsonData = json_decode($services);
            $arrServices = array();
            for($j=0 ; $j<count($jsonData); $j++)
            {
                $arrSlot = array();
                $data = $jsonData[$j]->children;
                for($i=0; $i<count($data); $i++)
                {
                    $arr = explode('-', $data[$i]);
                    $parent = get_term($arr[0])->name;
                    $child = get_term($arr[1])->name;
                    if($child != NULL)
                    {
                        $temp = $parent."-".$child;
                    } else {
                        $temp = $parent;
                    }
                    array_push($arrSlot,$temp);
                }
                array_push($arrServices,$arrSlot);
            }
            $services = json_encode($arrServices);
            $arrayTemp["bookingServices"] = $services;
            $arrayTemp["bookingDate"] = $date;
            $arrayTemp["bookingTime"] = $time[0]->name;
            $arrayTemp["bookingStatus"] = $status;
            array_push($customField, $arrayTemp);
        }
        $json['customField'] = $customField;
    } else {
        $json['postType'] = $listBooks;
    }
    
    return $json;
}

function change_status_booking($id, $status)
{
    update_post_meta( $id, 'booking_status', $status );
}

?>