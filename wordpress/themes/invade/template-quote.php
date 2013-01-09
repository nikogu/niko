<?php
/*
Template Name: Quote
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="caption">
		<div class="wrap">
			<h3 class="caption-title"><?php the_title(); ?></h3>
		</div>
	</section><!-- #caption -->
	<article class="quote-article wrap">
		<?php the_content(); ?>	
		<p>If you have a business enquiry or would like to partner with us, please email <a href="mailto:business@wpninja.com.au">business@wpninja.com.au</a></p>
	</article>
	<?php endwhile; else: ?>
	<?php endif; ?>
<?php get_footer(); ?>
