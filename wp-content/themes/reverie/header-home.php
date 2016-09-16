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
  <div class="home-landing">
		<div class="home-landing-overlay">
	    <header class="home-header clearfix">
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

					<script>
						/* Set the width of the side navigation to 250px */
						function openNav() {
								document.getElementById("mySidenav").style.width = "100%";
								if (screen.width > 400) {
									// $('.sidenav').css({'border-left' : '2px solid #fbb94d', 'border-bottom' : '2px solid #fbb94d'});
									jQuery('.sidenav').css('box-shadow', '0px 0px 30px 10px rgba(100,100,100,0.17)')
								}
						}

						/* Set the width of the side navigation to 0 */
						function closeNav() {
								document.getElementById("mySidenav").style.width = "0";
								jQuery('.sidenav').css('box-shadow', 'none');
						}
					</script>
				</div>

				<div onclick="openNav()" class="toggle-sidebar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/hamburger-menu-white.svg" alt="hamburger icon"></div>

			</header>

			<div class="home-landing-logo-area">
				<div class="home-landing-logo">
					<img src="<?php bloginfo( 'template_directory' ); ?>/img/ReverieLogoWhite.svg" alt="Reverie Logo">
				</div>
			</div>
		</div>
  </div>
