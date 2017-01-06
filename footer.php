        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php if(is_active_sidebar('sidebar')): ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div><!-- /.blog-sidebar -->
        </div><!-- /.row -->
</div><!-- /.container -->

<footer class="blog-footer">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo( 'name' ) ?> | <?php bloginfo( 'description' ) ?><p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/bootstrap.min.js"></script>
</body>

</html>