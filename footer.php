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

</body>

</html>