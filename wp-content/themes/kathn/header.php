<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" />
	</head>
	<body  <?php body_class(); ?>>
		<div class="page-wrapper">
			<div id="header-wrapper">
				<div class="main">
					<header id="branding" role="banner">
						<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_stylesheet_directory_uri() . "/images/logo.svg"; ?>"></img>
						</a>
						<div id="title-wrapper">
							<h1 id="site-title">
								<span>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
										<noscript><?php bloginfo( 'name' ); ?></noscript>
									</a>
								</span>
							</h1>
							<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div>
					</header>
		 		</div><!-- .main -->
		 	</div>
	 		<div class="slider-container">
	 			<div class="main">
		 			<div class="phone-floater">
		 				<a href="tel: <?php echo do_shortcode('[contact type="phone_number"]'); ?>">
		 					Tel. <?php echo do_shortcode('[contact type="phone_number"]'); ?>
		 				</a>
		 			</div>
		 			<?php echo do_shortcode('[sp_responsiveslider limit="-1" effect="fade" pagination="false" navigation="false" speed="4000" autoplay="true" autoplay_interval="5000" loop="true"]'); ?>
	 			</div>
	 		</div>
			<div class="clear"></div>
			<div class="white-stripe">
				<div class="main nav">
					<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri() . "/images/logo.svg"; ?>"></img>
					</a>
					<?php wp_nav_menu( array(
								'theme_location' => 'main',
								'menu'           => 'main',
								'menu_class'     => 'main-menu',
						) );
					?>
				</div><!--main-nav-->
			</div><!-- .white-stripe -->
			<div class="clear"></div>
			<div class="main" id="page-content">
				<noscript>
					<p id="no-script-message"><?php _e( 'For a more correct display of information on the site you need to enable support of the JavaScript in the browser.', 'central' ); ?></p>
				</noscript>
				<?php if ( is_home() )
					central_slider_template(); ?>
