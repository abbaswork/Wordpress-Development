<?php

/* function to add a new section for theme colors */
function bwpy_customizer( $wp_customize ) {

	// add new section
    $wp_customize->add_section( 'bwpy_theme_colors', array(
        'title' => __( 'Theme Colors', 'bwpy' ),
        'priority' => 100,
    ) );
	
    // add color picker setting
    $wp_customize->add_setting( 'link_color', array(
        'default' => '#ff0000'
    ) );
	
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label' => 'Link Color',
        'section' => 'bwpy_theme_colors',
        'settings' => 'link_color',
    ) ) );
}
