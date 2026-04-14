<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Gutter Installation Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Seamless aluminum gutter installation in Grand Rapids, MI. Custom on-site fabrication, no-seam design, proper slope guaranteed. $800–$2,500 for most homes. Free estimates.';
$pageKeywords    = 'gutter installation grand rapids mi, grand rapids gutter services, residential gutters grand rapids, gutter contractors grand rapids';
$canonicalUrl    = SITE_URL . '/services/gutter-installation';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-473337168_122132719052552346_6134934250438671592_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-473337168_122132719052552346_6134934250438671592_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',                 'url' => '/'],
    ['name' => 'Services',             'url' => '/services'],
    ['name' => 'Gutter Installation',  'url' => '/services/gutter-installation'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Gutter Installation',
    'Seamless aluminum gutter installation in Grand Rapids, MI. Kamps Professional Roofing fabricates gutters on-site for a custom fit with no seams to leak. 5" and 6" options available with optional gutter guard add-on.',
    '/services/gutter-installation'
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
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-473337168_122132719052552346_6134934250438671592_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Gutter Installation Grand Rapids, MI</h1>
      <p class="hero-subtitle">Seamless aluminum gutters fabricated on-site for your home's exact dimensions — no joints, no future seam failures, properly sloped for West Michigan rainfall from day one.</p>
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
          <span class="eyebrow">Gutter Services</span>
          <h2>Gutters That Fit Your Home — Rolled and Cut Right Here in Grand Rapids</h2>
        </div>
        <p>A full gutter installation on most Grand Rapids homes runs <strong>$800-$2,500</strong> depending on linear footage, number of downspouts, and whether you add gutter guards. That range covers seamless aluminum gutters custom-fabricated on a roll-former truck parked in your driveway — not pre-cut sections pieced together from a home improvement store. The difference matters: every joint in a sectional gutter system is a future leak waiting for Michigan's winter freeze-thaw to open it up.</p>
        <p>Kamps installs <strong>5-inch gutters</strong> for standard residential applications and <strong>6-inch gutters</strong> for high-pitch roofs, large drainage areas, or homes with significant tree coverage. Downspout placement is planned before the first hanger goes in — we map the drainage path to direct water at least six feet from your foundation, because basement water intrusion in Grand Rapids is almost always a grading and drainage problem that starts at the roofline.</p>
        <p>Every installation includes fascia-mounted hidden hangers spaced on 16-inch centers — the industry standard that prevents sagging between supports. The gutter is set to a slope of approximately 1/4 inch per 10 feet, enough pitch to keep water moving toward downspouts without making the gutter visibly uneven from the street. Optional micro-mesh gutter guards are available as an add-on and handle West Michigan's heavy maple seed and leaf fall better than reverse-curve styles.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture><img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-473337168_122132719052552346_6134934250438671592_n.jpg" alt="seamless gutter installation on a Grand Rapids Michigan home" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;"></picture>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Kamps -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>What Separates a Proper Gutter Install from One You'll Replace in Five Years</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        </div>
        <div>
          <h3>Custom On-Site Seamless Fabrication</h3>
          <p>The roll-former comes to your home. Gutters are cut to exact length for each run — no pieced-together sections, no seams to separate when water freezes inside them during a West Michigan January.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <div>
          <h3>Proper Slope for Reliable Drainage</h3>
          <p>Gutters set too flat collect standing water and breed mosquitoes. Too steep and they look wrong from the street. Kamps sets every run at the correct pitch so water drains fully without visible tilt.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        </div>
        <div>
          <h3>Downspout Placement That Protects Your Foundation</h3>
          <p>Where the water exits matters as much as where it enters. Kamps plans downspout locations to discharge away from foundation walls, window wells, and basement entry points — common problem areas in older Grand Rapids neighborhoods.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>Michigan-Grade .027 Gauge Aluminum</h3>
          <p>The aluminum thickness varies widely between contractors. Kamps installs .027 gauge aluminum — heavy enough to hold its profile under snow load and resist denting from falling branches without flexing out of shape.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>New Gutters Installed in a Single Day — Free Estimate, No Obligation</h2>
    <p>Most Grand Rapids gutter installations are completed in one visit. Get a written quote that covers materials, labor, and downspout placement before any work begins.</p>
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
      <h2>How Kamps Installs Gutters on Your Grand Rapids Home</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Measure &amp; Plan</h3>
        <p>Daniel walks the perimeter of your home, measures every run, identifies downspout discharge points, and checks fascia condition. You get a written quote before any work begins.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Remove Old Gutters</h3>
        <p>Existing gutters and hardware are removed and disposed of. Fascia boards are inspected — any rotted sections are noted and can be repaired before new gutters are hung.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Install Fascia-Mounted Hangers</h3>
        <p>Hidden hangers are installed directly into rafter tails on 16-inch centers. This spacing prevents the sagging you see in older sectional gutter systems that used spike-and-ferrule fasteners.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Roll, Hang &amp; Connect</h3>
        <p>Seamless gutters are fabricated on-site, hung at proper pitch, and connected to downspouts. Every joint is sealed and tested with water before the crew leaves your property.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Questions About Gutter Installation in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How much does gutter installation cost in Grand Rapids?</h3>
        <p>Most full installations on Grand Rapids homes run <strong>$800-$2,500</strong>. A ranch-style home with simple rooflines is typically on the lower end; two-story homes with complex fascia lines and multiple downspouts fall toward the higher end. Gutter guards add $3-$10 per linear foot depending on the style. Kamps provides itemized written quotes so you see the full breakdown before committing.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What's the difference between seamless and sectional gutters?</h3>
        <p>Sectional gutters come in pre-cut pieces joined at seams — every seam is a potential leak point that expands and contracts with Michigan's freeze-thaw cycles. Seamless gutters are a single continuous run from corner to corner with no mid-run joints. The only connections are at the corners and downspout outlets, where proper sealant is applied. Seamless gutters virtually eliminate seam-related leaks, which are the #1 cause of gutter failure in this climate.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>When do I need new gutters installed?</h3>
        <p>If your home doesn't have gutters, water is almost certainly eroding your foundation plantings and splashing mud onto your siding during heavy rain. If you have gutters but they're pulling away from the fascia, have multiple leaking seams, or show rust and holes, replacement is more cost-effective than ongoing repairs. Most aluminum gutters last 20-30 years in West Michigan when properly maintained.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">Gutters That Handle West Michigan Rain — Installed Right the First Time</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Don't let undersized or failing gutters route water toward your foundation. Get a free written estimate from Kamps and know the full cost before any work starts.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
