<?php

function wpb_enqueue(){

//Style and fonts
    wp_register_style('wpb_boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style( 'wpb_boostrap' );
    wp_enqueue_style( 'style' );


//Javascript
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', NULL, false, true );
    wp_register_script( 'wpb_boostrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_register_script( 'wpb_main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'wpb_boostrap' );
    wp_enqueue_script( 'wpb_main_js' );

}