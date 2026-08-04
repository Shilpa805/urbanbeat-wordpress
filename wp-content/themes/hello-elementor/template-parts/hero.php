<?php
/**
 * Hero Banner & Stats Component — UrbanBeat Portfolio Upgrade
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- Hero Banner -->
<section id="hero" class="ub-hero-section">
	<div class="ub-hero-badge">
		<span></span> Official Youth Culture & Event Discovery Platform
	</div>

	<h1 class="ub-hero-title">
		Where Youth Culture Meets <span class="gradient-text">Unstoppable Energy</span>
	</h1>

	<p class="ub-hero-subtitle">
		UrbanBeat is the ultimate youth community platform — curating college music festivals, live concert nights, street culture workshops, and student lifestyle deals.
	</p>

	<div class="ub-hero-actions">
		<a href="#events" class="btn-primary">
			⚡ Explore Fests & Events
		</a>
		<a href="#about" class="btn-secondary">
			📖 Discover Our Story
		</a>
	</div>

	<!-- Stats Grid -->
	<div class="ub-stats-grid">
		<div class="ub-stat-card">
			<div class="ub-stat-number">10K+</div>
			<div class="ub-stat-label">Active Youth Community</div>
		</div>
		<div class="ub-stat-card">
			<div class="ub-stat-number">50+</div>
			<div class="ub-stat-label">Campus Concerts & Fests</div>
		</div>
		<div class="ub-stat-card">
			<div class="ub-stat-number">100+</div>
			<div class="ub-stat-label">Artist Spotlights</div>
		</div>
		<div class="ub-stat-card">
			<div class="ub-stat-number">4.9★</div>
			<div class="ub-stat-label">Student Experience Rating</div>
		</div>
	</div>
</section>

<!-- About Section -->
<section id="about" style="max-width:1100px; margin:0 auto 80px; padding:40px 24px; text-align:center;">
	<div class="ub-section-title-wrap">
		<div class="ub-section-subtitle">Who We Are</div>
		<h2 class="ub-section-title">Empowering the Next Generation of Youth Talent</h2>
	</div>
	<p style="color:var(--ub-text-muted); font-size:1.15rem; max-width:800px; margin:0 auto; line-height:1.8;">
		Born out of a passion for youth culture and live performance, UrbanBeat connects passionate students, indie musicians, and creative artists. We host immersive live music nights, dance battles, and creative workshops across top college campuses.
	</p>
</section>

<!-- Featured Events Grid -->
<section id="events" style="max-width:1280px; margin:0 auto 80px; padding:0 24px;">
	<div class="ub-section-title-wrap">
		<div class="ub-section-subtitle">Upcoming Fests & Highlights</div>
		<h2 class="ub-section-title">Don't Miss the Vibe</h2>
	</div>

	<div class="ub-cards-grid">
		<!-- Event Card 1 -->
		<div class="ub-card">
			<div class="ub-card-media">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/event1.jpg' ); ?>" onerror="this.src='https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=600&q=80'" alt="Beat Street Festival" loading="lazy" decoding="async">
				<span class="ub-card-badge">Music Festival</span>
			</div>
			<div class="ub-card-body">
				<div class="ub-card-meta">
					📅 Aug 24, 2026 • 📍 City Arena
				</div>
				<h3 class="ub-card-title"><a href="#events">Beat Street Music Fest 2026</a></h3>
				<p class="ub-card-desc">An explosive night of indie hip-hop, electronic beats, and live band performances featuring top campus artists.</p>
				<div class="ub-card-footer">
					<span style="color:var(--ub-cyan); font-weight:700;">FREE Entry for Students</span>
					<a href="#contact" class="btn-primary" style="padding:6px 14px; font-size:13px;">RSVP Now</a>
				</div>
			</div>
		</div>

		<!-- Event Card 2 -->
		<div class="ub-card">
			<div class="ub-card-media">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/event2.jpg' ); ?>" onerror="this.src='https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=600&q=80'" alt="Urban Dance Showcase" loading="lazy" decoding="async">
				<span class="ub-card-badge">Dance & Culture</span>
			</div>
			<div class="ub-card-body">
				<div class="ub-card-meta">
					📅 Sep 05, 2026 • 📍 Main Arena Stage
				</div>
				<h3 class="ub-card-title"><a href="#events">Urban Cypher & Dance Battle</a></h3>
				<p class="ub-card-desc">Street dancers and hip-hop crews face off in an intense 1-on-1 battle for the ultimate campus trophy.</p>
				<div class="ub-card-footer">
					<span style="color:var(--ub-cyan); font-weight:700;">Prize Pool: $1,500</span>
					<a href="#contact" class="btn-primary" style="padding:6px 14px; font-size:13px;">Register Crew</a>
				</div>
			</div>
		</div>

		<!-- Event Card 3 -->
		<div class="ub-card">
			<div class="ub-card-media">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/event3.jpg' ); ?>" onerror="this.src='https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=600&q=80'" alt="Acoustic Sunset Session" loading="lazy" decoding="async">
				<span class="ub-card-badge">Live Concert</span>
			</div>
			<div class="ub-card-body">
				<div class="ub-card-meta">
					📅 Sep 18, 2026 • 📍 Rooftop Lounge
				</div>
				<h3 class="ub-card-title"><a href="#events">Rooftop Acoustic Sessions</a></h3>
				<p class="ub-card-desc">Chill sunset vibes with intimate acoustic sets, open mic sessions, and networking with student creators.</p>
				<div class="ub-card-footer">
					<span style="color:var(--ub-cyan); font-weight:700;">Limited 100 Seats</span>
					<a href="#contact" class="btn-primary" style="padding:6px 14px; font-size:13px;">Book Spot</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact Form Section -->
<section id="contact" style="padding:0 24px;">
	<div class="ub-section-title-wrap">
		<div class="ub-section-subtitle">Get In Touch</div>
		<h2 class="ub-section-title">Have a Question or Want to Collaborate?</h2>
	</div>
	<div class="ub-contact-section">
		<!-- Web3Forms Functional Contact Form -->
		<form id="contact-form" class="wpcf7-form" novalidate>
			<!-- ================================================================= -->
			<!-- WEB3FORMS ACCESS KEY CONFIGURATION                                -->
			<!-- Replace 'YOUR_WEB3FORMS_ACCESS_KEY_HERE' below with your key from https://web3forms.com/ -->
			<!-- ================================================================= -->
			<input type="hidden" name="access_key" value="fabc9056-0811-4b1b-af1d-2bd729ee5ea5">
			<input type="hidden" name="from_name" value="UrbanBeat Platform">
			<input type="hidden" name="subject" value="New Contact Form Submission - UrbanBeat">

			<p>
				<label for="contact-name" style="color:var(--ub-text-muted); font-size:14px; font-weight:600;">Your Name (Required)</label>
				<span class="wpcf7-form-control-wrap"><input type="text" id="contact-name" name="name" class="wpcf7-text" placeholder="e.g. Alex Johnson" required></span>
			</p>
			<p>
				<label for="contact-email" style="color:var(--ub-text-muted); font-size:14px; font-weight:600;">Your Email Address (Required)</label>
				<span class="wpcf7-form-control-wrap"><input type="email" id="contact-email" name="email" class="wpcf7-text" placeholder="alex@company.com" required></span>
			</p>
			<p>
				<label for="contact-subject" style="color:var(--ub-text-muted); font-size:14px; font-weight:600;">Subject / Event Interest</label>
				<span class="wpcf7-form-control-wrap"><input type="text" id="contact-subject" name="subject" class="wpcf7-text" placeholder="e.g. Fest Partnership or Event RSVP"></span>
			</p>
			<p>
				<label for="contact-message" style="color:var(--ub-text-muted); font-size:14px; font-weight:600;">Your Message (Required)</label>
				<span class="wpcf7-form-control-wrap"><textarea id="contact-message" name="message" class="wpcf7-textarea" rows="4" placeholder="Tell us how we can help..." required></textarea></span>
			</p>

			<!-- Form Submission Feedback Message Container -->
			<div id="contact-form-message" class="wpcf7-response-output" style="display:none; margin-bottom:20px;"></div>

			<p>
				<button type="submit" id="contact-submit-btn" class="wpcf7-submit">Send Message 🚀</button>
			</p>
		</form>
	</div>
</section>
