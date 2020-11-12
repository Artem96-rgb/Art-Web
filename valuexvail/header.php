<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package valuexvail
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header" style="background-image: url(<?php the_field('header_background'); ?>);">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page()) {
				?>
					<h1 class="site-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
					</h1>
				<?php
				} else {
				?>
					<p class="site-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
					</p>
				<?php
				}
				$valuexvail_description = get_bloginfo('description', 'display');
				if ($valuexvail_description || is_customize_preview()) {
				?>
					<p class="site-description"><?php echo $valuexvail_description; ?>
					</p>
				<?php }
				?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>

			<div class="burger" aria-controls="primary-menu" aria-expanded="false">
				<div class="burger__item">
					<span></span>
				</div>
			</div>

			<div class="header-body">
				<div class="header-body__content">
					<div class="header-body__title">
						<h2><?php the_field('header_bottom_title'); ?></h2>
					</div>
					<div class="header-body__wave">
						<svg class="svg-wave" version="1.1" viewBox="0 0 100 10" preserveAspectRatio="none" xmlns="//www.w3.org/2000/svg">
							<path class="front-wave" d="M0,0 C30,6 80,4 100,0 L100,10 L0,10 Z" fill="#4f8abb"></path>
						</svg>
					</div>
				</div>
			</div>


		</header><!-- #masthead -->