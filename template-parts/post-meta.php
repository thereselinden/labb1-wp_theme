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