<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php
	        $image = array();
			$image[0] = get_post_meta(get_the_ID(), 'tj_portfolio_image1', TRUE);
			$image[1] = get_post_meta(get_the_ID(), 'tj_portfolio_image2', TRUE);
			$image[2] = get_post_meta(get_the_ID(), 'tj_portfolio_image3', TRUE);
			$image[3] = get_post_meta(get_the_ID(), 'tj_portfolio_image4', TRUE);
			$image[4] = get_post_meta(get_the_ID(), 'tj_portfolio_image5', TRUE);
	        $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( '9999','9999' ), false, '' );
	        $have_img = FLASE;
	        $count = 0;
	        for($i=0;$i<5;$i++){
	            if($image[$i]!=''){
	            	$count++;
	                $have_img = TRUE;
	            }
	        }
	        if ( $src[0] ) {
	            $count++;
	        	$have_img = TRUE;
	        }
	
		?>
		<section id="caption" class="caption-home">
			<div class="wrap">
				<ul id="caption-slider">
					<?php echo stripslashes(htmlspecialchars_decode(get_option('wpninja_home_caption'))); ?>
				</ul>
			</div>
		</section><!-- #caption -->
        <section id="single-portfolio">

        	<section class="wrap">

		    <article class="article">

				<?php if( $have_img ): ?>
					<section id="portfolio-slider">
						<ul class="slider-container">
						<?php if ($src[0]): ?>
							<li class="item"><img alt="slider images" class="slider-item" src="<?php echo $src[0]; ?>" ></li>
						<?php endif;?>
						<?php   for($i=0;$i<5;$i++):?>
						<?php       if($image[$i]):     ?>
							<li class="item"><img alt="slider images" class="slider-item" src="<?php echo $image[$i];?>"></li>
						<?php endif; endfor;?>
						</ul>
						<?php if ( $count > 1 ): ?>
						<div class="slider-flag-prev"></div>
						<div class="slider-flag-next"></div>
						<?php endif; ?>
						<?php if ( $count > 1 ): ?>
						<ul class="slider-controll-list">
							<?php for($i=0;$i<$count;$i++):?>
							<li class="item"></li>
							<?php endfor;?>
						</ul>
						<?php endif; ?>
					</section><!-- .slider -->
				<?php endif;?>

				<?php $site_url = get_post_meta(get_the_ID(), 'tj_portfolio_site_url', TRUE); ?>
				<?php if ($site_url): ?>

				<section class="entry-header">
		    		<h1 class="entry-title"><?php the_title(); ?></h1>
		    		<a target="_blank" class="entry-site-url" href="<?php echo $site_url;?>">Visit site</a>
		    	</section>

				<?php else: ?>	

		    	<h1 class="entry-title"><?php the_title(); ?> </h1>

				<?php endif; ?>

				
				<?php if(get_the_content('')!=''):?>
					<div class="entry-content">
						<?php the_content(''); ?>
						<?php edit_post_link( __('[Edit]', 'themejunkie'), '<span class="edit-post">', '</span>' ); ?>						
					</div><!-- .entry-content -->
				<?php endif;?>

	  	    </article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; else: ?>
	
			<article class="wrap">
				<h1 class="entry-title"><?php _e('Error 404 - Not Found', 'themejunkie') ?></h1>
				<div class="entry-content">
					<p><?php _e("Sorry, but you are looking for something that isn't here.", "themejunkie") ?></p>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
	
		<?php endif; ?>

		<aside id="sidebar">
	    	<div class="widget">
	    		<h3 class="widget-title"><span><?php _e('Overview', 'themejunkie') ?></span></h3>						
	        	<?php
					$caption = get_post_meta(get_the_ID(), 'tj_portfolio_caption', TRUE);
				?>
	        	<div class="portfolio-meta">
					<?php if($caption != '') : ?>
						<p class="caption">
							<?php echo stripslashes(htmlspecialchars_decode($caption)); ?>
						</p>
					<?php  else : echo '<p>Please write the portfolio caption.</p>'; endif; ?>
					<?php $terms = get_the_terms( get_the_ID(), 'portfolio-type' ); ?>
					<?php if(is_array($terms)){?>
						<h3 class="portfolio-type"><?php _e('Portfolio Types', 'themejunkie'); ?></h3>			
						<ul>
							<?php foreach ($terms as $term) :  ?>
								<li>-<?php echo $term->name; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php } else { ?>
						<p><?php _e('No Portfolio Types Exist.', 'themejunkie'); ?></p>
					<?php }?>		
				</div><!-- .portfolio-meta -->
				

			</div><!-- .widget -->
			<?php if ( get_post_meta(get_the_ID(), 'tj_portfolio_tags', TRUE) ): ?>
			<div class="widget tags">
				<h3 class="widget-title"><span><?php _e('Tags', 'themejunkie'); ?></span></h3>
				<ul><?php echo stripslashes(htmlspecialchars_decode(get_post_meta(get_the_ID(), 'tj_portfolio_tags', TRUE))); ?></ul>
			</div>
			<?php endif; ?>
		</aside><!-- #sidebar -->

		</section>

	</section><!-- #single-portfolio -->
	
<?php get_footer(); ?>