<?php

if ( ! function_exists( 'boneless_theme_support' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since My theme name 1.0
 *
 * @return void
 */
function boneless_theme_support() {

    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

}

endif;
add_action( 'after_setup_theme', 'boneless_theme_support' );



/*----------------------------------------------------------------
Enqueue styles
----------------------------------------------------------------*/

if ( ! function_exists( 'boneless_styles' ) ) :

    function boneless_styles(){
        //register stylesheet
        wp_enqueue_style( 'boneless-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
        wp_enqueue_style( 'boneless-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );
    }

endif;
add_action( 'wp_enqueue_scripts', 'boneless_styles' );