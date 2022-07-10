<?php
/*
* Creating a function to create our CPT
*/
  
add_action( 'init', 'custom_post_type', 0 );
function custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Booking', 'Post Type General Name' ),
			'singular_name'       => _x( 'Booking', 'Post Type Singular Name' ),
			'menu_name'           => __( 'Booking' ),
			'parent_item_colon'   => __( 'Parent Booking' ),
			'all_items'           => __( 'All Booking' ),
			'view_item'           => __( 'View Booking' ),
			'add_new_item'        => __( 'Add New Booking' ),
			'add_new'             => __( 'Add New' ),
			'edit_item'           => __( 'Edit Booking' ),
			'update_item'         => __( 'Update Booking' ),
			'search_items'        => __( 'Search Booking' ),
			'not_found'           => __( 'Not Found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
		);
		  
		// Set other options for Custom Post Type
		$args = array(
			'label'               => __( 'Bookings' ),
			'description'         => __( 'Booking news and reviews' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'custom-fields', 'excerpt'),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'times' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => false,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'booking', $args );
}


add_action( 'add_meta_boxes_booking', 'add_metabox' );
function add_metabox() {
	add_meta_box(
		'booking_metabox', // metabox ID
		'Fields', // title
		'Booking_metabox_callback', // callback function
		'booking', // post type or post types in array
		'normal', // position (normal, side, advanced)
		'default' // priority (default, low, high, core)
	);
}


function Booking_metabox_callback( $post ) {

	$date = get_post_meta( $post->ID, 'booking_date', true );
	$phone = get_post_meta( $post->ID, 'booking_phone', true );
	$services = get_post_meta( $post->ID, 'booking_services', true );
	$status = get_post_meta( $post->ID, 'booking_status', true );
	$slots = get_post_meta( $post->ID, 'booking_slots', true );
	$email = get_post_meta( $post->ID, 'booking_email', true );

	wp_nonce_field( 'bookingnonce', '_softkeymktnonce' );

	$metabox = '<table class="form-table">
		<tbody>';
	$metabox .= '<tr>
				<th><label>Datetime</label></th>
				<td><input type="text" name="booking_date" value="' . esc_attr( $date ) . '" class="regular-text"></td>
			</tr>';
	$metabox .= '<tr>
				<th><label>Phone</label></th>
				<td><input type="text" name="booking_phone" value="' . esc_attr( $phone ) . '" class="regular-text"></td>
			</tr>';
	$metabox .= '<tr>
				<th><label>Slots</label></th>
				<td><input type="text" name="booking_slots" value="' . esc_attr( $slots ) . '" class="regular-text"></td>
			</tr>';
	$metabox .= '<tr>
			<th><label>Email</label></th>
			<td><input type="email" name="booking_email" value="' . esc_attr( $email ) . '" class="regular-text"></td>
			</tr>';
	$metabox .= '<tr>
			<th><label>Status</label></th>
			<td><input type="text" name="booking_status" value="' . esc_attr( $status ) . '" class="regular-text"></td>
			</tr>';
	$metabox .= '<tr>
			<th><label>Services</label></th>
			<td>
				<textarea name="booking_services" rows="4" cols="50">
					' . esc_attr( $services ) . '
				</textarea>
			</td>
			</tr>';
	$metabox .= '</tbody>
	</table>';
	echo $metabox;
}



add_action( 'save_post_booking', 'softkeymkt_save_meta', 10, 2 );
function softkeymkt_save_meta( $post_id, $post ) {
	// nonce check
	if ( ! isset( $_POST[ '_softkeymktnonce' ] ) || ! wp_verify_nonce( $_POST[ '_softkeymktnonce' ], 'bookingnonce' ) ) {
		return $post_id;
	}

	// Do not save the data if autosave
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return $post_id;
	}

	if( isset( $_POST[ 'booking_date' ] ) ) {
		update_post_meta( $post_id, 'booking_date', sanitize_text_field( $_POST[ 'booking_date' ] ) );
	} else {
		delete_post_meta( $post_id, 'booking_date' );
	}

	if( isset( $_POST[ 'booking_phone' ] ) ) {
		update_post_meta( $post_id, 'booking_phone', sanitize_text_field( $_POST[ 'booking_phone' ] ) );
	} else {
		delete_post_meta( $post_id, 'booking_phone' );
	}

	if( isset( $_POST[ 'booking_email' ] ) ) {
		update_post_meta( $post_id, 'booking_email', sanitize_text_field( $_POST[ 'booking_email' ] ) );
	} else {
		delete_post_meta( $post_id, 'booking_email' );
	}

	if( isset( $_POST[ 'booking_services' ] ) ) {
		update_post_meta( $post_id, 'booking_services', sanitize_text_field( $_POST[ 'booking_services' ] ) );
	} else {
		delete_post_meta( $post_id, 'booking_services' );
	}

	if( isset( $_POST[ 'booking_slots' ] ) ) {
		update_post_meta( $post_id, 'booking_slots', sanitize_text_field( $_POST[ 'booking_slots' ] ) );
	} else {
		delete_post_meta( $post_id, 'booking_slots' );
	}

	if( isset( $_POST[ 'booking_status' ] ) ) {
		update_post_meta( $post_id, 'booking_status', sanitize_text_field( $_POST[ 'booking_status' ] ) );
	} else {
		delete_post_meta( $post_id, 'booking_status' );
	}
	return $post_id;
}