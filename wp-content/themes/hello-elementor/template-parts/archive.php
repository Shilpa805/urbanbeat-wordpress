<?php
/**
 * Modern Archive & Event Listings Template — UrbanBeat Portfolio Upgrade
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<main id="content" class="site-main" style="max-width:1280px; margin:0 auto; padding:60px 24px;">

	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<div class="ub-section-title-wrap" style="margin-bottom:48px;">
			<div class="ub-section-subtitle">UrbanBeat Archives</div>
			<?php
			the_archive_title( '<h1 class="ub-section-title gradient-text">', '</h1>' );
			the_archive_description( '<p style="color:var(--ub-text-muted); font-size:1.1rem; margin-top:12px;">', '</p>' );
			?>
		</div>
	<?php endif; ?>

	<div class="ub-cards-grid">
		<?php
		while ( have_posts() ) {
			the_post();
			$post_link = get_permalink();
			?>
			<article class="ub-card">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="ub-card-media">
						<a href="<?php echo esc_url( $post_link ); ?>">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
						<span class="ub-card-badge">UrbanBeat Article</span>
					</div>
				<?php endif; ?>

				<div class="ub-card-body">
					<div class="ub-card-meta">
						📅 <?php echo esc_html( get_the_date() ); ?> • 👤 <?php the_author(); ?>
					</div>
					<h2 class="ub-card-title"><a href="<?php echo esc_url( $post_link ); ?>"><?php the_title(); ?></a></h2>
					<div class="ub-card-desc"><?php the_excerpt(); ?></div>
					<div class="ub-card-footer">
						<a href="<?php echo esc_url( $post_link ); ?>" class="btn-primary" style="padding:8px 18px; font-size:13px;">Read Article →</a>
					</div>
				</div>
			</article>
		<?php } ?>
	</div>

	<?php
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) :
		$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
		$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
		?>
		<nav class="pagination" style="display:flex; justify-content:center; gap:20px; margin-top:40px;">
			<div class="nav-previous"><?php
				previous_posts_link( sprintf( esc_html__( '%s Previous', 'hello-elementor' ), sprintf( '<span class="meta-nav">%s</span>', $prev_arrow ) ) );
			?></div>
			<div class="nav-next"><?php
				next_posts_link( sprintf( esc_html__( 'Next %s', 'hello-elementor' ), sprintf( '<span class="meta-nav">%s</span>', $next_arrow ) ) );
			?></div>
		</nav>
	<?php endif; ?>

</main>
