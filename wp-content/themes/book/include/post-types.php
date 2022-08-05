<?php
add_action('init', 'create_custom_post_type');
function create_custom_post_type()
{
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Books', //Tên post type dạng số nhiều
        'singular_name' => 'Books' //Tên post type dạng số ít
    );

    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng Books', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields',
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'times', 'services' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );

    register_post_type('books', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
}

add_action( 'add_meta_boxes_books', 'add_metabox' );
function add_metabox() {
	add_meta_box(
		'books_metabox', // metabox ID
		'Fields Books', // title
		'books_metabox_callback', // callback function
		'books', // post type or post types in array
		'normal', // position (normal, side, advanced)
		'default' // priority (default, low, high, core)
	);
}

// Show layout
function books_metabox_callback( $post ) {
	$date = get_post_meta( $post->ID, 'booking_date', true );
	$phone = get_post_meta( $post->ID, 'booking_phone', true );
	$services = get_post_meta( $post->ID, 'booking_services', true );
	$status = get_post_meta( $post->ID, 'booking_status', true );
	$slots = get_post_meta( $post->ID, 'booking_slots', true );
	$email = get_post_meta( $post->ID, 'booking_email', true );
	$location = get_post_meta( $post->ID, 'booking_location', true );

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
			<th><label>Location</label></th>
			<td><input type="text" name="booking_location" value="' . esc_attr( $location ) . '" class="regular-text"></td>
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


// Save data
add_action( 'save_post_books', 'softkeymkt_save_meta', 10, 2 );
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

	if( isset( $_POST[ 'booking_location' ] ) ) {
		update_post_meta( $post_id, 'booking_location', sanitize_text_field( $_POST[ 'booking_location' ] ) );
	} else {
		delete_post_meta( $post_id, 'booking_location' );
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