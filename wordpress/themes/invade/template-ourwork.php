<?php
/*
Template Name: Ourwork
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="caption">
		<div class="wrap">
			<h3 class="caption-title"><?php the_title(); ?></h3>
		</div>
	</section>
	<?php endwhile;endif; ?>

	<section id="content" class="wrap">
		<section class="work-list">
			<ul>
				<?php get_template_part('includes/home-work-list'); ?>
			</ul>
		</section>

		<section class="meta-info">
			<p>Dev: WPNinjas</p>
			<p>Design: Various Agencies</p>		
		</section>

	</section><!-- #content -->
	
<?php get_footer(); ?>
