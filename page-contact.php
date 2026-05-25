<?php
/**
 * Template Name: Globe & Anchor: Contact
 * Description:   Discovery call booking + contact form — assign to the /contact/ page in WP Admin.
 *
 * @package Globe_Anchor_Digital
 */

get_header(); ?>

<div id="primary" class="content-area ga-full-page" style="width:100%;max-width:100%;padding:0;margin:0;">
<main id="main" class="site-main" role="main" style="padding:0;">

<!-- ══ CONTACT HERO ══ -->
<section class="ga-contact-hero ga-circuit-bg">
  <h1>Book a 30-Minute Discovery Call</h1>
  <p>
    No decks, no demos. Just a direct conversation about where your AI program stands
    and what it would take to move it forward.
  </p>
  <p class="ga-contact-note">Currently accepting clients in banking, energy, and healthcare.</p>
</section>

<!-- ══ CONTACT BODY ══ -->
<section class="ga-contact-body">
  <div class="ga-contact-grid">

    <!-- Calendly Embed -->
    <div class="ga-calendly-wrap">

      <!-- ============================================================
           REPLACE BELOW WITH YOUR CALENDLY EMBED
           Example:
           <div
             class="calendly-inline-widget"
             data-url="https://calendly.com/YOUR-LINK"
             style="min-width:320px;height:700px;"
           ></div>
           <script src="https://assets.calendly.com/assets/external/widget.js" async></script>
           ============================================================ -->

      <div class="ga-calendly-placeholder">
        <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
          <line x1="16" y1="2" x2="16" y2="6"></line>
          <line x1="8"  y1="2" x2="8"  y2="6"></line>
          <line x1="3"  y1="10" x2="21" y2="10"></line>
        </svg>
        <p style="margin:0 0 6px;">Calendly scheduling widget</p>
        <small>Replace this block with your Calendly inline embed code.</small>
      </div>

    </div><!-- .ga-calendly-wrap -->

    <!-- Backup Contact Form -->
    <div class="ga-contact-form">
      <h3>Or send a message directly</h3>

      <form
        id="ga-contact-form"
        action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>"
        method="POST"
        novalidate
      >
        <input type="hidden" name="action" value="ga_contact_submit">

        <div class="ga-form-group">
          <label for="ga_name">Name <span style="color:var(--ga-accent-cyan)">*</span></label>
          <input
            type="text"
            id="ga_name"
            name="ga_name"
            placeholder="Jane Smith"
            required
            autocomplete="name"
          />
        </div>

        <div class="ga-form-group">
          <label for="ga_company">Company</label>
          <input
            type="text"
            id="ga_company"
            name="ga_company"
            placeholder="Acme Community Bank"
            autocomplete="organization"
          />
        </div>

        <div class="ga-form-group">
          <label for="ga_email">Email <span style="color:var(--ga-accent-cyan)">*</span></label>
          <input
            type="email"
            id="ga_email"
            name="ga_email"
            placeholder="jane@example.com"
            required
            autocomplete="email"
          />
        </div>

        <div class="ga-form-group">
          <label for="ga_message">Message <span style="color:var(--ga-accent-cyan)">*</span></label>
          <textarea
            id="ga_message"
            name="ga_message"
            placeholder="Tell me where you're at with AI and what you're trying to figure out."
            required
          ></textarea>
        </div>

        <button type="submit" class="ga-btn ga-btn-primary ga-form-submit">
          Send Message
        </button>

        <p id="ga-form-status" style="margin-top:14px;font-size:.85rem;display:none;"></p>
      </form>
    </div><!-- .ga-contact-form -->

  </div><!-- .ga-contact-grid -->
</section><!-- .ga-contact-body -->

</main>
</div>

<?php get_footer(); ?>
