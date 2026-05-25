<?php
/**
 * Template Name: Globe & Anchor: Home
 * Description:   Full custom homepage — assign this template to the Home page in WP Admin.
 *
 * @package Globe_Anchor_Digital
 */

get_header(); ?>

<div id="primary" class="content-area ga-full-page" style="width:100%;max-width:100%;padding:0;margin:0;">
<main id="main" class="site-main" role="main" style="padding:0;">

<!-- ══════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════ -->
<section class="ga-hero ga-circuit-bg">
  <div class="ga-hero-inner">

    <div class="ga-hero-content">
      <div class="ga-hero-eyebrow">Globe &amp; Anchor Digital Media Solutions</div>
      <h1>Your AI strategy,<br>operationalized.</h1>
      <p class="ga-hero-sub">
        AI governance, data architecture, and hands-on implementation for mid-market
        companies in banking, energy, and healthcare — led by a practitioner who's done
        it inside Fortune 500s.
      </p>
      <div class="ga-hero-ctas">
        <a href="/contact/" class="ga-btn ga-btn-primary">Book a Discovery Call</a>
        <a href="#services"  class="ga-btn ga-btn-secondary">See Our Services</a>
      </div>
    </div><!-- .ga-hero-content -->

    <div class="ga-hero-visual">
      <?php
      $howard_url = get_stylesheet_directory_uri() . '/assets/images/howard-avatar.png';
      ?>
      <img
        src="<?php echo esc_url( $howard_url ); ?>"
        alt="Howard — OpenClaw.ai AI Assistant"
        class="howard-avatar"
        onerror="this.outerHTML='<div class=\'howard-placeholder\'><svg width=\'72\' height=\'72\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1\' style=\'opacity:.25\'><circle cx=\'12\' cy=\'12\' r=\'10\'\/><path d=\'M12 8v4l3 3\'\/><\/svg><span style=\'font-size:.8rem\'>Howard — OpenClaw.ai<\/span><small style=\'font-size:.7rem;opacity:.5\'>[ Image — to be supplied ]<\/small><\/div>'"
      />
    </div>

  </div>
</section><!-- .ga-hero -->

<!-- ══════════════════════════════════════════════════════
     PROBLEM — "Sound familiar?"
══════════════════════════════════════════════════════ -->
<section class="ga-problems ga-circuit-bg">
  <div class="ga-container">
    <span class="ga-section-label">The Problem</span>
    <h2 class="ga-section-title">Sound familiar?</h2>
    <p class="ga-section-subtitle">
      Mid-market companies in regulated industries are drowning in AI hype and short on actual strategy.
    </p>

    <div class="ga-problems-grid">

      <div class="ga-problem-card">
        <div class="ga-problem-card-icon">⚡</div>
        <h3>AI tools, no strategy</h3>
        <p>Teams adopt tools ad hoc. No governance, no data standards, no ROI.</p>
      </div>

      <div class="ga-problem-card">
        <div class="ga-problem-card-icon">🗄️</div>
        <h3>Data chaos blocking AI</h3>
        <p>Legacy systems and siloed data stall every AI initiative before it starts.</p>
      </div>

      <div class="ga-problem-card">
        <div class="ga-problem-card-icon">⚖️</div>
        <h3>Compliance exposure</h3>
        <p>No AI risk framework. Regulators are asking questions no one has answers for.</p>
      </div>

      <div class="ga-problem-card">
        <div class="ga-problem-card-icon">👥</div>
        <h3>Workforce not enabled</h3>
        <p>Staff reverts to old workflows because AI training was a one-day demo, not a working system.</p>
      </div>

    </div>
  </div>
</section><!-- .ga-problems -->

<!-- ══════════════════════════════════════════════════════
     SERVICES
══════════════════════════════════════════════════════ -->
<section class="ga-services" id="services">
  <div class="ga-container">
    <span class="ga-section-label">What We Do</span>
    <h2 class="ga-section-title">Three ways to engage</h2>
    <p class="ga-section-subtitle">
      Structured for where you actually are — not where a sales deck says you should be.
    </p>

    <div class="ga-services-grid">

      <!-- Tier 1 -->
      <div class="ga-service-card featured">
        <span class="ga-service-badge">Start Here</span>
        <div class="ga-service-tier">Tier 1 — Entry Offer</div>
        <h3>AI Readiness Audit</h3>
        <div class="ga-service-price">$5,000–$8,000 &nbsp;·&nbsp; 3–4 weeks</div>
        <ul>
          <li>Data infrastructure review</li>
          <li>AI risk &amp; compliance gap analysis</li>
          <li>Use case prioritization matrix</li>
          <li>Written findings + 90-day roadmap</li>
        </ul>
        <a href="/contact/" class="ga-btn ga-btn-primary">Book a Discovery Call</a>
      </div>

      <!-- Tier 2 -->
      <div class="ga-service-card">
        <div class="ga-service-tier">Tier 2</div>
        <h3>Claude Training for Teams</h3>
        <div class="ga-service-price">$5,000–$10,000 per cohort (up to 20 staff)</div>
        <ul>
          <li>Custom prompting for your workflows</li>
          <li>Internal knowledge base setup</li>
          <li>Policy &amp; acceptable use framework</li>
          <li>Live sessions + recorded library</li>
        </ul>
        <a href="/contact/" class="ga-btn ga-btn-secondary">Get Details</a>
      </div>

      <!-- Tier 3 -->
      <div class="ga-service-card">
        <div class="ga-service-tier">Tier 3 — Retainer</div>
        <h3>Fractional AI Officer</h3>
        <div class="ga-service-price">$4,000–$8,000/month</div>
        <ul>
          <li>AI governance program ownership</li>
          <li>Vendor evaluation &amp; oversight</li>
          <li>Roadmap execution support</li>
          <li>Board &amp; exec reporting</li>
        </ul>
        <a href="/contact/" class="ga-btn ga-btn-secondary">Get Details</a>
      </div>

    </div>

    <div style="text-align:center;margin-top:36px;">
      <a href="/services/" class="ga-btn ga-btn-secondary">Full Service Details →</a>
    </div>
  </div>
</section><!-- .ga-services -->

<!-- ══════════════════════════════════════════════════════
     CLIENT JOURNEY FUNNEL
══════════════════════════════════════════════════════ -->
<section class="ga-funnel">
  <div class="ga-container" style="text-align:center;">
    <span class="ga-section-label">Client Journey</span>
    <h2 class="ga-section-title" style="text-align:center;">How clients grow with us</h2>

    <div class="ga-funnel-flow">
      <div class="ga-funnel-step">
        <div class="ga-funnel-num">Step 01</div>
        <h4>AI Readiness Audit</h4>
      </div>
      <div class="ga-funnel-arrow">→</div>
      <div class="ga-funnel-step">
        <div class="ga-funnel-num">Step 02</div>
        <h4>Claude Training + PoC Build</h4>
      </div>
      <div class="ga-funnel-arrow">→</div>
      <div class="ga-funnel-step">
        <div class="ga-funnel-num">Step 03</div>
        <h4>Governance Implementation</h4>
      </div>
      <div class="ga-funnel-arrow">→</div>
      <div class="ga-funnel-step">
        <div class="ga-funnel-num">Step 04</div>
        <h4>Fractional AI Officer</h4>
      </div>
    </div>
  </div>
</section><!-- .ga-funnel -->

<!-- ══════════════════════════════════════════════════════
     CREDIBILITY STRIP
══════════════════════════════════════════════════════ -->
<section class="ga-credibility">
  <div class="ga-container" style="text-align:center;">
    <span class="ga-section-label">Track Record</span>

    <div class="ga-stats-row">
      <div class="ga-stat">
        <span class="ga-stat-value">20+</span>
        <div class="ga-stat-label">Years in enterprise data &amp; AI architecture</div>
      </div>
      <div class="ga-stat">
        <span class="ga-stat-value">$2T</span>
        <div class="ga-stat-label">Daily transaction volume — BofA NEWBAC</div>
      </div>
      <div class="ga-stat">
        <span class="ga-stat-value">3</span>
        <div class="ga-stat-label">Regulated industries: banking, healthcare, financial services</div>
      </div>
    </div>

    <div class="ga-logos-row">
      <span class="ga-logo-text">Bank of America</span>
      <span class="ga-logo-text">Santander</span>
      <span class="ga-logo-text">Aetna</span>
      <span class="ga-logo-text">GE Capital</span>
      <span class="ga-logo-text">Dell</span>
    </div>
  </div>
</section><!-- .ga-credibility -->

<!-- ══════════════════════════════════════════════════════
     ABOUT ARVAL (short)
══════════════════════════════════════════════════════ -->
<section class="ga-about-snippet">
  <div class="ga-container">
    <div class="ga-about-inner">
      <span class="ga-section-label">About the Founder</span>
      <blockquote>
        <p>
          I'm Arval, an AI &amp; Data Architect with 20+ years inside Fortune 500s including BofA,
          Santander, and Aetna. I've led data governance programs, cloud migrations, and regulatory
          compliance implementations at scale. Globe &amp; Anchor exists because mid-market companies
          deserve the same quality of AI strategy that enterprise companies pay millions for —
          without the consulting firm markup.
        </p>
      </blockquote>
      <a href="/about/" class="ga-btn ga-btn-secondary">Full Background →</a>
    </div>
  </div>
</section><!-- .ga-about-snippet -->

<!-- ══════════════════════════════════════════════════════
     OPENCLAW.AI CALLOUT
══════════════════════════════════════════════════════ -->
<section class="ga-openclaw">
  <div class="ga-container">
    <div class="ga-openclaw-inner">

      <div class="ga-openclaw-image">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/howard-avatar.png' ); ?>"
          alt="Howard — OpenClaw.ai AI Assistant"
          class="howard-avatar howard-sm"
          onerror="this.style.display='none'"
        />
      </div>

      <div class="ga-openclaw-content">
        <h3>Powered by OpenClaw.ai</h3>
        <p>
          Our proprietary AI assistant platform — purpose-built for regulated industries.
          Intelligent workflows, compliant by design.
        </p>
        <!-- OPENCLAW.AI URL — replace href below -->
        <a href="#" class="ga-btn ga-btn-secondary" style="font-size:.75rem;padding:10px 20px;">
          Learn About OpenClaw.ai →
        </a>
      </div>

    </div>
  </div>
</section><!-- .ga-openclaw -->

<!-- ══════════════════════════════════════════════════════
     CTA BANNER
══════════════════════════════════════════════════════ -->
<section class="ga-cta-banner ga-circuit-bg">
  <div class="ga-cta-banner-inner">
    <h2>Start with an AI Readiness Audit</h2>
    <p>
      A 30-minute discovery call. No pitch deck. Just a frank assessment of where
      you stand and what's actually worth doing.
    </p>
    <a href="/contact/" class="ga-btn ga-btn-primary">Book Your Discovery Call</a>
  </div>
</section><!-- .ga-cta-banner -->

</main>
</div>

<?php get_footer(); ?>
