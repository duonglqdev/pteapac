<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kmar
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
	<?php
	$css_desktop = get_field( 'css_desktop', 'option' );
	$css_mobile = get_field( 'css_mobile', 'option' );
	?>
	<?php if ( $css_desktop )
	{ ?>
		<style>
			@media only screen and (min-width: 992px) {
				<?php echo $css_desktop ?>
			}
		</style>
	<?php } ?>
	<?php if ( $css_mobile )
	{ ?>
		<style>
			@media only screen and (max-width: 991px) {
				<?php echo $css_mobile ?>
			}
		</style>
	<?php } ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header ">
		<div class="container">
			<a id="hamburger" class="bar__mb"><span></span></a>
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
								<div class="l-selected">

									<?php if ( function_exists( 'pll_the_languages' ) )
									{
										pll_the_languages( array( 'show_flags' => 1, 'show_names' => 0 ) );
									} ?>
								</div>
								<div class="cus-lang">
									<ul class="lang-op">

										<?php if ( function_exists( 'pll_the_languages' ) )
										{
											pll_the_languages(
												array(
													'show_flags' => 1,
													'show_names' => 1,
													'hide_if_empty' => 0,
												)
											);
										} ?>
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
		<div class="menu__mobile">
			<div class="d-flex flex-column justify-content-between h-100">
				<div class="flex-fill menu__mobile-inner">
					<div class="menu__mobile-heading text-center text-uppercase py-3 fw-bold">
						<?php
						$website_name = get_bloginfo( 'name' );
						echo $website_name;
						?>
					</div>
					<div class="menu__mobile-close">
						<?php echo svg( 'close', '16', '16' ) ?>
					</div>
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
						<?php if ( get_field( 'cdc_phone', 'option' ) ) : ?>
							<li class="phone"><a
									href="tel:<?php the_field( 'cdc_phone', 'option' ); ?>"><i
										class="fa fa-phone fa-fw"></i>
									<?php the_field( 'cdc_phone', 'option' ); ?></a></li>
						<?php endif; ?>
					</ul>

				</div>
				<?php if ( have_rows( 'cdc_mxh_list', 'option' ) ) : ?>
					<ul class="list__social d-flex align-items-center justify-content-center py-3 gap-4 border-top">
						<?php while ( have_rows( 'cdc_mxh_list', 'option' ) ) :
							the_row(); ?>
							<li>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>">
									<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full' ) ?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</header>

	<div class="overlay"></div>