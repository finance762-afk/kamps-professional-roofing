<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Siding Installation Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Siding installation in Grand Rapids, MI. Vinyl, James Hardie fiber cement, and wood options. $6,000–$25,000 depending on material. Proper water management and energy efficiency. Free estimates.';
$pageKeywords    = 'siding installation grand rapids mi, new siding grand rapids, residential siding contractors grand rapids, home siding services';
$canonicalUrl    = SITE_URL . '/services/siding-installation';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482030788_122142156290552346_7963231092693514916_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482030788_122142156290552346_7963231092693514916_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',                 'url' => '/'],
    ['name' => 'Services',             'url' => '/services'],
    ['name' => 'Siding Installation',  'url' => '/services/siding-installation'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Siding Installation',
    'Residential siding installation in Grand Rapids, MI. Kamps Professional Roofing installs vinyl, James Hardie fiber cement, and wood siding with proper house wrap, water management details, and energy-efficient options for Michigan\'s climate.',
    '/services/siding-installation'
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
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482030788_122142156290552346_7963231092693514916_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Siding Installation Grand Rapids, MI</h1>
      <p class="hero-subtitle">Vinyl, James Hardie fiber cement, and wood siding installed with proper house wrap and water management — not just new panels over the same moisture problems. Michigan-specific installation practices from 30+ years of West Michigan exterior work.</p>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
          All Major Siding Materials
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
    <span>Vinyl &amp; James Hardie Available</span><span>★★★★★</span><span>30+ Years Experience</span><span>House Wrap Included</span><span>Grand Rapids, MI</span><span>Energy-Efficient Options</span><span>Licensed &amp; Insured</span><span>★★★★★</span>
    <span>Vinyl &amp; James Hardie Available</span><span>★★★★★</span><span>30+ Years Experience</span><span>House Wrap Included</span><span>Grand Rapids, MI</span><span>Energy-Efficient Options</span><span>Licensed &amp; Insured</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align:left; margin-bottom: 2rem;">
          <span class="eyebrow">Siding Services</span>
          <h2>New Siding That Lowers Your Heating Bill and Survives Michigan Winters</h2>
        </div>
        <p>Vinyl siding installation on a full Grand Rapids home runs <strong>$6,000–$14,000</strong>. James Hardie fiber cement — the most popular premium option in West Michigan — runs <strong>$12,000–$25,000</strong> depending on home size and profile complexity. Wood siding starts around $15,000 and varies significantly with species and detailing. These ranges include removal of existing siding, installation of house wrap, new siding, and trim work. Kamps provides fully itemized written estimates so you see every cost line before committing.</p>
        <p>Michigan's climate puts specific demands on siding that don't apply everywhere. Vinyl handles freeze-thaw cycles well — it flexes rather than cracking when temperatures swing 40 degrees overnight — but lower-grade vinyl can warp or fade prematurely in West Michigan's summer heat, particularly on south and west elevations. Kamps installs mid-range and premium vinyl profiles with thickness and UV stabilizers matched to the climate. For homes where durability is the priority over initial cost, James Hardie fiber cement is the material Kamps recommends most often — it doesn't expand and contract with temperature changes, holds paint for 15–20 years, and is effectively impervious to moisture.</p>
        <p>The most important part of a siding installation isn't the siding itself — it's the water management system underneath. Every Kamps installation includes a continuous house wrap barrier, properly lapped and taped, with flashing at all penetrations, windows, and door openings. Siding installed without this layer properly executed is just a cosmetic fix — water will find its way behind panels through every window casing and utility penetration, and the substrate will rot invisibly for years before anyone notices.</p>
        <p>Insulated vinyl siding with foam backing adds R-2.5 to R-5 to your wall assembly — meaningful in a West Michigan winter — and reduces exterior noise. For homes in older Grand Rapids neighborhoods with minimal wall insulation, this upgrade can produce a noticeable reduction in natural gas bills during January and February.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482030788_122142156290552346_7963231092693514916_n.jpg"
            alt="new siding installation on a Grand Rapids Michigan home"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">30+</div>
          <div class="label">Years Installing</div>
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
      <h2>Siding That Does More Than Look Good for the First Few Years</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        </div>
        <div>
          <h3>Proper Water Management Behind Every Panel</h3>
          <p>Continuous house wrap, lapped and taped at all joints, with flashed window and door openings. This is the layer that protects your wall assembly for decades — not the siding itself. Kamps doesn't skip it to save time.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <div>
          <h3>Vinyl, Fiber Cement, and Wood — One Contractor</h3>
          <p>Different materials suit different budgets, aesthetics, and maintenance tolerances. Kamps installs all major siding types and gives you an honest comparison — including long-term maintenance costs — so you can make the right material decision for your home.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 20V10M12 20V4M6 20v-6"></path></svg>
        </div>
        <div>
          <h3>Energy Efficiency Upgrades Available</h3>
          <p>Insulated vinyl siding with foam backing adds meaningful R-value to older Grand Rapids homes with minimal wall insulation. Kamps advises on whether the upgrade pencils out for your home's heating profile based on age and current wall assembly.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        </div>
        <div>
          <h3>Michigan Climate Matched to Material Selection</h3>
          <p>Not every siding profile sold in Grand Rapids is appropriate for Grand Rapids. Kamps specifies products with performance records in Zone 5 climates — freeze-thaw tested, wind-rated for West Michigan's lakeshore exposure, and matched to your home's sun and moisture exposure.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — mid-page CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>New Siding That Protects Your Home for 20–40 Years — Starting with a Free Estimate</h2>
    <p>Material selection, water management, and Michigan-specific installation practices make the difference between siding that lasts and siding that fails in 10 years. Call Kamps to start the conversation.</p>
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
      <h2>Kamps' Siding Installation Process in Grand Rapids</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Material Selection</h3>
        <p>Daniel walks through vinyl, fiber cement, and wood options — including cost, maintenance requirements, and performance in Michigan's climate. You choose based on your budget and what matters most for your home.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Remove Old Siding</h3>
        <p>Existing siding removed and disposed of. Substrate (sheathing) inspected for rot or moisture damage. Any compromised material is replaced before the water barrier layer is applied.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>House Wrap &amp; Waterproofing</h3>
        <p>Continuous house wrap installed with properly lapped joints and taped seams. Window and door openings flashed with peel-and-stick membrane. This layer is the long-term protection for your wall assembly.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Siding Installation</h3>
        <p>Panels installed with proper nailing patterns and expansion gaps for freeze-thaw movement. Trim, corners, and j-channels finished. Site cleaned and debris removed at project completion.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Common Questions</span>
      <h2>Questions About Siding Installation in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>What's the best siding material for Michigan winters?</h3>
        <p>For most Grand Rapids homeowners, <strong>James Hardie fiber cement</strong> offers the best long-term performance — it doesn't expand and contract with temperature swings, resists moisture and impact, and holds paint 15–20 years between recoats. <strong>Mid-grade vinyl</strong> is the most popular choice and performs well in Michigan's climate at a lower upfront cost, though it requires specific profile thickness to resist warping on sun-exposed elevations. Wood siding is appropriate for historic homes where character matters more than maintenance schedule.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How much does siding installation cost in Grand Rapids?</h3>
        <p>Full vinyl siding installations run <strong>$6,000–$14,000</strong> for most homes in Kent County. James Hardie fiber cement runs <strong>$12,000–$25,000</strong>. Wood siding starts around $15,000 and varies with species and detail complexity. These ranges include removal of existing siding, house wrap installation, and all trim work. Kamps provides itemized written estimates broken down by material, labor, and disposal so you see exactly what drives the final number.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How long does siding installation take?</h3>
        <p>Most full-home vinyl installations are completed in <strong>3–5 days</strong>. Fiber cement installations take longer — 5–8 days for most homes — due to heavier material handling, cutting requirements, and the primer coat that needs to dry before final painting. These timelines assume favorable spring or fall weather; extreme heat or cold affects adhesive and paint application for fiber cement and wood systems.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Does siding installation include removing the old siding?</h3>
        <p>Yes — Kamps' siding installation quotes include full removal and disposal of the existing siding. The removal phase is also when the substrate is inspected for rot or damage. Quotes that don't include removal are incomplete: you can't properly install house wrap or identify hidden damage without getting the old material off first. Kamps won't quote a new installation over existing siding without a substrate inspection.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">New Siding That Keeps Michigan Weather Where It Belongs — Outside</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Whether you're replacing worn vinyl or upgrading to fiber cement, get a free written estimate from Kamps with material costs, labor, and everything else broken out line by line.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
