<?php
/*
Plugin Name: My Widget
Plugin URI:
Description: My first widget
Author: Me
Version: 1.0
Author URI:
*/

class My_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(falss, $name=__('My Widget'));
    }

    public function widget( $args, $instance ) {
        ?>



        <?php

    }
    public function update() {

    }
    public function form() {

    }

}

add_action( 'widgets_init', function(){
    register_widget( 'My_Widget' );
});

?>