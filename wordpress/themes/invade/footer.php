
		<section id="book-desc">
			<section id="book-desc-close">
				<div class="icon-x-altx-alt"></div>
			</section>
			<section id="book-desc-content"></section>
		</section>

		<ul id="scroll-bar">
			<li class="item to-top"><span class="icon-arrow-up"></span>回顶部</li>
			<li class="item to-comment"><span class="icon-comments-2"></span>去评论</li>
			<li class="item to-bottom"><span class="icon-arrow-down"></span>到底部</li>
		</ul>

	</section><!-- end of wrapper--> 

	<footer id="footer">	
		© 2013 niko的评论 · Designed By · <a href="http://niko-blog.com" target="_blank">Niko</a> Powered By · <a href="http://wordpress.org" target="_blank">WordPress</a>
	</footer>

	<div id="loading"></div>

	<script id="seajsnode" type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/assets/sea-modules/seajs/1.3.0/sea.js"></script>
	<script type="text/javascript">
		//Front End Framework
  		seajs.config({
    		alias: {
      			'jquery': '1.7.2',
      			'modernizr': '2.6.2'
    		}
 		});

  		// seajs in
  		seajs.use("main/0.1.0/main.js");
  		//seajs.use("<?php bloginfo( 'template_url' ); ?>/assets/src/main.js");
	</script>

	<?php wp_footer(); ?>
</body>
</html>