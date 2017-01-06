<?php
    //Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    //Theme Support
    function wpb_theme_setup() {

        //Enable featured Image
        add_theme_support( 'post-thumbnails' );

        //Nav Menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'THEMENAME' ),
        ) );

        //Post Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'quote'));
        
    }

    add_action( 'after_setup_theme', 'wpb_theme_setup' );


    //Excerpt Length Control
    function wpb_set_excerpt_lenght() {
        return 45;
    }

    add_filter( 'excerpt_length', 'wpb_set_excerpt_lenght' );

    //widget Location

    function wpb_init_widgets($id) {

        register_sidebar(array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '<h4>'
        ));

        register_sidebar(array(
            'name'          => 'Box1',
            'id'            => 'box1',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '<h3>'
        ));

        register_sidebar(array(
            'name'          => 'Box2',
            'id'            => 'box2',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '<h3>'
        ));

        register_sidebar(array(
            'name'          => 'Box3',
            'id'            => 'box3',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '<h3>'
        ));

    }

    add_action('widgets_init', 'wpb_init_widgets');


    //Customizer file
    require get_template_directory(). '/inc/customizer.php';