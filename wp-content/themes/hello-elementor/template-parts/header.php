<?php
/**
 * Modern Header Template — UrbanBeat Portfolio Upgrade
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$site_name = get_bloginfo( 'name' );
if ( empty( $site_name ) ) {
	$site_name = 'UrbanBeat';
}

$header_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-1',
	'fallback_cb'    => false,
	'container'      => false,
	'echo'           => false,
] );
?>

<header id="site-header" class="site-header">
	<div class="header-inner">
		<!-- Site Branding -->
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<div class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( $site_name ); ?>" rel="home">
						⚡ <?php echo esc_html( $site_name ); ?>
					</a>
				</div>
			<?php endif; ?>
			<span class="inglu-badge">Official Platform</span>
		</div>

		<!-- Main Desktop Navigation -->
		<nav class="site-navigation" aria-label="<?php echo esc_attr__( 'Main menu', 'hello-elementor' ); ?>">
			<?php if ( $header_nav_menu ) : ?>
				<?php echo $header_nav_menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<?php else : ?>
				<ul>
					<li class="current-menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#events">Events & Fests</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			<?php endif; ?>
		</nav>

		<!-- Header CTA Button -->
		<div class="header-cta-holder">
			<a href="#contact" class="header-cta-btn">Join Community</a>
			<button type="button" class="mobile-nav-toggle" aria-label="Toggle Navigation" aria-expanded="false">
				☰
			</button>
		</div>
	</div>

	<!-- Mobile Navigation Drawer -->
	<nav class="site-navigation-dropdown" style="display:none;" aria-label="Mobile Menu">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<li><a href="#about">About UrbanBeat</a></li>
			<li><a href="#events">Upcoming Events</a></li>
			<li><a href="#contact">Get In Touch</a></li>
		</ul>
	</nav>
</header>
