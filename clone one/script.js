/**
 * Risk Verifier Theme JavaScript
 * Mobile menu, scroll interactions, and UX enhancements
 */

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Navigation Drawer Toggle
  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const mobileCloseBtn = document.getElementById('mobileCloseBtn');
  const mobileLinks = document.querySelectorAll('.mobile-nav-link');

  function openMobileMenu() {
    if (mobileDrawer) {
      mobileDrawer.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeMobileMenu() {
    if (mobileDrawer) {
      mobileDrawer.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  if (hamburgerBtn) {
    hamburgerBtn.addEventListener('click', openMobileMenu);
  }

  if (mobileCloseBtn) {
    mobileCloseBtn.addEventListener('click', closeMobileMenu);
  }

  if (mobileDrawer) {
    mobileDrawer.addEventListener('click', (e) => {
      if (e.target === mobileDrawer) {
        closeMobileMenu();
      }
    });
  }

  mobileLinks.forEach(link => {
    link.addEventListener('click', closeMobileMenu);
  });

  // Sticky Header elevation on scroll
  const siteHeader = document.querySelector('.main-header');
  const scrollToTopBtn = document.getElementById('scrollToTop');

  window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;

    // Header elevation
    if (siteHeader) {
      if (scrollPos > 40) {
        siteHeader.style.boxShadow = '0 6px 20px rgba(0, 15, 65, 0.08)';
      } else {
        siteHeader.style.boxShadow = '0 4px 18px rgba(0, 15, 65, 0.04)';
      }
    }

    // Back to top visibility
    if (scrollToTopBtn) {
      if (scrollPos > 350) {
        scrollToTopBtn.classList.add('show');
      } else {
        scrollToTopBtn.classList.remove('show');
      }
    }
  });

  // Scroll to top action
  if (scrollToTopBtn) {
    scrollToTopBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // Newsletter form submission handling
  const newsletterForm = document.querySelector('.newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = newsletterForm.querySelector('.newsletter-input');
      if (input && input.value.trim() !== '') {
        const originalText = newsletterForm.querySelector('button').textContent;
        const btn = newsletterForm.querySelector('button');
        btn.textContent = 'Subscribed!';
        btn.style.backgroundColor = '#0C522D';
        input.value = '';
        setTimeout(() => {
          btn.textContent = originalText;
          btn.style.backgroundColor = '';
        }, 3000);
      }
    });
  }
});
