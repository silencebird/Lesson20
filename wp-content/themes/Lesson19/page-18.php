<?php

get_header();

if (have_posts()):
    while (have_posts()): the_post(); ?>

        <article class="post page">
            <div class="page-name">

                <!-- Title-column-->
                <h2 class="container">
                    <?php the_title() ?>
                </h2>
                <!-- Title-column-->

            </div>

            <?php

            if (has_children() OR $post->post_parent > 0) {?>

                <nav class="site-nav children-links clearfix container">
                    <ul>
                        <?php
                        $args = array(
                            'child_of' => get_top_ancestor_id(),
                            'title_li' => ''
                        );
                        ?>


                        <?php  wp_list_pages($args); ?>
                    </ul>
                </nav>
            <?php } ?>

            <!-- column-container -->
                    <div class="column-container clearfix">



                        <!-- Text-column-->
                        <div class="text-column">

                            <?php the_content(); ?>
                        </div>
                        <!-- Text-column-->



            </div>

            <!-- column-container -->

        </article>

    <?php endwhile;
else:
    echo '<p>No content.php found</p>';
endif;

get_footer();
?>