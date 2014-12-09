<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CB
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script type="text/javascript" src="//use.typekit.net/tpz1sxs.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="contact-bar">
			<ul class="wrap group">

				<li><span class="icon-phone"></span><a href="tel:972-790-0707">972-790-0707</a></li>
				<li><span class="icon-mail"></span><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a></li>
			</ul>
		</div>
		<div class="wrap group header-group">
			<a href = "#" class="toggle-nav">Menu</a>
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><img src = "<?php bloginfo('template_directory'); ?>/_i/cb-logo.png"></a>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a class="skip-link assistive-text" href="#content"><?php _e( 'Skip to content', 'cb' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!--wrap-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
