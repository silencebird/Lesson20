<?php

get_header();

if (have_posts()):
    ?>
    <h2><?php

        if (is_category()){
            single_cat_title();
        } elseif ( is_tag()) {
            single_tag_title();
        }elseif (is_author()){
           the_post();
            echo 'Author Archive: ' .get_the_author();
            rewind_posts();
        }elseif (is_day()){
            echo 'Daily Archive: '. get_the_date();
        }elseif (is_month()){
            echo 'Monthly Archive: '. get_the_date('F Y');
        }elseif (is_year()){
            echo 'Yearly Archive: '. get_the_date('Y');
        }else{
            echo 'Archives:';
        }

    ?></h2>
    <?php
    while (have_posts()): the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile;
else:
    echo '<p>No content.php found</p>';
endif;

get_footer();
?>


