<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php 
		$word = get_post_meta(get_the_ID(), 'tj_book_word', TRUE);
		$author = get_post_meta(get_the_ID(), 'tj_book_author', TRUE);
		$date = get_post_meta(get_the_ID(), 'tj_book_date', TRUE);
		$scroe = get_post_meta(get_the_ID(), 'tj_book_score', TRUE);
		$douban = get_post_meta(get_the_ID(), 'tj_book_douban', TRUE);
		$search = get_post_meta(get_the_ID(), 'tj_book_search', TRUE);

	?>	

    <section id="single-book">
    	<section class="info-wrap">
			<section class="info-img">
				<?php the_post_thumbnail('book-thumb-big', array('class' => 'book-thumb-big')); ?>
			</section>
			<section class="info-meta">
				<ul class="meta">
					<li class="title"><span class="icon-bookmark-2"></span><h1><?php the_title(); ?></h1></li>
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
					<li class="explain">评分:</li>
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
				<ul class="support">
					<li><a href="<?php echo $douban; ?>" target="_blank">豆瓣这本书</a></li>
					<li><a href="<?php echo $search; ?>" target="_blank">搜索这本书</a></li>
					<li><a href="<?php echo home_url(); ?>">返回</a><span class="icon-reply"></span></li>
				</ul><!-- support -->
			</section>
		</section>	
		<article class="article">
			<?php the_content(); ?>
		</article><!-- .article -->

		<section id="comments-wrap">
			<?php comments_template(); ?>
		</section>

	<?php endwhile; ?>
	<?php else: ?>	

	<?php endif; ?>

	</section><!-- #single-portfolio -->
	
<?php get_footer(); ?>