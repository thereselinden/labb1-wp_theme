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