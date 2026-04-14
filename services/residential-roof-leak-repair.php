<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Roof Leak Repair Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Active roof leak in Grand Rapids? Kamps finds the true source — not just the symptom — and fixes it. Same-week appointments, written assessments, workmanship guarantee.';
$pageKeywords    = 'roof leak repair grand rapids, fix roof leaks mi, emergency roof repair grand rapids, residential roof leak kent county';
$canonicalUrl    = SITE_URL . '/services/residential-roof-leak-repair';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-27__1_.webp';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-27__1_.webp';

$breadcrumbs = [
    ['name' => 'Home',                      'url' => '/'],
    ['name' => 'Services',                  'url' => '/services'],
    ['name' => 'Residential Roof Leak Repair', 'url' => '/services/residential-roof-leak-repair'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Residential Roof Leak Repair',
    'Kamps Professional Roofing locates and repairs roof leaks on Grand Rapids, MI homes. We identify the true source of the leak — not just treat visible symptoms — and provide a written roof condition report after every repair.',
    '/services/residential-roof-leak-repair'
) . ']';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
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
.faq-grid {
  display: grid;
  grid-template-columns: 1fr;
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
}
@media (max-width: 767px) {
  .why-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .process-grid { grid-template-columns: 1fr; }
}
</style>

<?php echo breadcrumb_nav($breadcrumbs); ?>

<!-- Hero — CTA #1 -->
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-27__1_.webp');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Residential Roof Leak Repair Grand Rapids, MI</h1>
      <p class="hero-subtitle">We find the actual source of your leak — not just patch where water shows up inside. Same-week appointments for active leaks across Kent County.</p>
      <div class="hero-buttons">
        <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
        <?php echo phone_link('btn btn-outline-white btn-lg', 'Call Now'); ?>
      </div>
      <div class="hero-trust">
        <span class="hero-trust-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg> Licensed &amp; Insured</span>
        <span class="hero-trust-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 30+ Years Experience</span>
        <span class="hero-trust-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg> Free Estimates</span>
      </div>
    </div>
  </div>
</section>

<!-- Service Detail -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align:left; margin-bottom: 2rem;">
          <span class="eyebrow">Roof Leak Repair</span>
          <h2>The Water Stain on Your Ceiling Is Rarely Where the Leak Actually Is</h2>
        </div>
        <p>Most residential roof leak repairs in Grand Rapids cost <strong>$300-$1,500</strong>, depending on the cause and how much area is affected. Common culprits include failed flashing at chimneys, skylights, and pipe boots; ice dam damage along eaves (extremely common in West Michigan winters); lifted or cracked shingles from high winds; and deteriorated valley material. The repair cost is far lower when the problem is caught before it spreads into the decking or insulation below. Mold can begin developing in wet insulation within 24-48 hours, turning a $500 repair into a $3,000 structural issue if water reaches the decking or interior framing.</p>
        <p>The biggest mistake homeowners make is patching where water appears on the ceiling — which is almost never where the leak originates. Water travels along rafters and sheathing before dripping into visible areas, sometimes traveling 6-10 feet from the actual entry point. Kamps traces every leak to its source through a methodical inspection of the roofline, flashing, and attic space rather than guessing at the most obvious spot.</p>
        <p>After every roof leak repair, you receive a written assessment of your full roof condition — so you know if there are other areas to watch or additional work to plan for your Grand Rapids home. No surprises six months later. If the roof is in overall good shape, Daniel will tell you. If there are other issues developing, you'll know about them before they turn into their own emergency calls.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture><img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-27__1_.webp" alt="roof leak repair on a Grand Rapids Michigan residential home near me" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;"></picture>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Kamps -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>Leak Repair Done Once — Done Right</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        </div>
        <div>
          <h3>We Find the Actual Source — Not Just Patch Symptoms</h3>
          <p>Kamps traces every leak to its true point of entry. A repair that doesn't fix the source isn't a repair — it's a delay. That's not how Daniel has run jobs for 30+ years.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <div>
          <h3>Same-Week Scheduling for Active Leaks</h3>
          <p>An active leak isn't a project to pencil in two weeks out. Kamps prioritizes same-week appointments for confirmed active leaks anywhere in the Grand Rapids area.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
        </div>
        <div>
          <h3>Written Roof Condition Report After Every Repair</h3>
          <p>You leave with a documented assessment of your full roof — not just the repaired area. Useful for insurance, home sales, and planning future maintenance.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>Backed by a Workmanship Guarantee</h3>
          <p>If the repaired area leaks again due to our work, Kamps comes back at no cost to you. No finger-pointing, no exceptions. That's the standard Daniel has held since day one.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Leaking Right Now? Don't Wait for It to Get Worse.</h2>
    <p>Water damage compounds quickly. Reach out today for a same-week leak repair appointment in Grand Rapids, Kentwood, Wyoming, or anywhere in Kent County.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule Your Repair</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</div>

<!-- Process Steps -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">How It Works</span>
      <h2>How Kamps Tracks Down and Fixes Your Roof Leak</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Full Leak-Source Inspection</h3>
        <p>Daniel examines the roofline, flashings, valleys, attic, and ceiling below to trace water to its true entry point — not just where it drips inside.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Document the Damage</h3>
        <p>Photos of the source area, affected decking or insulation, and any secondary damage are captured before work begins — useful for insurance documentation.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Targeted Repair</h3>
        <p>Only the affected area is opened and repaired — no unnecessary tear-off. Failed flashing is reset, damaged shingles replaced, and all penetrations resealed.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Confirm the Fix &amp; Roof Review</h3>
        <p>The repair is verified before leaving. You receive a written condition summary of the full roof — so you know if there's anything else developing.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Roof Leak Questions Grand Rapids Homeowners Ask</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How much does a roof leak repair cost in Grand Rapids?</h3>
        <p>Most residential leak repairs in Kent County run <strong>$300-$1,500</strong>. A simple flashing reseal or a few replaced shingles at the lower end; more extensive repairs involving deck damage or multiple problem areas at the higher end. Kamps provides a written estimate before starting any work so there are no surprises on the invoice.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Can a leaking roof wait a few weeks?</h3>
        <p>No. An active roof leak is an active water intrusion event. Mold can begin forming in wet insulation within <strong>24-48 hours</strong>. Even a slow drip can saturate roof decking in days, turning a $600 repair into a $3,000 structural fix. If water is getting in, it should be addressed this week — not next month.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Will fixing one area stop all the leaks?</h3>
        <p>Not always. Older roofs often have multiple weak points developing simultaneously, especially in West Michigan where freeze-thaw cycling stresses flashings and shingles every winter. Kamps inspects the entire roof — not just the immediate repair area — so you know whether one targeted fix resolves the problem or whether other areas need attention before the next storm season.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">Stop the Leak Before It Becomes a Renovation</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">A leak left alone doesn't stay small. Get Kamps in this week to find the source, make the repair, and give you a clear picture of your roof's overall condition.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule a Leak Repair</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
