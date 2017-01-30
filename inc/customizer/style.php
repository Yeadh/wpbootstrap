<?php 

function wpb_customizer_register_style($wp_customize){
    
    /* Site Colors
    -------------------------------------------------------- */
        $wp_customize->add_section('style', array(
            'title'         =>__('Site Colors', 'wpbootstrap'),
            'priority'      => 125
        ));

        //main color
        $wp_customize->add_setting('main_color', array(
            'default'       => '#428bca',
            'transport'     => 'refresh'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_color_control', array(
            'label'     => __('Main Color', 'wpbootstrap'),
            'section'   => 'style',
            'settings'  => 'main_color'
        )));

        //links color
        $wp_customize->add_setting('link_color', array(
            'default'       => '#428bca',
            'transport'     => 'refresh'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color_control', array(
            'label'     => __('Link Color', 'wpbootstrap'),
            'section'   => 'style',
            'settings'  => 'link_color'
        )));

        //link color
        $wp_customize->add_setting('link_color_hover', array(
            'default'       => '#23527C',
            'transport'     => 'refresh'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color_hover_control', array(
            'label'     => __('Link hover Color', 'wpbootstrap'),
            'section'   => 'style',
            'settings'  => 'link_color_hover'
        )));
}

add_action( 'customize_register', 'wpb_customizer_register_style' );