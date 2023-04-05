<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php wp_title($sep = '') ?></h1>

          <?php while (have_posts()) {
            the_post(); ?>
            <article>
              <?php if (is_home()) {  ?>
                <!-- <?php the_post_thumbnail(array(636, 424)); ?> -->
                <?php the_post_thumbnail(); ?>

                <h2>
                  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h2>
                <ul class="meta">
                  <li>
                    <i class="fa fa-calendar"></i>
                    <?php echo get_the_date(); ?>
                  </li>
                  <li>
                    <i class="fa fa-user"></i>
                    <a href=" <?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php the_author(); ?></a>
                  </li>
                  <li>
                    <i class="fa fa-tag"></i>
                    <?php the_category($separator = ', '); ?>
                  </li>
                </ul>
              <?php
                the_excerpt();
              } ?>
            </article>
          <?php } ?>


        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <ul>
              <li>
                <form id="searchform" class="searchform">
                  <div>
                    <!-- <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" /> -->
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