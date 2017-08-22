<?php
/**
 * odyssey Theme Customizer
 *
 * @package odyssey
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function odyssey_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting( 'odyssey_header_color' , array(
		'default' => '#696969',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'odyssey_header_color', array(
		'label' => __( 'Header Color' , 'odyssey' ),
		'section'  => 'colors',
		'settings' => 'odyssey_header_color',
	) ) );
	
	$wp_customize->get_setting( 'odyssey_header_color' )->transport = 'postMessage';
}
add_action( 'customize_register', 'odyssey_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function odyssey_customize_preview_js() {
	wp_enqueue_script( 'odyssey_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20170806', true );
}
add_action( 'customize_preview_init', 'odyssey_customize_preview_js' );
