<?php 

/**
 * Set up a WP-Admin page for managing turning on and off theme features.
 */
function gutenberg_starter_theme_add_options_page() {
	add_theme_page(
		'Theme Options',
		'Theme Options',
		'manage_options',
		'softkey-marketing-options',
		'gutenberg_starter_theme_options_page'
	);

	// Call register settings function
	add_action( 'admin_init', 'gutenberg_starter_theme_options' );
}
add_action( 'admin_menu', 'gutenberg_starter_theme_add_options_page' );


/**
 * Register settings for the WP-Admin page.
 */
function gutenberg_starter_theme_options() {
	register_setting( 'softkey-marketing-options', 'softkey-marketing-align-wide', array( 'default' => 1 ) );
	register_setting( 'softkey-marketing-options', 'softkey-marketing-wp-block-styles', array( 'default' => 1 ) );
	register_setting( 'softkey-marketing-options', 'softkey-marketing-editor-color-palette', array( 'default' => 1 ) );
	register_setting( 'softkey-marketing-options', 'softkey-marketing-dark-mode' );
	register_setting( 'softkey-marketing-options', 'softkey-marketing-responsive-embeds', array( 'default' => 1 ) );
}


/**
 * Build the WP-Admin settings page.
 */
function gutenberg_starter_theme_options_page() { ?>
	<div class="wrap">
	<h1><?php _e('Softkey Marketing Options', 'softkey-marketing'); ?></h1>
	<form method="post" action="options.php">
		<?php settings_fields( 'softkey-marketing-options' ); ?>
		<?php do_settings_sections( 'softkey-marketing-options' ); ?>

			<table class="form-table">
				<tr valign="top">
					<td>
						<label>
							<input name="softkey-marketing-align-wide" type="checkbox" value="1" <?php checked( '1', get_option( 'softkey-marketing-align-wide' ) ); ?> />
							<?php _e( 'Enable wide and full alignments.', 'softkey-marketing' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment"><code>align-wide</code></a>)
						</label>
					</td>
				</tr>
				<tr valign="top">
					<td>
						<label>
							<input name="softkey-marketing-editor-color-palette" type="checkbox" value="1" <?php checked( '1', get_option( 'softkey-marketing-editor-color-palette' ) ); ?> />
							<?php _e( 'Enable a custom theme color palette.', 'softkey-marketing' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes"><code>editor-color-palette</code></a>)
						</label>
					</td>
				</tr>
				<tr valign="top">
					<td>
						<label>
							<input name="softkey-marketing-dark-mode" type="checkbox" value="1" <?php checked( '1', get_option( 'softkey-marketing-dark-mode' ) ); ?> />
							<?php _e( 'Enable a dark theme style.', 'softkey-marketing' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#dark-backgrounds"><code>dark-editor-style</code></a>)
						</label>
					</td>
				</tr>
				<tr valign="top">
					<td>
						<label>
							<input name="softkey-marketing-wp-block-styles" type="checkbox" value="1" <?php checked( '1', get_option( 'softkey-marketing-wp-block-styles' ) ); ?> />
							<?php _e( 'Enable core block styles on the front end.', 'softkey-marketing' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles"><code>wp-block-styles</code></a>)
						</label>
					</td>
				</tr>
				<tr valign="top">
					<td>
						<label>
							<input name="softkey-marketing-responsive-embeds" type="checkbox" value="1" <?php checked( '1', get_option( 'softkey-marketing-responsive-embeds' ) ); ?> />
							<?php _e( 'Enable responsive embedded content.', 'softkey-marketing' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#responsive-embedded-content"><code>responsive-embeds</code></a>)
						</label>
					</td>
				</tr>
			</table>

		<?php submit_button(); ?>
	</form>
	</div>
<?php }


/**
 * Enable alignwide and alignfull support if the softkey-marketing-align-wide setting is active.
 */
function gutenberg_starter_theme_enable_align_wide() {

	if ( get_option( 'softkey-marketing-align-wide', 1 ) == 1 ) {
		
		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
	}
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_enable_align_wide' );


/**
 * Enable custom theme colors if the softkey-marketing-editor-color-palette setting is active.
 */
function gutenberg_starter_theme_enable_editor_color_palette() {
	if ( get_option( 'softkey-marketing-editor-color-palette', 1 ) == 1 ) {
		
		// Add support for a custom color scheme.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Strong Blue', 'softkey-marketing' ),
				'slug'  => 'strong-blue',
				'color' => '#0073aa',
			),
			array(
				'name'  => __( 'Lighter Blue', 'softkey-marketing' ),
				'slug'  => 'lighter-blue',
				'color' => '#229fd8',
			),
			array(
				'name'  => __( 'Very Light Gray', 'softkey-marketing' ),
				'slug'  => 'very-light-gray',
				'color' => '#eee',
			),
			array(
				'name'  => __( 'Very Dark Gray', 'softkey-marketing' ),
				'slug'  => 'very-dark-gray',
				'color' => '#444',
			),
		) );
	}
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_enable_editor_color_palette' );


/**
 * Enable dark mode if softkey-marketing-dark-mode setting is active.
 */
function gutenberg_starter_theme_enable_dark_mode() {
	if ( get_option( 'softkey-marketing-dark-mode' ) == 1 ) {
		
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor-dark.css' );
		
		// Add support for dark styles.
		add_theme_support( 'dark-editor-style' );
	}
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_enable_dark_mode' );


/**
 * Enable dark mode on the front end if softkey-marketing-dark-mode setting is active.
 */
function gutenberg_starter_theme_enable_dark_mode_frontend_styles() {
	if ( get_option( 'softkey-marketing-dark-mode' ) == 1 ) {
		wp_enqueue_style( 'softkey-marketingdark-style', get_template_directory_uri() . '/css/dark-mode.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'gutenberg_starter_theme_enable_dark_mode_frontend_styles' );

/**
 * Enable core block styles support if the softkey-marketing-wp-block-styles setting is active.
 */
function gutenberg_starter_theme_enable_wp_block_styles() {

	if ( get_option( 'softkey-marketing-wp-block-styles', 1 ) == 1 ) {
		
		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_enable_wp_block_styles' );


/**
 * Enable responsive embedded content if the softkey-marketing-responsive-embeds setting is active.
 */
function gutenberg_starter_theme_enable_responsive_embeds() {

	if ( get_option( 'softkey-marketing-responsive-embeds', 1 ) == 1 ) {
		
		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_enable_responsive_embeds' );