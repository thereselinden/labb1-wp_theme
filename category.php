<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <?php $page_object = get_queried_object(); ?>
          <h1>Arkiv: <?php echo $page_object->cat_name; ?></h1>

          <?php while (have_posts()) {
            the_post();
            get_template_part('template-parts/post-excerpt');
          } ?>

          <?php the_posts_pagination(); ?>
        </div>

        <aside id="secondary" class="col-xs-12 col-md-3">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>