<?php

    /*
        Template Name: Page No Title
    */

get_header();?>

<div class="row">

    <div class="col-xs-12 col-sm-8">


        <?php if( have_posts() ):
        
        while(have_posts() ): the_post(); ?>

        <p> <?php the_content(); ?> </p>

        <small> Posted on: <?php the_time('F j, Y'); ?> at <?php the_time( 'g:i a' ) ?>, in <?php the_category(); ?>
        </small>

        <hr>

        <?php endwhile;

    endif;

    ?>

    </div>

    <!--<div class="col-xs-12 col-sm-4">
        <?php /*get_sidebar();*/ ?>
    </div>-->

    <?php if(is_page(10)):

        dynamic_sidebar( 'sidebar-2' );

    else: ?>
        <div class="col-xs-12 col-sm-4">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    <?php

    endif;
    ?>

</div>


<?php get_footer(); ?>