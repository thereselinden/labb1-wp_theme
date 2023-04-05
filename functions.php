<?php

/****
  Register CSS StyleSheets
 */
function labb1_register_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('labb1_main', get_template_directory_uri() . '/assets/css/style.css', array('labb1_bootstrap'), $version, 'all');
  wp_enqueue_style('labb1_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), false, 'all');
  wp_enqueue_style('labb1_fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), false, 'all');
}

add_action('wp_enqueue_scripts', 'labb1_register_styles');

/****
  Register a new script
 */
function labb1_register_scripts()
{
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/assets/js/script.js',
    ['jquery-js'],
    false,
    true
  );

  wp_enqueue_script(
    'jquery-js',
    get_template_directory_uri() . '/assets/js/jquery.js',
    [],
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'labb1_register_scripts');

/****
  Theme support to dynamically add title tag  
 */

function labb1_theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'labb1_theme_setup');

/**** 
  Theme support to set up menues 
 */
function labb1_register_my_menus()
{
  register_nav_menus([
    'header-menu' => __('Header Menu'),
    'aside-menu' => __('Aside Menu'),
  ]);
}
add_action('after_setup_theme', 'labb1_register_my_menus');

/****
  Custom widgets
 */
function labb1_register_widget_areas()
{
  register_sidebar(array(
    'name'          => 'Header area one',
    'id'            => 'header_area_one',
    'description'   => 'This widget areas purpose is to allow search on site',
    'before_widget' => '',
    'after_widget'  => '',

  ));

  register_sidebar(array(
    'name'          => 'Header area mobile',
    'id'            => 'header_area_mobile',
    'description'   => 'This widget areas purpose is to allow search on site',
    'before_widget' => '',
    'after_widget'  => '',

  ));
  register_sidebar(array(
    'name'          => 'Aside area one',
    'id'            => 'aside_area_one',
    'description'   => 'This widget areas purpose is to allow search',
    'before_widget' => '',
    'after_widget'  => '',
  ));

  register_sidebar(array(
    'name'          => 'Aside area two',
    'id'            => 'aside_area_two',
    'description'   => 'This widget areas purpose is to display site pages',
    'before_widget' => '',
    'after_widget'  => '',
  ));

  register_sidebar(array(
    'name'          => 'Aside area three',
    'id'            => 'aside_area_three',
    'description'   => 'This widget areas purpose is to display post archive',
    'before_widget' => '',
    'after_widget'  => '',
  ));

  register_sidebar(array(
    'name'          => 'Aside area four',
    'id'            => 'aside_area_four',
    'description'   => 'This widget areas purpose is to display post categories',
    'before_widget' => '',
    'after_widget'  => '',
  ));

  register_sidebar(array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'This widget areas purpose is for about us',
    'before_widget' => '',
    'after_widget'  => '',

  ));

  register_sidebar(array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'This widget areas purpose is for contact information',
    'before_widget' => '',
    'after_widget'  => '',

  ));

  register_sidebar(array(
    'name'          => 'Footer area three',
    'id'            => 'footer_area_three',
    'description'   => 'This widget areas purpose is for social media information',
    'before_widget' => '',
    'after_widget'  => '',

  ));
  register_sidebar(array(
    'name'          => 'Footer area four',
    'id'            => 'footer_area_four',
    'description'   => 'This widget areas purpose is to display copyrights',
    'before_widget' => '',
    'after_widget'  => '',

  ));
}

add_action('widgets_init', 'labb1_register_widget_areas');
