<?php get_header(); ?>

	<section id="content">
		<div id="cat-alert">
			<p><span class="icon-smiley"></span>hi，这是搜索<span class="type"><?php echo wp_specialchars($s); ?></span>的结果~</p>
		</div>
		<ul id="book-post-list">
			<?php get_template_part('includes/book-list'); ?>
		</ul>
	</section><!-- #content -->
	
<?php get_footer(); ?>