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
.inner-hero { position: relative; min-height: 55vh; display: flex; align-items: center; background-size: cover; background-position: center; padding-top: 80px; }
.inner-hero .hero-content { text-align: left; max-width: 700px; }
.breadcrumb-nav { background: var(--color-light); padding: 0.75rem 0; border-bottom: 1px solid var(--color-gray-light); }
.breadcrumb { display: flex; align-items: center; gap: 0.5rem; list-style: none; font-size: 0.875rem; }
.breadcrumb-item + .breadcrumb-item::before { content: '/'; color: var(--color-gray); }
.breadcrumb-item a { color: var(--color-primary); }
.breadcrumb-item.active { color: var(--color-gray); }
.process-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; margin-top: 2.5rem; }
.process-step { text-align: center; padding: 2rem 1.5rem; background: var(--color-white); border-radius: var(--radius-lg); box-shadow: var(--shadow-card); }
.process-number { width: 56px; height: 56px; border-radius: 50%; background: linear-gradient(135deg, var(--color-primary), var(--color-accent)); color: white; font-family: var(--font-heading); font-size: 1.5rem; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; }
.process-step h3 { font-size: 1rem; margin-bottom: 0.5rem; color: var(--color-dark); }
.process-step p { font-size: 0.875rem; color: var(--color-gray); line-height: 1.5; }
.why-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 2.5rem; }
.why-item { display: flex; gap: 1rem; padding: 1.5rem; background: var(--color-white); border-radius: var(--radius-lg); box-shadow: var(--shadow-card); }
.why-icon { flex-shrink: 0; width: 48px; height: 48px; border-radius: var(--radius-md); background: linear-gradient(135deg, var(--color-primary), var(--color-accent)); display: flex; align-items: center; justify-content: center; color: white; }
.why-item h3 { font-size: 1rem; margin-bottom: 0.4rem; color: var(--color-dark); }
.why-item p { font-size: 0.875rem; color: var(--color-gray); line-height: 1.5; }
.stat-overlay { position: absolute; bottom: -1.5rem; right: -1.5rem; background: linear-gradient(135deg, var(--color-primary), var(--color-accent)); color: white; border-radius: var(--radius-lg); padding: 1.25rem 1.75rem; text-align: center; box-shadow: var(--shadow-lg); }
.stat-overlay .big-number { font-family: var(--font-heading); font-size: 2.5rem; font-weight: 800; line-height: 1; }
.stat-overlay .label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.08em; opacity: 0.9; margin-top: 0.25rem; }
.about-image { position: relative; }
.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 2.5rem; }
.faq-item { background: var(--color-white); border-radius: var(--radius-lg); padding: 1.75rem; box-shadow: var(--shadow-card); border-left: 4px solid var(--color-accent); }
.faq-item h3 { font-size: 1rem; margin-bottom: 0.75rem; color: var(--color-dark); }
.faq-item p { font-size: 0.9rem; color: var(--color-gray); line-height: 1.6; }
@media (max-width: 1023px) { .process-grid { grid-template-columns: 1fr 1fr; } .faq-grid { grid-template-columns: 1fr; } }
@media (max-width: 767px) { .why-grid { grid-template-columns: 1fr; } .stat-overlay { right: 0; bottom: -1rem; } }
@media (max-width: 480px) { .process-grid { grid-template-columns: 1fr; } }
</style>

<?php echo breadcrumb_nav($breadcrumbs); ?>

<!-- INNER HERO — CTA #1 -->
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
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
          Permit Assistance Included
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Free Estimates
        </span>
      </div>
    </div>
  </div>
</section>

<!-- TICKER STRIP -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>Posts Below Frost Line</span><span>★★★★★</span><span>Permit Assistance</span><span>Wood | Vinyl | Chain Link | Aluminum</span><span>Grand Rapids, MI</span><span>30+ Years Experience</span><span>Free Estimates</span><span>★★★★★</span>
    <span>Posts Below Frost Line</span><span>★★★★★</span><span>Permit Assistance</span><span>Wood | Vinyl | Chain Link | Aluminum</span><span>Grand Rapids, MI</span><span>30+ Years Experience</span><span>Free Estimates</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align:left; margin-bottom: 2rem;">
          <span class="eyebrow">Fencing Services</span>
          <h2>Fencing That Stays Straight Through Michigan Winters — Because Frost Heave Is Real Here</h2>
        </div>
        <p>A wood privacy fence installation on an average Grand Rapids yard runs <strong>$2,500–$7,000</strong>. Vinyl fencing runs <strong>$3,500–$9,000</strong> for similar perimeters. Chain link and aluminum decorative fencing come in lower on material cost; final project cost depends on linear footage, gate count, and terrain. Kamps provides written estimates with linear footage and per-unit costs spelled out so you can compare quotes accurately.</p>
        <p>The single most important technical factor in any Michigan fence installation is post depth. The frost line in Grand Rapids is 42 inches below grade — posts set shallower than this will heave as the ground freezes and thaws repeatedly through the winter, pulling the post progressively out of the ground over 2–3 seasons until the fence leans noticeably. Kamps sets all posts below frost depth and uses concrete footings on privacy fences where post stability under wind load is a factor. Cheap fence installs in West Michigan routinely fail within 5 years because this step gets shortened to cut labor cost.</p>
        <p>Grand Rapids requires a building permit for most fence installations, and many neighborhoods have additional HOA or zoning restrictions on height, style, and setback from property lines. Kamps handles the permit research and application as part of every fence project — you don't have to navigate city hall or figure out what your deed restrictions allow. Property line verification is the homeowner's responsibility, but Kamps will flag any questions before installation begins to avoid disputes with neighbors after the fact.</p>
        <p>Material durability in Michigan varies significantly by product and exposure. Vinyl and aluminum hold up better than wood under the freeze-thaw cycle and don't require sealing or staining. Cedar and pressure-treated wood are the wood choices most appropriate for this climate — untreated pine or cheaper softwoods will show significant rot at post bases within 8–10 years in Kent County's wet conditions. Kamps advises on material selection based on what each option actually costs over its lifespan in this specific climate, not just the upfront price.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-504378959_122166753128552346_2175380586993374092_n.jpg"
            alt="residential fence installation project in Grand Rapids Michigan"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">42"</div>
          <div class="label">Frost Line Depth</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE KAMPS -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>What Grand Rapids Homeowners Need to Know Before Installing a Fence</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10z"></path><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
        </div>
        <div>
          <h3>Frost-Line Post Depth — Not Negotiable in Michigan</h3>
          <p>Grand Rapids' 42-inch frost depth means fence posts must be set at 48 inches or deeper to stay stable through winter. Kamps doesn't shortcut this step regardless of material. Posts set too shallow heave out of the ground and can't be reset without a full removal and restart.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
        </div>
        <div>
          <h3>Permit Research and Application Handled</h3>
          <p>The City of Grand Rapids and most surrounding communities require permits for fence installation. Kamps handles permit research and application — including checking setback requirements, height limits, and any HOA restrictions that apply to your address — before the first post hole is dug.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        </div>
        <div>
          <h3>Michigan-Appropriate Material Selection</h3>
          <p>Vinyl and aluminum handle West Michigan freeze-thaw without maintenance. Cedar and pressure-treated wood are the right wood choices for this climate. Kamps advises on long-term cost including maintenance, not just the upfront price difference — so you can make a decision that reflects the full 20-year picture.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        </div>
        <div>
          <h3>Gate Hardware Done Right</h3>
          <p>Gate installation is where fencing failures become daily frustrations — gates that drag, fail to latch, or swing open on their own. Kamps sets gate posts in oversized concrete footings and uses heavy-duty hardware sized for the gate weight so everything functions correctly from the first use through year 20.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — mid-page CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Fence Installed Correctly for West Michigan — Posts Deep, Permits Handled, One Call</h2>
    <p>Kamps manages the permit research, site measurement, and frost-line installation so you get a fence that survives its first decade without heaving, leaning, or failing at the gate hardware. Free estimate — no obligation.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</div>

<!-- PROCESS STEPS -->
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
        <p>Post holes dug to a minimum 48 inches — below Grand Rapids' 42-inch frost depth. Concrete footings poured around post bases on privacy fences. Proper depth is non-negotiable: it's the difference between a fence that lasts 20 years and one that needs resetting in 3.</p>
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

<!-- FAQ SECTION -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Common Questions</span>
      <h2>Questions About Fence Installation in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>Do I need a permit for a fence in Grand Rapids?</h3>
        <p>Yes, in most cases. The City of Grand Rapids requires a building permit for most fence installations, and surrounding Kent County municipalities — Kentwood, Wyoming, Walker, Grandville — each have their own requirements. Additionally, many Grand Rapids neighborhoods have deed restrictions or HOA rules that set height limits, material restrictions, or setback requirements that differ from or add to city code. Kamps researches the specific requirements for your address as part of every fence estimate — you won't be surprised by a stop-work order or neighbor dispute after installation is complete.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How much does fence installation cost in Grand Rapids?</h3>
        <p>Wood privacy fence installations run <strong>$2,500–$7,000</strong> for most residential yards in Kent County. Vinyl fencing runs <strong>$3,500–$9,000</strong> for comparable perimeters. Chain link is the most cost-effective option at roughly $1,500–$4,000 for most yards. Decorative aluminum runs similar to vinyl. Final cost depends on linear footage, number of gates, grade changes that require stepped or racked panels, and soil conditions that affect post hole difficulty. Kamps provides itemized written estimates so you see the full breakdown before committing.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What fence material lasts longest in Michigan?</h3>
        <p><strong>Vinyl and aluminum</strong> offer the lowest lifetime maintenance cost in Michigan's climate — no sealing, staining, or rust treatment required. Vinyl doesn't splinter or rot and holds color for decades. Aluminum is highly durable and appropriate for decorative applications where vinyl's style limitations are a concern. <strong>Cedar and pressure-treated wood</strong> are the wood options that perform adequately in Kent County's wet conditions with proper sealing every 3–5 years. Untreated pine, spruce, or softwood posts will show significant rot at the ground line within 8–10 years regardless of how well the rest of the fence is maintained.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How deep should fence posts be set in Grand Rapids?</h3>
        <p>Grand Rapids' frost depth is <strong>42 inches</strong>. Fence posts must be set a minimum of <strong>48 inches</strong> below grade to stay below the frost zone and remain stable through winter freeze-thaw cycles. Many fence contractors in the area set posts at 24–30 inches to save time — these fences begin heaving within 2–3 winters and progressively lean until the post must be fully removed and reset. Kamps sets all posts at proper depth with concrete footings, which is why a Kamps fence installation doesn't need repair calls 3 years later.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 -->
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
