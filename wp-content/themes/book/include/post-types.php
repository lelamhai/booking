<?php
function softkeymkt_register_my_cpts() {

	/**
	 * Post Type: Booking.
	 */

	$labels = [
		"name" => __( "Booking", "softkey-marketing" ),
		"singular_name" => __( "Booking", "softkey-marketing" ),
	];

	$args = [
		"label" => __( "Booking", "softkey-marketing" ),
		"labels" => $labels,
		"description" => "Stores all the booking order that user book the slot",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "booking", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "author", "post-formats" ],
		"taxonomies" => [ "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "booking", $args );
}

add_action( 'init', 'softkeymkt_register_my_cpts' );

add_action( 'add_meta_boxes_booking', 'softkeymkt_add_metabox' );
// or add_action( 'admin_menu', 'softkeymkt_add_metabox' );
// or use this for all post type add_action( 'add_meta_boxes', 'softkeymkt_add_metabox' );

function softkeymkt_add_metabox() {

	add_meta_box(
		'softkeymkt_metabox', // metabox ID
		'Booking fields', // title
		'softkeymkt_metabox_callback', // callback function
		'booking', // post type or post types in array
		'normal', // position (normal, side, advanced)
		'default' // priority (default, low, high, core)
	);

}

function softkeymkt_metabox_callback( $post ) {

	$booking_fullname = get_post_meta( $post->ID, 'booking_fullname', true );
	$booking_phone = get_post_meta( $post->ID, 'booking_phone', true );
	$booking_email = get_post_meta( $post->ID, 'booking_email', true );
	//$dropdown_example = get_post_meta( $post->ID, 'dropdown_example', true );

	// nonce, actually I think it is not necessary here
	wp_nonce_field( 'bookingnonce', '_softkeymktnonce' );

	$metabox = '<table class="form-table">
		<tbody>';
	$metabox .= '<tr>
				<th><label for="booking_fullname">Booking Fullname</label></th>
				<td><input type="text" id="booking_fullname" name="booking_fullname" value="' . esc_attr( $booking_fullname ) . '" class="regular-text"></td>
			</tr>';
	$metabox .= '<tr>
				<th><label for="booking_phone">Booking Phone</label></th>
				<td><input type="text" id="booking_phone" name="booking_phone" value="' . esc_attr( $booking_phone ) . '" class="regular-text"></td>
			</tr>';
	$metabox .= '<tr>
				<th><label for="booking_email">Booking Email</label></th>
				<td><input type="email" id="booking_email" name="booking_email" value="' . esc_attr( $booking_email ) . '" class="regular-text"></td>
			</tr>';
	/*$metabox .= '<tr>
				<th><label for="seo_tobots">SEO robots</label></th>
				<td>
					<select id="seo_robots" name="seo_robots">
						<option value="">Select...</option>
						<option value="index,follow"' . selected( 'index,follow', $seo_robots, false ) . '>Show for search engines</option>
						<option value="noindex,nofollow"' . selected( 'noindex,nofollow', $seo_robots, false ) . '>Hide for search engines</option>
					</select>
				</td>
			</tr>';*/
	$metabox .= '</tbody>
	</table>';
	echo $metabox;

}

add_action( 'save_post_booking', 'softkeymkt_save_meta', 10, 2 );
// or use this for all post type add_action( 'save_post', 'softkeymkt_save_meta', 10, 2 ); 

function softkeymkt_save_meta( $post_id, $post ) {

	// nonce check
	if ( ! isset( $_POST[ '_softkeymktnonce' ] ) || ! wp_verify_nonce( $_POST[ '_softkeymktnonce' ], 'bookingnonce' ) ) {
		return $post_id;
	}

	// check current user permissions
	$post_type = get_post_type_object( $post->post_type );

	if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
		return $post_id;
	}

	// Do not save the data if autosave
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return $post_id;
	}

	// define your own post type here
	if( 'page' !== $post->post_type ) {
		return $post_id;
	}

	if( isset( $_POST[ 'booking_fullname' ] ) ) {
		update_post_meta( $post_id, 'booking_fullname', sanitize_text_field( $_POST[ 'booking_fullname' ] ) );
	} else {
		delete_post_meta( $post_id, 'booking_fullname' );
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

	// if( isset( $_POST[ 'seo_robots' ] ) ) {
	// 	update_post_meta( $post_id, 'seo_robots', sanitize_text_field( $_POST[ 'seo_robots' ] ) );
	// } else {
	// 	delete_post_meta( $post_id, 'seo_robots' );
	// }

	return $post_id;

}