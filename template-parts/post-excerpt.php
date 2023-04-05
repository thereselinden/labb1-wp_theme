<article class='post-excerpt'>
  <?php the_post_thumbnail('full'); ?>

  <h2>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  </h2>
  <?php get_template_part('template-parts/post-meta'); ?>

  <?php
  the_excerpt(); ?>
</article>