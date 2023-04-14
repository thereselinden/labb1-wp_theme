<?php $image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
?>

<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">

          <?php if (have_posts()) {
            while (have_posts()) { ?>
              <h1> <?php the_title(); ?> </h1>
          <?php
              the_post();
              the_content();
            }
          } ?>

        </div>
        <div class="col-xs-12 col-sm-4 col-md-6 contact">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $image_alt ?>">

        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>