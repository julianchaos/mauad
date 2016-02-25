<?php
/**
 * Functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package Ndrade
 * @subpackage Mauad
 * @since 1.0
 */

function mauad_setup()
{
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'mauad' ) );
	
	// Register custom navigation walker
	require_once('inc/wp_bootstrap_navwalker.php');

	add_theme_support('post-thumbnails');

	add_image_size('galeria-obras', 293, 241, true);
	add_image_size('galeria-clientes', 156, 140, true);
	add_image_size('galeria-projetos', 362, 297, true);
}
add_action( 'after_setup_theme', 'mauad_setup' );

function mauad_scripts_styles()
{
	//jQuery
	wp_enqueue_script( 'jquery');
	
	/*
	 * Bootstrap
	 * url: http://getbootstrap.com/
	 */
	wp_enqueue_script( 'mauad-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery'), '3.1.1', false);
	wp_enqueue_style( 'mauad-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css', array(), '3.1.1');
	
	//My Stuff
	wp_enqueue_script( 'mauad-menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0', false);

	//Backgrounds
	wp_enqueue_style( 'mauad-background', get_template_directory_uri() . '/css/background.css', array(), '1.0');
	
	//Navbar-default overide
	wp_enqueue_style( 'mauad-nav', get_template_directory_uri() . '/css/navbar-default.css', array('mauad-bootstrap'), '1.0');

}
add_action( 'wp_enqueue_scripts', 'mauad_scripts_styles' );
