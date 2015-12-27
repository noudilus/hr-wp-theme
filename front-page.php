<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>

	<?php if( have_rows('homepage-slider') ): ?>
	<section class="slides owl-carousel owl-theme">

		<?php while( have_rows('homepage-slider') ): the_row();
		$image = get_sub_field('slider-image');
		$title = get_sub_field('slider-title');
		$copy = get_sub_field('slider-copy');
		$url1 = get_sub_field('slider-url-1');
		$url1_title = get_sub_field('slider-link-text-1');
		$url2 = get_sub_field('slider-url-2');
		$url2_title = get_sub_field('slider-link-text-2');
		?>

		<div class="hero" style="background-image: url('<?php echo $image ?>')">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<div class="proposition">
							<div class="proposition__title"><?php echo $title ?></div>
							<h2 class="proposition__subtitle"><?php echo $copy ?></h2>
							<a href="<?php echo $url1 ?>" class="proposition__cta proposition__cta--large"><?php echo $url1_title ?></a>
							<a href="<?php echo $url2 ?>" class="proposition__cta proposition__cta--large"><?php echo $url2_title ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<div class="search search--top visible-xs">
	<div class="search__wrapper">
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<fieldset>
				<input type="text" class="search__input" name="s" value="<?php the_search_query(); ?>" title="Typ hier je zoekopdracht..." placeholder="Uw zoekopdracht..."/>
				<button type="submit" class="search__icon"></button>
			</fieldset>
		</form>
	</div>
</div>

<section class="quickboxes">
	<div class="container-fluid">
		<div class="row">
			<div class="quickbox">
				<div class="quickbox__image quickbox__image--werkwijze" style="background-image: url('<?php the_field('quickbox-left-image'); ?>')"></div>
				<div class="quickbox__inner">
					<div class="quickbox__title">
						<?php the_field('quickbox-left-title'); ?>
					</div>
					<div class="quickbox__copy">
						<?php the_field('quickbox-left-copy'); ?>
					</div>
					<a href="<?php the_field('quickbox-left-link'); ?>" class="link">
						<?php the_field('quickbox-left-linktext'); ?>
					</a>
				</div>
			</div>
			<div class="quickbox">
				<div class="quickbox__image quickbox__image--werkwijze" style="background-image: url('<?php the_field('quickbox-right-image'); ?>')"></div>
				<div class="quickbox__inner">
					<div class="quickbox__title">
						<?php the_field('quickbox-right-title'); ?>
					</div>
					<div class="quickbox__copy">
						<?php the_field('quickbox-right-copy'); ?>
					</div>
					<a href="<?php the_field('quickbox-right-link'); ?>" class="link">
						<?php the_field('quickbox-right-linktext'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="streamerbox">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="streamer">
					<div class="streamer__title">
						Wij zijn dag en nacht voor u bereikbaar op <span class="streamer__title--phone"><i class="fa fa-phone"></i> <strong>040780 8000</strong></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="highlighted">
	<div class="container-fluid">
		<div class="row">
			<div class="highlightblock">
				<?php $posts = get_field('highlightbox');
				if( $posts ): ?>
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<div class="highlightbox">
					<div class="highlightbox__image"><?php the_post_thumbnail(); ?></div>
					<div class="highlightbox__inner">
						<h1 class="highlightbox__title"><?php the_title(); ?></h1>
						<h2 class="highlightbox__subtitle"><?php the_field('description'); ?></h2>
						<div class="highlightbox__copy"><?php echo get_the_excerpt(); ?></div>
						<a href="<?php the_permalink(); ?>" class="link">Meer informatie</a>
					</div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>

	<sidebar class="sidebar sidebar--top">
		<div class="search hidden-xs">
			<div class="search__wrapper">
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
					<fieldset>
						<input type="text" class="search__input" name="s" value="<?php the_search_query(); ?>" title="Typ hier je zoekopdracht..." placeholder="Uw zoekopdracht..."/>
						<button type="submit" class="search__icon"></button>
					</fieldset>
				</form>
			</div>
		</div>

		<div class="attention">
			<div class="attention__wrapper">
				<div class="attention__title">Reacties van nabestaanden</div>
				<div class="attention__author">Reactie van <span class="attention__author attention__author--name"><?php the_field('home-review-author'); ?> :</span></div>
				<div class="attention__copy attention__copy--quote">
					<?php the_field('home-review-copy'); ?>
				</div>
				<a href="/reacties" class="link">Naar reactiepagina</a>
			</div>
		</div>
		<a href="/mijn-persoonlijke-uitvaart" class="book">
			<div class="book__image"></div>
			<div class="book__wrapper">
				<h3 class="book__title">Leg uw uitvaartwensen vast</h3>
				<div class="book__subtitle">Vraag het gratis boekje aan
					<div class="fa fa-arrow-circle-right"></div>
				</div>
			</div>
		</a>
	</sidebar>

</div>
</div>
</section>

<section class="information">
	<div class="container-fluid">
		<div class="information__title">
			Uitgebreide informatie
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<?php $posts = get_field('information-left');
				if( $posts ): ?>
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<a href="<?php the_permalink(); ?>" class="information__link">
					<h3 class="information__subtitle">
						<div class="fa fa-arrow-circle-right"></div> <?php the_title(); ?></h3>
						<span class="information__link__copy">
							<?php the_field('description'); ?>
						</span>
					</a>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php $posts = get_field('information-center');
			if( $posts ): ?>
			<?php foreach( $posts as $post):?>
			<?php setup_postdata($post); ?>
			<a href="<?php the_permalink(); ?>" class="information__link">
				<h3 class="information__subtitle">
					<div class="fa fa-arrow-circle-right"></div> <?php the_title(); ?></h3>
					<span class="information__link__copy">
						<?php the_field('description'); ?>
					</span>
				</a>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php $posts = get_field('information-right');
		if( $posts ): ?>
		<?php foreach( $posts as $post):?>
		<?php setup_postdata($post); ?>
		<a href="<?php the_permalink(); ?>" class="information__link">
			<h3 class="information__subtitle">
				<div class="fa fa-arrow-circle-right"></div> <?php the_title(); ?></h3>
				<span class="information__link__copy">
					<?php the_field('description'); ?>
				</span>
			</a>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>
</div>
</div>
</section>
<?php endwhile; ?>
