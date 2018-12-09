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
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <svg class="header-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 242 242">
                        <title>Artists for the Humanities</title>
                        <path fill="#003049" d="M0 0h242v242H0z"/>
                        <path d="M175 101h-52l-5-21 56-65h30v64h14v22h-14v20h-29zm0-22V49l-25 30z" fill="#ffb000"/>
                        <path d="M175 121v39h-37v-39L93 15H65L20 121v26h32v79h29v-79h28v79h29v-40h37v40h29V121zM79 50l12 30H67zm-28 71l7-19h41l8 19z" fill="#fff"/>
                    </svg>
                    </a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <svg class="header-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 242 242">
                        <title>Artists for the Humanities</title>
                        <path fill="#003049" d="M0 0h242v242H0z"/>
                        <path d="M175 101h-52l-5-21 56-65h30v64h14v22h-14v20h-29zm0-22V49l-25 30z" fill="#ffb000"/>
                        <path d="M175 121v39h-37v-39L93 15H65L20 121v26h32v79h29v-79h28v79h29v-40h37v40h29V121zM79 50l12 30H67zm-28 71l7-19h41l8 19z" fill="#fff"/>
                    </svg>
                    </a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>
