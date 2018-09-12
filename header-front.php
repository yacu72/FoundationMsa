<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<!--<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>-->
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<!--<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>-->
			</div>
		</nav>

		<div class="header-middle grid-container">
			<div class="header-middle-inner">
				<div class="grid-x">
					<div class="small-12 medium-3 logo">
						<a href="<?php echo bloginfo( 'url' ); ?>" class="site-logo">
							<img src="<?php  echo get_template_directory_uri() .'/images/msa_sitename.png'?>" href="<?php echo bloginfo( 'url' ); ?>" alt="">
						</a>
					</div>
					<div class="medium-3"></div>
					<div class="small-12 medium-6 contact-info grid-x">
						<span class="cell small 12 medium-4">Email:<br> msa@webmail.com</span>
						<span class="cell small-12 medium-4">Phone:<br> (+44) 203 389 7064</span>
						<span class="cell small-12 medium-4"><a href="" class="button">Apply now!</a></span>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar bottom-bar">
			<div class="grid-container grid-x">

				<div class="navbar-collapse show-for-medium" id="navbar">
					<?php foundationpress_sec_nav(); ?>
				</div>
			</div>
		</nav>

		<div class="show-for-small-only">
			<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
			<div class="site-desktop-title top-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Menu</a>
			</div>
		</div>

		<div class="show-for-small-only">
			<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
				<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
			<?php endif; ?>
		</div>

  </header>
