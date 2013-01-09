<?php get_header(); ?>

	<section id="content">
		<div id="cat-alert">
			<p><span class="icon-smiley"></span>hi，你现在<span class="type"><?php echo $term;?></span>分类浏览哦~</p>
		</div>
		<ul id="book-post-list">
			<?php
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				query_posts( array(
					'post_type' => 'book',
					'book-type' => $term->slug
				)
			);
			?>
			<?php get_template_part('includes/book-list'); ?>
		</ul>
	</section><!-- #content -->
	
<?php get_footer(); ?>
