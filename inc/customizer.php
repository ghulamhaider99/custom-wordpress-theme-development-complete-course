<?php
/*
*myfirstwrodparess theme customizer
*/


function firsttheme_customize_register( $wp_customize ) {

  $wp_customize->add_panel( 'firsttheme_settings', array(
    'title'          => __( 'FirstTheme Settings' ),
    'description'    => '',
    'priority'       => 10
) );

$wp_customize->add_section( 'firsttheme_colors', array(
    'title' => 'Colors',
    'panel' => 'firsttheme_settings'
) );

//-------------------------------------------//

$wp_customize->add_section( 'firsttheme_labels', array(
  'title' => 'Labels',
  'panel' => 'firsttheme_settings'
) );


//-------------------------------------------//


$wp_customize->add_section( 'firsttheme_misc', array(
  'title' => 'Misc',
  'panel' => 'firsttheme_settings'
) );


//-------------------------------------------//

$wp_customize->add_setting( 'firsttheme_nav_color', array(
     'type' => 'theme_mod',
     'capability' => 'edit_theme_options',
     'default' => '#FF0000',
     'transport' => 'refresh', 
     'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( 'firsttheme_nav_color', array(
  'label' => __( 'Menu Background' ), 
  'type'=> 'color',
   'section' => 'firsttheme_colors'
) );

//-------------------------------------//

$wp_customize->add_setting( 'firsttheme_body_color', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
  'default' => '#FFFFFF',
  'transport' => 'refresh', 
  'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( 'firsttheme_body_color', array(
'label' => __( 'Body Background' ), 
'type'=> 'color',
'section' => 'firsttheme_colors'
) );

//-------------------------------------//

$wp_customize->add_setting( 'firsttheme_featured_block1', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
  'default' => 'Latest Post From Technology',
  'transport' => 'refresh', 
  'sanitize_callback' => 'esc_attr'
) );
$wp_customize->add_control( 'firsttheme_featured_block1', array(
'label' => __( 'Featured Box 1 Title' ), 
'type'=> 'text',
'section' => 'firsttheme_labels'
) );

//-------------------------------------//

$wp_customize->add_setting( 'firsttheme_featured_block2', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
  'default' => 'Latest Post From Media',
  'transport' => 'refresh', 
  'sanitize_callback' => 'esc_attr'
) );
$wp_customize->add_control( 'firsttheme_featured_block2', array(
'label' => __( 'Featured Box 2 Title' ), 
'type'=> 'text',
'section' => 'firsttheme_labels'
) );

//-------------------------------------//

$wp_customize->add_setting( 'firsttheme_home_banner', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
  'default' => 'yes',
  'transport' => 'refresh', 
  'sanitize_callback' => 'esc_attr'
) );
$wp_customize->add_control( 'firsttheme_home_banner', array(
'label' => __( 'Show/Hide Home Banner' ), 
'type'=> 'radio',
'section' => 'firsttheme_misc',
'choices' => array(
  'yes' => 'Yes',
  'no'  => 'No'
)
) );

//-------------------------------------//

}

add_action('customize_register', 'firsttheme_customize_register');
?>