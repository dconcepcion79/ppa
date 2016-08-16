<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ppa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ppa' ); ?></a>
    <div class="header-social">
        <div class="container">
           <div class="social-buttons">
                <a href="https://www.facebook.com/groups/PublishersPublicityAssociation/"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/groups/8395119"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.instagram.com/publisherspublicityassoc/"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
	<header id="masthead" class="site-header" role="banner">
	    <div class="container">
            <div class="site-branding">
                <?php ppa_custom_logo(); ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ppa' ); ?></button>
                <?php 
                    wp_nav_menu( array(
                        'theme_location'    => 'primary', 
                        'menu_id'           => 'primary-menu',
                        'depth'             => 1
                    ) ); 
                ?>
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
