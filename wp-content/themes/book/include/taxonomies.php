<?php
//////////////////////////
/* Services */ {
	add_action( 'init', 'services_custom_taxonomy', 0 );
	function services_custom_taxonomy() {
		$labels = array(
			'name' => 'Services',
			'singular_name' => 'Services',
			'menu_name' => 'Services',
			'all_items' => 'Tất Services',
			'parent_item_colon' => 'Services Cha:',
			'new_item_name' => 'Services Mới',
			'add_new_item' => 'Thêm Mới Services',
			'edit_item' => 'Sửa Services',
			'update_item' => 'Cập Nhật Services',
			'search_items' => 'Tìm Kiếm Services',
			'add_or_remove_items' => 'Thêm Hoặc Xóa Services',
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'public' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud' => true,
		);
		register_taxonomy( 'services', 'booking', $args );
	}

	// Remove column for description
	add_filter( 'manage_edit-services_columns', 'techiepress_remove_services_columns' );
	function techiepress_remove_services_columns( $columns ) {
		if($columns['description'])
		{
			unset($columns['slug']);
			unset($columns['posts']);
		}
		$columns['price'] = 'Price';
		return $columns;
	}

	// Create fields to times
	add_action( 'services_add_form_fields', 'techiepress_add_services_fields' );
	function techiepress_add_services_fields() {
		?>
			<div class="form-field">
				<label for="services-price">Price</label>
				<input type="number" name="services-price" id="services-price" value="0" min="0">
			</div>
		<?php	
	}

	// Load slots to the new columns
	add_action( 'manage_services_custom_column', 'techiepress_manage_services_custom_columns', 10, 3 );
	function techiepress_manage_services_custom_columns( $string, $columns, $term_id ) {
		switch ( $columns ) {
			case 'price':
				echo get_term_meta( $term_id, 'services-price', true );
				break;
		}
	}

	// Edit the field to the edit screen.
	add_action( 'services_edit_form_fields', 'techiepress_edit_services_fields', 10, 2 );
	function techiepress_edit_services_fields( $term, $taxonomy ) {
		$value = get_term_meta($term->term_id, 'services-price', true );
		?>
			<tr class="form-field">
				<th scope="row"><label for="services-price">Price</label></th>
				<td><input type="number" name="services-price" id="services-price" value="<?php echo esc_attr( $value ); ?>" min="0">
			</tr>
		<?php
	}

	// Save the field to term meta
	add_action( 'created_services', 'techiepress_created_services_fields' );
	add_action( 'edited_services', 'techiepress_created_services_fields' );
	function techiepress_created_services_fields( $term_id ) {
		update_term_meta( $term_id, 'services-price', sanitize_text_field( $_POST['services-price'] ) );
	}
}



//////////////////////////
/* Times */ {
	add_action( 'init', 'times_custom_taxonomy', 0 );
	function times_custom_taxonomy() {
		$labels = array(
			'name' => 'Times',
			'singular_name' => 'Times',
			'menu_name' => 'Times',
			'all_items' => 'Tất Times',
			'parent_item' => 'Times Cha',
			'parent_item_colon' => 'Times Cha:',
			'new_item_name' => 'Times Mới',
			'add_new_item' => 'Thêm Mới Times',
			'edit_item' => 'Sửa Times',
			'update_item' => 'Cập Nhật Times',
			'search_items' => 'Tìm Kiếm Times',
			'add_or_remove_items' => 'Thêm Hoặc Xóa Times',
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'public' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud' => true,
		);
		register_taxonomy( 'times', 'booking', $args );
	}

	// Remove column for description
	add_filter( 'manage_edit-times_columns', 'techiepress_remove_times_columns' );
	function techiepress_remove_times_columns( $columns ) {
		if($columns['description'])
		{
			unset($columns['description']);
			// unset($columns['posts']);
			unset($columns['slug']);
		}
		$columns['slots'] = 'slots';
		return $columns;
	}

	// Create fields to times 
	add_action( 'times_add_form_fields', 'techiepress_add_times_fields' );
	function techiepress_add_times_fields() {
		?>
			<div class="form-field">
				<label for="times-slots">Slots</label>
				<input type="number" name="times-slots" id="times-slots" value="1" min="1">
			</div>
		<?php
	}


	// Load slots to the new columns
	add_action( 'manage_times_custom_column', 'techiepress_manage_times_custom_columns', 10, 3 );
	function techiepress_manage_times_custom_columns( $string, $columns, $term_id ) {
		switch ( $columns ) {
			case 'slots':
				echo get_term_meta( $term_id, 'times-slots', true );
				break;
		}
	}

	// Edit the field to the edit screen.
	add_action( 'times_edit_form_fields', 'techiepress_edit_times_fields', 10, 2 );
	function techiepress_edit_times_fields( $term, $taxonomy ) {
		$value = get_term_meta($term->term_id, 'times-slots', true );
		?>
			<tr class="form-field">
				<th scope="row"><label for="times-slots">Slots</label></th>
				<td><input type="text" name="times-slots" id="times-slots" value="<?php echo esc_attr( $value ); ?>" min="1">
			</tr>
		<?php
	}

	// Save the field to term meta
	add_action( 'created_times', 'techiepress_created_times_fields' );
	add_action( 'edited_times', 'techiepress_created_times_fields' );
	function techiepress_created_times_fields( $term_id ) {
		update_term_meta( $term_id, 'times-slots', sanitize_text_field( $_POST['times-slots'] ) );
	}
}