<?php
/*
* this template is used to display Home
*/
get_header();
?>


<div class="home-main">
    <div class="row">
        
        <div class="header_image">
        <img src="<?php header_image() ?>" width="<?php echo absint(get_custom_header()->width)?>"  height="<?php echo absint(get_custom_header()->height)?>" class="img-fluid">
            </div>

<div class="home-posts col-7"> 
<?php 
//get_template_part('template-parts/home', 'featured'); 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
<div class="posts-cs">
<a href="<?php the_permalink() ?>">
<?php //the_post_thumbnail('medium')
            the_post_thumbnail('home-featured')
   ?>
</a>
        <h1><?php the_title(); ?></h1>
        <p><?php the_excerpt(); ?></p>
        <p><strong>Posted By:</strong> <?php the_author(); ?>
        <strong>Posted On:</strong> <?php the_date() ?></p><hr><br><br>
</div>
   <?php endwhile; 
endif; 
?>
<div class="pagination">
<?php echo paginate_links() ?>
</div>
</div>
        
<div class="home-sidebar col-3">
<?php get_sidebar(); ?>    
</div>
<?php get_footer(); ?>



















