<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
<section class="information">
		<div class="information__title">
			Gerelateerde pagina’s:
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
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
		<div class="col-xs-12 col-sm-6">
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
</div>
</section>
