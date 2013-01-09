<?php
/*
Template Name: Service
*/
?>
<?php get_header(); ?>


	<?php if ( is_home() ): ?>
	<section id="slider">
		<div class="wrap"></div>
	</section>
	<?php endif; ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="caption">
		<div class="wrap">
			<h3 class="caption-title"><?php the_title(); ?></h3>
		</div>
	</section><!-- #caption -->

	<?php endwhile; else: ?>
	<?php endif; ?>


	<section id="content" class="wrap service-page">

		<section class="wrapper">
			<section class="service-list">
				<ul class="list">
					<li class="item c">
						<p>WordPress<br/>Customization</p>
					</li>
					<li class="item p">
						<p>WordPress<br/>Plugin Installation</p>
					</li>
					<li class="item i">
						<p>WordPress<br/>Implementation & Set-up</p>
					</li>
					<li class="item w">
						<p>WordPress<br/>Widgets</p>
					</li>
				</ul>	
				<article class="article">
					<?php the_content(); ?>
				</article>

			</section><!-- .service-list -->

			<section class="quote">
				<a class="button-quote" href="<?php echo get_option('wpninja_quote_link');?>">request quote</a>
				<section class="care">
				</section>
				<section class="info-slider">
					<ul class="nav">
						<li class="item"></li>
						<li class="item"></li>
						<li class="item"></li>
						<li class="item"></li>
					</ul>
					<ul class="list">
						<?php get_template_part('includes/sort-slider-list'); ?>
					</ul>
				</section>
			</section>
		</section><!-- .wrapper -->

	</section><!-- #content -->

<?php get_footer(); ?>