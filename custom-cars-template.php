<style>
    body {
        background-color: whitesmoke;
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

    h2 {
        font-size: medium;
    }

    h3 {
        font-size: small;
    }
    

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #ddd;
        width: auto;
    }

    img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    p {
        padding: 0 80px 0 80px;
    }
</style>

<?php


/* Template name: Cars Post Template */

//name of custom post type

// get_header();
//get all header details

$condition = array(
    "post_type" => "cars",
    "post_status" => "publish"
);
//conditional statements / array
//provide details in array format
//by getting all these details, we are going to fetch all our posts

$the_query = new WP_Query($condition);
//creating wp_query instance
//parameter passes details 

//Next, create a loop
//This loop is used to count all the details, all the posts along with $condition, to check for posts and if they run along these conditions or not
//By getting all posts, it looks through each

if ($the_query->have_posts()) {
    //checking we have post or not of provided condition 
    while ($the_query->have_posts()) {
        //loop through on all posts that have the condition

        //incrementing the loop
        $the_query->the_post();

        //fetch the title of the post


        echo '<h1>' . get_the_title() . '</h1>';

        echo '<h2>' . "By: &nbsp;" . get_the_author() . '</h2>';

        echo '<h3>' . get_the_date() . '</h3>';

        the_post_thumbnail();
        echo '<br>';


        the_content();
        //or you can use get_the_content()

        the_taxonomies();
        echo '<br><br><br>';
    }
    wp_reset_postdata(); //restore our original post data
} else {
    //no posts
}
// get_footer();
//get all the footer details

?>