<?php
/*
Plugin Name: Movie Reviews
Plugin URI: http://wordpress.com/
Description: Declares a plugin that will create a custom post type displaying movie reviews.
Version: 1.0
Author: Amit Kumar
Author URI: http://wordpress.com/
License: GPLv2
*/
?>
add_action( 'init', 'create_movie_review' );
function create_movie_review() {
    register_post_type( 'movie_reviews',
        array(
            'labels' => array(
                'name' => 'Movie Reviews',
                'singular_name' => 'Movie Review',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Movie Review',
                'edit' => 'Edit',
                'edit_item' => 'Edit Movie Review',
                'new_item' => 'New Movie Review',
                'view' => 'View',
                'view_item' => 'View Movie Review',
                'search_items' => 'Search Movie Reviews',
                'not_found' => 'No Movie Reviews found',
                'not_found_in_trash' => 'No Movie Reviews found in Trash',
                'parent' => 'Parent Movie Review'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
