<?php get_header() ?>
<!-- TODO! Post thumbail sätter inte höjd auto har nu satt det som CSS i anpassat wp admin - KOLLA MER! -->
<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero">

            <?php if (have_posts()) {
              while (have_posts()) {
                the_post(); ?>
                <?php the_post_thumbnail('full'); ?>
                <div class="text">
                  <?php the_content(); ?>
                </div>
            <?php }
            } ?>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>