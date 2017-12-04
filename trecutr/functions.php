<?php
    //enqueue parent theme's stylesheet
    add_action( 'wp_enqueue_scripts', 'divi_enqueue_styles' );
    function divi_enqueue_styles() {
        $parent_style = 'divi-style';

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'acten-styles',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }
    
    //enqueue scripts
    add_action( 'wp_enqueue_scripts', 'trecutr_enqueue_scripts' );
    function trecutr_enqueue_scripts() {
        wp_enqueue_script('trecutr_script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'),'1.1', true);
    }

    function trecutr_enqueue_styles() {
        wp_enqueue_style( 'trecutr-menu-style', get_stylesheet_directory_uri() . '/css/menu.css' );
    }
    add_action( 'wp_enqueue_scripts', 'trecutr_enqueue_styles' );
