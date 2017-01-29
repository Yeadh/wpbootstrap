<?php

function wpb_init_widgets($id) {

    register_sidebar(array(
        'name'          => __('Sidebar', 'wpbootstrap'),
        'id'            => 'sidebar',
        'description'   => __('Sidebar for theme wpbootstrap', 'wpbootstrap'),
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '<h4>'
    ));

}