<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Gutter Replacement Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Full gutter replacement in Grand Rapids, MI. Seamless aluminum gutters, fascia inspection included, $1,000–$3,000 for most homes. Upgrade to 6" or add gutter guards. Free estimates.';
$pageKeywords    = 'gutter replacement grand rapids mi, new gutters grand rapids, gutter upgrade services, residential gutter replacement';
$canonicalUrl    = SITE_URL . '/services/gutter-replacement';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-481265221_122142156344552346_6793435103332492994_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-481265221_122142156344552346_6793435103332492994_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',               'url' => '/'],
    ['name' => 'Services',           'url' => '/services'],
    ['name' => 'Gutter Replacement', 'url' => '/services/gutter-replacement'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Gutter Replacement',
    'Full gutter replacement in Grand Rapids, MI. Kamps Professional Roofing removes old gutters, inspects fascia, and installs custom seamless aluminum gutters with downspouts sized for your home\'s drainage needs.',
    '/services/gutter-replacement'
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
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-481265221_122142156344552346_6793435103332492994_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Gutter Replacement Grand Rapids, MI</h1>
      <p class="hero-subtitle">Replace failing gutters before they take your fascia with them. Full removal, fascia inspection, and seamless aluminum installation — $1,000–$3,000 for most Grand Rapids homes.</p>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Fascia Inspection Included
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          Free Estimates
        </span>
      </div>
    </div>
  </div>
</section>

<!-- TICKER STRIP -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>Old Material Disposed Of</span><span>★★★★★</span><span>Fascia Inspection Included</span><span>Seamless On-Site Fabrication</span><span>Grand Rapids, MI</span><span>30+ Years Experience</span><span>Free Estimates</span><span>★★★★★</span>
    <span>Old Material Disposed Of</span><span>★★★★★</span><span>Fascia Inspection Included</span><span>Seamless On-Site Fabrication</span><span>Grand Rapids, MI</span><span>30+ Years Experience</span><span>Free Estimates</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align:left; margin-bottom: 2rem;">
          <span class="eyebrow">Gutter Services</span>
          <h2>Replace Once, Replace Right — Full Gutter System Installation in West Michigan</h2>
        </div>
        <p>A full gutter replacement on most Grand Rapids homes runs <strong>$1,000–$3,000</strong>, covering removal and disposal of the old system, fascia inspection, and installation of new seamless aluminum gutters with downspouts. The final number depends on linear footage, the number of corners and downspouts, and whether any fascia repair is needed before new gutters go up.</p>
        <p>Replacement is typically the right call when gutters are rusting through, have multiple failing seams that keep reopening after repairs, or when the fascia boards underneath have been compromised by long-term water exposure. Fascia rot is the sleeper problem in these jobs — it's often not visible until the old gutters come off. Kamps includes a full fascia inspection with every replacement estimate and will quote any needed board repairs as a separate line item so you can plan the full scope.</p>
        <p>Gutter replacement is also an upgrade opportunity. If your home currently has standard 5-inch gutters but has significant tree coverage, a steep roof pitch, or a large drainage area, upgrading to 6-inch gutters during replacement costs incrementally more and substantially improves performance — particularly during the heavy spring rains that hit West Michigan in April and May. Gutter guards can be added at this stage as well; installation is far cleaner on a new system than retrofitted onto old gutters.</p>
        <p>All old gutter material is removed from your property at no extra charge. New gutters are fabricated on-site, hung at proper slope, and tested before the crew leaves. You'll receive documentation of what was installed — material gauge, hanger spacing, downspout size — so you have a record for future reference.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-481265221_122142156344552346_6793435103332492994_n.jpg"
            alt="new seamless gutter replacement installation on a Grand Rapids Michigan home"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">$1K</div>
          <div class="label">Starting Cost</div>
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
      <h2>Gutter Replacement Done Right from Removal to Final Water Test</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
        </div>
        <div>
          <h3>Fascia Inspection Before New Gutters Go Up</h3>
          <p>The #1 cause of premature gutter failure is rotted fascia beneath the hangers. Kamps checks every inch of fascia as the old system comes down — if repair is needed, you'll know before new gutters are ordered, not after.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18"></path></svg>
        </div>
        <div>
          <h3>Slope and Downspout Placement Recalculated</h3>
          <p>Replacing gutters is the right time to fix drainage problems from the original installation. Kamps recalculates slope and downspout placement rather than copying a layout that may have been draining water toward your foundation for years.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
        </div>
        <div>
          <h3>Old Material Removed and Disposed Of</h3>
          <p>Everything comes off and leaves with Kamps. You're not left with old gutters in your yard or a disposal fee added at the end. Full removal and haul-away is included in every replacement quote.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
        </div>
        <div>
          <h3>Upgrade Options at Replacement Time</h3>
          <p>6-inch gutters, micro-mesh guards, and additional downspouts are all more cost-effective to add during a full replacement than at any other time. Kamps walks you through what makes sense for your specific roof and property.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — mid-page CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Replace Failing Gutters Before They Cost You More Than the Gutters Are Worth</h2>
    <p>Fascia rot and foundation drainage repairs are far more expensive than a gutter replacement. Get a free written estimate from Kamps and know the full project cost before committing.</p>
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
      <h2>Kamps' Gutter Replacement Process in Grand Rapids</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Assess &amp; Measure</h3>
        <p>Daniel walks the full roofline, measures every run, maps downspout discharge points, and checks fascia condition. Written quote provided with materials, labor, and any fascia work listed separately.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Remove &amp; Dispose of Old Gutters</h3>
        <p>Old gutter system removed completely. Fascia boards inspected during removal — any rot or damage found is addressed before new gutters are hung so you're not fastening into compromised wood.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Repair Fascia If Needed</h3>
        <p>Rotted fascia sections are replaced with new material and primed before the new gutter system is installed. This step is where many contractors skip corners — Kamps won't hang gutters over bad wood.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Install Seamless Gutters &amp; Downspouts</h3>
        <p>New gutters fabricated on-site, hung at correct slope, and connected to downspouts positioned for optimal foundation drainage. Full water test before completion.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Common Questions</span>
      <h2>Questions About Gutter Replacement in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How long do gutters last?</h3>
        <p>Aluminum gutters, properly installed and maintained with twice-annual cleaning, last <strong>20–30 years</strong> in West Michigan. Galvanized steel gutters corrode faster in Michigan's wet climate and typically last 15–20 years. Vinyl gutters become brittle in cold temperatures and can crack during hard freezes — Kamps doesn't install vinyl gutters for this reason. The biggest factors in lifespan are fastener quality, fascia condition, and whether the system is kept clear of debris.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>When is replacement better than repair?</h3>
        <p>Replacement makes financial sense when gutters have <strong>multiple failing seams</strong>, widespread rust or corrosion, physical damage across more than 30–40% of the system, or when fascia rot indicates long-term water intrusion. If your gutters are 20+ years old and failing in more than one place, the cost of repeated repairs typically exceeds the cost of replacement within 3–4 years. Kamps will tell you honestly which situation you're in.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What size gutters does my Grand Rapids home need?</h3>
        <p><strong>5-inch gutters</strong> handle standard drainage loads for most residential rooflines. <strong>6-inch gutters</strong> are recommended for homes with steep pitches (over 6:12), large drainage areas, or heavy tree coverage that generates significant debris and water volume. Grand Rapids averages about 35 inches of annual precipitation — in high-rainfall years, undersized gutters overflow and route water against your foundation during storms.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What material should my replacement gutters be?</h3>
        <p>For the vast majority of Grand Rapids homes, <strong>.027-gauge aluminum</strong> is the right answer. It handles freeze-thaw cycles without cracking, doesn't rust, holds its shape under snow and ice load, and is available in colors to match your trim. Copper gutters are an option for historic homes where aesthetics justify the cost premium — expect 3–4x the price of aluminum. Kamps does not install vinyl gutters due to their performance record in Michigan winters.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">New Gutters Are a 25-Year Investment in Your Home's Foundation</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Get them sized correctly, sloped properly, and hung into sound fascia. Call Kamps for a free estimate and walk away knowing exactly what the project will cost.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
