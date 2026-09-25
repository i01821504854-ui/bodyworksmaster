<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header" id="top">
	<div class="announcement">
		<div class="container announcement-inner">
			<span><span class="status-dot"></span> <?php esc_html_e( 'Taking bookings for this week', 'bodyworks-master' ); ?></span>
			<span class="announcement-detail"><?php esc_html_e( 'Balmoral Road, London E7 0NR · Mon–Sat 8:00–18:00', 'bodyworks-master' ); ?></span>
			<a href="tel:+447438879345">07438 879345 <span aria-hidden="true">↗</span></a>
		</div>
	</div>
	<div class="container nav-wrap">
		<?php if ( has_custom_logo() ) : ?>
			<div class="brand"><?php the_custom_logo(); ?></div>
		<?php else : ?>
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'BODYWORKS Master Ltd home', 'bodyworks-master' ); ?>">
				<span class="brand-mark">BM<span>+</span></span>
				<span><strong>BODYWORKS</strong><small>MASTER LTD</small></span>
			</a>
		<?php endif; ?>
		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav"><span></span><span></span><span></span><em><?php esc_html_e( 'Menu', 'bodyworks-master' ); ?></em></button>
		<?php bodyworks_nav_menu(); ?>
	</div>
</header>
