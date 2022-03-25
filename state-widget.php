<?php
/*
Plugin Name: State Widget

Plugin URI: https://www.

Description: A custom widget that displays a list of states.

Version: 1.0

Author: Anahita Ahmadivarji

Author URI: https://www.
License: GPL2

*/

function state_register_widget()
{
    register_widget('state_widget');
}
add_action('widgets_init', 'state_register_widget');
class state_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            //Widget ID
            'state_widget',
            //Widget name
            __('State Widget', 'state_widget_domain'),
            //Widget Description
            array('description' => __('A widget that displays a list of states', 'state_widget_domain'),)
        );
    }

    //Creating Widget Front-End
    public function widget($args, $instance)
    {
        //Title Config
        $myTitle = apply_filters('widget_title', $instance['title']);
        if (!empty($myTitle) && $myTitle != "") {
            echo $myTitle;
        } else {
            echo "empty!";
        }
        //Set Interval Config
        $interval = apply_filters('widget_interval', $instance['interval']);
        // The name of the filter hook.
        //The value to filter.
         //The filtered value after all hooked functions are applied to it.
        //When a plugin or a widget has an apply_filters, the developper gently had a way to override the current value sets for the title.
?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            //Alerts a message every minute that goes by
            // $(document).ready(function() {
            //     setInterval(function() {
            //         alert("hi!!!!")
            //     }, 60 * 1000);
            // });

            //Goes through each option value listed and alerts the value
            //     $(document).ready(function(){
            //     $("#states > option").each(function() {
            //         alert(this.value);
            //     });
            // });

            //Lists all options after a minute goes by
            // $(document).ready(function(){
            //     setInterval(function(){
            //         $("#states > option").each(function(){
            //             alert(this.value);
            //         });
            //     }, 60 * 1000);
            // });

            //To drop down box value to new york in a minute
            // $(document).ready(function(){
            //     // $("#states").val("New York");
            //     setInterval(function(){
            //         $("#states").val("New York");
            //     }, 60 * 1000);
            // });

            //Drops down options in console after a min
            // $(document).ready(function(){
            //     setInterval(function(){
            //     $('#states option').each(function(){
            //         console.log($(this).val());
            //     });
            // }, 60*1000);
            // });



            // $(document).ready(function() {
            //     setInterval(function() {
            //         $("#states option ").each(function() {
            //             var apples = this.text;
            //             console.log(apples);
            //         });
            //     }, 60 * 1000)
            // });

            //  $(document).ready(function(){
            //     $('#states option').each(function(){
            //         var elements = this.text;
            //         // var state = elements.length;
            //         // for(state=0; state<=9; state++){
            //         //     console.log(state);
            //         // }
            //     //     $("#states").val('Vermont');
            //     //    console.log(elements);
            //             setInterval(function() {
            //                 // var time = new Date();
            //          $("#states").val(new Date().getMilliseconds()%10);
            //     }, 1000)
            //     });
            // });

            $(document).ready(function() {
                setInterval(function() {
                    // var time = new Date().getMilliseconds() % 10;
                    // var today = new Date();
                    // var milliseconds = today.getMilliseconds();
                    // $(".apples").html(milliseconds);
                    var today = new Date();
                    // $setTime = "";
                    $("#states").val(today.getMilliseconds()%10);
                    //assigns value to milliseconds portion of the current time
                    //which is picked by its option value given within the 0-10 range
                }, <?php echo $interval?>);
            });
        </script>
        <style>
            <?php include 'state-widget.css' ?>;
        </style>

        <div class="container">
            <label for="states">The list of States &nbsp;</label>
            <select name="states" id="states">
                <option value="0"> North Carolina</option>
                <option value="1"> South Carolina</option>
                <option value="2"> New York</option>
                <option value="3"> New Jersey</option>
                <option value="4"> Texas</option>
                <option value="5"> Florida</option>
                <option value="6"> Colorado</option>
                <option value="7"> Vermont</option>
                <option value="8"> Alaska</option>
                <option value="9"> Hawaii</option>
            </select>
        </div>

    <?php
    }

    //Widget Backend, Admin Form
    public function form($instance)
    {
        //An instance is an object that has been created from an existing class.
        $myTitle = $instance['title'];
        $interval = $instance['interval'];
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($myTitle); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('interval');?>"><?php _e('Interval:');?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('interval'); ?>" name="<?php echo $this->get_field_name('interval');?>" type="text" value="<?php echo esc_attr($interval); ?>"/>
        </p>

<?php
    }

    //Updating Widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        //strip_tags() function strips a string from HTML, XML, and PHP tags.
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['interval']=(!empty($new_instance['interval'])) ? strip_tags($new_instance['interval']) : '';
        //update variable
        return $instance;
    }
}
