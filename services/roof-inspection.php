<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Roof Inspection Grand Rapids MI | Kamps Professional Roofing';
$pageDescription = 'Kamps provides thorough roof inspections in Grand Rapids, MI — written photo reports, full system assessment (shingles, flashings, ventilation, gutters). Free estimates always.';
$pageKeywords    = 'roof inspection grand rapids mi, free roof inspection kent county, roof assessment services michigan, residential roof inspection grand rapids';
$canonicalUrl    = SITE_URL . '/services/roof-inspection';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26.webp';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26.webp';

$breadcrumbs = [
    ['name' => 'Home',             'url' => '/'],
    ['name' => 'Services',         'url' => '/services'],
    ['name' => 'Roof Inspection',  'url' => '/services/roof-inspection'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Roof Inspection',
    'Kamps Professional Roofing provides comprehensive residential roof inspections in Grand Rapids, MI. Written reports with photos cover shingles, flashings, valleys, gutters, soffits, fascia, and attic ventilation — serving Kent County and West Michigan.',
    '/services/roof-inspection'
) . ']';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ── Page-specific: Roof Inspection ──────────────────────── */
.inner-hero {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center;
  padding-top: 80px;
}
.inner-hero .hero-content { text-align: left; max-width: 700px; }

.breadcrumb-nav {
  background: var(--color-light);
  padding: 0.75rem 0;
  border-bottom: 1px solid var(--color-gray-light);
}
.breadcrumb {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  list-style: none;
  font-size: 0.875rem;
}
.breadcrumb-item + .breadcrumb-item::before { content: '/'; color: var(--color-gray); }
.breadcrumb-item a { color: var(--color-primary); }
.breadcrumb-item.active { color: var(--color-gray); }

.process-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.5rem;
  margin-top: 2.5rem;
}
.process-step {
  text-align: center;
  padding: 2rem 1.5rem;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-card);
}
.process-number {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
  color: white;
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1rem;
}
.process-step h3 { font-size: 1rem; margin-bottom: 0.5rem; color: var(--color-dark); }
.process-step p { font-size: 0.875rem; color: var(--color-gray); line-height: 1.5; }

.why-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.5rem;
  margin-top: 2.5rem;
}
.why-item {
  display: flex;
  gap: 1rem;
  padding: 1.5rem;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-card);
}
.why-icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
}
.why-item h3 { font-size: 1rem; margin-bottom: 0.4rem; color: var(--color-dark); }
.why-item p { font-size: 0.875rem; color: var(--color-gray); line-height: 1.5; }

.stat-overlay {
  position: absolute;
  bottom: -1.5rem;
  right: -1.5rem;
  background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
  color: white;
  border-radius: var(--radius-lg);
  padding: 1.25rem 1.75rem;
  text-align: center;
  box-shadow: var(--shadow-lg);
}
.stat-overlay .big-number {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 800;
  line-height: 1;
}
.stat-overlay .label {
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  opacity: 0.9;
  margin-top: 0.25rem;
}
.about-image { position: relative; }

/* Inspection checklist grid */
.checklist-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0.75rem;
  margin: 1.5rem 0;
}
.checklist-item {
  display: flex;
  align-items: center;
  gap: 0.6rem;
  font-size: 0.9rem;
  color: var(--color-dark);
  padding: 0.625rem 0.875rem;
  background: var(--color-white);
  border-radius: var(--radius-md);
  border: 1px solid var(--color-gray-light);
}
.checklist-item svg { flex-shrink: 0; color: var(--color-accent); }

.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.5rem;
  margin-top: 2.5rem;
}
.faq-item {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: 1.75rem;
  box-shadow: var(--shadow-card);
  border-left: 4px solid var(--color-accent);
}
.faq-item h3 { font-size: 1rem; margin-bottom: 0.75rem; color: var(--color-dark); }
.faq-item p { font-size: 0.9rem; color: var(--color-gray); line-height: 1.6; }

@media (max-width: 1023px) {
  .process-grid { grid-template-columns: 1fr 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
}
@media (max-width: 767px) {
  .why-grid { grid-template-columns: 1fr; }
  .checklist-grid { grid-template-columns: 1fr; }
  .stat-overlay { right: 0; bottom: -1rem; }
}
@media (max-width: 480px) {
  .process-grid { grid-template-columns: 1fr; }
}
</style>

<?php echo breadcrumb_nav($breadcrumbs); ?>

<!-- INNER HERO — CTA #1 ──────────────────────────────────── -->
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26.webp');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Roof Inspection Grand Rapids, MI</h1>
      <p class="hero-subtitle">A thorough written inspection — not a verbal walkover — covering shingles, flashings, ventilation, gutters, and the attic. Honest assessment, documented results.</p>
      <div class="hero-buttons">
        <a href="/contact" class="btn btn-accent btn-lg">Schedule an Inspection</a>
        <?php echo phone_link('btn btn-outline-white btn-lg', 'Call Now'); ?>
      </div>
      <div class="hero-trust">
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          Written Photo Report
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
          Honest Assessment
        </span>
      </div>
    </div>
  </div>
</section>

<!-- TICKER STRIP ─────────────────────────────────────────── -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>Written Inspection Reports</span><span>★★★★★</span><span>30+ Years Experience</span><span>Honest Assessment</span><span>Grand Rapids, MI</span><span>Free Estimates</span><span>Real Estate Inspections</span><span>★★★★★</span>
    <span>Written Inspection Reports</span><span>★★★★★</span><span>30+ Years Experience</span><span>Honest Assessment</span><span>Grand Rapids, MI</span><span>Free Estimates</span><span>Real Estate Inspections</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL ───────────────────────────────────────── -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
          <span class="eyebrow">Roof Assessment</span>
          <h2>Know the Actual Condition of Your Roof — Not a Guess</h2>
        </div>
        <p>A roof inspection from Kamps gives you a documented, accurate picture of your roof's condition — useful whether you're planning maintenance, buying or selling a home, filing an insurance claim, or just want to know what you're working with. Free estimates are always provided; detailed written inspection reports with photos are available from $150 depending on scope and property size.</p>
        <p>A complete inspection covers the entire roofing system, not just the shingle surface. Here's what Kamps checks:</p>

        <div class="checklist-grid">
          <div class="checklist-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
            Shingle condition and age
          </div>
          <div class="checklist-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
            Flashings (chimney, walls, skylights)
          </div>
          <div class="checklist-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
            Valleys and ridges
          </div>
          <div class="checklist-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
            Gutters and downspouts
          </div>
          <div class="checklist-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
            Soffit and fascia
          </div>
          <div class="checklist-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
            Attic ventilation system
          </div>
          <div class="checklist-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
            Pipe boots and penetrations
          </div>
          <div class="checklist-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
            Interior attic (moisture, insulation)
          </div>
        </div>

        <p>Kamps inspects a lot of roofs for homebuyers and sellers across the Grand Rapids area. An independent roofing inspection before closing can reveal issues a general home inspector might miss — and gives buyers the leverage to negotiate or budget accurately for repairs. For homes near the Forest Hills, Ada, or East Grand Rapids areas where older housing stock is common, this kind of pre-purchase visibility is especially valuable.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26.webp"
            alt="roof inspection being performed on grand rapids michigan residential home"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">45–90</div>
          <div class="label">Minutes On-Site</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE KAMPS ─────────────────────────────────────── -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>An Inspection Is Only as Good as the Person Doing It</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
        </div>
        <div>
          <h3>Written Report With Photos — Not a Verbal Overview</h3>
          <p>You leave with documentation you can use. A written inspection report with photos is useful for insurance, real estate transactions, maintenance planning, and future reference — not something you have to remember from a conversation.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div>
          <h3>Honest — If Your Roof Is Fine, Daniel Will Tell You</h3>
          <p>Not every inspection leads to a repair quote. If your roof has 8 good years left and just needs some flashing attention, that's what Daniel will say. An honest assessment is more valuable long-term than one that finds problems where there aren't any.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        </div>
        <div>
          <h3>Covers the Full System — Not Just Shingles</h3>
          <p>A roof inspection that only looks at surface shingles misses most of what actually fails first — flashings, valleys, ventilation, and gutters. Kamps checks the full system and notes condition across every component.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
        </div>
        <div>
          <h3>Helps Buyers and Sellers Navigate Transactions</h3>
          <p>A Kamps inspection before closing gives buyers concrete information to negotiate with and helps sellers avoid surprises at the inspection table. Useful for any home transaction in the Grand Rapids area.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — CTA #2 ─────────────────────────────────── -->
<div class="cta-banner">
  <div class="container">
    <h2>Know Exactly What's on Top of Your Home</h2>
    <p>Whether you've owned your Grand Rapids home for 20 years or you're closing on a new one next month, a Kamps roof inspection gives you the documentation and clarity to make good decisions.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule an Inspection</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</div>

<!-- PROCESS STEPS ────────────────────────────────────────── -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">How It Works</span>
      <h2>What a Kamps Roof Inspection Actually Involves</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Visual Exterior Inspection</h3>
        <p>Full rooftop walk examining shingles, flashings, valleys, gutters, soffits, and fascia — with photo documentation of all conditions noted, good or concerning.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Interior Attic Inspection</h3>
        <p>Checks attic ventilation adequacy, insulation condition, moisture or mold signs, and any daylight visible through decking — signs of damage not visible from the exterior.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Photo Documentation</h3>
        <p>Every area of concern is photographed. Photos are organized by roof zone and referenced in the written report — not just emailed as a folder of unlabeled images.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Written Report With Recommendations</h3>
        <p>A clear written summary of current condition, estimated remaining life, any immediate concerns, and recommended action — whether that's nothing, maintenance, repair, or replacement planning.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION ──────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Roof Inspection Questions — Grand Rapids, MI</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>When should I get a roof inspection?</h3>
        <p>There are four common triggers: after any significant storm or hail event; when buying or selling a home; if your roof is over 10 years old and hasn't been inspected in the last 3–5 years; or when you notice anything unusual — granules in gutters, interior staining, or visible shingle damage. In West Michigan, an inspection after the spring storm season and before winter is an especially practical cadence for older roofs.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How long does a roof inspection take?</h3>
        <p>Most single-family homes in Grand Rapids take <strong>45–90 minutes</strong> for a complete inspection, including exterior, gutters, and attic. Larger homes, complex rooflines, or homes requiring more thorough attic access may take longer. The time on-site reflects the thoroughness of the inspection — Kamps doesn't do quick visual walkbys.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What does a roof inspection check?</h3>
        <p>A complete Kamps inspection covers: shingle condition and approximate remaining life, flashing integrity at chimneys, walls, skylights, and pipe boots, valley condition, gutter attachment and drainage, soffit and fascia condition, ridge and hip details, and attic ventilation — plus attic moisture, insulation condition, and any evidence of interior water intrusion. Every component of the roofing system is documented.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Do I need to be home for the inspection?</h3>
        <p>The exterior inspection can typically be completed without you present. The interior attic inspection requires access to your attic hatch — so for a complete inspection, someone needs to be home to let Daniel in. If you're out of town during a home sale, arrangements can be made with a real estate agent or property manager for access.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 ─────────────────────────────────── -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">Make Your Next Roofing Decision Based on Facts, Not Guesses</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">A $150 written inspection report gives you documented clarity on the single most expensive component of your home's exterior. Reach out to schedule yours across the Grand Rapids area.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule an Inspection</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
