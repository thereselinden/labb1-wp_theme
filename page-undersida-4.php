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
          <?php the_post_thumbnail('large'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>