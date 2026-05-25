# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

WordPress child theme for **Globe & Anchor Digital Media Solutions LLC** — an AI consulting firm targeting mid-market companies in banking, energy, and healthcare. Parent theme: **Astra**. The site runs fully dark with a cyberpunk/neural-digital aesthetic.

Brand: dark navy (`#050D1A`) background, electric blue (`#00A8FF`) + cyan (`#00E5FF`) accents, `Orbitron` headings, `Inter` body. Howard (chocolate Lab in cyberpunk digital environment) is the mascot for the subsidiary brand **OpenClaw.ai** and appears in the hero and footer callout.

## File Structure

```
globe-anchor-wp/
├── style.css              # Child theme header + ALL custom CSS (design tokens, Astra overrides, components)
├── functions.php          # Enqueue styles/fonts, body classes, Astra filters, contact form AJAX
├── page-home.php          # Template: Globe & Anchor: Home      → assign to the / page
├── page-services.php      # Template: Globe & Anchor: Services  → assign to /services/
├── page-about.php         # Template: Globe & Anchor: About     → assign to /about/
├── page-contact.php       # Template: Globe & Anchor: Contact   → assign to /contact/
├── assets/
│   ├── js/globe-anchor.js # Scroll shadow, smooth scroll, contact form AJAX
│   └── images/            # Drop howard-avatar.png and arval-headshot.jpg here
└── globe-anchor-claudecode-brief.md  # Original build brief (reference)
```

## WordPress Setup (after uploading theme)

1. **Activate** the child theme: Appearance → Themes → Globe & Anchor Digital → Activate
2. **Assign page templates** in WP Admin for each page (Page Attributes → Template dropdown):
   - Homepage → "Globe & Anchor: Home"
   - /services/ → "Globe & Anchor: Services"
   - /about/ → "Globe & Anchor: About"
   - /contact/ → "Globe & Anchor: Contact"
3. **Set Homepage**: Settings → Reading → "A static page" → select your Home page
4. **Astra Customizer** (Appearance → Customize):
   - Remove any default page title bar for custom-template pages (covered in CSS, but confirm)
   - Typography: Astra's font settings are overridden by child theme CSS — no need to duplicate in Customizer
5. **Supply images** — drop into `assets/images/`:
   - `howard-avatar.png` — Howard cyberpunk Lab image (referenced in hero + OpenClaw callout)
   - `arval-headshot.jpg` — Used in About page (uncomment the `<img>` in `page-about.php`)

## Pending Placeholders

| Location | What to add |
|---|---|
| `page-contact.php` line ~45 | Replace the `ga-calendly-placeholder` div with real Calendly inline embed |
| `page-home.php` OpenClaw section | Replace `href="#"` with actual OpenClaw.ai URL |
| `page-about.php` headshot | Uncomment and update the `<img>` tag pointing to `arval-headshot.jpg` |
| Nav logo | Add `<img class="gad-logo">` to nav via Astra Customizer → Header → Logo |

## CSS Architecture

All CSS lives in `style.css` (no separate files). Key sections marked with block comments:
- **Design Tokens** — CSS custom properties for all colors, fonts
- **Astra Overrides** — header, nav, footer, content-area resets for dark mode
- **`.ga-template` class** — strips Astra's page title and full-width-constrains content for custom page templates
- **Components** — `.ga-btn`, `.ga-section`, `.ga-container`, `.ga-service-card`, `.ga-problem-card`, `.ga-funnel-*`, `.ga-stat`, `.ga-check-list`, `.ga-outcome-box`, `.ga-project-highlight`, `.ga-cred-badge`
- **Backgrounds** — `.ga-grid-bg` (CSS grid lines) and `.ga-circuit-bg` (grid + SVG circuit trace via `::before`/`::after`)
- **Breakpoints** — `max-width: 960px` (collapses all grids to single column), `max-width: 600px` (mobile stack)

## Contact Form

Handled via WordPress AJAX (`admin-ajax.php`). Hook: `ga_contact_submit`. Nonce: `ga_contact_nonce` — injected as `gaContactNonce` JS variable by `ga_inline_nonce()` in `functions.php` (fires only on the contact page template). The form in `page-contact.php` submits to `admin_url('admin-ajax.php')` with `action=ga_contact_submit`. Responses are sent via `wp_mail()` to the site admin email.

## Build Commands

No build tooling — pure PHP/CSS/JS, no npm or compilation step. Upload the theme folder to `wp-content/themes/globe-anchor-wp/` on the server (or symlink for local dev).

If you add a `package.json` later (e.g., for PostCSS or JS bundling), document the commands here.
