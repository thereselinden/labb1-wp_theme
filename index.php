<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php wp_title($sep = '') ?></h1>

          <?php while (have_posts()) {
            the_post();
            the_content();
          }
          ?>

        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>