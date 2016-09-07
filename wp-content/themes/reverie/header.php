<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
      <script src="https://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
</head>
<body>
  <header class="main-header clearfix">
		<a href="<?php bloginfo( 'url' ); ?>">
			<img class="header-logo" src="<?php bloginfo( 'template_directory' ); ?>/img/ReverieLogo.svg" alt="Reverie Logo">
		</a>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			<div id="sidebar">
				<nav>
					<div class="mobile-navigation">
		        <h2>Menu</h2>
		        <ul>
		          <li><a href="">Home</a></li>
		          <li><a href="/about-us">About Us</a></li>
		          <li><a href="">Melissa</a></li>
		          <li><a href="">Alpacas</a></li>
		          <li><a href="">Classes</a></li>
		          <li><a href="/testimonials">Testimonials</a></li>
		          <li><a href="">Products</a></li>
		          <li><a href="/gallery">Gallery</a></li>
		          <li><a href="">Blog</a></li>
		          <li><a href="">Contact Us</a></li>
		        </ul>
					</div>
	      </nav>
			</div>
		</div>

		<div onclick="openNav()" class="toggle-sidebar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/hamburger-menu.svg" alt="hamburger icon"></div>

	</header>
