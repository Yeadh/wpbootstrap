<?php

//set up

/* Includes 
-------------------------------------------------------- */ 
    // general includes
    require get_template_directory().'/inc/front/enqueue.php';

    // customizer require
    require get_template_directory().'/inc/customizer/admin-panel.php';
    require get_template_directory().'/inc/customizer/boxes.php';
    require get_template_directory().'/inc/customizer/showcase.php';
    require get_template_directory().'/inc/customizer/social-networks.php';
    require get_template_directory().'/inc/customizer/style.php';
    require get_template_directory().'/inc/customizer/footer-callout.php';

//Action & Filter Hooks
add_action( 'wp_enqueue_scripts', 'wpb_enqueue' );

//Shortcuts



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



/* Quick post magic data
-------------------------------------------------------- */ 
 function quick_post() {

     wp_localize_script( 'wpb_main_js', 'quickPostData', array(
         'nonce'    => wp_create_nonce( 'wp_rest' ),
         'siteURL'  => get_site_url()
     ));
 }

 add_action( 'wp_enqueue_scripts', 'quick_post' );

 /* Custom metabox
 -------------------------------------------------------- */ 
 function wpb_add_custom_metabox() {
     add_meta_box( 'release_url', 'Release URL', 'wpb_release_callback', 'post', 'side', 'high' );
 }

 add_action( 'add_meta_boxes', 'wpb_add_custom_metabox' );

 function wpb_release_callback(){
     $releaseURL = '<p>GitHub Release URL:</p>';
     $releaseURL.= '<input type="url" placeholder="insert URL">';
     echo $releaseURL;
 }