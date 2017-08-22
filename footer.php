<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package odyssey
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( 'https://shubhampandey.in/odyssey' );?>" rel="designer">odyssey</a>
			<span>Powered by</span>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'odyssey' ) ); ?>"><?php printf( esc_html( 'WordPress' ) ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
