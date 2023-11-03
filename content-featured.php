<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail()): ?>

    <div class="thumbnail">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <!--
                    This code line will display the featured image that we have set for the blog post.
                    the 'thumbnail' attribute is used to give a specific size to the image because the image will take the default size.
                        thumbnail,large,full
                -->

    <?php endif; ?>

    <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h1>'); ?>

    <small>
        <?php the_category(); ?>
    </small>

</article>