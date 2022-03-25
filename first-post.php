<?php
/*
Plugin Name: First Custom Post Type

Plugin URI: https://www.

Description: A custom post type. My first to be more specific. Posts on different cars and taxonomy for the brands of cars.

Version: 1.0

Author: Anahita Ahmadivarji

Author URI: https://www.

License: GPL2

*/


function my_first_post_type()
{
    //create options for this specific post type
    $args = array(
        'labels' => array(
            'name' =>__('Cars'),
            //the plural
            'singular_name' =>__('Car'),
            //uses this singular name wwhen you click on button to add a car
            'add_new' =>__('Add New Car'),
            //for the add button
            'add_new_item' =>__('Add New Car'),
            //to add within the post
            'edit_item' =>__('Edit Car'),
            //to edit post
            'search_items' =>__('Search Cars'),
            //to search within the posts
        ),
        'hierarchical' => false,
        //if you remove labels and leave true it'll show as pages
        //if you leave it false, it'll show as posts
        'public' => true,
        //publicly accessible by the user front end and backend
        'has_archive' => true,
        //blog post that takes you to single post
        'menu_icon' => 'dashicons-admin-network',
        //change the icon by adding wp dashicons class
        'supports' => array('title', 'editor', 'thumbnail'),
        //if removed, will display like a regular page
        //allows editing
        // 'rewrite' => array('slug' => 'my-cars'),
        //to write the link, not really needed automatically sets
    );
    register_post_type('cars', $args);
    //name of post type and options variable
    

}
add_action('init', 'my_first_post_type');
//fires this init hook and loads before the website loads
//hook runs the function




//categorize into different brands like toyota, nissan, ford, etc
//create a taxonomy, similar to a category and can assign to post type
function my_first_taxonomy(){

    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'public' => true,
        'hierarchical' => true,
        //true, it'll act like a category ; false, it'll act like a tag
    );

    register_taxonomy('brands', array('cars'), $args);
    // call whatever you want for taxonomy
    //what the taxonomy should attach to, what post type
    //inject the arguements created above

}
add_action('init', 'my_first_taxonomy');
//the action to the init hook and assign to the function





?>
