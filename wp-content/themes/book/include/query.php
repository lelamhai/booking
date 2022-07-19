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


function books_insert($phone, $fullName, $timeid, $datepicker, $message, $slots, $email, $services)
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



?>