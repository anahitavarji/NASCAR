<?php
/* 
Plugin Name: All Posts Widget

Plugin URI: https://www.

Description: This is a widget that shows a list of custom post types used on...

Version: 1.0

Author: Anahita Ahmadivarji

Author URI: https://www.

License: GPL2
*/


// Register and load the widget
function all_posts_register_widget()
{
    register_widget('all_posts_widget');
}
add_action('widgets_init', 'all_posts_register_widget');
class all_posts_widget extends WP_Widget
{
    function __construct()
    //the __construct() part means "call the construct function"
    {
        parent::__construct(
            //The "parent" part means "get the parent of this object, and use it"
            //he whole line means "get the parent of this object then call its constructor".
            
            //Widget ID
            'all_posts_widget',
            //Widget Name
            __('All Posts Widget', 'all_posts_widget_domain'),
            //Widget Description
            array('description' => __('A widget that shows a list of custom post types.', 'all_posts_widget_domain'),)
        );
    }

    //Creating Widget Front-End
    public function widget($args, $instance)
    {
        //Get list of registered custom post types
        $args = array(
            //An array of key => value arguments to match against the post type of objects
            //An array of key value arguments to match against the post types.
            'public'   => true,
            //Boolean. If true, only public post types will be returned
            '_builtin' => false,
            //Boolean. If true, will return WordPress default post types. Use false to return only custom post types.
        );

        $output = 'names'; // names or objects, note names is the default
        //The type of output to return. Accepts post type 'names' or 'objects'
        $operator = 'and'; // 'and' or 'or'
        //The logical operation to perform. 'Or' means only one element from the array needs to match; 'and' means all elements must match; 'Not' means no elements may match.

        $post_types = get_post_types($args, $output, $operator);
        //Get a list of all registered post type objects

        foreach ($post_types as $post_type) {

            echo "<ul><li>" . $post_type . "</li></ul>" ;
        }


/* ?>
    <?php */
    }


    //Widget Backend, Admin Form
    public function form($instance)
    {
    }

    //Updating Widget replacting old instances with new
    public function update($new_instance, $old_instance)
    {
    }
} //class all_posts_widget ends here
