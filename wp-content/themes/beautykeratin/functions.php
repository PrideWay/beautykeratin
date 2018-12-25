<?php

function get_version(){
    return '1.0.0';
}

function enque_my_styles() {

    wp_enqueue_style( 'wp_beautykeratin', get_stylesheet_uri(), array(), get_version() );

}

add_action( 'wp_enqueue_scripts', 'enque_my_styles' );

/*if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}*/

function theme_setup(){
    register_nav_menus( array(
        'top'    => __( 'top_menu', 'beautykeratin' ),
    ) );



}

add_action( 'after_setup_theme', 'theme_setup' );

// eof