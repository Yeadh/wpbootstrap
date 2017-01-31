<?php

    function wpb_customizer_footer_callout($wp_customize){

    /* HomePage Callout
    -------------------------------------------------------- */ 
        $wp_customize->add_section('callout', array(
            'title'     => __('Footer Callout', 'wpbootstrap'),
            'priority'  => 140
        ));
        //display section?
        $wp_customize->add_setting('head_display', array(
            'default'   => 'No',
            'priority'  => 1
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'head_display_control', array(
            'label'     => __('Display this section?', 'wpbootstrap'),
            'section'   => 'callout',
            'settings'  => 'head_display',
            'type'      => 'select',
            'choices'   => array('No' => 'No', 'Yes' => 'Yes')
        )));

        //box color
        $wp_customize->add_setting('callout_box_color', array(
            'default'       => '#B1D7F1',
            'transport'     => 'refresh',
            'priority'      => 2
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'callout_box_color_control', array(
            'label'     => __('Box Color', 'wpbootstrap'),
            'section'   => 'callout',
            'settings'  => 'callout_box_color'
        )));
        //Load Image
        $wp_customize->add_setting('load_callout_image', array(
            // 'default'   => 'Load image',
            'default'   => get_bloginfo('template_directory').'/img/callout.jpg', 'wpbootstrap',
            'priority'  => 3
        ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'load_callout_image_control', array(
            'label'     => __('Upload an image', 'wpbootstrap'),
            'section'   => 'callout',
            'settings'  => 'load_callout_image',
            'width'     => 300,
            'height'    => 200
        )));

        
        //Head title
        $wp_customize->add_setting('head_title', array(
            'default'   => 'Insert callout title here',
            'priority'  => 4
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'head_title_control', array(
            'label'     => __('Title', 'wpbootstrap'),
            'section'   => 'callout',
            'settings'  => 'head_title'
        )));
        
        //Head text
        $wp_customize->add_setting('head_text', array(
            'default'   => 'Insert text for callout here',
            'priority'  => 5
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'head_text_control', array(
            'label'     => __('Text', 'wpbootstrap'),
            'section'   => 'callout',
            'settings'  => 'head_text',
            'type'      => 'textarea'
        )));
    }

    
add_action( 'customize_register', 'wpb_customizer_footer_callout' );