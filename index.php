<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php wp_title($sep = '') ?></h1>

          <?php while (have_posts()) {
            the_post();
            if (empty(get_the_content())) { ?>
              <h4>Under utveckling</h4>
              <p>Kom tillbaka senare för mer information 🫶🏻</p>
          <?php }
            the_content();
          }
          ?>

        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>