<?php 
/**
 * Template Name: Portfolio
 *
 * @package WordPress
 * @subpackage wpbootstrap
 * @since wpbootstrao v1.0
 */

?>
<?php get_header( ); ?>
    <div class="row">
        <div class="col-sm-8 blog-main">

        <?php if(have_posts()): ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="blog-post">
                <h2 class="blog-post-title">
                    <?php the_title(); ?>
                </h2>
                <?php the_content(); ?>
                <button id="portfolio-post-btn" class="btn btn-primary btn-sm">Load Portfolio related blog post</button>
                <div id="portfolio-posts-container"></div>
            </div>
            <!-- /.blog-post -->

        <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>

    </div><!-- /.row -->

<?php get_sidebar(); ?>   
<?php get_footer( ) ?>