<?php if(!is_front_page()) : ?>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php if(is_active_sidebar('sidebar')): ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div><!-- /.blog-sidebar -->
<?php endif; ?>
        </div><!-- /.row -->
</div><!-- /.container -->

<footer class="blog-footer">
       
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo( 'name' ) ?> | <?php bloginfo( 'description' ) ?><p>
        </p>
         <ul class="list-unstyled list-inline">
            <li><a href="<?php echo get_theme_mod( 'facebook_profile_url', '#'); ?>" target="_blank"><i class="fa fa-facebook-official"></i> Facebook</a></li>
            <li><a href="<?php echo get_theme_mod( 'twitter_profile_url', '#'); ?>" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
        </ul>
        <div class="text-right back-top"><a href="#">Back to top</a></div>
        
    </footer>
    <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/bootstrap.min.js"></script>
</body>

</html>