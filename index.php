<?php get_header();?>

    <?php if( have_posts() ):
        
        while(have_posts() ): the_post(); ?>

           <h1> <?php the_title(); ?> </h1>
           <small> Posted on: <?php the_time('F j, Y'); ?> at <?php the_time( 'g:i a' ) ?>, in <?php the_category(); ?> </small>
           <!--
            This code line is used to display the time which the post was created and the category name of our post
            The F j, Y is used to print the day and the g:i a is used to print the time
        -->

           <p> <?php the_content(); ?> </p>

           <hr> 

       <?php endwhile;

    endif;

    ?>

<?php get_footer(); ?>

