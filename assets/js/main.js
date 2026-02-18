/**
 * Example Company - Main JavaScript
 * 
 * Features:
 * - Native Intersection Observer for animations
 * - Mobile navigation toggle
 * - Accordion functionality
 * - Progress bar animations
 * - Count-up animations
 * - Form handling with AJAX
 * - Scroll to top on page reload
 */

(function () {
  'use strict';

  // ==========================================================================
  // Scroll to Top on Page Reload
  // ==========================================================================
  
  // Prevent browser from remembering scroll position
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }

  // ==========================================================================
  // Utility Functions
  // ==========================================================================

  function $(selector) {
    return document.querySelector(selector);
  }

  function $$(selector) {
    return document.querySelectorAll(selector);
  }

  function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  }


  // ==========================================================================
  // CSRF Token Generation
  // ==========================================================================

  function addCsrfToken() {
    const forms = $$('form[method="POST"]');
    forms.forEach(form => {
      if (!form.querySelector('input[name="csrf_token"]')) {
        const tokenInput = document.createElement('input');
        tokenInput.type = 'hidden';
        tokenInput.name = 'csrf_token';
        tokenInput.value = generateCsrfToken();
        form.appendChild(tokenInput);
      }
    });
  }

  function generateCsrfToken() {
    const array = new Uint8Array(32);
    crypto.getRandomValues(array);
    return Array.from(array, byte => byte.toString(16).padStart(2, '0')).join('');
  }

  // ==========================================================================
  // Intersection Observer for Animations
  // ==========================================================================

  function initIntersectionObserver() {
    const options = {
      root: null,
      rootMargin: '0px 0px -100px 0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');

          // Trigger specific animations based on class
          if (entry.target.classList.contains('progress-bar')) {
            animateProgressBar(entry.target);
          }

          if (entry.target.classList.contains('stat-number')) {
            animateCountUp(entry.target);
          }

          if (entry.target.classList.contains('skill-value')) {
            animateCountUp(entry.target);
          }

          // Unobserve after animation triggers
          observer.unobserve(entry.target);
        }
      });
    }, options);

    // Observe all animated elements
    const animatedElements = $$('.fade-up, .fade-in, .scale-in, .progress-bar, .stat-number, .skill-value');
    animatedElements.forEach(el => observer.observe(el));
  }

  // ==========================================================================
  // Progress Bar Animation
  // ==========================================================================

  function animateProgressBar(element) {
    const fill = element.querySelector('.progress-bar-fill');
    if (fill && fill.dataset.width) {
      const targetWidth = parseFloat(fill.dataset.width);
      fill.style.width = '0%';

      setTimeout(() => {
        fill.style.width = targetWidth + '%';
      }, 100);
    }
  }

  // ==========================================================================
  // Count-Up Animation
  // ==========================================================================

  function animateCountUp(element) {
    const target = parseFloat(element.dataset.count || element.dataset.target);
    if (isNaN(target)) return;

    const duration = 2000;
    const startTime = performance.now();
    const startValue = 0;

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);

      // Easing function (ease-out)
      const easeOut = 1 - Math.pow(1 - progress, 3);
      const currentValue = startValue + (target - startValue) * easeOut;

      if (element.dataset.count) {
        element.textContent = Math.floor(currentValue) + (element.dataset.count && target >= 100 ? '%' : '');
      } else {
        element.textContent = Math.floor(currentValue * 10) / 10 + '%';
      }

      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        element.textContent = target + '%';
      }
    }

    requestAnimationFrame(update);
  }

  // ==========================================================================
  // Header Scroll Effect
  // ==========================================================================

  function initHeaderScroll() {
    const header = $('#header');
    if (!header) return;

    let lastScroll = 0;

    function handleScroll() {
      const currentScroll = window.pageYOffset;

      if (currentScroll > 50) {
        header.classList.add('header-scrolled');
      } else {
        header.classList.remove('header-scrolled');
      }

      lastScroll = currentScroll;
    }

    window.addEventListener('scroll', debounce(handleScroll, 10));
    handleScroll();
  }

  // ==========================================================================
  // Mobile Navigation
  // ==========================================================================

  function initMobileNav() {
    const toggle = $('#mobileToggle');
    const nav = $('#mobileNav');
    const overlay = $('#navOverlay');

    if (!toggle || !nav) return;

    function openNav() {
      nav.classList.add('open');
      overlay.classList.add('active');
      toggle.classList.add('active');
      toggle.setAttribute('aria-expanded', 'true');
      nav.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }

    function closeNav() {
      nav.classList.remove('open');
      overlay.classList.remove('active');
      toggle.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
      nav.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    toggle.addEventListener('click', () => {
      if (nav.classList.contains('open')) {
        closeNav();
      } else {
        openNav();
      }
    });

    if (overlay) {
      overlay.addEventListener('click', closeNav);
    }

    // Close nav when clicking a link
    const navLinks = $$('.mobile-nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', closeNav);
    });

    // Close nav on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && nav.classList.contains('open')) {
        closeNav();
      }
    });
  }

  // ==========================================================================
  // Accordion Functionality
  // ==========================================================================

  function initAccordions() {
    const accordions = $$('.accordion');

    accordions.forEach(accordion => {
      const headers = accordion.querySelectorAll('.accordion-header');

      headers.forEach(header => {
        header.addEventListener('click', () => {
          const item = header.closest('.accordion-item');
          const content = item.querySelector('.accordion-content');
          const isOpen = content.classList.contains('open');

          // Close all items in this accordion
          const allItems = accordion.querySelectorAll('.accordion-item');
          allItems.forEach(i => {
            i.querySelector('.accordion-header').setAttribute('aria-expanded', 'false');
            i.querySelector('.accordion-content').classList.remove('open');
          });

          // Open clicked item if it was closed
          if (!isOpen) {
            header.setAttribute('aria-expanded', 'true');
            content.classList.add('open');
          }
        });
      });

      // Set ARIA attributes
      const headersWithAria = accordion.querySelectorAll('.accordion-header');
      headersWithAria.forEach(header => {
        const content = header.closest('.accordion-item').querySelector('.accordion-content');
        header.setAttribute('aria-expanded', content.classList.contains('open'));
        header.setAttribute('aria-controls', content.id || 'accordion-' + Math.random().toString(36).substr(2, 9));
        if (!content.id) {
          content.id = 'accordion-' + Math.random().toString(36).substr(2, 9);
        }
      });
    });
  }

  // ==========================================================================
  // Smooth Scroll for Anchor Links
  // ==========================================================================

  function initSmoothScroll() {
    const links = $$('a[href^="#"]');

    links.forEach(link => {
      link.addEventListener('click', (e) => {
        const targetId = link.getAttribute('href');
        if (targetId === '#') return;

        const target = $(targetId);
        if (target) {
          e.preventDefault();
          const headerHeight = $('#header')?.offsetHeight || 0;
          const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  // ==========================================================================
  // Form Handling with AJAX
  // ==========================================================================

  function initContactForm() {
    const form = $('#contactForm');
    if (!form) return;

    const submitBtn = $('#submitBtn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    const formSuccess = $('#formSuccess');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      // Show loading state
      submitBtn.disabled = true;
      btnText.style.display = 'none';
      btnLoader.style.display = 'inline-flex';

      try {
        const formData = new FormData(form);
        const response = await fetch(form.action, {
          method: 'POST',
          body: formData
        });

        const result = await response.json();

        if (result.success) {
          // Show success message
          form.style.display = 'none';
          formSuccess.style.display = 'block';
          formSuccess.classList.add('visible');
        } else {
          // Show error message
          alert(result.message + '\n\n' + (result.errors ? result.errors.join('\n') : ''));
        }
      } catch (error) {
        console.error('Form submission error:', error);
        alert('An error occurred. Please try again later.');
      } finally {
        // Reset button state
        submitBtn.disabled = false;
        btnText.style.display = 'inline';
        btnLoader.style.display = 'none';
      }
    });
  }

  // ==========================================================================
  // Clients Logo Carousel (CSS-based animation)
  // ==========================================================================

  function initLogoCarousel() {
    const track = $('.clients-track');
    if (!track) return;

    // Animation handled via CSS keyframes, this function is for any JS enhancements
    // Check if user prefers reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReducedMotion) {
      track.style.animation = 'none';
    }
  }

  // ==========================================================================
  // Skill Bars on Scroll
  // ==========================================================================

  function initSkillBars() {
    const skillBars = $$('.skill-item');

    skillBars.forEach(item => {
      const bar = item.querySelector('.progress-bar');
      if (bar) {
        bar.classList.add('progress-bar');
      }
    });
  }

  // ==========================================================================
  // Counter Animation for Stats
  // ==========================================================================

  function initStatCounters() {
    const statNumbers = $$('.stat-number[data-count]');
    statNumbers.forEach(stat => {
      stat.classList.add('stat-number');
    });
  }

  // ==========================================================================
  // Lazy Load Images (if any)
  // ==========================================================================

  function initLazyLoad() {
    if ('loading' in HTMLImageElement.prototype) {
      // Browser supports native lazy loading
      const images = $$('img[loading="lazy"]');
      images.forEach(img => {
        img.removeAttribute('loading');
      });
    }
  }

  // ==========================================================================
  // Initialize Everything
  // ==========================================================================

  function init() {
    addCsrfToken();
    initIntersectionObserver();
    initHeaderScroll();
    initMobileNav();
    initAccordions();
    initSmoothScroll();
    initContactForm();
    initLogoCarousel();
    initSkillBars();
    initStatCounters();
    initLazyLoad();
  }

  // Run when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();
