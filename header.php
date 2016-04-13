<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aamirjawaid
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="wrapper">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'aamirjawaid' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="text-center">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php else : ?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php
				endif ?>
                <?php 
                $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<div class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
			<?php
			endif; ?>
			</div>
		</div><!-- .site-branding -->
		<div class="headerdivider"></div>
        <?php if ( is_front_page() && is_home() ) : ?>
		<div class="aboutmeBlock">
			<div class="text-center">
				I'm a 25-year old developer who loves <emphasis>learning</emphasis> about new technologies and <emphasis>experimenting</emphasis> to <emphasis>build</emphasis> interesting products.
				I currently work on Windows Hello, Microsoft's Facial Authentication platform. This is my blog. Enjoy!
			</div>
		</div>
        <?php endif; ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <?php esc_html_e( 'Primary Menu', 'aamirjawaid' ); ?>
            </button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
        <!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
