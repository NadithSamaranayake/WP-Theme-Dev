<?php get_header();?>

<div class="row">

    <div class="col-xs-12 col-sm-8">

        <?php if (have_posts()):
        
            while (have_posts()): the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

            <?php if (has_post_thumbnail()): ?>

            <div class="pull-right">
                <!--The pull-right class will align the post thumbnail to the right-->
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>

            <?php endif; ?>

            <small><?php the_category(' ');?>||<?php the_tags(); ?>
                || <?php edit_post_link();?></small>
            <!--The edit_post_link() enables the admin to edit the post content when he is logged in as the admin-->

            <?php the_content(); ?>

            <hr>

            <?php if (comments_open()) {
                comments_template();
            } else {
                echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
            } ?>

        </article>

        <?php endwhile;

    endif;

    ?>
    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>