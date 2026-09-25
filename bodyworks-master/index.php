<?php
/**
 * The fallback template for BODYWORKS Master.
 */
get_header();
?>
<main class="section-pad">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<?php if ( has_post_thumbnail() ) : ?><div class="entry-image"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
					<div class="entry-content"><?php the_content(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h1><?php esc_html_e( 'BODYWORKS Master Ltd', 'bodyworks-master' ); ?></h1>
			<p><?php esc_html_e( 'Professional vehicle body repair in East London.', 'bodyworks-master' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
