<?php
/*
* this is our function file
*/
add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
// add_image_size('name, width, height, crop');
add_image_size( 'home-featured', 770, 480, array( 'center', 'center' ) ); 
add_theme_support('atuomatic-feed-links');

register_nav_menus( array(
       'primary' => __( 'Primary Menu', 'myfirsttheme' ),
   ) );
/************custom header image ************/
$arge = array(
    'default-image' => get_template_directory_uri(). '/assets/images/default-hader.jpg',
    'default-text-color' => '000',
    'width'  =>   1920,
    'height' =>   400,
    'flex-width'  => true,
    'flex-height' => true,
);
add_theme_support('custom-header', $arge);
/************ custom header end ************/

//////////images/css/js/ showing from assets//////////
function myfirsttheme_theme_scripts() 
{
       wp_enqueue_style('bootstrap-css', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css');
       wp_enqueue_style('carousel-css', get_template_directory_uri(). '/owl-carousel/assets/owl.carousel.min.css');
       wp_enqueue_style('style', get_stylesheet_uri() );
       wp_enqueue_script('jquery'); 
       wp_enqueue_script('my_js', get_template_directory_uri(). '/assets/js/my_js.js');
       wp_enqueue_script('home-carousel-js', get_template_directory_uri(). '/assets/js/home-carousel.js');
       wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/assets/bootstrap/js/bootstrap.min.js');
       wp_enqueue_script('owl-carousel-js', get_template_directory_uri(). '/owl-carousel/owl.carousel.min.js');

} 
add_action('wp_enqueue_scripts', 'myfirsttheme_theme_scripts');
///////images/css/js/ showing from assets end///////

/************ primary sidebar ************/
function myfirsttheme_widgets_init() {
       register_sidebar( array(
           'name'          => __( 'Primary Sidebar', 'theme_name' ),
           'id'            => 'main_sidebar1',
           'before_widget' => '<aside id="%1$s" class="widget %2$s">',
           'after_widget'  => '</aside>',
           'before_title'  => '<h3 class="widget-title">',
           'after_title'   => '</h3>',
       ) );
/************ primary sidebar end ************/

///////////////footer widgets///////////////
       register_sidebar( array(
           'name'          => __( 'Footer Widget 1', 'theme_name' ),
           'id'            => 'footer-1',
           'before_widget' => '<aside id="%1$s" class="widget %2$s">',
           'after_widget'  => '</aside>',
           'before_title'  => '<h3 class="widget-title">',
           'after_title'   => '</h3>',
       ) );

       register_sidebar( array(
              'name'          => __( 'Footer Widget 2', 'theme_name' ),
              'id'            => 'footer-2',
              'before_widget' => '<aside id="%1$s" class="widget %2$s">',
              'after_widget'  => '</aside>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>',
          ) );

          register_sidebar( array(
              'name'          => __( 'Footer Widget 3', 'theme_name' ),
              'id'            => 'footer-3',
              'before_widget' => '<aside id="%1$s" class="widget %2$s">',
              'after_widget'  => '</aside>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>',
          ) );
   }
   add_action('widgets_init', 'myfirsttheme_widgets_init');
////////////footer widgets end////////////

function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


//include customizer php file
require get_template_directory(). '/inc/customizer.php';

//include custom post services
require get_template_directory(). '/inc/services.php';

//include custom post projects
require get_template_directory(). '/inc/projects.php';

//include custom url metabox
require get_template_directory(). '/inc/url-metabox.php';


?>
