<!--
<?php
	query_posts( array(
		'post_type' => 'slider',
		'posts_per_page' => get_option('wpninja_home_slides_num')
		)
	);
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<li class="item">
		<img src="<?php echo get_post_meta(get_the_ID(), 'tj_slider_image', TRUE); ?>" />
	</li>

<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_postdata();?>


-->

<li class="item">
	<img alt="slider images" data-left="-50" data-move="+20" id="slider-1-1" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-girl.png" >
	<img alt="slider images" data-left="520" data-move="-40" id="slider-1-2" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-font-1.png" >
	<ul data-left="520" data-move="-40" id="slider-1-3" class="slider-item">
		<li>PSD to Wordpress Service for Agencies & Designers</li>
	</ul>
	<img alt="slider images" data-left="440" data-move="-40" id="slider-1-4" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-psdwp.png" >
</li>

<li class="item">
	<img alt="slider images" data-left="-60" data-move="+20" id="slider-2-1" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-fb.png" >
	<img alt="slider images" data-left="530" data-move="-20" id="slider-2-2" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-font-2.png" >
	<ul data-left="530" data-move="-20" id="slider-2-3" class="slider-item">
		<li>Customization</li>
		<li>Plugin Installation</li>
		<li>Implementation & Set-up</li>
		<li>Widgets</li>
	</ul>
</li>

<li class="item">
	<img alt="slider images" data-left="20" data-move="+10" id="slider-3-1" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-hz.png" >
	<img alt="slider images" data-left="500" data-move="-40" id="slider-3-2" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-font-3.png" >
	<ul data-left="500" data-move="-40" id="slider-3-3" class="slider-item">
		<li>Responsive Customer Support</li>
		<li>Fast Turnaround</li>
		<li>Expert Service</li>
		<li>No Hidden Fees</li>
	</ul>
</li>

<li class="item">
	<img alt="slider images" data-left="-20" data-move="+20" id="slider-4-1" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-girl-4.png" >
	<img alt="slider images" data-left="540" data-move="-40" id="slider-4-2" class="slider-item" src="<?php bloginfo( 'template_url' ); ?>/images/slider-font-4.png" >
	<ul data-left="540" data-move="-40" id="slider-4-3" class="slider-item">
		<li>White Labelled Staging Server</li>
		<li>NDA for Complete Secrecy</li>
		<li>Highly Experienced in working with Designers</li>
		<li>Excellent Track Record</li>
	</ul>
</li>







