<?php get_header();?>

<div class="row">

    <div class="col-xs-12 col-sm-8">

        <?php if( have_posts() ):
        
        while(have_posts() ): the_post(); ?>

        <h1> <?php the_title(); ?> </h1>

        <hr>

        <p> <?php the_content(); ?> </p>

        <small> Posted on: <?php the_time('F j, Y'); ?> at <?php the_time( 'g:i a' ) ?>, in <?php the_category(); ?> </small>
            <br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Praesentium magnam omnis numquam, nihil neque nisi laudantium voluptates itaque error dignissimos rerum, quia temporibus. Deleniti dolor perferendis culpa omnis nihil esse.
        <hr>

        <?php endwhile;

    endif;

    ?>
    </div>

    <div class="col-xs-12 col-sm-4">
        <?php dynamic_sidebar('sidebar-2') ?>
    </div>
</div>

<?php get_footer(); ?>