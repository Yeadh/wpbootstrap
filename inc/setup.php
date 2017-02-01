<?php


function wpb_setup_theme() {

    //Nav Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'wpbootsrap' ),
    ) );
    
    //Enable featured Image
    add_theme_support( 'post-thumbnails');

    //Custom image for news
    add_image_size( 'news-thumb', 800, 800, true );


    //Enable Post Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'quote'));
        
}
