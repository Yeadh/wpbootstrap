<?php
function wpb_customizer_navbar($wp_customize) {
   
    $wp_customize->add_section('navbar_brand', array(
            'title'         => __('Navbar brand', 'wpbootstrap'),
            'description'   => sprintf(__('Customize Navbar Brand', 'wpbootstrap')),
            'priority'      => 120
    ));

    //Load Image
        $wp_customize->add_setting('brand_image', array(
            // 'default'   => 'Load image',
            'default'   => get_bloginfo('template_directory').'/img/brand.png', 'wpbootstrap',
            'priority'  => 1
        ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'brand_image_control', array(
            'label'     => __('Upload your logo', 'wpbootstrap'),
            'section'   => 'navbar_brand',
            'settings'  => 'brand_image',
            'height'    => 300
        )));
}

add_action( 'customize_register', 'wpb_customizer_navbar' );