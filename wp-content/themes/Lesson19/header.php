<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width">
      <title> <?php bloginfo('name'); ?> </title>
      <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
      <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<?php


?>

        <!-- site-header -->
            <header class="site-header">
                <div class="container">

                    <div class="header-head clearfix">
                        <div class="site-logo clearfix">
                            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/deliver-logo.png" alt="Deliver"></a>
                        </div>
                        <div class="social clearfix">
                            <?php if (is_active_sidebar('social-header')) :?>
                                <div class="header-widget-area">
                                    <?php dynamic_sidebar('social-header'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>


                    <nav class="site-nav clearfix">
                       <?php
                            $args = array(
                                'theme_location' => 'primary'
                            );
                        ?>

                       <?php wp_nav_menu($args); ?>
                    </nav>
                </div>
            </header>
<!-- site-header -->

