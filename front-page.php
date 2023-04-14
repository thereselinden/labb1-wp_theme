<?php $image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
?>

<?php get_header() ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
          ?>
              <div class="hero">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>">
                <div class="text">
                  <?php the_content(); ?>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>