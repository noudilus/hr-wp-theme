<header class="navbar" role="banner">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
				<span class="navbar-toggle__label">menu</span>
				<span class="fa fa-navicon"></span>
			</button>
			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
					<img width="175" src="<?= get_template_directory_uri(); ?>/dist/images/logo-flat-v2.svg">
			</a>
		</div>

    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
			endif;
			?>
		</nav>
	</div>
</header>