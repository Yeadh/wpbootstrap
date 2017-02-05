<?php

function wpb_enqueue(){

//Style and fonts
    wp_register_style('hb_boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('hb_animate_css', get_template_directory_uri() . '/assets/css/animate.css');
    wp_register_style('hb_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_register_style('hb_main_style', get_template_directory_uri() . '/css/main.css');

    wp_enqueue_style( 'hb_boostrap' );
    wp_enqueue_style( 'hb_animate_css' );
    wp_enqueue_style( 'hb_fontawesome' );
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'hb_main_style' );


//Javascript
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', NULL, false, true );
    wp_register_script( 'hb_boostrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_register_script( 'hb_main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'hb_boostrap' );
    wp_enqueue_script( 'hb_main_js' );

}