<?php get_header();?>

<div class="row">

    <div class="col-xs-12 col-sm-8">
        <!--col-xs is phone size and col-sm is tablet size-->

        <div class="row text-center">


            <?php
                
                if (have_posts()): $i = 0;
                    
                    while (have_posts()): the_post(); ?>
            <!--
                        echo 'This is the format: ' . get_post_format();
                        This code line will print the current format of the post 
                    -->

            <?php
                            if ($i==0): $column =12; $class = ' first-row-padding';
                            elseif ($i > 0 && $i <= 2): $column = 6; $class = ' second-row-padding';
                            elseif ($i > 2): $column = 4; $class = ' third-row-padding';
                            endif;
                        ?>
            <div class="col-xs-<?php echo $column; echo $class; ?>">

                <?php if (has_post_thumbnail()):
                    
                    $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                endif;

                ?>


                <div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">

                    <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h1>'); ?>

                    <small><?php the_category(' '); ?></small>
                    <!--we add the single quotes and a space inside the category because to remove the list circle.-->
                </div>
            </div>

            <?php $i++; endwhile;

            endif;
                            
            ?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>