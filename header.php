<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Theme 01</title>
    <?php wp_head(); ?>
</head>

<?php
        
        if (is_front_page()):
        /* This function checks whether we are currently in the home page. */
            $awesome_classes = array('awesome-class', 'my-class');
        else:
            $awesome_classes = array('no-awesome-class');
        endif;

    ?>

<body <?php body_class($awesome_classes); ?>>

    <!--We don't need to close the body and the html tag because we are closing them in the footer file-->

    <div class="container">

        <div class="row">

            <div class="col-xs-12">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Theme 01</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php wp_nav_menu(
        array(
                                'theme_location'=> 'primary',
                                'container'=> false,
                                'menu_class'=> 'nav navbar-nav navbar-right'
                                    )
    );
                            ?>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling
                            <ul class="">
                                <li><a href="#">Link</a></li>
                            </ul>
                        </div> /.navbar-collapse -->
                    </div> <!-- /.container-fluid -->
                </nav>

                <!--This will tell wordpress to print the menu-->
            </div>

        </div>

        <img src="<?php header_image(); ?>"
            height="<?php echo get_custom_header()->height; ?>"
            width="<?php echo get_custom_header()->width; ?>"
            alt="" />