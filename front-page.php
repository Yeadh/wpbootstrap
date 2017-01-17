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
    <link href="<?php bloginfo('template_url');?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head();?> <!-- you need this if you want use a third part plugin for example -->
    <style>

        :root{
            --main-color: <?php echo get_theme_mod('main_color', '#428bca'); ?> ;
        }

        .showcase {
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
            background-size: cover;
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
   <section class="showcase">
       <div class="container">
           <h1><?php echo get_theme_mod( 'showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
           <p><?php echo get_theme_mod( 'showcase_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?></p>
           <a href="<?php echo get_theme_mod( 'button_url', '#'); ?>">
                <div class="btn btn-primary btn-lg"><?php echo get_theme_mod( 'button_text', 'Get Started'); ?></div>
           </a>
       </div>
   </section>

   <section class="boxes">
       <div class="container">
           <div class="row">
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box1')) : ?>
                        <?php dynamic_sidebar( 'box1' ) ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box2')) : ?>
                        <?php dynamic_sidebar( 'box2' ) ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box3')) : ?>
                        <?php dynamic_sidebar( 'box3' ) ?>
                    <?php endif; ?>
                </div>
           </div>
       </div>
   </section>
   <section class="callout">
       <div class="container">
           <div class="row">
               <div class="col-md-10 col-md-push-1 callout-div">
                   <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="http://placekitten.com/g/300/200" alt=""></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo get_theme_mod('head_title', 'Insert head title here'); ?></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vel.</p>
                        </div>
                    </div>
               </div>
           </div>
       </div>
   </section>

<footer class="blog-footer">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo( 'name' ) ?> | <?php bloginfo( 'description' ) ?><p>
        </p>
         <ul class="list-unstyled list-inline">
            <li><a href="<?php echo get_theme_mod( 'facebook_profile_url', '#'); ?>" target="_blank"><i class="fa fa-facebook-official"></i> Facebook</a></li>
            <li><a href="<?php echo get_theme_mod( 'twitter_profile_url', '#'); ?>" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
        </ul>
        <div class="text-right back-top"><a href="#">Back to top ^ </i></a></div>
    </footer>
    <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>