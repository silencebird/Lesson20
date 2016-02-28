
        <footer class="site-footer clearfix">

            <div class="site-logo clearfix">
                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/flogo.png" alt="Blogin"></a>
            </div>

            <div class="footer-widgets">
                <?php if (is_active_sidebar('footer1')) :?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar('footer1'); ?>
                    </div>
                <?php endif; ?>


            <p class="fback-text">
                &copy; <?php echo date('Y'); ?>  Blogin.com  -  All Rights Reserved  -  Find more free Templates at <a href="Pixelhint.com">Pixelhint.com </a>

            </p>
        </footer>
 <!-- container -->
<?php wp_footer(); ?>
</body>
</html>

            