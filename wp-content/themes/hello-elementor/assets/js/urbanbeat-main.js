/**
 * UrbanBeat Frontend Script & Web3Forms Integration
 * Handles UI interactions and asynchronous form submissions.
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // ==========================================================================
  // WEB3FORMS ACCESS KEY CONFIGURATION
  // Replace 'YOUR_WEB3FORMS_ACCESS_KEY_HERE' below with your key from https://web3forms.com/
  // ==========================================================================
  const WEB3FORMS_ACCESS_KEY = "YOUR_WEB3FORMS_ACCESS_KEY_HERE";

  // 1. Sticky Header Shrink on Scroll
  const header = document.querySelector('.site-header');
  if (header) {
    let ticking = false;
    window.addEventListener('scroll', function () {
      if (!ticking) {
        window.requestAnimationFrame(function () {
          if (window.scrollY > 40) {
            header.classList.add('scrolled');
          } else {
            header.classList.remove('scrolled');
          }
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }

  // 2. Accessibility & Responsive Mobile Navigation Drawer
  const mobileToggle = document.querySelector('.mobile-nav-toggle');
  const navDropdown = document.querySelector('.site-navigation-dropdown');

  if (mobileToggle && navDropdown) {
    mobileToggle.addEventListener('click', function () {
      const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
      mobileToggle.setAttribute('aria-expanded', !isExpanded);
      if (isExpanded) {
        navDropdown.style.display = 'none';
        navDropdown.setAttribute('aria-hidden', 'true');
      } else {
        navDropdown.style.display = 'block';
        navDropdown.setAttribute('aria-hidden', 'false');
      }
    });
  }

  // 3. Intersection Observer Scroll Reveal Animations
  const revealElements = document.querySelectorAll('.ub-hero-section, .ub-stat-card, .ub-card, .ub-section-title-wrap, .ub-contact-section');
  
  if ('IntersectionObserver' in window) {
    revealElements.forEach(el => el.classList.add('ub-reveal'));
    
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => observer.observe(el));
  }

  // 4. Smooth Anchor Link Scrolling
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
          if (navDropdown && navDropdown.style.display === 'block') {
            navDropdown.style.display = 'none';
            if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
          }
        }
      }
    });
  });

  // 5. Back to Top Button Handler
  const backToTopBtn = document.querySelector('.back-to-top');
  if (backToTopBtn) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 350) {
        backToTopBtn.style.opacity = '1';
        backToTopBtn.style.pointerEvents = 'auto';
      } else {
        backToTopBtn.style.opacity = '0';
        backToTopBtn.style.pointerEvents = 'none';
      }
    }, { passive: true });

    backToTopBtn.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // ==========================================================================
  // WEB3FORMS FORM HANDLING & VALIDATION
  // ==========================================================================

  // Utility: Validate Email Address Format
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
  }

  // Utility: Display Feedback Messages for Contact Form
  function showContactFeedback(element, text, type) {
    if (!element) return;
    element.textContent = text;
    element.style.display = 'block';
    if (type === 'success') {
      element.style.borderColor = '#10b981';
      element.style.backgroundColor = 'rgba(16, 185, 129, 0.15)';
      element.style.color = '#34d399';
    } else {
      element.style.borderColor = '#ef4444';
      element.style.backgroundColor = 'rgba(239, 68, 68, 0.15)';
      element.style.color = '#f87171';
    }
  }

  // Utility: Display Feedback Messages for Newsletter Form
  function showNewsletterFeedback(element, text, isSuccess) {
    if (!element) return;
    element.textContent = text;
    element.style.color = isSuccess ? '#34d399' : '#f87171';
    element.style.display = 'block';
  }

  // A. Contact Form Web3Forms Handler
  const contactForm = document.getElementById('contact-form');
  const contactFormMessage = document.getElementById('contact-form-message');
  const contactSubmitBtn = document.getElementById('contact-submit-btn');

  if (contactForm) {
    contactForm.addEventListener('submit', async function (e) {
      e.preventDefault();

      const nameInput = document.getElementById('contact-name');
      const emailInput = document.getElementById('contact-email');
      const messageInput = document.getElementById('contact-message');

      const name = nameInput ? nameInput.value.trim() : '';
      const email = emailInput ? emailInput.value.trim() : '';
      const message = messageInput ? messageInput.value.trim() : '';

      // Reset feedback container
      if (contactFormMessage) {
        contactFormMessage.style.display = 'none';
      }

      // Client-side Validation
      if (!name) {
        showContactFeedback(contactFormMessage, 'Please enter your name.', 'error');
        if (nameInput) nameInput.focus();
        return;
      }

      if (!email || !validateEmail(email)) {
        showContactFeedback(contactFormMessage, 'Please enter a valid email address.', 'error');
        if (emailInput) emailInput.focus();
        return;
      }

      if (!message) {
        showContactFeedback(contactFormMessage, 'Please enter your message.', 'error');
        if (messageInput) messageInput.focus();
        return;
      }

      // Disable button & set loading state
      const originalBtnText = contactSubmitBtn ? contactSubmitBtn.innerHTML : 'Send Message 🚀';
      if (contactSubmitBtn) {
        contactSubmitBtn.disabled = true;
        contactSubmitBtn.innerHTML = 'Sending Message... ⏳';
      }

      try {
        const formData = new FormData(contactForm);
        
        // Ensure access key falls back to WEB3FORMS_ACCESS_KEY if default string is used
        if (!formData.get('access_key') || formData.get('access_key') === 'YOUR_WEB3FORMS_ACCESS_KEY_HERE') {
          formData.set('access_key', WEB3FORMS_ACCESS_KEY);
        }

        const response = await fetch('https://api.web3forms.com/submit', {
          method: 'POST',
          body: formData
        });

        const data = await response.json();

        if (data.success) {
          showContactFeedback(contactFormMessage, '✨ Thank you! Your message has been sent successfully. We will reach out shortly.', 'success');
          contactForm.reset();
        } else {
          showContactFeedback(contactFormMessage, data.message || 'Unable to send message. Please verify your Web3Forms Access Key.', 'error');
        }
      } catch (err) {
        console.error('Contact form submission error:', err);
        showContactFeedback(contactFormMessage, 'Network error. Please check your internet connection and try again.', 'error');
      } finally {
        if (contactSubmitBtn) {
          contactSubmitBtn.disabled = false;
          contactSubmitBtn.innerHTML = originalBtnText;
        }
      }
    });
  }

  // B. Newsletter Form Web3Forms Handler
  const newsletterForm = document.getElementById('newsletter-form');
  const newsletterFormMessage = document.getElementById('newsletter-form-message');
  const newsletterSubmitBtn = document.getElementById('newsletter-submit-btn');

  if (newsletterForm) {
    newsletterForm.addEventListener('submit', async function (e) {
      e.preventDefault();

      const emailInput = document.getElementById('newsletter-email');
      const email = emailInput ? emailInput.value.trim() : '';

      if (newsletterFormMessage) {
        newsletterFormMessage.style.display = 'none';
      }

      // Client-side Validation
      if (!email || !validateEmail(email)) {
        showNewsletterFeedback(newsletterFormMessage, 'Please enter a valid email address.', false);
        if (emailInput) emailInput.focus();
        return;
      }

      // Disable button & set loading state
      const originalBtnText = newsletterSubmitBtn ? newsletterSubmitBtn.innerHTML : 'Join';
      if (newsletterSubmitBtn) {
        newsletterSubmitBtn.disabled = true;
        newsletterSubmitBtn.innerHTML = 'Joining...';
      }

      try {
        const formData = new FormData(newsletterForm);
        
        if (!formData.get('access_key') || formData.get('access_key') === 'YOUR_WEB3FORMS_ACCESS_KEY_HERE') {
          formData.set('access_key', WEB3FORMS_ACCESS_KEY);
        }

        const response = await fetch('https://api.web3forms.com/submit', {
          method: 'POST',
          body: formData
        });

        const data = await response.json();

        if (data.success) {
          showNewsletterFeedback(newsletterFormMessage, '🎉 Thanks for subscribing to UrbanBeat updates!', true);
          newsletterForm.reset();
        } else {
          showNewsletterFeedback(newsletterFormMessage, data.message || 'Unable to subscribe. Please try again.', false);
        }
      } catch (err) {
        console.error('Newsletter submission error:', err);
        showNewsletterFeedback(newsletterFormMessage, 'Network error. Please try again.', false);
      } finally {
        if (newsletterSubmitBtn) {
          newsletterSubmitBtn.disabled = false;
          newsletterSubmitBtn.innerHTML = originalBtnText;
        }
      }
    });
  }
});
