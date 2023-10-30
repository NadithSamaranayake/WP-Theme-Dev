<?php get_header();?>

<div class="row">

    <div class="col-xs-12 col-sm-8">
        <!--col-xs is phone size and col-sm is tablet size-->
        <?php 
    
    if( have_posts() ):
        
        while(have_posts() ): the_post(); ?>
        <!--
            echo 'This is the format: ' . get_post_format();
            This code line will print the current format of the post 
        -->
        <?php get_template_part('content',get_post_format()); ?>

        <?php endwhile;

    endif;

    ?>

    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>