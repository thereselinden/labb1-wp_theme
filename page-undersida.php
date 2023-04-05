<?php get_header() ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">

					<?php if (have_posts()) {
						while (have_posts()) { ?>
							<h1> <?php the_title(); ?> </h1>
					<?php
							the_post();
							the_content();
						}
					} ?>

				</div>
				<aside id="secondary" class="col-xs-12 col-md-3">
					<?php wp_nav_menu(['theme_location' => 'aside-menu']); ?>
				</aside>
			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>