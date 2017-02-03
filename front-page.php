<!DOCTYPE html>
<html id="back-to-top" <?php language_attributes();?>>
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
    <?php wp_head();?> <!-- you need this if you want use a third part plugin for example -->
    <style>

        :root{
            --main-color: <?php echo get_theme_mod('main_color', '#428bca'); ?> ;
            --link-color: <?php echo get_theme_mod('link_color', '#428bca'); ?> ;
            --link-color-hover: <?php echo get_theme_mod('link_color_hover', '#23527C'); ?> ;
            --footer-callout-color: <?php echo get_theme_mod('callout_box_color', '#B1D7F1'); ?> ;
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
                 <?php if(function_exists('the_custom_logo')) : ?>
                    <a class="custom-logo" href="<?php echo home_url(); ?>"><?php the_custom_logo();?></a>
                <?php endif; ?>

                <?php
                     wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             =>  2,
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
               <div class="col-md-1 center-boxes"><!-- white column space --></div>
                <div class="col-md-3 box">
                    <p class="text-center"><i class="fa <?php echo get_theme_mod('icon_code_box_1', 'fa-user'); ?>"></i></p>
                    <h2><?php echo get_theme_mod('title_box_1', 'Box One'); ?></h2>
                    <p><?php echo get_theme_mod('text_box_1', 'Lorem ipsum dolor sit amet.'); ?></p>
                    <a class="btn btn-primary" href="<?php echo get_page_link(get_theme_mod('buttonURL_box_1', '#')); ?>">
                    <?php echo get_theme_mod('button_text_box_1', 'Go to page'); ?></a>
                </div>
                <div class="col-md-3 box">
                    <p class="text-center"><i class="fa <?php echo get_theme_mod('icon_code_box_2', 'fa-calendar-o') ?>"></i></p>
                    <h2><?php echo get_theme_mod('title_box_2', 'Box Two'); ?></h2>
                    <p><?php echo get_theme_mod('text_box_2', 'Lorem ipsum dolor sit amet.'); ?></p>
                    <a class="btn btn-primary" href="<?php echo get_page_link( get_theme_mod('buttonURL_box_2') ); ?>">
                    <?php echo get_theme_mod('button_text_box_2', 'Go to page'); ?></a>
                </div>
                <div class="col-md-3 box">
                    <p class="text-center"><i class="fa <?php echo get_theme_mod('icon_code_box_3', 'fa-pie-chart') ?>"></i></p>
                    <h2><?php echo get_theme_mod('title_box_3', 'Box Three'); ?></h2>
                    <p><?php echo get_theme_mod('text_box_3', 'Lorem ipsum dolor sit amet.'); ?></p>
                    <a class="btn btn-primary" href="<?php echo get_page_link( get_theme_mod('buttonURL_box_3') ); ?>">
                    <?php echo get_theme_mod('button_text_box_3', 'Go to page'); ?></a>
                </div>
           </div><!-- ./row -->
       </div><!-- ./container -->
    </section><!-- ./boxes -->


    <section class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                        // the query
                        $the_query = new WP_Query( array(
                            'category_name' => 'news',
                            'posts_per_page' => 3,
                        ) ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="col-md-4">
                                <?php if(has_post_thumbnail( )): ?>
                                    <div class="post-thumb-news">
                                        <?php the_post_thumbnail('news-thumb'); ?> <!-- call specific thumb format in setup -->
                                    </div><!-- ./post-thumb-news -->
                                <?php endif; ?>
                                <div class="latest-new-article">
                                    <h3 class=""><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
                                </div>
                            </div><!-- ./col-md-4 --> 
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php __('No latest News Found'); ?></p>
                    <?php endif; ?>  
                </div><!-- ./col-md-12 -->
            </div><!-- ./row -->
        </div><!-- ./container -->
    </section><!-- .latest-news -->

   <?php if(get_theme_mod( 'head_display' ) == 'Yes'): ?>
   
   <section class="callout">
       <div class="container">
           <div class="row">
               <div class="col-md-10 col-md-push-1 callout-div">
               <div class="media-object">
                    <img class="media-object-img img-responsive" src="<?php echo wp_get_attachment_url(get_theme_mod( 'load_callout_image')); ?>" alt="">
                    <h3 class="media-object-heading"><?php echo get_theme_mod('head_title', 'Insert head title here'); ?></h3>
                    <p class="media-object-article"><?php echo get_theme_mod('head_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, repellat.'); ?></p>
                </div><!-- ./media-object -->
               </div><!-- col-md-10 col-md-push-1 callout-div -->
           </div><!-- ./row -->
       </div><!-- ./container -->
   </section>
   <?php endif; ?>

<footer class="blog-footer">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo( 'name' ) ?> | <?php bloginfo( 'description' ) ?><p>
        </p>
         <ul class="list-unstyled list-inline">
            <li><a href="<?php echo get_theme_mod( 'facebook_profile_url', '#'); ?>" target="_blank"><i class="fa fa-facebook-official"></i> Facebook</a></li>
            <li><a href="<?php echo get_theme_mod( 'twitter_profile_url', '#'); ?>" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
        </ul>
        <div class="text-right back-top"><a href="#back-to-top">Back to top ^ </i></a></div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>