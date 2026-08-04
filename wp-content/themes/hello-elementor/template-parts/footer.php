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

			<!-- Web3Forms Functional Newsletter Form -->
			<form id="newsletter-form" class="footer-newsletter-input" novalidate>
				<!-- ================================================================= -->
				<!-- WEB3FORMS ACCESS KEY CONFIGURATION                                -->
				<!-- Replace 'YOUR_WEB3FORMS_ACCESS_KEY_HERE' below with your key from https://web3forms.com/ -->
				<!-- ================================================================= -->
				<input type="hidden" name="access_key" value="YOUR_WEB3FORMS_ACCESS_KEY_HERE">
				<input type="hidden" name="from_name" value="UrbanBeat Newsletter">
				<input type="hidden" name="subject" value="New Newsletter Subscription - UrbanBeat">

				<input type="email" id="newsletter-email" name="email" placeholder="Enter your email" required aria-label="Email Address">
				<button type="submit" id="newsletter-submit-btn">Join</button>
			</form>
			<div id="newsletter-form-message" style="display:none; font-size:12px; margin-top:8px;"></div>
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
