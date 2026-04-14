<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Siding Replacement Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Full siding replacement in Grand Rapids, MI. Vinyl $6K–$14K, fiber cement $12K–$25K, wood from $15K. Substrate inspection, house wrap, energy upgrade options. Free estimates.';
$pageKeywords    = 'siding replacement grand rapids mi, new home siding grand rapids, siding upgrade services, residential siding replacement';
$canonicalUrl    = SITE_URL . '/services/siding-replacement';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-486236482_122145997436552346_1214156033352548099_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-486236482_122145997436552346_1214156033352548099_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',               'url' => '/'],
    ['name' => 'Services',           'url' => '/services'],
    ['name' => 'Siding Replacement', 'url' => '/services/siding-replacement'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Siding Replacement',
    'Full residential siding replacement in Grand Rapids, MI. Kamps Professional Roofing removes all existing siding, performs a complete substrate inspection, installs house wrap, and installs new vinyl, James Hardie fiber cement, or wood siding with energy-efficient options.',
    '/services/siding-replacement'
) . ']';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
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
<section class="hero hero-inner" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-486236482_122145997436552346_1214156033352548099_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Siding Replacement Grand Rapids, MI</h1>
      <p class="hero-subtitle">Full siding replacement with complete substrate inspection — the opportunity to fix hidden moisture damage, upgrade energy performance, and choose a material built for Michigan's climate.</p>
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
          <span class="eyebrow">Siding Services</span>
          <h2>Siding Replacement Is the One Chance to Fix What's Behind the Walls</h2>
        </div>
        <p>A full siding replacement on a Grand Rapids home runs <strong>$6,000–$14,000 for vinyl</strong>, <strong>$12,000–$25,000 for James Hardie fiber cement</strong>, and <strong>$15,000–$30,000+ for wood</strong> depending on home size, profile complexity, and substrate condition. These ranges include full removal of existing siding, substrate inspection, new house wrap, and complete trim work. Substrate repairs, if needed, are quoted as a separate line item so you have full cost visibility before committing.</p>
        <p>When all the existing panels come off, everything underneath is visible for the first time in years. Kamps performs a complete inspection of the sheathing, framing at windows and doors, and any wall penetrations during this phase. Hidden moisture damage — from years of leaking windows, improper flashing, or siding installed without house wrap — is only catchable at this point. Addressing it at replacement time costs a fraction of what structural repairs cost once the problem progresses another decade.</p>
        <p>Replacement is also the opportunity to upgrade your wall's thermal performance. Grand Rapids winters average over 130 heating degree days per month in January — older homes with minimal wall insulation benefit measurably from insulated vinyl siding with foam backing (R-2.5 to R-5 added to the wall assembly) or from the tight installation of fiber cement. Signs that replacement rather than repair is the right call: curling or buckling across multiple wall elevations, widespread fading that can't be corrected cosmetically, multiple failing sections indicating systemic house wrap failure, and visible rot at corners or window trim. Kamps will tell you honestly where your siding falls on the repair-to-replacement spectrum.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture><img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-486236482_122145997436552346_1214156033352548099_n.jpg" alt="complete siding replacement project on a Grand Rapids Michigan home" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;"></picture>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Kamps -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>A Replacement That Does More Than Put New Panels on Old Problems</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>Complete Substrate Inspection at Removal</h3>
          <p>The sheathing, corner framing, and window/door rough openings are fully visible only when all siding is off. Kamps inspects every inch and documents any moisture or rot found — you know the true condition of your wall before the first new panel goes up.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        </div>
        <div>
          <h3>Energy-Efficient Options Available</h3>
          <p>Insulated vinyl and continuous exterior insulation behind fiber cement are available at replacement time. For Grand Rapids homes built before 1990 with minimal wall insulation, these upgrades deliver a real reduction in heating costs that pays back over the siding's lifespan.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
        </div>
        <div>
          <h3>Full Material Range — Vinyl Through Fiber Cement</h3>
          <p>Kamps installs vinyl, James Hardie fiber cement, and wood siding and has experience with all three in West Michigan's climate. You get a contractor who can advise on long-term maintenance differences, not just one who sells a single product.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <div>
          <h3>Itemized Estimates — Every Line Visible</h3>
          <p>Siding replacement quotes from Kamps break out material, labor, disposal, and any substrate repairs as separate line items. You know exactly what you're paying for and can compare quotes on an apples-to-apples basis.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>New Siding Is a 20–40 Year Investment — Get the Substrate Right the First Time</h2>
    <p>Kamps' replacement process starts with what's behind your walls, not just what's on them. Call for a free, itemized estimate and know the full scope before any work starts.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</div>

<!-- Process Steps -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">How It Works</span>
      <h2>Kamps' Siding Replacement Process in Grand Rapids</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Assessment &amp; Material Selection</h3>
        <p>Full assessment of existing siding condition and substrate. Daniel walks through vinyl, fiber cement, and wood options with cost, maintenance, and Michigan climate performance for each. Written itemized estimate provided.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Full Removal &amp; Substrate Inspection</h3>
        <p>All existing siding removed completely. Every sheathing panel, window rough opening, and wall penetration inspected. Any rot or moisture damage found is documented and quoted for repair before proceeding.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>House Wrap Installation</h3>
        <p>Continuous house wrap installed with lapped, taped joints and flashed window and door openings. The water management layer that protects your wall assembly for the next 25–40 years — installed correctly this time.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>New Siding Installation</h3>
        <p>Panels installed per manufacturer specs with correct fastening patterns and expansion gaps. Trim, corners, and soffit restored. Complete site cleanup at project close — no material left on your property.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Questions About Siding Replacement in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How do I know when to replace vs. repair siding?</h3>
        <p>Repair makes sense for isolated damage — a few hail-damaged panels, a single cracked section. Replacement is the better financial decision when siding is curling, buckling, or fading across large areas, when multiple sections are failing systemically, when there's evidence of moisture getting behind the siding at multiple points, or when the siding is 30+ years old and the profile is no longer manufactured. Kamps will assess and give you a direct recommendation based on what genuinely makes sense for your situation.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What siding material lasts longest in Michigan?</h3>
        <p><strong>James Hardie fiber cement</strong> has the longest service life of any mainstream siding material in Michigan — 30–50 years with proper painting maintenance. It doesn't expand and contract with freeze-thaw cycles, resists moisture, and is impact-resistant against hail. High-quality vinyl lasts 20–30 years with minimal maintenance. Wood siding can last 30–40 years but Michigan's wet seasons and freeze-thaw cycles demand diligent painting and sealing discipline.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How does new siding affect home value?</h3>
        <p>Siding replacement consistently returns <strong>70–80% of project cost</strong> in resale value — one of the better return percentages for exterior projects. In Grand Rapids' active real estate market, updated siding shortens time-on-market and removes a negotiating point for buyers who would otherwise use worn siding as leverage. Energy-efficient siding with improved R-value can also improve energy audit ratings relevant to buyers financing with efficiency-focused mortgages.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section class="closing-cta">
  <div class="container">
    <h2>Replace Your Siding Right — Substrate, Wrap, and All</h2>
    <p>Don't put new panels over old problems. Get a free written estimate from Kamps that covers everything — materials, substrate inspection, house wrap, and installation — before you commit to anything.</p>
    <div class="btn-row">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
