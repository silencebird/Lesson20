<?php

get_header();?>
   <!-- <div class="container">-->

<!-- site content -->
<div class="site-content clearfix">


        <?php if (have_posts()):
            while (have_posts()): the_post(); ?>

                <?php get_template_part( 'content', get_post_format() ); ?>

            <?php endwhile;
        else:
            echo '<p>No content.php found</p>';
        endif;?>


</div>
<!--site content-->
<?php get_footer();
?>