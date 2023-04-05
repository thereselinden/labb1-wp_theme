<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php wp_title($sep = '') ?></h1>

          <?php while (have_posts()) {
            the_post();
            get_template_part('template-parts/post-excerpt');
          } ?>

          <?php the_posts_pagination(); ?>

        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <ul>
              <li>
                <form id="searchform" class="searchform">
                  <div>
                    <?php dynamic_sidebar('aside_area_one'); ?>
                  </div>
                </form>
              </li>
            </ul>
            <ul role="navigation">
              <li class="pagenav">
                <?php dynamic_sidebar('aside_area_two'); ?>
              </li>
              <li>
                <?php dynamic_sidebar('aside_area_three'); ?>
              </li>
              <li class="categories">
                <?php dynamic_sidebar('aside_area_four'); ?>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>