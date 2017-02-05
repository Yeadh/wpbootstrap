<?php

//set up

/* Includes 
-------------------------------------------------------- */ 

// general includes
    require get_template_directory().'/inc/setup.php';
    require get_template_directory().'/inc/activate.php';
    require get_template_directory().'/inc/widgets.php';
    require get_template_directory().'/inc/front/enqueue.php';
    require get_template_directory().'/inc/front/excerpt.php';
    require get_template_directory().'/inc/front/custom-logo.php';

// includes for customizer
    require get_template_directory().'/inc/customizer/boxes.php';
    require get_template_directory().'/inc/customizer/showcase.php';
    require get_template_directory().'/inc/customizer/social-networks.php';
    require get_template_directory().'/inc/customizer/style.php';
    require get_template_directory().'/inc/customizer/footer-callout.php';
    require get_template_directory().'/inc/customizer/admin-panel.php';


//third part includes
    require('wp_bootstrap_navwalker.php');//Register Nav Walker class_alias

//Action & Filter Hooks
    // Actions
    add_action( 'after_setup_theme', 'wpb_setup_theme' );
    add_action( 'after_setup_theme', 'wpb_activate' );
    add_action( 'after_setup_theme', 'custom_logo_setup' );    
    add_action( 'widgets_init', 'wpb_init_widgets');
    add_action( 'wp_enqueue_scripts', 'wpb_enqueue' );


    // Filters
    add_filter( 'excerpt_length', 'wpb_set_excerpt_lenght' );
 

//Shortcuts

//Theme Support
    
//widget Location
    


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