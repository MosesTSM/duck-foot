<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title() ?></title>
	
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="540">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PV5KBQH');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?> <!-- Retrieves the css from functions file -->

	<!-- mobile address bar colour -->
	<meta name="theme-color" content="#000000">
	<meta name="msapplication-navbutton-color" content="#000000">
	<meta name="apple-mobile-web-app-capable" content="no">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>


<body <?php body_class($post->post_name); ?> >

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PV5KBQH"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="responsive-menu">
		<?php
			$defaults = array(
				'container' => false,
				'theme_location' => 'primary-nav',
				'menu_id' => 'mobile-main-menu'
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
				<a href="<?php bloginfo('url'); ?>/" class="header-logo-link">
					<?php get_template_part('inc/logo'); ?>
				</a>

				<nav>
					<?php
						$defaults = array(
							'container' => false,
							'theme_location' => 'primary-nav',
							'menu_id' => 'main-menu'
						);

						wp_nav_menu( $defaults );
					?>

					<div class="nav-buttons">
						<a href="https://thunderstruckag.com/category/products/flo-rite" target="_blank" class="nav-button">
							<span>Shop Now</span>
						</a><?php if( get_field('phone', 'option') ): ?><a href="tel:<?php the_field('phone', 'option'); ?>" class="nav-button phone-link">
							<svg viewBox="0 0 18 28" width="18" height="28" preserveAspectRatio="xMidYMid meet">
								<path d="M18,26.4l-4-7.9c0,0-2.2,1.1-2.3,1.2c-2.5,1.3-7.6-9.1-5.2-10.5L8.9,8L4.9,0L2.6,1.2 c-8.1,4.4,4.8,30.3,13.1,26.4C15.8,27.5,18,26.4,18,26.4z"/>
							</svg> <span class="phone-link-call">Call</span><span class="phone-link-number"><?php the_field('phone','option'); ?></span>
						</a><?php endif; ?><a class="hamburger nav-button">
							<span>Menu</span>
						</a>
					</div>
				</nav>
			</div>
		</header>

		<main>