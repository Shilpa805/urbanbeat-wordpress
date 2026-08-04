/**
 * UrbanBeat Frontend Script — Production & Performance Upgrades
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

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
          // Close mobile menu if open
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
});
