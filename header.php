<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head() ?>
</head>

<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-sm-6">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
        $logo_alt_text = get_post_meta(
          $custom_logo_id,
          '_wp_attachment_image_alt',
          true
        );

        if (has_custom_logo()) { ?>
          <a class="logo" href=<?php echo get_home_url() ?>>
            <?php echo '<img src="' . esc_url($logo[0]) . '" alt="' . $logo_alt_text . '" class="logo-img">'; ?>
          </a>

        <?php } else { ?>
          <a class="logo" href=<?php echo get_home_url() ?>>
            <?php echo get_bloginfo('name') ?>
          </a>
        <?php }
        ?>

      </div>

      <div class="col-sm-6 hidden-xs">
        <?php echo get_search_form() ?>
      </div>
      <div class="col-xs-4 text-right visible-xs">
        <div class="mobile-menu-wrap">
          <i class="fa fa-search"></i>
          <i class="fa fa-bars menu-icon"></i>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="mobile-search">
  <?php get_search_form(); ?>
</div>

<nav id="nav">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
      </div>
    </div>
  </div>
</nav>

<body <?php body_class() ?>>