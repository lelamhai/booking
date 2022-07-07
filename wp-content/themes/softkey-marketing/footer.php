<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Softkey_Marketing
 * @author dmugi99 <https://gist.github.com/dmugi99>
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'softkey-marketing' ) ); ?>"><?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'softkey-marketing' ), 'WordPress' );
		?></a>
		<span class="sep"> | </span>
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %s', 'softkey-marketing' ), '<a href="https://github.com/WordPress/softkey-marketing/">Gutenberg</a>' );
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
