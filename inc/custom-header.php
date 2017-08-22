<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package odyssey
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses odyssey_header_style()
 */
function odyssey_custom_header_setup() {
	$default = get_template_directory_uri() . '/img/default-header.jpg';
	// echo $default;
	add_theme_support( 'custom-header', apply_filters( 'odyssey_custom_header_args', array(
		'default-image'          => "$default",
		'default-color'          => 'f0f0f0',
		'default-text-color'     => 'ffffff',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'flex-width'             => true,
		'wp-head-callback'       => 'odyssey_header_style',
	) ) );
	register_default_headers( array(
		'default-image' => array(
		'url'           => get_stylesheet_directory_uri() . '/img/default-header.jpg',
		'thumbnail_url' => get_stylesheet_directory_uri() . '/img/default-header.jpg',
		'description'   => __( 'Default Header Image', 'odyssey' )
		),
	) );
}
add_action( 'after_setup_theme', 'odyssey_custom_header_setup' );

if ( ! function_exists( 'odyssey_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see odyssey_custom_header_setup().
 */
function odyssey_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
	 */
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description,
		.subheading,
		.headline,
		.site-heading hr.small {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-heading h1,
		.site-heading .subheading,
		.intro-header .post-heading,
		.intro-header .post-heading .meta a {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
