<?php
/*
* this template is used to display header
*/
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
<?php wp_head() ?>

<style type="text/css">
body {
    background:<?php echo get_theme_mod('firsttheme_body_color', '#FFFFFF') ?>
}
.site-navigation {
    background-color:<?php echo get_theme_mod('firsttheme_nav_color', '#FF0000') ?>
}

</style>
</head>
<body>
<div class="site-main container">
<header class="site-header">
<div class="site-branding">
    <?php the_custom_logo() ?>
</div>
<nav class="site-navigation">

    <?php 
    wp_nav_menu( array(
       'theme_location' => 'primary'
    ) ); ?>
</nav>



</header>
</div>