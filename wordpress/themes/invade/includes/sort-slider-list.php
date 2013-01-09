<?php
	query_posts( array(
		'post_type' => 'sortslider',
		'posts_per_page' => get_option('wpninja_home_sortslider_posts_num')
		)
	);
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<li class="item">
		<h3 class="title"><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<?php $sign = get_post_meta(get_the_ID(), 'tj_sortslider_sign', TRUE);?>
		<span class="meta"><?php echo stripslashes(htmlspecialchars_decode($sign)); ?></span>
	</li>

<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_postdata();?>

