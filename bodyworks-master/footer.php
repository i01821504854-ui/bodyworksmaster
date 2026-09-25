<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="site-footer">
	<div class="container footer-grid">
		<div class="footer-brand">
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="brand-mark">BM<span>+</span></span><span><strong>BODYWORKS</strong><small>MASTER LTD</small></span></a>
			<p><?php esc_html_e( 'Professional vehicle body repair in East London. Good work is worth doing right.', 'bodyworks-master' ); ?></p>
		</div>
		<div><h4><?php esc_html_e( 'Explore', 'bodyworks-master' ); ?></h4><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a><a href="<?php echo esc_url( home_url( '/#process' ) ); ?>">Our process</a><a href="<?php echo esc_url( home_url( '/#work' ) ); ?>">Our work</a><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">FAQs</a></div>
		<div><h4><?php esc_html_e( 'Contact', 'bodyworks-master' ); ?></h4><a href="tel:+447438879345">07438 879345</a><a href="mailto:hello@bodyworkmaster.uk">hello@bodyworkmaster.uk</a><span>Balmoral Road<br />London E7 0NR</span></div>
		<div class="footer-action"><span><?php esc_html_e( 'Ready to get moving?', 'bodyworks-master' ); ?></span><a class="button button-primary" href="<?php echo esc_url( home_url( '/#estimate' ) ); ?>"><?php esc_html_e( 'Get a free estimate', 'bodyworks-master' ); ?> <span>↗</span></a></div>
	</div>
	<div class="container footer-bottom"><span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> BODYWORKS Master Ltd</span><span><?php esc_html_e( 'Designed for East London', 'bodyworks-master' ); ?></span></div>
</footer>
<div class="mobile-actions"><a href="tel:+447438879345"><span>⌕</span><?php esc_html_e( 'Call', 'bodyworks-master' ); ?></a><a href="https://wa.me/447438879345" target="_blank" rel="noreferrer"><span>◌</span><?php esc_html_e( 'WhatsApp', 'bodyworks-master' ); ?></a><a href="<?php echo esc_url( home_url( '/#estimate' ) ); ?>"><span>↗</span><?php esc_html_e( 'Estimate', 'bodyworks-master' ); ?></a></div>
<?php wp_footer(); ?>
</body>
</html>
