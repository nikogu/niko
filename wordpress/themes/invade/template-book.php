<?php
/*
Template Name: Book
*/
?>
<?php get_header(); ?>

	<section id="content">
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
