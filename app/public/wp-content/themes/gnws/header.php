<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php the_field( 'script_head', 'option' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header ">
		<div class="container">
			<a id="hamburger" href="#menu"><span></span></a>
			<div class="header-flex box-wp">
				<div class="header-left">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );

					if ( $image )
					{
						printf(
							'<a href="%1$s" title="%2$s" class="logo-wrapper"><img src="%3$s"></a>',
							get_bloginfo( 'url' ),
							get_bloginfo( 'description' ),
							$image[0]
						);
					}
					?>
				</div>
				<div class="header-right">
					<div class="menu-main">

						<nav id="_hmenu" class="navbar">
							<div class="navigation box-wp" role="navigation">
								<ul>
									<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'container' => '__return_false',
										'fallback_cb' => '__return_false',
										'items_wrap' => '%3$s',
										'depth' => 2,
									) );
									?>
								</ul>
							</div>
						</nav>
					</div>
					<div class="register--lang">
						<div class="register-header">

							<a href="javascript:void(0)" title="Đăng ký ngay"
								class="link--register open--form--now text-white"><span>Đăng ký
									ngay</span></a>
						</div>
						<div class="lang-header">
							<div class="lang-select">
								<p class="l-selected"><img width="36px" height="24px"
										src="images/vi.svg" alt="Language"></p>
								<div class="cus-lang">
									<ul class="lang-op">
										<li><a href="https://pteapac.com" title="Vietnamese"> <img
													width="36px" height="24px" src="images/vi.svg"
													alt="Language">Vietnam</a></li>
										<li><a href="en/" title="English"><img width="36px"
													height="24px" src="images/en.svg"
													alt="Language">English </a></li>
									</ul>
								</div>

							</div>
						</div>
						<div class="box-search">
							<div class="open--box--search">
								<?php echo svg( 'search', '20' ) ?>
							</div>
							<form class="f--box--search" method="post"
								action="<?php echo get_home_url() ?>">
								<div class="over--box--search">
									<input type="text" name="s" placeholder="Tìm kiếm " value="">
									<div class="close--box--search">
										<?php echo svg( 'close', '20' ) ?>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</header>

	<div class="overlay"></div>