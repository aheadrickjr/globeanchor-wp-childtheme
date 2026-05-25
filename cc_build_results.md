  ---
  Files built

  ┌───────────────────────────┬─────────────────────────────────────────┐
  │           File            │                 Purpose                 │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ style.css                 │ Child theme header + all CSS (~600      │
  │                           │ lines)                                  │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ functions.php             │ Astra enqueue, Google Fonts, body       │
  │                           │ classes, contact form AJAX              │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ page-home.php             │ 8-section homepage template             │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ page-services.php         │ Full 3-tier services detail page        │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ page-about.php            │ Bio, key projects, credentials,         │
  │                           │ philosophy                              │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ page-contact.php          │ Calendly embed placeholder + AJAX       │
  │                           │ contact form                            │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ assets/js/globe-anchor.js │ Scroll shadow, smooth scroll, form      │
  │                           │ submission                              │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ assets/images/.gitkeep    │ Folder placeholder for Howard +         │
  │                           │ headshot images                         │
  ├───────────────────────────┼─────────────────────────────────────────┤
  │ CLAUDE.md                 │ Updated with real structure, setup      │
  │                           │ steps, placeholders                     │
  └───────────────────────────┴─────────────────────────────────────────┘

  ---
  To deploy

  1. Upload the globe-anchor-wp folder to wp-content/themes/ on your server
  2. Activate it in Appearance → Themes
  3. Create 4 pages in WP Admin (Home, Services, About, Contact), assign
  each the matching template from the Page Attributes dropdown
  4. Drop images into assets/images/: howard-avatar.png and
  arval-headshot.jpg
  5. Add your Calendly embed — replace the placeholder block in
  page-contact.php around line 45
  6. Add your logo via Astra Customizer → Header → Logo (img tag gets class
   gad-logo, already styled)
  7. Set OpenClaw.ai URL in page-home.php — search for href="#" in the
  OpenClaw callout section