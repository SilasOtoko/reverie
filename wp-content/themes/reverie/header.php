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
  <header>
		<div class="main-header clearfix">
			<a href="<?php bloginfo( 'url' ); ?>">
				<img class="header-logo" src="<?php bloginfo( 'template_directory' ); ?>/img/ReverieLogo.svg" alt="Reverie Logo">
			</a>
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

				<div id="sidebar">
					<nav>
						<div class="mobile-navigation">
							<h2>Menu</h2>

			        <?php

								$defaults = array(
									'container' => false,
									'div' => false,
									'theme_location' => 'main-menu'
								);

								wp_nav_menu( $defaults );

							?>

						</div>
		      </nav>
				</div>
			</div>

			<div onclick="openNav()" class="toggle-sidebar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/hamburger-menu.svg" alt="hamburger icon"></div>
		</div>

	</header>
