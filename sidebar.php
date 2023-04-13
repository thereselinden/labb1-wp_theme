<div id="sidebar">
  <ul>
    <li>
      <label for="s">Sök efter:</label>
      <?php get_search_form() ?>
    </li>
  </ul>
  <ul role="navigation">
    <li class="pagenav">
      <?php dynamic_sidebar('aside_area_one'); ?>
    </li>
    <li>
      <?php dynamic_sidebar('aside_area_two'); ?>
    </li>
    <li class="categories">
      <?php dynamic_sidebar('aside_area_three'); ?>
  </ul>
</div>