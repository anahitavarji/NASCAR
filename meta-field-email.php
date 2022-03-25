<?php

/*
Plugin Name: Second Custom Post Type

Plugin URI: https://www.

Description: A custom post type with a meta field email address.

Version: 1.0

Author: Anahita Ahmadivarji

Author URI: https://www.
License: GPL2

*/



function my_second_post_type()
{
    //create options for this specific post type
    $args = array(
        'labels' => array(
            'name' => __('Emails'),
            //the plural
            'singular_name' => __('Email'),
            //uses this singular name when you add
        ),
        'hierarchical' => false,
        //if you remove labels and leave true it'll show as pages
        //if you leave false, it'll show as posts
        'public' => true,
        //publicly accessible by the user front end and back end
        'has_archive' => true,
        //blog post that takes you to single post
        'register_meta_box_cb' => 'email_metabox',
        //add meta box for our custom fields, the callback function for meta box
        'supports' => array('title', 'editor', 'thumbnail'),
        //allows editng and other properties on page edit
        //you can add custom fields in support 
    );
    register_post_type('emails', $args);
    //name of post type and options variable
}
add_action('init', 'my_second_post_type');
//fire this initializer hook and loads before the website loads
//hook runs the function

//function for callback metabox
function email_metabox()
{

    add_meta_box('email_metabox_customfields', 'Email Custom Field', 'email_metabox_display', 'emails', 'normal', 'high');
    //first, an ID for our first meta box ; unique ID for that metabox
    //next, the tile 
    //next, callback function
    //next, tell it what post type it is 
    //next, where we want that metabox to show up
    //next, is the priority (optional it'll go to default), to show above editor
}
add_action('add_meta_boxes', 'email_metabox');
//callback function

function email_metabox_display()
{
    //add the custom field

    //we need to tell it to save the email and call it once its saved
    global $post;
    $email_name = get_post_meta($post->ID, 'email_name', true);
    //store custom fields in the post meta
    //it gets the post meta of this post ID email_box 
    //true means it'll return singular or an array of stuff

?>
    <label>Email:</label>
    <input type="text" name="email_name" placeholder="Enter Your Email" class="widefat" value="<?php print $email_name; ?>" />
<?php
    //can be straight HTML
    // echo "Here it is..."; test if custom field works
    //WP has its own backend classes, "widefat" streches the length of the metabox
    //If its blank, it'll be blank ; If it cant find anything, it'll be blank
    //If it finds a meta value for email_name, it will fill it in
}

//Function that saves it
function email_posttype_save($post_id)
{
    //pass through the post ID in the argument
    //need to check if its autosave or revision 
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    if ($is_autosave || $is_revision) {
        return;
        //means I dont want to do anything if its autosave or a revision
        //to click the update button instead
    }
    //get the post
    $post = get_post($post_id);
    //using the argument to get the post
    if ($post->post_type == "emails") {
        //save the custom fields data
        if (array_key_exists('email_name', $_POST)) {
            //$_POST if the form is submitted
            //save the info
            update_post_meta($post_id, 'email_name', $_POST['email_name']);
            //the key of the post meta and the value of the post meta
            //if email_name exists in the post update , update the post meta for email_name

        }
    }
}
add_action('save_post', 'email_posttype_save');
//callback function

//shortcode function
//you dont print out the items, you want to return them
function get_email_post_types(){
    $args = array(
        'posts_per_page' => -1,
        //-1 returns all of them
        'post_type' => 'emails'
        //the custom post type
    );
    $ourPosts = get_posts($args);
    //get the post types
    //get_posts a function in WP


    //string to return
    $content = '';
    
    foreach($ourPosts as $key=>$val){
        //
        $email_name = get_post_meta($val->ID, 'email_name', true);
        //-> because its an object
        //post meta 
        //change to val because its going through and pulling the details of that post as value

        //print 
        if($email_name != ""){$content .= '<em>Email:</em>'.'&nbsp; &nbsp;'.$email_name.'<br>';}
    }
    return $content;
}
add_shortcode('get_email_posts', 'get_email_post_types');
//callback function


?>