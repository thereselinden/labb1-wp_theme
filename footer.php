<footer id="footer">
  <div class="container">
    <div class="row top">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <?php dynamic_sidebar('footer_area_one'); ?>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <?php dynamic_sidebar('footer_area_two'); ?>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <?php dynamic_sidebar('footer_area_three'); ?>
        <!-- <?php wp_nav_menu([
                'theme_location' => 'social-menu',
                'items_wrap'     => '<ul>%3$s</ul>',
                'menu_class' => 'social',
                'container' => false,
              ]) ?> -->
      </div>
    </div>
    <div class="row bottom">
      <div class="col-xs-12">
        <?php dynamic_sidebar('footer_area_four') ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>