<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Theme 01</title>
        <?php wp_head(); ?>
    </head>

    <?php
        
        if( is_front_page() ):
        /* This function checks whether we are currently in the home page. */
            $awesome_classes = array('awesome-class', 'my-class');
        else:
            $awesome_classes = array('no-awesome-class');
        endif;

    ?>
 
    <body <?php body_class($awesome_classes); ?> >

   <!--We don't need to close the body and the html tag because we are closing them in the footer file-->

        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        <!--This will tell wordpress to print the menu-->
