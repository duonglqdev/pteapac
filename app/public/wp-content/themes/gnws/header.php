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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php the_field('script_head', 'option'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <nav class="menu-mobile">
            <div class="menu-mobile-close">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 8L8 16M8.00003 8L16 16" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
            <ul>
                <?php
					wp_nav_menu(array(
						'theme_location'  => 'menu-1',
						'container'       => '__return_false',
						'fallback_cb'     => '__return_false',
						'items_wrap'      => '%3$s',
						'depth'           => 2,

					));
					?>
            </ul>
        </nav>
        <div class="overlay"></div>
    </header>