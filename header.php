<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Theme 01</title>
        <?php wp_head(); ?>
    </head>

    <body>

   <!--We don't need to close the body and the html tag because we are closing them in the footer file-->

    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    <!--This will tell wordpress to print the menu-->