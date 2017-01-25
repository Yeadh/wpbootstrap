<?php 

function wpb_customizer_register_admin_panel($wp_customize){
    
    /* Admin Option Panel
    -------------------------------------------------------- */
     $wp_customize->add_section('admin_option', array(
            'title'         => __('Admin Options Panel', 'wpbootstrap'),
            'description'   => sprintf(__('Options for Admin', 'wpbootstrap')),
            'priority'      => 110
        ));
    //display section?
        $wp_customize->add_setting('quick_post', array(
            'default'   => 'No',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'quick_post_control', array(
            'label'     => __('Display Blog Quick Post section?', 'wpbootstrap'),
            'section'   => 'admin_option',
            'settings'  => 'quick_post',
            'type'      => 'select',
            'choices'   => array('No' => 'No', 'Yes' => 'Yes')
        )));
}

add_action( 'customize_register', 'wpb_customizer_register_admin_panel' );