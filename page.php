<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<?php while (have_posts()) : the_post(); ?>
	<main class="main">
	<div class="container-fluid">
		<div class="row">
			<article class="content">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  </article>
  <?php if (Setup\display_sidebar()) : ?>
	<aside class="sidebar">
		<?php include Wrapper\sidebar_path(); ?>
	</aside><!-- /.sidebar -->
<?php endif; ?>
		</div>
	</div>
	</main><!-- /.main -->

<?php endwhile; ?>
