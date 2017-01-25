<?php

    function wpb_customizer_social_networks($wp_customize) {
    // Section
        $wp_customize->add_section('social', array(
            'title'         =>__('Social Networks', 'wpbootstrap'),
            'description'   => sprintf(__('Social network profiles','wpbootstrap')),
            'priority'      => 135
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

add_action( 'customize_register', 'wpb_customizer_social_networks' );
