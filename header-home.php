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
		<style>

		</style>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<div class="header-wrapper-home">
	<header id="masthead" class="site-header" role="banner"  data-sticky-container>
		<div data-sticky data-options="marginTop:0;" style="width:100%">
			<div class="title-bar" data-responsive-toggle="site-navigation">
				<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
				<div class="title-bar-title">
					<div class='logo-small'><img src="wp-content/themes/kybele/assets/images/logos/KDT-LOGO.svg" style="width: 45px; height: auto; top: -1px; position: relative; margin-left: 0;" alt="Kybele Dance Theatre"></div>
				</div>
			</div>

			<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
				<div class="top-bar-left">
					<ul class="menu">
						<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<div class='logo-small'><img src="wp-content/themes/kybele/assets/images/logos/KDT-LOGO.svg" style="width: 50px; height: auto; top: -8px; position: relative;" alt="Kybele Dance Theatre"></div>
							<div class='logo-big'><img src="wp-content/themes/kybele/assets/images/logos/kybele_gray_LOGO_2.svg" style="width: 250px; height: auto;  " alt="Kybele Dance Theatre"></div>
						</a></li>
					</ul>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
		</div>
	</header>
	</div>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
