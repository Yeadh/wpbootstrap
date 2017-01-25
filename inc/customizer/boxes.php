<?php

    /* Highlight pages boxes
    -------------------------------------------------------- */

    function wpb_customizer_boxes($wp_customize) {
   
    $wp_customize->add_section('highlight_boxes', array(
            'title'         => __('Boxes', 'wpbootstrap'),
            'description'   => sprintf(__('Customize Frontpage Boxes', 'wpbootstrap')),
            'priority'      => 150
    ));

/* ==============================
        BOX1
   ============================== */ 

    //Fontawesome code
    $wp_customize->add_setting('icon_code_box_1', array(
        'default'   => sprintf(__('fa-camera-retro', 'wpbootstrap'))
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'icon_code_box_1_control', array(
        'label'     => __('Font Awesome Icon Name Box 1', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'icon_code_box_1',
        'type'      => 'text',
    )));

    //Box title 
    $wp_customize->add_setting('title_box_1', array(
        'default'   => sprintf(__('TitleBox one', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'title_box_1_control', array(
        'label'     => __('Title', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'title_box_1',
        'type'      => 'text'
        
    )));

    //Box text 
    $wp_customize->add_setting('text_box_1', array(
        'default'   => sprintf(__('Text for box one', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text_box_1_control', array(
        'label'     => __('Text for box one', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'text_box_1',
        'type'      => 'text'
        
    )));

    //Box button text 
    $wp_customize->add_setting('button_text_box_1', array(
        'default'   => sprintf(__('Visit page', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'button_text_box_1_control', array(
        'label'     => __('Text for box one button', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'button_text_box_1',
        'type'      => 'text'
        
    )));

    //Box button url
    $wp_customize->add_setting('buttonURL_box_1');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'buttonURL_box_1_control', array(
        'label'     => __('Choose page', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'buttonURL_box_1',
        'type'      => 'dropdown-pages'
    )));


/* ==============================
        BOX2
   ============================== */ 

    //Fontawesome code
    $wp_customize->add_setting('icon_code_box_2', array(
        'default'   => sprintf(__('fa-camera-retro', 'wpbootstrap'))
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'icon_code_box_2_control', array(
        'label'     => __('Font Awesome Icon Name Box 2', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'icon_code_box_2',
        'type'      => 'text',
    )));

    //Box title 
    $wp_customize->add_setting('title_box_2', array(
        'default'   => sprintf(__('TitleBox two', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'title_box_2_control', array(
        'label'     => __('Title', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'title_box_2',
        'type'      => 'text'
        
    )));

    //Box text 
    $wp_customize->add_setting('text_box_2', array(
        'default'   => sprintf(__('Text for box two', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text_box_2_control', array(
        'label'     => __('Text for box two', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'text_box_2',
        'type'      => 'text'
        
    )));

    //Box button text 
    $wp_customize->add_setting('button_text_box_2', array(
        'default'   => sprintf(__('Visit page', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'button_text_box_2_control', array(
        'label'     => __('Text for box two button', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'button_text_box_2',
        'type'      => 'text'
        
    )));

    //Box button url
    $wp_customize->add_setting('buttonURL_box_2');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'buttonURL_box_2_control', array(
        'label'     => __('Choose page', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'buttonURL_box_2',
        'type'      => 'dropdown-pages'
    )));


/* ==============================
        BOX3
   ============================== */ 

    //Fontawesome code
    $wp_customize->add_setting('icon_code_box_3', array(
        'default'   => sprintf(__('fa-camera-retro', 'wpbootstrap'))
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'icon_code_box_3_control', array(
        'label'     => __('Font Awesome Icon Name Box 3', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'icon_code_box_3',
        'type'      => 'text',
    )));

    //Box title 
    $wp_customize->add_setting('title_box_3', array(
        'default'   => sprintf(__('TitleBox three', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'title_box_3_control', array(
        'label'     => __('Title', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'title_box_3',
        'type'      => 'text'
        
    )));

    //Box text 
    $wp_customize->add_setting('text_box_3', array(
        'default'   => sprintf(__('Text for box two', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text_box_3_control', array(
        'label'     => __('Text for box three', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'text_box_3',
        'type'      => 'text'
        
    )));

    //Box button text 
    $wp_customize->add_setting('button_text_box_3', array(
        'default'   => sprintf(__('Visit page', 'wpbootstrap'))
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'button_text_box_3_control', array(
        'label'     => __('Text for box three button', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'button_text_box_3',
        'type'      => 'text'
        
    )));

    //Box button url
    $wp_customize->add_setting('buttonURL_box_3');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'buttonURL_box_3_control', array(
        'label'     => __('Choose page', 'wpbootstrap'),
        'section'   => 'highlight_boxes',
        'settings'  => 'buttonURL_box_3',
        'type'      => 'dropdown-pages'
    )));
    
}

add_action( 'customize_register', 'wpb_customizer_boxes' );
