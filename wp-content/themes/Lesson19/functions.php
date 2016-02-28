<?php

function learningWordPress_resources(){


    wp_enqueue_style("main",get_bloginfo('stylesheet_directory')."/css/main.css");
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
        'name' => 'Contact info',
        'id' => 'footer1',
        'before_widget' => '<div class="widget-item %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'Quick links',
        'id' => 'footer2',
        'before_widget' => '<div class="widget-item %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'Newsletter',
        'id' => 'footer3',
        'before_widget' => '<div class="widget-item %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'Social-H',
        'id' => 'social-header',
        'before_widget' => '<div class="widget-item %2$s">',
        'after_widget' => '</div>',
    ));

    register_sidebar( array(
        'name' => 'Social-F',
        'id' => 'social-footer',
        'before_widget' => '<div class="widget-item %2$s">',
        'after_widget' => '</div>',
    ));

}
add_action('widgets_init','ourWidgetsInits');


class Contact_info extends WP_Widget {

    function __construct() {
        parent::__construct(false, $name=__('Contact info'));
    }

    public function widget( $args, $instance ) {
            echo $args['before_widget'];
            if ( ! empty( $instance['title'] ) ) {
                echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
            }
            echo $args['after_widget'];

        ?>
            <ul>
                <li>
                    222 Ave C South
                    Saskatoon, Saskatchewan
                    Canada S7K 2N5
                </li>
                <li>
                    info@deliver.ca
                </li>
                <li>
                    1.306.222.3456
                </li>
            </ul>
       <?php

    }
    public function form($instance) {

        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Widget title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['name'] = strip_tags( $new_instance['name'] );
        $instance['show_info'] = $new_instance['show_info'];

        return $instance;
    }

}

class Newsletter extends WP_Widget {

    function __construct() {
        parent::__construct(false, $name=__('Newsletter'));
    }

    public function widget( $args, $instance ) {
            echo $args['before_widget'];
            if ( ! empty( $instance['title'] ) ) {
                echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
            }
                echo $args['after_widget'];
        ?>

        <p>
            Lorem ipsum dolor sit amet dolor consectetur adipiscing elit.
        </p>
        <form action="">
            <input type="email" placeholder="Email" class="email"/>
            <input type="submit" value="OK" class="email-submit"/>
        </form>

        <?php

    }

    public function form($instance) {

        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Widget title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['name'] = strip_tags( $new_instance['name'] );
        $instance['show_info'] = $new_instance['show_info'];

        return $instance;
    }

}




add_action( 'widgets_init', function(){
    register_widget( 'Contact_info' );
    register_widget( 'Newsletter' );
});


