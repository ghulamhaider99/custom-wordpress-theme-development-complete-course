<?php
/*
* this template is used to display singel posts
*/
get_header();
?>

<div class="text-show">
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
    <div class="post-img">
    <?php the_post_thumbnail('home-featured') ?>
    </div>
    <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
   <?php endwhile; 
endif; 
?>
</div>
<?php //get_sidebar(); ?>    
<?php get_footer(); ?>