<?php

get_header();
?>

<!-- <div class="container"> container-->

    <?php if (have_posts()):
    while (have_posts()): the_post(); ?>

        <article class="post page">
            <div class="page-name">
                <h2 class="container">
                    <?php the_title() ?>
                </h2>
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


            <?php the_content(); ?>
        </article>

    <?php endwhile;
else:
    echo '<p>No content.php found</p>';
endif;?>

    <!--</div> container-->

<?php

    get_footer();
?>

