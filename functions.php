<?php
    //Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    //Theme Support
    function wpb_theme_setup() {
        //Nav Menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'THEMENAME' ),
        ) );
    }

    add_action( 'after_setup_theme', 'wpb_theme_setup' );


    //Excerpt Length Control
    function wpb_set_excerpt_lenght() {
        return 45;
    }

    add_filter( 'excerpt_length', 'wpb_set_excerpt_lenght' );