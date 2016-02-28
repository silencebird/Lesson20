<?php

/*
 Template Name: Spacial Layout
 */

get_header();

if (have_posts()):
    while (have_posts()): the_post(); ?>

        <article class="post page">
            <h2>  <?php  the_title(); ?> </h2>

                <!--Info-box -->
            <div class="info-box">
                <h4>Disclamer Title</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Deleniti, enim!
                </p>




            </div>


                <!--Info-box -->


            <?php the_content(); ?>
        </article>

    <?php endwhile;
else:
    echo '<p>No content.php found</p>';
endif;

get_footer();
?>