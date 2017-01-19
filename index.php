<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-8 blog-main">
        
        <!-- Quick post if you are signed-in as Administrator -->
        <?php if(current_user_can( 'administrator' )): ?>
            <?php if(get_theme_mod('quick_post') == 'Yes') : ?>
                <div class="admin-quick-add form-group">
                    <h3>Quick Add Post</h3>
                    <input type="text" class="form-control quick-add" name="title" placeholder="Insert title">
                    <textarea name="content" class="form-control quick-add" rows="5" placeholder="Insert content"></textarea>
                    <button id="quick-add-button" class="btn btn-default">Create Post</button>
                </div>
                <div id="status-message"></div>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(have_posts()): ?>
        <?php while ( have_posts() ) : the_post(); ?>
           <?php get_template_part( 'content', get_post_format()); ?> <!-- take post's content from content.php -->
        <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

        </div><!-- /.blog-main -->
        
<?php get_sidebar(); ?>
<?php get_footer( ) ?>