
        <footer class="site-footer clearfix">

        <div class="container">
            <div class="footer-logo">
                <div class="site-logo clearfix">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/deliver-logo-white.png" alt="Deliver"></a>
                    <?php if (is_active_sidebar('social-footer')) :?>
                        <div class="footer-widget-area clearfix">
                            <?php dynamic_sidebar('social-footer'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum gravida quam quis nunc rutrum placerat.
                    Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.
                </p>
            </div>
            <div class="footer-widgets clearfix">




                <?php if (is_active_sidebar('footer1')) :?>
                    <div class="footer-widget-area-1">
                        <?php dynamic_sidebar('footer1'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer2')) :?>
                    <div class="footer-widget-area-2">
                        <?php dynamic_sidebar('footer2'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer3')) :?>
                    <div class="footer-widget-area-3">
                        <?php dynamic_sidebar('footer3'); ?>
                    </div>
                <?php endif; ?>



             </div>

            <p class="fback-text">
                &copy; <?php echo date('Y'); ?>  Copyright 2013 <a href="<?php echo home_url(); ?>">Deliver</a> . All Rights Reserved.
            </p>
        </div>
        </footer>
 <!-- container </div>-->
<?php wp_footer(); ?>
</body>
</html>

            