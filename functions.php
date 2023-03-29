<?php 
/*
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

/*
  Register a new script
*/

function labb1_register_scripts()
{
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/assets/js/script.js',
    [],
    false,
    true
  );

  // DO I NEED TO ADD ONE FOR JQUERY?
  wp_enqueue_script(
    'jquery-js',
    get_template_directory_uri() . '/assets/js/jquery.js',
    [],
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'labb1_register_scripts');

/* 
  Theme support to dynamically add title tag  
*/
function labb1_theme_setup()
{
  add_theme_support('title-tag');
  //add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'labb1_theme_setup');

?>