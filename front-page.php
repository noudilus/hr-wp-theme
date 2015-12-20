<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>

	<section class="hero">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="proposition">
						<div class="proposition__title">Met <span class="proposition__title--italic">menselijke</span> betrokkenheid</div>
						<h2 class="proposition__subtitle">In huiselijke sfeer kunt u dag en nacht uw dierbare bezoeken.</h2>
						<a href="/" class="proposition__cta proposition__cta--large">Over het Uitvaarthuis</a>
						<a href="/" class="proposition__cta proposition__cta--large">Direct na overlijden</a>
					</div>
				</div>
			</div>
		</div>
	</section>

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

	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<fieldset>
			<input type="text" class="query" name="s" value="<?php the_search_query(); ?>" title="Typ hier je zoekopdracht..."  />
			<input type="submit" class="submit" value="" />
		</fieldset>
	</form>

<?php endwhile; ?>
