<?php

    function bigchungus_theme_support() {
        add_theme_support('title-tag');
    }
    
    add_action('after_setup_theme', 'bigchungus_theme_support');

    function bigchungus_menus() {
        $locations = array(
            'primary' => "Desktop Top Navigation",
        );

        register_nav_menus($locations);
    }

    add_action('init', 'bigchungus_menus');

    function bigchungus_register_styles(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('bigchungus-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    }

    add_action('wp_enqueue_scripts', 'bigchungus_register_styles');

    

?>