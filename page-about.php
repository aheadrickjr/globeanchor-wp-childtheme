<?php
/**
 * Template Name: Globe & Anchor: About
 * Description:   About Arval and Globe & Anchor Digital — assign to the /about/ page in WP Admin.
 *
 * @package Globe_Anchor_Digital
 */

get_header(); ?>

<div id="primary" class="content-area ga-full-page" style="width:100%;max-width:100%;padding:0;margin:0;">
<main id="main" class="site-main" role="main" style="padding:0;">

<!-- ══ ABOUT HERO ══ -->
<section class="ga-about-hero ga-circuit-bg">
  <div class="ga-about-hero-inner">

    <!-- Headshot -->
    <div class="ga-headshot-wrap">
      <div class="ga-headshot">
        <!-- Replace with: <img src="<?php // echo esc_url( get_stylesheet_directory_uri() . '/assets/images/arval-headshot.jpg' ); ?>" alt="Arval Headrick — Founder, Globe & Anchor Digital"> -->
        <span style="font-size:.78rem;color:var(--ga-text-muted);text-align:center;padding:20px;">
          [ Headshot —<br>to be supplied ]
        </span>
      </div>
    </div>

    <!-- Bio -->
    <div class="ga-about-bio">
      <h1>Arval Headrick</h1>
      <span class="ga-role-tag">AI &amp; Data Architect &nbsp;·&nbsp; Founder, Globe &amp; Anchor Digital Media Solutions LLC</span>

      <p>
        I've spent 20+ years building data and AI systems inside some of the largest financial
        institutions in the world. That means I've seen what actually works — and what blows up
        when the governance isn't there to back it up.
      </p>

      <p>
        My background spans Bank of America, Santander, Aetna/Meritain Health, GE Capital,
        Citigroup, Dell, and Epicor. I've worked across banking, healthcare, and financial services —
        three of the most regulated, most data-intensive, and most AI-consequential industries
        in existence.
      </p>

      <p>
        Globe &amp; Anchor exists because mid-market companies in these industries are making
        expensive AI decisions without the data infrastructure or governance to support them.
        I've sat in the data warehouse. I've fixed the pipelines. I know what a real AI program
        looks like, and I know the difference between a proof of concept and something that
        actually changes how an organization works.
      </p>

      <!-- Key Projects -->
      <p style="font-family:var(--font-heading);font-size:.65rem;letter-spacing:.2em;text-transform:uppercase;color:var(--ga-accent-cyan);margin-top:36px;margin-bottom:14px;">
        Key Projects
      </p>

      <div class="ga-project-highlight">
        <strong>BofA NEWBAC — Bank of America</strong>
        <p>
          Core data system supporting ~$2 trillion in daily transaction volume. Data architecture,
          pipeline integrity, and governance at true institutional scale.
        </p>
      </div>

      <div class="ga-project-highlight">
        <strong>Oracle → Snowflake Migration — Santander</strong>
        <p>
          End-to-end cloud data migration from legacy Oracle infrastructure to Snowflake. Data
          modeling, ETL re-architecture, and performance validation across the migrated environment.
        </p>
      </div>

      <div class="ga-project-highlight">
        <strong>No Surprises Act Implementation — Aetna / Meritain Health</strong>
        <p>
          Regulatory compliance implementation for federal healthcare billing transparency law.
          Data systems, reporting pipelines, and audit trail architecture built to regulatory spec.
        </p>
      </div>

    </div><!-- .ga-about-bio -->
  </div><!-- .ga-about-hero-inner -->
</section><!-- .ga-about-hero -->

<!-- ══ CREDENTIALS ══ -->
<section class="ga-creds-section">
  <div class="ga-creds-inner">
    <span class="ga-section-label">Credentials</span>
    <h2 class="ga-section-title">Certifications &amp; Credentials</h2>

    <div class="ga-cred-badges">
      <div class="ga-cred-badge">
        <span>In Progress</span>
        AIGP — AI Governance Professional (IAPP)
      </div>
      <div class="ga-cred-badge">
        <span>In Progress</span>
        AWS AI Cloud Practitioner
      </div>
      <div class="ga-cred-badge">
        <span>Experience</span>
        20+ Years Enterprise Data &amp; AI Architecture
      </div>
      <div class="ga-cred-badge">
        <span>Industries</span>
        Banking · Healthcare · Financial Services · Energy
      </div>
    </div>
  </div>
</section><!-- .ga-creds-section -->

<!-- ══ PHILOSOPHY ══ -->
<section class="ga-philosophy">
  <div class="ga-philosophy-inner">
    <span class="ga-section-label">Why Globe &amp; Anchor</span>
    <h2 class="ga-section-title">Practitioner-led.<br>Not firm-overhead-led.</h2>

    <p>
      The big consulting firms have playbooks. They bring in junior analysts, run the same
      framework they ran at the last client, and bill you for the privilege. The partner shows
      up at kickoff and close-out. You don't see them in between.
    </p>

    <p>
      That's not how I work. When you engage Globe &amp; Anchor, you're working with me directly —
      someone who has actually built the systems, navigated the production incidents, and sat
      in the regulatory reviews. The insight isn't packaged. It's earned.
    </p>

    <p>
      Mid-market companies deserve that same quality of strategic thinking — without the markup
      that pays for a downtown office and a sales team you'll never talk to again.
    </p>

    <a href="/contact/" class="ga-btn ga-btn-primary" style="margin-top:36px;">Work with me →</a>
  </div>
</section><!-- .ga-philosophy -->

</main>
</div>

<?php get_footer(); ?>
