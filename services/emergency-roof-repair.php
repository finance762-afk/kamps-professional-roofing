<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Emergency Roof Repair Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Storm blow your roof open in Grand Rapids? Kamps responds same-day to active damage — emergency tarping, board-up, and permanent repair across West Michigan.';
$pageKeywords    = 'emergency roof repair grand rapids mi, 24 hour roof repair kent county, urgent roof services michigan, storm damage emergency repair grand rapids';
$canonicalUrl    = SITE_URL . '/services/emergency-roof-repair';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-24.webp';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-24.webp';

$breadcrumbs = [
    ['name' => 'Home',                   'url' => '/'],
    ['name' => 'Services',               'url' => '/services'],
    ['name' => 'Emergency Roof Repair',  'url' => '/services/emergency-roof-repair'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Emergency Roof Repair',
    'Same-day emergency roof repair in Grand Rapids, MI. Kamps Professional Roofing responds fast to active storm damage, fallen trees, and structural roof failures — emergency tarping, board-up, and full repair across Kent County.',
    '/services/emergency-roof-repair'
) . ']';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ── Page-specific: Emergency Roof Repair ────────────────── */
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

/* Emergency alert banner */
.emergency-alert {
  background: linear-gradient(135deg, #dc2626, #b91c1c);
  color: white;
  text-align: center;
  padding: 0.875rem 1rem;
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 600;
  letter-spacing: 0.02em;
}
.emergency-alert a { color: white; text-decoration: underline; }

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
  background: linear-gradient(135deg, #dc2626, #b91c1c);
  color: white;
  border-radius: var(--radius-lg);
  padding: 1.25rem 1.75rem;
  text-align: center;
  box-shadow: var(--shadow-lg);
}
.stat-overlay .big-number {
  font-family: var(--font-heading);
  font-size: 1.75rem;
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
  .stat-overlay { right: 0; bottom: -1rem; }
}
@media (max-width: 480px) {
  .process-grid { grid-template-columns: 1fr; }
}
</style>

<!-- Emergency alert bar -->
<div class="emergency-alert">
  Active roof damage in Grand Rapids? Call Kamps for same-day response — <?php echo phone_link('', ''); ?>don't wait on storm damage.
</div>

<?php echo breadcrumb_nav($breadcrumbs); ?>

<!-- INNER HERO — CTA #1 ──────────────────────────────────── -->
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-24.webp');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Emergency Roof Repair Grand Rapids, MI</h1>
      <p class="hero-subtitle">Storm damage, fallen branches, sudden structural failure — Kamps responds same-day to stop the damage and stabilize your home across Kent County.</p>
      <div class="hero-buttons">
        <a href="/contact" class="btn btn-accent btn-lg">Get Emergency Help Now</a>
        <?php echo phone_link('btn btn-outline-white btn-lg', 'Call Now'); ?>
      </div>
      <div class="hero-trust">
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          Same-Day Response
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
          30+ Years Experience
        </span>
      </div>
    </div>
  </div>
</section>

<!-- TICKER STRIP ─────────────────────────────────────────── -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>Same-Day Response</span><span>★★★★★</span><span>Emergency Tarping</span><span>30+ Years Experience</span><span>Grand Rapids, MI</span><span>Licensed &amp; Insured</span><span>Insurance Documentation</span><span>★★★★★</span>
    <span>Same-Day Response</span><span>★★★★★</span><span>Emergency Tarping</span><span>30+ Years Experience</span><span>Grand Rapids, MI</span><span>Licensed &amp; Insured</span><span>Insurance Documentation</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL ───────────────────────────────────────── -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
          <span class="eyebrow">Emergency Services</span>
          <h2>When Your Roof Can't Wait Until Next Week</h2>
        </div>
        <p>A roofing emergency in Grand Rapids — a tree limb through the deck, a section blown off in a storm, an active structural failure — needs a response measured in hours, not days. Kamps prioritizes same-day response for active roof damage anywhere in Kent County. The first step is always stabilization: emergency tarping or temporary board-up to stop water and weather from getting in while a permanent plan is made.</p>
        <p>West Michigan's storm season runs from spring through late fall, with severe thunderstorms capable of 70+ mph winds common in the Grand Rapids area. Tornado-adjacent weather events, large hail, and heavy wet snow loads in early spring are all recurring causes of sudden roof damage here. Daniel Kamps has worked through 30+ Michigan storm seasons and knows how to move quickly and effectively when damage is fresh and rain is still in the forecast.</p>
        <p>After stabilization, Kamps conducts a thorough damage assessment — both roofline and interior — and documents everything with photos. This documentation is essential for insurance claims. Daniel has worked directly with dozens of insurance adjusters over the years and can help you understand what your policy covers and how to present the damage accurately.</p>
        <p>Temporary tarping done improperly can actually cause additional damage — improper attachment points can lift shingles further, and inadequate overlap allows water to channel under the tarp edge. Don't put yourself or your home at risk by getting on a compromised roof. Call Kamps first.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-24.webp"
            alt="emergency roof repair after storm damage on a Grand Rapids Michigan home"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">Same Day</div>
          <div class="label">Response Available</div>
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
      <h2>Fast Response When Every Hour Costs You More</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        </div>
        <div>
          <h3>Same-Day Response for Active Storm Damage</h3>
          <p>Kamps serves the Grand Rapids area — Kentwood, Wyoming, Cascade, Ada, Rockford, and across Kent County. When the damage is active, getting there fast is the job.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
        </div>
        <div>
          <h3>Emergency Tarping to Stop Water Intrusion Immediately</h3>
          <p>Properly installed emergency tarping buys time without causing additional damage. Kamps uses the right attachment method for your roof type — not whatever's quickest.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
        </div>
        <div>
          <h3>Insurance Documentation Handled Professionally</h3>
          <p>Photo documentation, written damage assessment, and direct adjuster communication — Daniel has been through hundreds of storm claims and knows exactly what insurance companies need to process yours.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <div>
          <h3>30+ Seasons of Michigan Severe Weather Experience</h3>
          <p>Spring tornadoes, summer hail events, early-winter ice storms — Daniel has handled emergency repairs through all of West Michigan's weather extremes. No situation is unfamiliar.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — CTA #2 ─────────────────────────────────── -->
<div class="cta-banner">
  <div class="container">
    <h2>Active Damage? Call Kamps Before the Next Rain.</h2>
    <p>Every hour an open roof sits unprotected is another hour of potential interior damage. Same-day response is available throughout the Grand Rapids area.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Request Emergency Help</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</div>

<!-- PROCESS STEPS ────────────────────────────────────────── -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">How It Works</span>
      <h2>What Happens When You Call Kamps for an Emergency</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Call — Fast Response</h3>
        <p>Reach Daniel directly. Describe the damage and your location in the Grand Rapids area. Kamps prioritizes same-day dispatch for active damage situations.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Emergency Tarping or Board-Up</h3>
        <p>The first priority is stopping further water or weather intrusion. Proper emergency tarping protects your interior and your decking while a permanent plan is developed.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Full Damage Assessment</h3>
        <p>Thorough inspection of roofline, flashings, decking, and interior affected areas — with photos documenting the full scope of damage for insurance purposes.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Permanent Repair or Replacement Plan</h3>
        <p>Written scope of work, timeline, and cost. Daniel works directly with your insurance adjuster to align the documented damage with the repair plan — no guesswork, no gaps.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION ──────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Emergency Roof Repair Questions — Grand Rapids Homeowners</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>What counts as a roofing emergency?</h3>
        <p>An emergency is any situation where your home is immediately exposed to weather: an active leak through structural damage, a section of roofing blown off, a fallen tree branch that has punctured the deck, visible structural sagging, or a fire-related opening. If water is getting in or your roof is no longer structurally sound, that's an emergency — call Kamps the same day, not next week.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How fast can Kamps respond to emergency roof damage in Grand Rapids?</h3>
        <p>For active damage in the Grand Rapids area — including Kentwood, Wyoming, Cascade Township, Rockford, and surrounding Kent County communities — Kamps aims for <strong>same-day response</strong> when contacted during business hours. For large-scale storm events affecting multiple neighborhoods, response may be prioritized by damage severity.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Should I put a tarp on my roof myself?</h3>
        <p>Only if it's safe to do so — meaning the roof surface is accessible and structurally sound. A compromised roof deck, wet shingles, or steep pitch makes self-tarping dangerous. Improper tarping can also lift additional shingles or allow water to channel under the tarp edge, worsening damage. If there's any doubt about safety or proper method, call Kamps first — emergency tarping is part of the service.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Does homeowner's insurance cover emergency roof repair?</h3>
        <p>Most homeowner's policies in Michigan cover <strong>sudden storm-related damage</strong> — wind, hail, fallen trees, and lightning strikes. Gradual deterioration and maintenance-related failures are typically excluded. Kamps documents damage with photos and a written assessment designed to work with standard insurance claim requirements. Daniel has worked directly with adjusters across dozens of claims and can answer specific questions about your situation.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 ─────────────────────────────────── -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">Don't Let a Roofing Emergency Become a Structural Crisis</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Every hour an open roof is exposed to Michigan weather is compounding damage. Call Kamps now — same-day response is available across the Grand Rapids area.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get Emergency Help Now</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
