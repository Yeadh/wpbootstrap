<?php

function wpb_activate() {
  if( version_compare( get_bloginfo('version'), '4.2', '<') ){
    wp_die( __('You must have a minimum version of 4.2 to use this theme.') );
  }
}