<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package uwithb
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!--Responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- End Responsive meta -->

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="row" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="navigation-main navbar" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav','container_class' => 'navbar-inner' ) ); ?>
		</nav><!-- #site-navigation -->
                
                
	</header><!-- #masthead -->

	<div id="main" class="site-main row">
