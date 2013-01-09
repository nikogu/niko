<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title><?php tj_custom_titles(); ?></title>
	<meta name="description" content="这里是niko的评论，你可以在这里找到niko对于前端技术书籍的书评，它们包括html，html5，css，css3，javascript等前端技术" />
	<meta name="keywords" content="书评 niko niko的书评 前端 javascript html css 前端书籍 前端成长" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<noscript><p class="noscript">Your browser does not support JavaScript! 好像你禁用了javascript，那么很抱歉本站提供支持~请你开启javascript支持~</p></noscript>

	<header id="header">
		<a id="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
			<input type="text" class="search" name="s" id="s" placeholder="寻找那本书..." />
			<button class="icon-search" type="submit"></button>
		</form>
	</header><!-- header -->

	<section id="wrapper">
		<nav id="menu">
			<!--
			<?php
				$menuClass = 'nav';
				$menuID = 'main-nav';
				$primaryNav = '';
				if (function_exists('wp_nav_menu')) {
					$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-nav', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) );
				};
				if ($primaryNav == '') { ?>
				<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
				<?php if (get_option('wpninja_home_link') == 'on') { ?>
					<li class="<?php if(is_home()) echo('first');?>"><a href="<?php echo home_url(); ?>"><?php _e('Home', 'themejunkie') ?></a></li>
				<?php } ?>
				<?php show_page_menu($menuClass,false,false); ?>
				</ul>
			<?php }	else echo($primaryNav); ?>
			-->
			<?php $about = get_option('invade_about'); ?>
			<ul id="main-nav" class="nav">
				<li class="item"><a href="http://niko-blog.com/" target="_blank">逛博客</a></li>
				<li class="item"><a href="http://nikotest.com/">阅书籍</a></li>
				<li id="category" class="item"><a href="#category">找分类</a><div class="info">
					<section class="book-cat-wrap">
						<p class="desc"><span class="icon-smiley"></span>hi，你可以通过一下分类来选取书籍</p>
						<ul class="book-cat">
							<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'book-type')); ?>
						</ul>
					</section>
				</div></li>

				<li class="item"><a id="about" href="#about">看关于<div class="info">
					<section class="about-site">
						<section class="meta">
							<section class="left">
								<img alt="niko" src="<?php bloginfo( 'template_url' ); ?>/images/logo.png">
							</section>
							<section class="left niko">
								<p>我是一个追求自由和正义的互联网漂泊者</p>
								<p>——Niko</p>
							</section>
						</section>
						<section class="article"><span class="icon-heart"></span><?php echo $about; ?></section>
					</section>
				</div></a></li>
			</ul>
		</nav> <!-- end of menu -->
