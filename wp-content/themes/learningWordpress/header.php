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




        <!-- site-header -->
            <header class="site-header">
                <div class="container">
                    <div class="site-logo clearfix">
                        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/blogin.png" alt="Blogin"></a>
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

