# Claude Code Handoff Brief — Globe & Anchor Website Rebuild
> Paste this entire document into Claude Code as your first message.

---

## Context

I'm rebuilding my WordPress website at **https://www.globeanchordigital.com** (WordPress + Astra theme, already live). The site exists but needs a full content and structure overhaul to match my actual consulting business. I don't want a redesign of the theme — I want the content, copy, sections, and page structure to reflect the business as described below.

The goal: a professional, client-facing site that converts a cold visitor into a booked discovery call.

---

## About the Business

**Globe & Anchor Digital Media Solutions LLC** — AI consulting agency.

**Owner:** Arval — AI & Data Architect with 20+ years Fortune 500 experience (BofA, Santander, Aetna/Meritain Health, GE Capital, Citigroup, Dell, Epicor). Key projects include BofA NEWBAC (~$2T daily transactions), Santander Oracle-to-Snowflake migration, Aetna No Surprises Act implementation.

**Target clients:** Mid-market companies in **banking, energy, and healthcare** — specifically community banks, credit unions, midstream/E&P operators, regional health systems, healthcare payors/TPAs, specialty lenders, energy services firms.

**Core problem I solve:** Organizations in regulated industries have adopted AI tools without strategy, governance, or data infrastructure to support them. They face compliance exposure, siloed data, and workforces that never actually changed their workflows.

---

## Service Model (Three Tiers)

### Tier 1 — AI Readiness Audit *(Entry Offer)*
- **Price:** $5,000–$8,000 one-time
- **Duration:** 3–4 weeks
- **Deliverables:** Data infrastructure review, AI risk & compliance gap analysis, use case prioritization matrix, written findings + roadmap
- **CTA:** Book a 30-minute discovery call

### Tier 2 — Claude Training for Teams
- **Price:** $5,000–$10,000 per cohort (up to 20 staff)
- **Includes:** Custom prompting for client workflows, internal knowledge base setup, policy & acceptable use framework, live sessions + recorded library

### Tier 3 — Fractional AI Officer *(Ongoing Retainer)*
- **Price:** $4,000–$8,000/month
- **Includes:** AI governance program ownership, vendor evaluation & oversight, roadmap execution support, board/exec reporting

---

## Client Journey (Funnel)

AI Readiness Audit → Claude Training + PoC Build → Governance Implementation → Fractional AI Officer

---

## Page Structure to Build

### 1. Homepage (`/`)

**Sections in order:**

1. **Hero**
   - Headline: "Your AI strategy, operationalized."
   - Subhead: "AI governance, data architecture, and hands-on implementation for mid-market companies in banking, energy, and healthcare — led by a practitioner who's done it inside Fortune 500s."
   - Primary CTA button: "Book a Discovery Call" → links to `/contact/`
   - Secondary CTA: "See Our Services" → anchors to services section

2. **Problem Section** ("Sound familiar?")
   - Four pain points in a 2x2 grid:
     - "AI tools, no strategy" — Teams adopt tools ad hoc. No governance, no data standards, no ROI.
     - "Data chaos blocking AI" — Legacy systems and siloed data stall every AI initiative before it starts.
     - "Compliance exposure" — No AI risk framework. Regulators are asking questions no one has answers for.
     - "Workforce not enabled" — Staff reverts to old workflows because AI training was a one-day demo, not a working system.

3. **Services Section** (`#services`) — three-column card layout, one card per tier (see service model above). Mark the Audit card as "Start Here."

4. **Client Journey / Funnel** — horizontal flow: Audit → Training → Governance → Fractional AI Officer

5. **Credibility Strip**
   - Stat: "20+ years in enterprise data & AI architecture"
   - Stat: "$2T daily transaction volume — BofA NEWBAC"
   - Stat: "3 regulated industries: banking, healthcare, financial services"
   - Logos or text mentions: BofA, Santander, Aetna, GE Capital, Dell

6. **About Arval** (short version, 3–4 sentences max)
   - "I'm Arval, an AI & Data Architect with 20+ years inside Fortune 500s including BofA, Santander, and Aetna. I've led data governance programs, cloud migrations, and regulatory compliance implementations at scale. Globe & Anchor exists because mid-market companies deserve the same quality of AI strategy that enterprise companies pay millions for — without the consulting firm markup."

7. **CTA Banner**
   - Headline: "Start with an AI Readiness Audit"
   - Body: "A 30-minute discovery call. No pitch deck. Just a frank assessment of where you stand and what's actually worth doing."
   - Button: "Book Your Discovery Call" → `/contact/`

8. **Footer**
   - Company name, location (Houston, TX — Remote-first), contact email, nav links

---

### 2. Services Page (`/services/`)

Full detail page for each of the three service tiers. Each service gets:
- Name + price range
- Who it's for (the specific client type)
- What's included (bulleted)
- What they walk away with
- CTA to book a call

Also include the client journey funnel at the bottom.

---

### 3. About Page (`/about/`)

- Full bio: background, Fortune 500 logos/names, key projects (NEWBAC, Oracle→Snowflake, No Surprises Act)
- Current credentials in progress: AIGP (IAPP), AWS AI Cloud Practitioner
- Philosophy: why Globe & Anchor exists, what "practitioner-led" means vs. consulting firm overhead
- Headshot placeholder (I will supply the image)
- CTA at bottom: "Work with me" → `/contact/`

---

### 4. Contact Page (`/contact/`)

- Headline: "Book a 30-Minute Discovery Call"
- Brief copy: "No decks, no demos. Just a direct conversation about where your AI program stands and what it would take to move it forward."
- Embed a Calendly scheduling widget (placeholder — I will add my Calendly URL)
- Backup: simple contact form (name, company, email, message)
- Note: "Currently accepting clients in banking, energy, and healthcare."

---

## Brand Identity & Visual Theme

### Aesthetic: Cyberpunk / Neural-Digital
The site should carry a **dark cyberpunk aesthetic** — not gimmicky, but premium and tech-forward. Think: dark backgrounds with glowing circuit traces, neural pathway line art, subtle grid overlays, electric blue and cyan accent glows. This is a data and AI firm — the design should feel like it lives in that world.

**Primary palette:**
- Background: Deep navy/near-black `#050D1A` or `#0A1628`
- Primary accent: Electric blue `#00A8FF` or `#185FA5`
- Secondary accent: Cyan glow `#00E5FF`
- Text: `#E8F4FD` (off-white) and `#8BB8D4` (muted blue-gray)
- Highlight/CTA: Bright electric blue `#0CF` with subtle glow effect

**Textures & effects to use:**
- CSS-based circuit board line patterns or neural pathway SVG overlays on hero and section backgrounds
- Subtle grid lines (`1px` opacity ~5%) on dark sections
- Blue/cyan glow on cards on hover (`box-shadow: 0 0 20px rgba(0,200,255,0.15)`)
- Thin glowing borders on cards (`border: 1px solid rgba(0,200,255,0.2)`)
- Use CSS or lightweight JS for any animated effects — no heavy libraries

### The OpenClaw.ai Avatar — Howard
**Howard** is a chocolate Labrador rendered in a cyberpunk/digital environment — neural network overlays on his body, glowing circuit grid beneath his paws, data visualization elements surrounding him. He is the mascot for **OpenClaw.ai**, an AI assistant platform built by Globe & Anchor.

- Howard should appear in the **hero section** as a supporting visual (right side of hero on desktop)
- A smaller Howard badge/icon should appear in the footer or nav as the OpenClaw.ai brand mark
- Include a brief callout section: "Powered by OpenClaw.ai — our proprietary AI assistant platform" with Howard's image and a link placeholder (`<!-- OPENCLAW.AI URL -->`)
- Image file will be supplied — use a placeholder `<img>` tag with class `howard-avatar` and alt text "Howard — OpenClaw.ai AI Assistant"

### Globe & Anchor Logo Usage
- The logo features a globe-and-anchor icon in electric blue with "GLOBE & ANCHOR / DIGITAL MEDIA SOLUTIONS" wordmark
- Use it in the nav (top left) and footer
- On dark backgrounds, use the full-color version (provided)
- Logo file: I will supply — placeholder `<img class="gad-logo">` in nav

---

## Implementation Notes

- **Platform:** WordPress + Astra theme
- **Approach:** Use WordPress block editor (Gutenberg) where possible. For custom sections (hero, credibility strip, funnel, Howard callout), provide clean HTML/CSS to paste into Custom HTML blocks or child theme `style.css`.
- **Dark mode site:** The entire site runs dark — override Astra's default light background globally in the child theme CSS.
- **Typography:** Suggest Google Fonts via Customizer: `Orbitron` or `Rajdhani` for headings (tech/cyberpunk feel), `Inter` or `DM Sans` for body. Load via WordPress Customizer > Additional CSS or functions.php.
- **Mobile:** All sections must be responsive. Stack 2-col grids to 1-col on mobile. Howard image stacks below hero text on mobile.
- **No stock photo filler.** Use dark placeholder divs with circuit-pattern CSS backgrounds — I will supply real photography and Howard's image.
- **Calendly:** Leave a clear placeholder comment: `<!-- REPLACE WITH YOUR CALENDLY EMBED URL -->`
- **Performance:** Keep CSS animations subtle and GPU-friendly (`transform`, `opacity` only). No JavaScript animation libraries unless truly necessary.

---

## Deliverables I Need From You

1. Full homepage HTML/CSS (for Custom HTML blocks or a page template) — or step-by-step Gutenberg block instructions if that's cleaner in Astra
2. Services page content and layout
3. About page content and layout
4. Contact page with Calendly embed placeholder + contact form
5. Any `style.css` additions needed for the custom sections
6. A clear file/folder structure so I know where each piece goes

---

## Tone

Professional but direct. No corporate fluff. This is a practitioner-led shop, not a big consulting firm. The copy should feel like it was written by someone who has actually sat in the data warehouse and fixed things — not a marketing agency.
