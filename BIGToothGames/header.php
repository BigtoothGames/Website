<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="site-container blk-bg">
		<header class="site-header drk-bg">
			<div class="site-header__main">
				<div class ="site-logo__long float-left push-right">
					<a href="#" rel="home"><img src="wp-content/uploads/2019/07/ToothONLY-64px-1.png"/></a>
				</div>
				<div class="header-menu float-right">
					<div class="header-menu__main">
						<div id="first" class="header-menu__sub">
							<ul>
								<li><div id="left-line" class="__line"></div></li>
								<li><div class="__line"></div></li>
								<li><div id="right-line" class="__line"></div></li>
							</ul>
						</div>
						<div id="second" class="header-menu__sub">
							<ul>
								<li><div id="left-cross" class="__line"></div></li>
								<li><div id="right-cross" class="__line"></div></li>
							</ul>
						</div>
						
					</div>
				</div>
				<nav class="main-nav nav-pad">
					<ul class="min-list group">
						<li><a href="#">First Page</a></li>
						<li><a href="#">Second Page</a></li>
						<li><a href="#">Third Page</a></li>
					</ul>
				</nav>
				
			</div>
		</header><!-- #masthead -->
		<header class="sticky-header blu-bg">
			<div class="site-header__main">
					<div class="logo-hover-class float-left push-right"><a href="#"><h1><?php 
					$name=get_bloginfo('name'); 
					$pieces=explode(" ", $name);
					echo $pieces[0];?></h1>
					
					<h2 class="small-title"><?php echo $pieces[1] ?></h2></a></div>
			
				<div class="login float-right">
					<a href="#">Login</a>
					<a href="#">Sign Up</a>
				</div>
			</div>
		</header>

	
