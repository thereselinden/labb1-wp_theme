<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <?php while (have_posts()) {
            the_post();
            the_content();
          } ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>