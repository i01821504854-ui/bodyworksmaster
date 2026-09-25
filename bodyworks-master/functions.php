<?php
/**
 * BODYWORKS Master theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function bodyworks_setup() {
	load_theme_textdomain( 'bodyworks-master', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary navigation', 'bodyworks-master' ),
		)
	);
}
add_action( 'after_setup_theme', 'bodyworks_setup' );

function bodyworks_assets() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'bodyworks-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'bodyworks-style', get_stylesheet_uri(), array( 'bodyworks-fonts' ), $version );
	wp_enqueue_script( 'bodyworks-script', bodyworks_asset( 'assets/js/script.js' ), array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'bodyworks_assets' );

function bodyworks_asset( $path ) {
	return trailingslashit( get_template_directory_uri() ) . ltrim( $path, '/' );
}

function bodyworks_fallback_menu() {
	$links = array(
		'Services'   => '#services',
		'Our process' => '#process',
		'Our work'   => '#work',
		'About us'   => '#about',
		'FAQs'       => '#faq',
	);

	echo '<div class="site-nav" id="site-nav">';
	foreach ( $links as $label => $anchor ) {
		printf( '<a href="%s">%s</a>', esc_url( home_url( '/' . $anchor ) ), esc_html( $label ) );
	}
	echo '<a class="nav-cta" href="' . esc_url( home_url( '/#estimate' ) ) . '">' . esc_html__( 'Get an estimate', 'bodyworks-master' ) . ' <span>↗</span></a>';
	echo '</div>';
}

function bodyworks_nav_menu() {
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'site-nav',
			'menu_id'        => 'site-nav',
			'fallback_cb'    => 'bodyworks_fallback_menu',
		)
	);
}
