<?php
/*
* this template is used to display about template
* Template Name: About Template
*/

get_header();
?>
<div class="header_image2">
   <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
   <img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
         </div>
<div class="text-show">
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
   <?php endwhile; 
endif; 
?>
</div>
<?php //get_sidebar(); ?>    
<?php get_footer(); ?>