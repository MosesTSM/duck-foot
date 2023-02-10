<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title() ?></title>
	
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="540">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php wp_head(); ?> <!-- Retrieves the css from functions file -->

	<!-- mobile address bar colour -->
	<meta name="theme-color" content="#FFDD4F">
	<meta name="msapplication-navbutton-color" content="#FFDD4F">
	<meta name="apple-mobile-web-app-capable" content="no">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>


<body <?php body_class($post->post_name); ?> >

	<div class="responsive-menu">
		<?php
			$defaults = array(
				'container' => false,
				'theme_location' => 'left-nav',
				'menu_id' => 'mobile-main-menu-top'
			);

			wp_nav_menu( $defaults );
		?>
		<?php
			$defaults = array(
				'container' => false,
				'theme_location' => 'right-nav',
				'menu_id' => 'mobile-main-menu-bottom'
			);

			wp_nav_menu( $defaults );
		?>
	</div>
	
	<div class="mobile-nav-controls">
		<a class="close-nav">
			<svg version="1.1" id="menu-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" width="25" height="25" preserveAspectRatio="xMidYMid meet">
				<g>
					<rect x="-5.7" y="20.8" transform="matrix(0.7071 0.7071 -0.7071 0.7071 24.9588 -10.36)" width="61.5" height="8.3"/>
					<rect x="-5.7" y="20.9" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 60.4176 25.0783)" width="61.5" height="8.3"/>
				</g>
			</svg>
		</a>
		<a class="back-nav">
			<svg version="1.1" id="menu-back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25 25" width="25" height="25" preserveAspectRatio="xMidYMid meet">
				<g><rect x="4" y="10.5" width="21" height="4"/></g>
				<g><polygon points="12.5,25 0,12.5 12.5,0 15.3,2.8 5.7,12.5 15.3,22.2 	"/></g>
			</svg>
		</a>
	</div>
	<div class="mobile-overlay"></div>



	<div id="container">
		<div id="header-spacer"></div>
		<header>
			<div class="wrapper header-wrapper">
				<nav>
					<?php
						$defaults = array(
							'container' => false,
							'theme_location' => 'left-nav',
							'menu_id' => 'main-menu-left'
						);

						wp_nav_menu( $defaults );
					?>
					<a href="<?php bloginfo('url'); ?>/" class="header-logo-link">
						<svg class="header-logo" x="0px" y="0px" viewBox="0 0 360 240" width="360" height="240" preserveAspectRatio="xMidYMid meet">
							<path class="logo-border" d="M162.6,240c-13.3,0-26-6.4-33.9-17.1L5.5,56.9C2.3,52.5,0,47.5,0,41.5V0h359.8l0.2,42.1 c0,5.7-2.1,11.1-5.4,15.5L229,223.6c-7.8,10.3-20.1,16.4-33,16.4H162.6z"/>
							<path class="logo-paddle" d="M330.1,10.3h-10.4c-2.2,0-4,1.8-4,4v12.9l-60.3,18.7c-0.1,0-0.1,0-0.2,0L189,29.1c-0.1,0-0.2-0.3-0.2-0.4V14.5 c0-2.3-1.9-4.2-4.2-4.2h-10.4c-2.2,0-4,1.8-4,4V29c0,0.1-0.1,0.2-0.2,0.3l-65.6,16.6c-0.1,0-0.1,0-0.2,0L44.9,27.2V14.5 c0-2.3-1.9-4.2-4.2-4.2H30.2c-2.2,0-4,1.8-4,4V29C26.1,29,26,41.5,26,41.5c0,0.1,0,0.1,0.1,0.2l123.1,166c3.2,4.2,8.1,6.8,13.4,6.8 H196c5,0,9.7-2.3,12.7-6.3L334.2,42.2c0-0.1,0.1-0.1,0.1-0.2V28.7v-0.3V14.5C334.3,12.2,332.4,10.3,330.1,10.3z"/>
							<path class="logo-d" d="M141.7,131.5c-13.9-10.6-28.3-8.8-40.7,7.5c-3.9,5.1-7.5,10.3-10.4,14.9l0,0l-1.7,2.3 c-0.3,0.4-0.2,0.9,0.2,1.2l1.7,1.3c0.4,0.3,0.9,0.2,1.1-0.2l1.6-2.1l38.7,29.4l-1.6,2c-0.3,0.4-0.2,0.9,0.2,1.2l1.7,1.3 c0.4,0.3,0.9,0.2,1.1-0.2l1.6-2.1c2.3-2.6,5.3-6,9.1-11C157.6,159.5,159,144.6,141.7,131.5z M137,167.7c-0.6,0.7-1.3,1.7-1.9,2.2 l-27.2-20.7c0.5-1,1.4-2.2,2.6-3.9c5.3-7,12.9-8.7,22.2-1.6C143.4,151.9,142.9,159.8,137,167.7z"/>
							<g class="logo-duck">
								<path d="M198.4,88.1c2-2.6,3.5-5.5,4.1-7.9l9.1,5.6c-0.9,3.2-3.4,7.6-6.3,11.4c-7.9,10.4-19,12.7-29.9,4.5	c-9.9-7.5-12.3-19.5-3-31.8c2-2.6,5-5.8,8-7.7l7.6,7.6c-1.8,1-4.4,3.2-6.6,6.1c-3.4,4.4-3.3,9.5,2.6,13.9 C190.4,94.4,195.4,92,198.4,88.1z"/>
								<path d="M184.7,123.1l6.1-8c-3.4-2.3-7.3-5.1-11.8-8.5l-21.1-16l-8.7,11.5l-1.7,2.3c-0.3,0.4-0.2,0.9,0.2,1.2l1.7,1.3 c0.4,0.3,0.9,0.2,1.1-0.2l1.8-2.3l17.9,13.6c1.3,1,1.7,5-0.2,7.6c-2.5,3.3-5.4,2.5-9.2-0.4l-18.4-14l-8.7,11.5l19.4,14.7 c8.5,6.4,16.1,7.8,22.5-0.6c4-5.3,4.4-9.7,3.2-14l0.1-0.1L184.7,123.1z"/>
								<path d="M240.7,49.3l-28.5-2l-5.1-21.8l-10.4,13.7l6.4,17.6l-28.2-21.4l-8.4,11.7l-1.7,2.3c-0.3,0.4-0.2,0.9,0.2,1.2 l1.7,1.3c0.4,0.3,0.9,0.2,1.1-0.2l1.8-2.3l45.1,34.2l8.7-11.5l-10.9-8.2l-0.4-3.7l17.8,3.3L240.7,49.3z"/>
								<path class="st0" d="M235.9,49.3l1.8-2.4c0.3-0.4,0.8-0.4,1.1-0.2l1.7,1.3c0.4,0.3,0.5,0.8,0.2,1.2l-1.7,2.3"/>
							</g>
							<path class="logo-f" d="M221.2,177.3l-1.7-1.3c-0.4-0.3-0.9-0.2-1.1,0.2l-1.8,2.3l-14.5-11l10-13.2l-9-7.7l-10.4,13.8l-8.9-6.7 l12.7-16.7l-9.1-7.7L165.7,158l-1.7,2.3c-0.3,0.4-0.2,0.9,0.2,1.2l1.7,1.3c0.4,0.3,0.9,0.2,1.1-0.2l1.8-2.3l42.2,32l8.7-11.5 l1.7-2.3C221.7,178.1,221.6,177.6,221.2,177.3z"/>
							<g class="logo-foot">
								<path d="M233.8,137.3c-6.4,8.5-17.8,13.7-30,4.4c-12.9-9.8-10.6-21.8-4.2-30.3s17.5-13.9,30.3-4.2 C242,116.4,240.2,128.8,233.8,137.3z M207.9,117.6c-2.2,2.8-2.3,6.7,4.8,12.1c7.1,5.4,10.7,4.2,12.9,1.3c2.2-2.8,2.3-6.7-4.7-12 C213.7,113.6,210,114.8,207.9,117.6z"/>
								<path d="M260.6,102c-6.4,8.5-17.8,13.7-30,4.4c-12.9-9.8-10.6-21.8-4.2-30.3s17.5-13.9,30.3-4.2 C268.8,81,267.1,93.5,260.6,102z M234.7,82.3c-2.2,2.8-2.3,6.7,4.8,12.1c7.1,5.4,10.7,4.2,12.9,1.3c2.2-2.8,2.3-6.7-4.7-12 S236.8,79.4,234.7,82.3z"/>
								<path d="M251.4,61.8l-2.9,3.8l-7.5-6.6l2.6-4l-7-6.3l5.6-11.6l9.5,7.2l5.4-7.1l7.8,6.8l-5,6.6l10.7,8.1 c3.8,2.9,6.4,2,8.6-0.9c0.5-0.7,1-1.5,1.5-2.4l8.6,6.5c-0.6,1.8-2.7,5.6-4.9,8.5c-5.8,7.7-11.7,7.6-21.4,0.3L251.4,61.8z"/>
								<path d="M294.3,45.1c2.2,1.5,2.8,4.4,1.3,6.7c-1.5,2.2-4.4,2.9-6.7,1.4c-2.2-1.4-2.7-4.4-1.2-6.6 C289.2,44.2,292.1,43.7,294.3,45.1z M289.6,52.2c1.7,1.2,4,0.8,5.2-1c1.1-1.7,0.6-3.9-1.1-5.1c-1.7-1.2-4-0.8-5.2,0.9 C287.3,48.8,287.9,51,289.6,52.2z M293.2,51.1l-0.6,0.9l-3.9-2.6c0.2-0.4,0.5-0.9,0.9-1.6c0.5-0.7,0.8-1,1.2-1.2 c0.3-0.1,0.7-0.1,1.1,0.2c0.4,0.3,0.5,0.8,0.4,1.4l0,0c0.4-0.3,0.8-0.3,1.4-0.1c0.7,0.3,1,0.4,1.2,0.4l-0.7,1 c-0.2,0-0.6-0.1-1.2-0.3c-0.5-0.2-0.8-0.1-1.2,0.4l-0.3,0.4L293.2,51.1z M291,49.6l0.3-0.4c0.3-0.5,0.4-1,0-1.3 c-0.4-0.2-0.8-0.1-1.2,0.4c-0.2,0.2-0.2,0.4-0.3,0.5L291,49.6z"/>
							</g>
						</svg>
					</a>
					<?php
						$defaults = array(
							'container' => false,
							'theme_location' => 'right-nav',
							'menu_id' => 'main-menu-right'
						);

						wp_nav_menu( $defaults );
					?>

					<a class="hamburger nav-button">
						<span>Menu</span>
					</a>
				</nav>
			</div>
		</header>

		<main>