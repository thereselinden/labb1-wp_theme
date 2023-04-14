<?php $image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
?>

<article class='post-excerpt'>
  <img src="<?php the_post_thumbnail_url() ?>" alt="<?php echo $image_alt ?>">
  <h2>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  </h2>
  <?php get_template_part('template-parts/post-meta'); ?>

  <?php
  the_excerpt(); ?>
</article>