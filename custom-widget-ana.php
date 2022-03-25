<?php
/*

Plugin Name: Colored Box Widget

Plugin URI: https://www.

Description: A custom widget of boxes that change colors when clicked upon.

Version: 1.0

Author: Anahita Ahmadivarji

Author URI: https://www.

License: GPL2

*/




function boxes_register_widget()
{
    register_widget('boxes_widget');
}
add_action('widgets_init', 'boxes_register_widget');
class boxes_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            // widget ID
            'boxes_widget',
            // widget name
            __('Colored Box Widget', ' boxes_widget_domain'),
            // widget description
            array('description' => __('Colored Box Widget', 'boxes_widget_domain'),)
        );
    }


    public function widget($args, $instance)
    {

        $myTitle = apply_filters('widget_title', $instance['title']);

        if (!empty($myTitle) && $myTitle != "") {
            echo $myTitle;
        } else {
            echo "empty!";
        }


?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            //jQuery Code to change color boxes
            $(document).ready(function() {
                $(".btn1").click(function() {
                    $("#box-1").removeClass("red");
                    $("#box-1").addClass("purple");
                })
                $(".btn2").click(function() {
                    $("#box-2").removeClass("blue");
                    $("#box-2").addClass("yellow");
                })
                $(".btn3").click(function() {
                    $("#box-3").removeClass("green");
                    $("#box-3").addClass("orange");
                })
            })


            //JS Code to change color of boxes
            // function firstChange() {
            //     document.getElementById("box-1").style.backgroundColor = "purple";
            // }

            // function secondChange() {
            //     document.getElementById("box-2").style.backgroundColor = "yellow";
            // }

            // function thirdChange() {
            //     document.getElementById("box-3").style.backgroundColor = "orange";
            // }
        </script>
        <style>
            <?php include 'custom-widget-ana.css';
            ?>
        </style>
        <!-- <style>
            * {
                margin: 0;
                padding: 0;
            }
    

            .purple {
                background-color: purple;
            }

            .yellow {
                background-color: yellow;
            }

            .orange {
                background-color: orange;
            }

            .container {
                margin: auto;
                height: auto;
                width: auto;
            }

            .widget {
                text-align: center;
            }

            .red {
                background-color: red;
            }

            .blue {
                background-color: blue;
            }

            .green {
                background-color: green;
            }

            button {
                background-color: white;
                border: dotted 1px black;
                color: black;
                font-size: 14px;
                font-family: 'Oswald';
                padding: 2px;
            }

            @media only screen and (max-width: 420px) {
                .container {
                    display: block;
                    width: 75%;
                    height: auto;
                }

                .container #box-1 {
                    height: 200px;
                    width: 100%;
                }

                .container #box-2 {
                    height: 200px;
                    width: 100%;
                }

                .container #box-3 {
                    height: 200px;
                    width: 100%;
                }

                button {
                    position: absolute;
                    margin: 0 0 0 125px;
                    cursor: pointer;
                    white-space: nowrap;
                    padding: 5px;
                }

                .btn1 {
                    top: 165px;
                }

                .btn2 {
                    top: 370px;
                }

                .btn3 {
                    top: 570px;
                }
            }

            @media only screen and (min-width: 600px) {
                .container {
                    display: flex;
                }

                .container #box-1 {
                    height: 200px;
                    width: 100%;
                }

                .container #box-2 {
                    height: 200px;
                    width: 100%;
                }

                .container #box-3 {
                    height: 200px;
                    width: 100%;
                }

                .btnContainer {
                    display: flex;
                }

                .btnContainer button {
                    margin: 10px 80px;
                    cursor: pointer;
                    white-space: nowrap;
                }
            }

            @media only screen and (min-width: 1000px) {
                .container {
                    display: flex;
                    box-sizing: border-box;
                }

                .container #box-1 {
                    width: 100%;
                    height: 280px;
                }

                .container #box-2 {
                    width: 100%;
                    height: 280px;
                }

                .container #box-3 {
                    width: 100%;
                    height: 280px;
                }

                .btnContainer {
                    display: flex;
                }

                .btnContainer button {
                    padding: 5px;
                    cursor: pointer;
                    margin: 10px 90px;
                    white-space: nowrap;
                }
            }
        </style> -->
        <?php
        // echo __('Greetings from Anahita!', 'boxes_widget_domain');
        ?>


        <div class="container">
            <div class="red" id="box-1">
            </div>
            <div class="blue" id="box-2">
            </div>
            <div class="green" id="box-3">
            </div>
        </div>

        <div class="btnContainer">
            <button class="btn1">click me!</button>
            <button class="btn2">click me!</button>
            <button class="btn3">click me!</button>
        </div>

    <?php
    }

    //Widget Backend
    public function form($instance)
    {
        // if (isset($instance['title']))
        //     $title = $instance['title'];
        // else
        //     $title = __('Nothing was set', 'boxes_widget_domain');

        $myTitle = $instance['title'];
        //Widget admin form
    ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($myTitle); ?>" />
        </p>



<?php
    }

    //Updating Widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        /*$instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;*/
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'] ) ) ? strip_tags($new_instance['title'] ) : '';
        return $instance;
    }
}
?>