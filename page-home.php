<?php get_header(); ?>

<div class="row">

    <div class="col-xs-12">

        <?php

        $lastBlog = new WP_Query('type=post&posts_per_page=1');

        if ($lastBlog->have_posts()) :

            while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

        endif;

        wp_reset_postdata();
        /*
                This code is useful to prevent feature query posts being effected by earlier ones.
                It's like clearing out the variable/ cleaning cache.
            */
        ?>

    </div>

    <div class="col-xs-12 col-sm-8">
        <!--col-xs is phone size and col-sm is tablet size-->
        <?php

        if (have_posts()) :

            while (have_posts()) : the_post(); ?>
        <!--
                    echo 'This is the format: ' . get_post_format();
                    This code line will print the current format of the post 
                -->
        <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

        endif;

        //Print other 2 posts not the first one


        $lastBlog = new WP_Query('type=post&posts_per_page=1');

        if ($lastBlog->have_posts()) :

            while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

        endif;

        wp_reset_postdata();
        ?>



    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>