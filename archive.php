<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Arkiv: <?php wp_title($sep = '') ?></h1>

          <?php while (have_posts()) {
            the_post();
            get_template_part('template-parts/post-excerpt');
          } ?>
          <?php the_posts_pagination(); ?>

        </div>
        <?php get_template_part('template-parts/aside-bar'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>