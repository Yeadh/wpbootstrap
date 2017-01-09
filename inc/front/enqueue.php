<?php

function wpb_enqueue(){

    wp_register_style('wpb_boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style( 'wpb_boostrap' );
    wp_enqueue_style( 'style' );
}