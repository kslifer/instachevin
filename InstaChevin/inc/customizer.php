<?php
/**
 * InstaChevin Theme Customizer
 *
 * @package InstaChevin
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function instachevin_customize_register( $wp_customize ) {
	
	
    // Logo upload
    $wp_customize->add_section( 'instachevin_logo_section' , array(
	    'title'       => __( 'Logo', 'instachevin' ),
	    'priority'    => 30,
	    'description' => __( 'Logo', 'instachevin' ),
	) );
	$wp_customize->add_setting( 'instachevin_logo' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'instachevin_logo', array(
		'label'      => 	__( 'Upload logo to replace the default site name ( 220px wide max )', 'instachevin' ),
		'section'    => 		'instachevin_logo_section',
		'settings'   => 		'instachevin_logo',
	) ) );
	
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'instachevin_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function instachevin_customize_preview_js() {
	wp_enqueue_script( 'instachevin_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'instachevin_customize_preview_js' );
