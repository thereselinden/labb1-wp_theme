<?php
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php wp_title($sep = '') ?></h1>
          <p>Hittade inget på denna sida, testa gör en sökning!</p>
          <?php get_search_form(); ?>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
