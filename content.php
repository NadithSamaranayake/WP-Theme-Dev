<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h1>'); ?>

        <small> Posted on:
            <?php the_time('F j, Y'); ?> at
            <?php the_time('g:i a') ?>, in
            <?php the_category(); ?>
        </small>
        <!--
        This code line is used to display the time which the post was created and the category name of our post
        The F j, Y is used to print the day and the g:i a is used to print the time
        -->
    </header>

    <div class="row">

        <?php if (has_post_thumbnail()): ?>

        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail">
                <?php the_post_thumbnail('medium'); ?>
            </div>
            <!--
                    This code line will display the image that we have set for the blog post.
                    the 'thumbnail' attribute is used to give a specific size to the image because the image will take the default size.
                        thumbnail,large,full
                -->
        </div>

        <div class="col-xs-12 col-sm-8">
            <?php the_content(); ?>
            <hr>
        </div>

        <?php else: ?>

        <div class="col-xs-12">
            <?php the_content(); ?>
        </div>

        <?php endif; ?>

    </div>

</article>