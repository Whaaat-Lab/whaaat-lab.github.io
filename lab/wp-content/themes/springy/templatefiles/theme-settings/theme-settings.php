<?php
/* Theme Options Panel */
	    $wp_customize->add_panel( 'springy_panel', array(
	        'priority' => 30,
	        'capability' => 'edit_theme_options',
	        'title' => __( 'Springy Theme Options', 'springy' ),
) );

/* Customizer Options */
require get_template_directory() . '/templatefiles/theme-settings/header-options.php';
require get_template_directory() . '/templatefiles/theme-settings/home-page-options.php';
require get_template_directory() . '/templatefiles/theme-settings/color-options.php';
require get_template_directory() . '/templatefiles/theme-settings/slider-options.php';
require get_template_directory() . '/templatefiles/theme-settings/boxes-options.php';
require get_template_directory() . '/templatefiles/theme-settings/blog-page-options.php';
require get_template_directory() . '/templatefiles/theme-settings/single-page-options.php';
require get_template_directory() . '/templatefiles/theme-settings/sticky-sidebar-options.php';
require get_template_directory() . '/templatefiles/theme-settings/footer-options.php';
require get_template_directory() . '/templatefiles/theme-settings/breadcrumb-options.php';