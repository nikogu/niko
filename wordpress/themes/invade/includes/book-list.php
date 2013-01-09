<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php 
		$word = get_post_meta(get_the_ID(), 'tj_book_word', TRUE);
		$author = get_post_meta(get_the_ID(), 'tj_book_author', TRUE);
		$date = get_post_meta(get_the_ID(), 'tj_book_date', TRUE);
		$scroe = get_post_meta(get_the_ID(), 'tj_book_score', TRUE);

	?>	
	<li class="item">
		<div class="book-nial"></div>
		<div class="img">
			<a class="img-link" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('book-thumb-big', array('class' => 'book-thumb-big')); ?>
			</a>
			<div class="img-shadow"></div>
		</div>
		<section class="info">
			<section class="info-wrap">
				<section class="info-img">
					<?php the_post_thumbnail('book-thumb-big', array('class' => 'book-thumb-big')); ?>
				</section>
				<section class="info-meta">
					<ul class="meta">
						<li class="title"><span class="icon-bookmark-2"></span><?php the_title(); ?></li>
						<li class="author"><span class="icon-user"></span><?php echo $author; ?></li>
						<li class="date"><span class="icon-clock"></span><?php echo $date; ?></li>
					</ul><!-- meta -->

					<?php $terms = get_the_terms( get_the_ID(), 'book-type' ); ?>
					<ul class="category">
						<li class="icon-heart"></li>
					<?php if(is_array($terms)) { ?>
						<?php foreach ($terms as $term) :  ?>
						<?php $type = $term->name; ?>
						<li><?php echo $type; ?></li>
						<?php endforeach; ?>
					<?php } else { ?>
						<li>Front-End</li>
					<?php }?>
					</ul><!-- category -->

					<ul class="score">
						<li class="explain">推荐指数:</li>
						<?php 
							if ($scroe > 5) {
								$scroe = 5;
							} elseif($scroe < 0) {
								$scroe = 0;
							}	
							for($i=0;$i<5;$i++) {
								if ($scroe > 0) {
									$scroe--;
									echo '<li class="icon-star"></li>';
								} else {
									echo '<li class="icon-star-3"></li>';
								}
							}

						?>
					</ul><!-- score -->
					<a class="info-url" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">点击看看详细的书评</a>
				</section>
			</section>
			<p class="word"><span class="icon-comment"></span><span class="explain">几句话短评:</span><?php echo $word; ?></p>
		</section>
		
	</li>

<?php endwhile; else: ?>

	<li id="no-book">
		<p>不好意思，没有你要找的东西...<img alt="nothing" src="<?php echo home_url(); ?>/wp-includes/images/smilies/hei.gif" ></p>
		<p>你可以再<a class="red to-search" href="#search">搜索</a>一下.</p>
	</li>

<?php endif; ?>
<?php wp_reset_postdata();?>

