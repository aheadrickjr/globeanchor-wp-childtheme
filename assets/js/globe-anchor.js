/**
 * Globe & Anchor Digital — theme JavaScript
 * GPU-friendly only: transform + opacity. No animation libraries.
 */
(function () {
  'use strict';

  // ── Sticky header shadow on scroll ─────────────────────────────────────────
  var header = document.querySelector('#masthead, .main-header-bar');
  if (header) {
    window.addEventListener('scroll', function () {
      header.style.boxShadow = window.scrollY > 60
        ? '0 4px 30px rgba(0,0,0,0.6)'
        : 'none';
    }, { passive: true });
  }

  // ── Smooth scroll for anchor links ─────────────────────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var id     = this.getAttribute('href');
      var target = document.querySelector(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // ── Contact form AJAX submit ────────────────────────────────────────────────
  var form = document.getElementById('ga-contact-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var btn    = form.querySelector('.ga-form-submit');
      var status = document.getElementById('ga-form-status');

      btn.textContent = 'Sending…';
      btn.disabled    = true;

      var data = new FormData(form);
      // Nonce injected by functions.php ga_inline_nonce()
      if (typeof gaContactNonce !== 'undefined') {
        data.set('nonce', gaContactNonce);
      }

      var url = (typeof gaAjaxUrl !== 'undefined') ? gaAjaxUrl : '/wp-admin/admin-ajax.php';

      fetch(url, { method: 'POST', body: data })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (res.success) {
            form.innerHTML =
              '<p style="color:var(--ga-accent-cyan);text-align:center;padding:24px 0;font-size:1rem;">'
              + (res.data || 'Message sent — we\'ll be in touch shortly.')
              + '</p>';
          } else {
            btn.textContent = 'Send Message';
            btn.disabled    = false;
            if (status) {
              status.textContent  = res.data || 'Something went wrong. Please try again.';
              status.style.color  = '#ff6b6b';
              status.style.display = 'block';
            }
          }
        })
        .catch(function () {
          btn.textContent = 'Send Message';
          btn.disabled    = false;
          if (status) {
            status.textContent  = 'Network error — please try again or email us directly.';
            status.style.color  = '#ff6b6b';
            status.style.display = 'block';
          }
        });
    });
  }

})();
