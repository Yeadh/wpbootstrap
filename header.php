<!DOCTYPE html>
<html <?php language_attributes( );
?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>
        <?php bloginfo( 'name' ) ?> | 
        <?php is_front_page() ? bloginfo( 'description' ) : wp_title();?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head();?> <!-- you need this if you want use a third part plugin for example -->
    <style>
        :root{
            --main-color: <?php echo get_theme_mod('main_color', '#428bca'); ?> ;
        }
    </style>
</head>
<body>
    <div class="blog-masthead">
        <div class="container custom-container">
            <nav class="blog-nav">
                <button type="button" class="navbar-toggle" data-toggle="collapse"  data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
                <?php
                     wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
            </nav>
            <div class="social-nav text-right">
                <ul class="list-unstyled list-inline">
                    <li><a href="<?php echo get_theme_mod( 'facebook_profile_url', '#'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                    <li><a href="<?php echo get_theme_mod( 'twitter_profile_url', '#'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div><!-- ./social-nav -->
        </div> <!-- ./container -->
    </div> <!-- ./blog-masthead -->
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title"><?php bloginfo( 'name' ) ?></h1>
            <p class="lead blog-description"><?php bloginfo( 'description' ) ?></p>
        </div>