<?php
/**
 * The file includes the declaring taxonomies's code
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Softkey_Marketing
 * @author dmugi99 <https://gist.github.com/dmugi99>
 */

function softkeymkt_register_my_taxes() {

	/**
	 * Taxonomy: Booking Times.
	 */

	$labels = [
		"name" => __( "Booking Times", "softkey-marketing" ),
		"singular_name" => __( "Booking Time", "softkey-marketing" ),
	];

	
	$args = [
		"label" => __( "Booking Times", "softkey-marketing" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'booking_time', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "booking_time",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "booking_time", [ "booking" ], $args );

	/**
	 * Taxonomy: Booking Services.
	 */

	$labels = [
		"name" => __( "Booking Services", "softkey-marketing" ),
		"singular_name" => __( "Booking Service", "softkey-marketing" ),
	];

	
	$args = [
		"label" => __( "Booking Services", "softkey-marketing" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'booking_services', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "booking_services",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "booking_services", [ "booking" ], $args );
}
add_action( 'init', 'softkeymkt_register_my_taxes' );

/**
 * Taxonomy: Booking Services - Price input.
 */

add_action( 'booking_services_add_form_fields', 'softkeymkt_add_term_booking_services_fields' );
function softkeymkt_add_term_booking_services_fields( $taxonomy ) {
	echo '<div class="form-field">
	<label for="softkeymkt-booking_service_price">Service price</label>
	<input type="text" name="softkeymkt-booking_service_price" id="softkeymkt-booking_service_price" />
	<p>Field description may go here.</p>
	</div>';
}

add_action( 'booking_services_edit_form_fields', 'softkeymkt_edit_term_booking_services_fields', 10, 2 );
function softkeymkt_edit_term_booking_services_fields( $term, $taxonomy ) {
	$value = get_term_meta( $term->term_id, 'softkeymkt-booking_service_price', true );
	
	echo '<tr class="form-field">
	<th>
		<label for="softkeymkt-booking_service_price">Service price</label>
	</th>
	<td>
		<input name="softkeymkt-booking_service_price" id="softkeymkt-booking_service_price" type="text" value="' . esc_attr( $value ) .'" />
		<p class="description">Field description may go here.</p>
	</td>
	</tr>';
}

add_action( 'created_post_tag', 'softkeymkt_save_term_booking_services_fields' );
add_action( 'edited_post_tag', 'softkeymkt_save_term_booking_services_fields' );
function softkeymkt_save_term_booking_services_fields( $term_id ) {
	update_term_meta(
		$term_id,
		'softkeymkt-booking_service_price',
		sanitize_text_field( $_POST[ 'softkeymkt-booking_service_price' ] )
	);
}

/**
 * Taxonomy: Booking Times - Hour input & Slot input.
 */

add_action( 'booking_time_add_form_fields', 'softkeymkt_add_term_booking_time_fields' );
function softkeymkt_add_term_booking_time_fields( $taxonomy ) {
	$fields = '<div class="form-field">
	<label for="softkeymkt-booking_time_hour">Hour</label>
	<input type="number" min="0" max="24" step="0.5" name="softkeymkt-booking_time_hour" id="softkeymkt-booking_time_hour" />
	<p>Field description may go here.</p>
	</div>';
	$fields .= '<div class="form-field">
	<label for="softkeymkt-booking_time_slots">Slots</label>
	<input  type="number" min="0" max="999" name="softkeymkt-booking_time_slots" id="softkeymkt-booking_time_slots" />
	<p>Field description may go here.</p>
	</div>';

	echo $fields;
}

add_action( 'booking_time_edit_form_fields', 'softkeymkt_edit_term_booking_time_fields', 10, 2 );
function softkeymkt_edit_term_booking_time_fields( $term, $taxonomy ) {
	$term_meta_array = array(
		'softkeymkt-booking_time_hour', 'softkeymkt-booking_time_slots'
	);
	foreach ( $term_meta_array as $term_meta ) {
		$value = get_term_meta( $term->term_id, $term_meta, true );
		$field_type = 'number';
		if( $field_type == 'number' ) {
			$min = 0;
			$max = 24;
			$step = 1;
			if( $term_meta == 'softkeymkt-booking_time_hour' ) {
				$step = 0.5;
			}
			$field_atts = ' min="'. $min .'" max="'. $max .'" step="'. $step .'"';
		}
	
		$fields = '<tr class="form-field">
		<th>
			<label for="'. $term_meta .'">Hour</label>
		</th>
		<td>
			<input name="'. $term_meta .'" id="'. $term_meta .'"  type="'. $field_type .'"'. $field_atts .' value="' . esc_attr( $value ) .'" />
			<p class="description">Field description may go here.</p>
		</td>
		</tr>';
		
		echo $fields;
	}
}

add_action( 'created_post_tag', 'softkeymkt_save_term_booking_time_fields' );
add_action( 'edited_post_tag', 'softkeymkt_save_term_booking_time_fields' );
function softkeymkt_save_term_booking_time_fields( $term_id ) {
	$term_meta_array = array(
		'softkeymkt-booking_time_hour', 'softkeymkt-booking_time_slots'
	);
	foreach ( $term_meta_array as $term_meta ) {
		update_term_meta(
			$term_id,
			$term_meta,
			sanitize_text_field( $_POST[ $term_meta ] )
		);
	
	}
}