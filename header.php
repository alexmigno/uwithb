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

        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- Google Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Font Awesome -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php do_action('before'); ?>
        <header id="header" class="" role="banner">
            <div id="header-content" class="container">
                <div class="row">
                    <div id="header-logo" class="col-md-4">
                        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                            <img src="<?php echo IMAGESPATH; ?>/header-logo.png" />
                        </a>
                    </div><!-- #header-logo -->

                    <div id="menu-principale" class="col-md-7">
                        <nav id="site-navigation" class="navigation-main navbar" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav noList horizontalList', 'container_class' => 'navbar-inner')); ?>
                        </nav><!-- #site-navigation -->
                    </div><!-- #menu-principale -->
                    <div class="col-md-1">
                        <a href="javascript:void(0)" class="btn btn-default" id="linkToPrivateArea">
                            <i class="icon-lock"></i>
                            Login
                        </a>
                    </div>
                </div><!-- .row -->
            </div><!-- #header-content -->

        </header><!-- #header -->

        <?php
        if (is_home())
            include "template/box-home-slider.php";
        ?>


        <div id="main" class="row">
