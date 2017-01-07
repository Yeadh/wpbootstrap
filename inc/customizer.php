<?php
    function wpb_customizer_register($wp_customize){

        /* Showcase Section
        -------------------------------------------------------- */ 
        $wp_customize->add_section('showcase', array(
            'title'         => __('Showcase', 'wpbootstrap'),
            'description'   => sprintf(__('Options for showcase', 'wpbootstrap')),
            'priority'      => 130
        ));

        //Showcase Image
        $wp_customize->add_setting('showcase_image', array(
            'default'   => get_bloginfo('template_directory').'/img/showcase.jpg', 'wpbootstrap',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
            'label'     => __('Showcase Image', 'wpbootstrap'),
            'section'   => 'showcase',
            'settings'  => 'showcase_image',
            'priority'  => 1
        )));

        //Showcase heading
        $wp_customize->add_setting('showcase_heading', array(
            'default'   => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_heading', array(
            'label'     => __('Heading', 'wpbootstrap'),
            'section'   => 'showcase',
            'priority'  => 2
        ));

        //Showcase Text
        $wp_customize->add_setting('showcase_text', array(
            'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_text', array(
            'label'     => __('Text', 'wpbootstrap'),
            'section'   => 'showcase',
            'priority'  => 3
        ));

        //Button URL
        $wp_customize->add_setting('button_url', array(
            'default'   => _x('http://www.sitename.com', 'wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('button_url', array(
            'label'     => __('Button URL', 'wpbootstrap'),
            'section'   => 'showcase',
            'priority'  => 4
        ));

        //Button Text
        $wp_customize->add_setting('button_text', array(
            'default'   => _x('Get Started', 'wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('button_text', array(
            'label'     => __('Button Text', 'wpbootstrap'),
            'section'   => 'showcase',
            'priority'  => 5
        ));

        /* Social Networks Section
        -------------------------------------------------------- */ 
        $wp_customize->add_section('social', array(
            'title'         =>__('Social Networks', 'wpbootstrap'),
            'description'   => sprintf(__('Social network profiles','wpbootstrap')),
            'priority'      => 150
        ));

        //facebook
        $wp_customize->add_setting('facebook_profile_url', array(
            'default'   => _x('https://www.facebook.com/profileName', 'wpbootstrap' ),
            'type'      => 'theme_mod'
        ));
        $wp_customize->add_control('facebook_profile_url', array(
            'label'     =>__('Facebook', 'wpbootstrap'),
            'section'   => 'social',
            'priority'  => 1
        ));


        //Twitter
        $wp_customize->add_setting('twitter_profile_url', array(
            'default'   => _x('https://twitter.com/profileName', 'wpbootstrap' ),
            'type'      => 'theme_mod'
        ));
        $wp_customize->add_control('twitter_profile_url', array(
            'label'     =>__('Twitter', 'wpbootstrap'),
            'section'   => 'social',
            'priority'  => 2
        ));


    }
    
    add_action( 'customize_register', 'wpb_customizer_register' );