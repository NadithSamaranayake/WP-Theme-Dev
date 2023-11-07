<?php

    function theme01_script_enqueue()
    {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');

        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/theme01.css', array(), '1.0.0', 'all');
        /*
        first parameter is what wordpress uses as the name for the style sheet
        second parameter is the location of the css file. (make sure to give the full uri location)
            to get the full uri we use **get_template_directory_uri()** function
        third parameter is where you specify all the dependencies that the css file has
        fourth parameter is the version number of the theme.
        fifth parameter is the media parameter which specifies whether the file should be printed on all devices or
    just on a print device or just on a different resolution device
        */

        wp_enqueue_script('jquery');
        /*
            this code line will grab the native jquery file which was included when installing WordPress
        */

        wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);

        wp_enqueue_script('customjs', get_template_directory_uri() . '/js/theme01.js', array(), '1.0.0', true);
        /*
        The first four parameters are the same as the first function.
        The fifth parameter inlcudes a boolean value which states where to add the js scripts.
            if we state it as 'true' it'll be included in the footer
                (including the js in the footer will improve the website speed and functionallities)
            by default it's false, which will print the js scripts in the header.
        */
    }
    
add_action('wp_enqueue_scripts', 'theme01_script_enqueue');
/*connects word press execution process to a custom function and tells to execute the function.*/

function theme01_theme_setup()
{
    add_theme_support('menus');
    /*This hook is used to include the functions to enable the user to add and customize their menu sections*/

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

    /*
    first parameter is the theme location (the unique name of our menu)
    second parameter is the description of the menu
    */
}

add_action('init', 'theme01_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
    /* This hook will allow you to add images to your blog posts. */

add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ));
    /*
        This code line is not enough because we should specify what post format we want to use
        WordPress has 9 different post formats
    */

/*
    ==================================
    Sidebar function
    ==================================
*/
function theme01_widget_setup()
{
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget_title">',
            'after_title' => '</h1>',
        )
    );

    register_sidebar(
        array(
                'name' => 'Sidebar 2',
                'id' => 'sidebar-2',
                'class' => 'custom2',
                'description' => 'Standard Sidebar 2',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h1 class="widget_title">',
                'after_title' => '</h1>',
            )
    );
}

add_action('widgets_init', 'theme01_widget_setup');
