<?php
/**
 * Recommended plugins
 *
 * @package Springy 1.0.0
 */

if ( ! function_exists( 'springy_recommended_plugins' ) ) :

    /**
     * Recommend plugin list.
     *
     * @since 1.0.0
     */
    function springy_recommended_plugins() {

        $plugins = array(
            array(
                'name'     => esc_html__( 'Elementor', 'springy' ),
                'slug'     => 'elementor',
                'required' => false,
            ),
            array(
                'name'     => __( 'Classy Addons for Elementor', 'springy' ),
                'slug'     => 'classy-addons-for-elementor',
                'required' => false,
            ),
            array(
                'name'     => __( 'One Click Demo Import', 'springy' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'springy_recommended_plugins' );
