<?php 

function wpb_customizer_register_style($wp_customize){
    
    /* Site Colors
    -------------------------------------------------------- */
        $wp_customize->add_section('style', array(
            'title'         =>__('Style', 'wpbootstrap'),
            'priority'      => 120
        ));

        //main color
        $wp_customize->add_setting('main_color', array(
            'default'       => '#428bca',
            'transport'     => 'refresh'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_colors', array(
            'label'     => __('Main Color', 'wpbootstrap'),
            'section'   => 'style',
            'settings'  => 'main_color'
        )));
}

add_action( 'customize_register', 'wpb_customizer_register_style' );