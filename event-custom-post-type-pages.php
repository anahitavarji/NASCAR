<style>
    body {
        text-align: center;
    }
   
    h1,
    h2,
    h3 {
        text-align: center;
        font-weight: normal;
    }

    h1 {
        text-decoration: underline;
    }

    h3 {
        font-size: medium;
    }

    h4 {
        font-size: small;
    }
   
</style>



<?php
/*
Plugin Name: Event Pages Widget

Plugin URI: https://www.

Description: This is a widget to show a list of custom post type pages for Event Custom Post Type.

Version: 1.0

Author: Anahita Ahmadivarji

Author URI: https://www.
License: GPL2
*/


//Register and load the widget
function event_pages_register_widget()
{
    register_widget('event_pages_widget');
}
// add the action
//triggers the actions by calling the 'event_pages_register_widget' function that's registering the widget
add_action('widgets_init', 'event_pages_register_widget');
//class extended to register widget
class event_pages_widget extends WP_Widget
{
    function __construct()
    //The __construct() part means "call the construct function"
    {
        parent::__construct(
            //The 'parent' part means 'get the parent of this object and use it"
            //The whole line means "get the parent of this object then call its constructor"

            //Widget ID
            'event_pages_widget',
            //Widget Name
            __('Event Pages Widget', 'event_pages_widget_domain'),
            //Widget Description
            array('description' => __('A widget that shows a list of pages for Event Custom Post Type.', 'event_pages_widget_domain'),)
        );
    }

    //Creating Widget Front-End
    public function widget($args, $instance)
    {
        //Get list of pages for Event Custom Post Type

        // Set the arguments for the query
        $args = array(
            'post_type' => 'events',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        );
        //provide details in array format
        //by getting all these details, we are going to fetch all our posts


        $loop = new WP_Query($args);
        //creating wp_query instance
        //parameter passes details


        //Next, create a loop
        //This loop is used to count all the details, all the posts along with $condition, to check for posts and if they run along these conditions or not
        //By getting all posts, it looks through each

        if ($loop->have_posts()) {
            //checking we have post or not of provided condition    
            while ($loop->have_posts()) {
                //loop through on all posts that have the condition

                //incrementing the loop
                $loop->the_post();

                //fetch the title of the post
                echo '<h1>' . '<li>' . get_the_title() . "</li>" . '</h1>';
                echo '<h3>' . "By: &nbsp;" . get_the_author() . '</h3>';
                echo '<h4>' . get_the_date() . '</h4>';
                echo '<br>';
            }
        } else {
            //no pages
        }
        wp_reset_postdata();
    }


    //Widget Backend, Admin form
    public function form($instance)
    {
    }

    //Updating Widget, replacing old instances with new
    public function update($new_instance, $old_instance)
    {
    }
}//class event_pages_widget ends here
