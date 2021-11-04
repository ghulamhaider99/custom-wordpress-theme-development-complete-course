<?php
/*
* this template is used to display about template
* Template Name: Homepage Template
*/

get_header();
?>
<div class="header_image2">

<?php 
    $banner_status = get_theme_mod('firsttheme_home_banner', 'yes');
?>

<?php if ($banner_status == "yes"): ?>
   <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
   <img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
<?php endif; ?>
    </div>

 
<div class="text-show">
<div class="bacground-post">   
<span style="text-align:center">
<h1>Hi Welcome To Our Site!</h1> 
<p><?php the_content(); ?></p>
</span>
</div>



<!--------show brands logo project post-------->

<div class="home-carousel">
<div class="owl-carousel">
    <?php 
    $args = array(
        'post_type'  =>  'project',
        'posts_per_page' => 7
    );
    $tech_posts = new WP_Query($args);

    if ( $tech_posts-> have_posts() ) : 
        while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
        
<?php $project_url = get_post_meta( get_the_ID(), 'project01', true) ?>

<a href="<?php echo $project_url ?>" target="_blank">        
    <?php the_post_thumbnail('medium') ?>
</a>
    <?php endwhile; 
    endif; 
    wp_reset_postdata();
    ?>
</div>
</div>
<!----------------------------------------->



<!----------------------------------------->
<div class="bacground-custom-post">
<div class="custom_post">

<?php 
$args = array(
    'post_type'  =>  'service',
    'posts_per_page' => 3
);
$tech_posts = new WP_Query($args);

if ( $tech_posts-> have_posts() ) : 
    while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid-custom3') ) ?>
<div class="cont-custom-post">   
    <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt() ?>
</div>
   <?php endwhile; 
endif; 
wp_reset_postdata();
?>

</div>
</div>
<!----------------------------------------->







<div class="category-1">
<div class="heading">
    <h1 style="text-align:center"><?php echo get_theme_mod('firsttheme_featured_block1', 'Latest Post From Technology') ?></h1>
</div>

<?php 
$args = array(
    'cat'  =>  4,
    // 'posts_per_page' => 3
);
$tech_posts = new WP_Query($args);

if ( $tech_posts-> have_posts() ) : 
    while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid2') ) ?>
<div class="cont">   
    <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt() ?>
</div>
   <?php endwhile; 
endif; 
wp_reset_postdata();
?>
</div>
<!----------------------------------------->

<div class="category-2">
<div class="heading">
   <h1 style="text-align:center"><?php echo get_theme_mod('firsttheme_featured_block2', 'Latest Post From Media') ?></h1>
</div>

<?php 
$args = array(
    'cat'  =>  3,
    // 'posts_per_page' => 3
);
$tech_posts = new WP_Query($args);

if ( $tech_posts-> have_posts() ) : 
    while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid2') ) ?>
<div class="cont">   
    <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt() ?>
</div>
   <?php endwhile; 
endif; 
wp_reset_postdata();
?>
</div>







</div>


<?php //get_sidebar(); ?>    
<?php get_footer(); ?>