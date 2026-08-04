<?php
/**
 * Modern Multi-Column Footer Template — UrbanBeat Portfolio Upgrade
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
?>

<footer id="site-footer" class="site-footer">
	<div class="footer-inner">
		<!-- Column 1: Brand & Internship Credit -->
		<div class="footer-brand">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="font-size:24px; font-weight:800; color:#fff;">
					⚡ <?php echo esc_html( $site_name ); ?>
				</a>
			</div>
			<p>Where youth culture comes alive. Curating music, campus fests, workshops, and creative urban lifestyle experiences.</p>
			<div class="footer-internship-tag">
				⚡ <strong>Youth Culture & Media Platform</strong>
			</div>
		</div>

		<!-- Column 2: Quick Links -->
		<div class="footer-col">
			<h4>Quick Links</h4>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li><a href="#about">About Us</a></li>
				<li><a href="#events">Upcoming Fests</a></li>
				<li><a href="#contact">Contact Support</a></li>
			</ul>
		</div>

		<!-- Column 3: Categories & Community -->
		<div class="footer-col">
			<h4>Community</h4>
			<ul>
				<li><a href="#events">Beat Street Music</a></li>
				<li><a href="#events">Campus Concerts</a></li>
				<li><a href="#events">Artist Spotlights</a></li>
				<li><a href="#contact">Student Deals & Perks</a></li>
			</ul>
		</div>

		<!-- Column 4: Newsletter -->
		<div class="footer-col">
			<h4>Stay Connected</h4>
			<p style="color:var(--ub-text-muted); font-size:13px; margin-bottom:12px;">Get weekly updates on urban fests & student deals.</p>
			<form class="footer-newsletter-input" onsubmit="event.preventDefault(); alert('Thank you for subscribing to UrbanBeat!');">
				<input type="email" placeholder="Enter your email" required aria-label="Email Address">
				<button type="submit">Join</button>
			</form>
		</div>
	</div>

	<!-- Footer Bottom Bar -->
	<div class="footer-bottom">
		<div>
			© <?php echo esc_html( date( 'Y' ) ); ?> <strong><?php echo esc_html( $site_name ); ?></strong>. All rights reserved. Built with WordPress & modern CSS.
		</div>
		<button type="button" class="back-to-top" aria-label="Back to Top">
			↑
		</button>
	</div>
</footer>
