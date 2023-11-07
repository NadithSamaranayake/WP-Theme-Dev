<?php get_header(); ?>

<div class="row">
    <div class="col-xs-12">

        <div id="theme01-carousel" class="carousel slide" data-ride="carousel">
            <!--Indicators
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#theme01-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#theme01-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#theme01-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
-->
            <!--Wrapper for slides-->
            <div class="carousel-inner" role="listbox">

                <?php

                $args_cat = array(
                    'include' => '12,11,9'
                );

                $categories = get_categories($args_cat);
                $count = 0;
                $bullets = '';
                foreach ($categories as $category):

                    $args = array(
                        'type' => 'post',
                        'posts_per_page' => 1,
                        'category__in' => $category->term_id,
                        'category__not_in' => array(10),
                    );

                    $lastBlog = new WP_Query($args);

                if ($lastBlog->have_posts()) :

                    while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>

                <div
                    class="item <?php if ($count == 0): echo 'active'; endif; ?>">
                    <?php the_post_thumbnail('full'); ?>
                    <div class="carousel-caption">
                        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h1>'); ?>

                        <small>
                            <?php the_category(' '); ?>
                        </small>

                    </div>
                </div>

                <?php $bullets .= '<li data-target="#theme01-carousel" data-slide-to="'.$count.'" class="'; ?>

                <!--
                    the .= is used when you dont want to override a variable and you want to dynamically add a value to a variable.
                    the normal = sign will override the variable but in this case it'll just keep adding on top of it.
                    It'll keep increasig the elements in the variable.
                -->

                <?php if ($count == 0): $bullets .='active'; endif; ?>

                <?php  $bullets .= '"></li>'; ?>


                <?php endwhile;

                endif;

                wp_reset_postdata();

                $count++;

                endforeach;

                ?>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php echo $bullets; ?>
                </ol>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#theme01-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#theme01-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>

<div class="row">
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

                    /*
                        //Print other 2 posts not the first one
                        $args = array(
                            'type' => 'post',
                            'posts_per_page' => 2,
                            'offset' => 1,
                        );

                        $lastBlog = new WP_Query($args);

                        if ($lastBlog->have_posts()) :

                            while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

                                        endif;

                                        wp_reset_postdata();
                                        */
                                        ?>

        <!--<hr>-->

        <?php
                        /*
                                        //Print only tutorial posts
                                        $lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=tutorials');
                                            //the -1 in posts_per_page states that there is no limit of posts to be added.

                                        if ($lastBlog->have_posts()) :

                                            while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

                                        endif;

                                        wp_reset_postdata();
                                */
                ?>

    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>