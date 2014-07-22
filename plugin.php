<?php

/**
 * Plugin Name: Lesson Filter
 * Plugin URI: http://my-site.com/my-plugin-landing-page
 * Description: This is a sample plugin showing how to add a filter
 * Version: 1.0
 * Author: Zane M. Kolnik
 * Author URI: http://zanematthew.com/
 * License:
 */

require_once plugin_dir_path( __FILE__ ) . 'admin-menu.php';
require_once plugin_dir_path( __FILE__ ) . 'render.php';


function lesson_filter(){

    $defaults = array(
        'posts_per_page' => -1,
        'post_status' => 'draft'
        );

    echo '<h2>Defaults</h2>';
    echo '<pre>';
    print_r( $defaults );
    echo '</pre>';

    $args = apply_filters( 'lesson_filter_query_args', $defaults );

    echo '<h2>Filtered</h2>';
    echo '<pre>';
    print_r( $args );
    echo '</pre>';
    // $my_query = New WP_Query( $args );

}


function my_custom_filter( $args ){
    $args['post_order'] = 'DESC';
    return $args;
}
add_filter('lesson_filter_query_args', 'my_custom_filter', 10, 1);