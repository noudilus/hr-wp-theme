<?php
$field = get_field('custom_menu');  // ID
$nav_menu = wp_get_nav_menu_object($field);
$defaults = array(
	'theme_location'  => '',
	'menu'            => $field,
	'container'       => 'div',
	'container_class' => 'subnav',
	'container_id'    => '',
	'menu_class'      => 'subnav__list',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<div class="subnav__title">' . $nav_menu->name . '</div><ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
wp_nav_menu( $defaults );
?>

<div class="search search--contentpage">
			<div class="search__wrapper">
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
					<fieldset>
						<input type="text" class="search__input" name="s" value="<?php the_search_query(); ?>" title="Typ hier je zoekopdracht..." placeholder="Uw zoekopdracht..."/>
						<button type="submit" class="search__icon"></button>
					</fieldset>
				</form>
			</div>
		</div>

<?php dynamic_sidebar('sidebar-primary'); ?>

