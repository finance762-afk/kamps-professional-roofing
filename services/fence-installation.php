<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Fence Installation Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Fence installation in Grand Rapids, MI. Wood, vinyl, chain link, and aluminum. $2,500–$9,000 for most yards. Permit assistance included. Posts set below frost line. Free estimates.';
$pageKeywords    = 'fence installation grand rapids mi, residential fencing grand rapids, fence contractors grand rapids, property fencing services';
$canonicalUrl    = SITE_URL . '/services/fence-installation';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-504378959_122166753128552346_2175380586993374092_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-504378959_122166753128552346_2175380586993374092_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',                'url' => '/'],
    ['name' => 'Services',            'url' => '/services'],
    ['name' => 'Fence Installation',  'url' => '/services/fence-installation'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Fence Installation',
    'Residential fence installation in Grand Rapids, MI. Kamps Professional Roofing installs wood, vinyl, chain link, and aluminum decorative fencing with posts set below Michigan\'s frost line, permit assistance, and proper gate hardware.',
    '/services/fence-installation'
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
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-504378959_122166753128552346_2175380586993374092_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Fence Installation Grand Rapids, MI</h1>
      <p class="hero-subtitle">Wood, vinyl, chain link, and aluminum fencing installed with posts set below Michigan's 42-inch frost line — so the first hard winter doesn't heave your investment out of the ground. Permit assistance included.</p>
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
          <span class="eyebrow">Fencing Services</span>
          <h2>Fencing That Stays Straight Through Michigan Winters — Because Frost Heave Is Real Here</h2>
        </div>
        <p>A wood privacy fence installation on an average Grand Rapids yard runs <strong>$2,500–$7,000</strong>. Vinyl fencing runs <strong>$3,500–$9,000</strong> for similar perimeters. Chain link and aluminum decorative fencing come in lower on material cost; final project cost depends on linear footage, gate count, and terrain. Kamps provides written estimates with linear footage and per-unit costs spelled out so you can compare quotes accurately.</p>
        <p>The single most important technical factor in any Michigan fence installation is post depth. The frost line in Grand Rapids is 42 inches below grade — posts set shallower than this will heave as the ground freezes and thaws repeatedly through the winter, pulling the post progressively out of the ground over 2–3 seasons until the fence leans noticeably. Kamps sets all posts below frost depth and uses concrete footings on privacy fences where post stability under wind load is a factor. Grand Rapids also requires a building permit for most fence installations, and many neighborhoods have additional HOA or zoning restrictions on height, style, and setback from property lines. Kamps handles the permit research and application as part of every fence project.</p>
        <p>Material durability in Michigan varies significantly by product and exposure. Vinyl and aluminum hold up better than wood under the freeze-thaw cycle and don't require sealing or staining. Cedar and pressure-treated wood are the wood choices most appropriate for this climate — untreated pine or cheaper softwoods will show significant rot at post bases within 8–10 years in Kent County's wet conditions. Kamps advises on material selection based on what each option actually costs over its lifespan in this specific climate, not just the upfront price. Gate installation gets special attention: gates are where fencing failures become daily frustrations, so Kamps sets gate posts in oversized concrete footings and uses heavy-duty hardware sized for the gate weight.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture><img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-504378959_122166753128552346_2175380586993374092_n.jpg" alt="residential fence installation project in Grand Rapids Michigan" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;"></picture>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Kamps -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>What Grand Rapids Homeowners Need to Know Before Installing a Fence</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>Frost-Line Post Depth — Not Negotiable in Michigan</h3>
          <p>Grand Rapids' 42-inch frost depth means fence posts must be set at 48 inches or deeper to stay stable through winter. Kamps doesn't shortcut this step regardless of material. Posts set too shallow heave out of the ground and can't be reset without a full removal and restart.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <div>
          <h3>Permit Research and Application Handled</h3>
          <p>The City of Grand Rapids and most surrounding communities require permits for fence installation. Kamps handles permit research and application — including checking setback requirements, height limits, and any HOA restrictions — before the first post hole is dug.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        </div>
        <div>
          <h3>Michigan-Appropriate Material Selection</h3>
          <p>Vinyl and aluminum handle West Michigan freeze-thaw without maintenance. Cedar and pressure-treated wood are the right wood choices for this climate. Kamps advises on long-term cost including maintenance — so you can make a decision that reflects the full 20-year picture.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
        </div>
        <div>
          <h3>Gate Hardware Done Right</h3>
          <p>Gate installation is where fencing failures become daily frustrations — gates that drag, fail to latch, or swing open on their own. Kamps sets gate posts in oversized concrete footings and uses heavy-duty hardware sized for the gate weight so everything functions correctly from day one.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Fence Installed Correctly for West Michigan — Posts Deep, Permits Handled, One Call</h2>
    <p>Kamps manages the permit research, site measurement, and frost-line installation so you get a fence that survives its first decade without heaving, leaning, or failing at the gate hardware.</p>
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
      <h2>How Kamps Installs Fencing in Grand Rapids</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Site Measurement &amp; Permit Research</h3>
        <p>Daniel measures the full perimeter, locates gate positions, and checks permit requirements and any setback restrictions for your address. Written estimate provided with linear footage and per-unit costs itemized.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Post Hole Installation Below Frost Line</h3>
        <p>Post holes dug to a minimum 48 inches — below Grand Rapids' 42-inch frost depth. Concrete footings poured around post bases on privacy fences. Proper depth is the difference between a fence that lasts 20 years and one that needs resetting in 3.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Rail and Panel Installation</h3>
        <p>Rails set level across posts and panels or pickets installed. Spacing and alignment verified as installation progresses — correcting errors mid-project is far easier than at the end.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Gate Hardware &amp; Finishing</h3>
        <p>Gates hung with heavy-duty hardware on posts set in oversized concrete footings. Latches and self-closing mechanisms installed and adjusted. Site cleanup at completion — no material left on your property.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Questions About Fence Installation in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>Do I need a permit for a fence in Grand Rapids?</h3>
        <p>Yes, in most cases. The City of Grand Rapids requires a building permit for most fence installations, and surrounding Kent County municipalities — Kentwood, Wyoming, Walker, Grandville — each have their own requirements. Many neighborhoods also have deed restrictions or HOA rules on height, material, and setback. Kamps researches the specific requirements for your address as part of every fence estimate so you won't be surprised by a stop-work order or neighbor dispute after installation.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How much does fence installation cost in Grand Rapids?</h3>
        <p>Wood privacy fence installations run <strong>$2,500–$7,000</strong> for most residential yards in Kent County. Vinyl fencing runs <strong>$3,500–$9,000</strong> for comparable perimeters. Chain link is the most cost-effective option at roughly $1,500–$4,000 for most yards. Final cost depends on linear footage, number of gates, grade changes, and soil conditions. Kamps provides itemized written estimates so you see the full breakdown before committing.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How deep should fence posts be set in Grand Rapids?</h3>
        <p>Grand Rapids' frost depth is <strong>42 inches</strong>. Fence posts must be set a minimum of <strong>48 inches</strong> below grade to stay below the frost zone and remain stable through winter freeze-thaw cycles. Many contractors in the area set posts at 24–30 inches to save time — these fences begin heaving within 2–3 winters and progressively lean until the post must be fully removed and reset. Kamps sets all posts at proper depth with concrete footings.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">A Fence That Handles Grand Rapids Winters — Set Deep, Permitted Right, Built to Last</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Don't pay twice for a fence installed without frost-line depth. Get a free written estimate from Kamps and have the permit research handled before a single hole is dug.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
