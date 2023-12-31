<!--
    This is not being used because we have to get the column variable from the index.php file and we'll have to set
    the variable to global.
-->

<div class="col-xs-<?php echo $column; ?>">
    <?php if (has_post_thumbnail()): ?>

    <div class="thumbnail">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div>

    <?php endif; ?>

    <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h1>'); ?>

    <small><?php the_category(' '); ?></small>
    <!--we add the single quotes and a space inside the category because to remove the list circle.-->

</div>