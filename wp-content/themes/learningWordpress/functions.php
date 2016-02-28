<?php

function learningWordPress_resources(){

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//Navigation Menus

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

//Get top ancestor
function get_top_ancestor_id(){

    global $post;

    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post -> ID;
}


//does page have children?
function has_children() {
    global $post;

    $pages = get_pages('child_of='.$post->ID);
    return count($pages);
}


//theme sutup
function learnngWordPress_setup(){

    //Navigation Menus

    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));

    ///add feature image suport
    add_theme_support('post-thumbnails');
    add_image_size('small-thambnail', '100%','100%' , true);
    add_image_size('banner-image', 920, 210, array('left','top'));

    //Add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme','learnngWordPress_setup' );


//Add our widgets location
function ourWidgetsInits(){
    register_sidebar( array(
        'name' => 'About Blogin',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));
    register_sidebar( array(
        'name' => 'Search',
        'id' => 'sidebar2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'Stay Tuned',
        'id' => 'sidebar3',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'Social',
        'id' => 'footer1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
    ));

}
add_action('widgets_init','ourWidgetsInits');
