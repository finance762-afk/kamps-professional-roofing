<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Gutter Repair Grand Rapids MI | Kamps Professional Roofing';
$pageDescription = 'Professional gutter repair in Grand Rapids, MI. Sagging gutters, leaking seams, disconnected downspouts — most repairs $100–$400. Same-week appointments. Free estimates.';
$pageKeywords    = 'gutter repair grand rapids, fix gutters grand rapids mi, gutter maintenance grand rapids, emergency gutter repair';
$canonicalUrl    = SITE_URL . '/services/gutter-repair';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-473600470_122132718890552346_3318289636169879185_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-473600470_122132718890552346_3318289636169879185_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',          'url' => '/'],
    ['name' => 'Services',      'url' => '/services'],
    ['name' => 'Gutter Repair', 'url' => '/services/gutter-repair'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Gutter Repair',
    'Gutter repair services in Grand Rapids, MI. Kamps Professional Roofing fixes sagging sections, leaking seams, holes, and disconnected downspouts. Most repairs completed same week with honest assessments on repair vs. replacement.',
    '/services/gutter-repair'
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
<section class="hero hero-inner" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-473600470_122132718890552346_3318289636169879185_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Gutter Repair Grand Rapids, MI</h1>
      <p class="hero-subtitle">Sagging gutters, leaking seams, holes, and pulled-away sections repaired correctly — fixing the root cause, not just the visible symptom. Most repairs completed same week.</p>
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
          <h2>Stop the Leak, Find the Cause — Gutter Repairs That Actually Stick</h2>
        </div>
        <p>Most gutter repairs in Grand Rapids run <strong>$100-$400</strong> for isolated issues like a leaking seam, a sagging section, or a disconnected downspout. Replacing a badly damaged section of gutter typically runs <strong>$200-$700</strong> depending on length and accessibility. Emergency repairs after storm damage or ice dam events are handled same-week — gutters failing during active rain cause fascia rot and foundation problems that compound quickly.</p>
        <p>West Michigan's freeze-thaw cycle is the primary driver of gutter failure. Overnight temperatures drop below freezing while afternoons warm up repeatedly from November through March. Water trapped inside gutter seams expands as it freezes, separating the joint sealant a fraction of a millimeter at a time until the seam fails entirely. This is why patching a seam from the outside without addressing how water is pooling there will fail again in 6-18 months — Kamps diagnoses the drainage problem first.</p>
        <p>Common gutter repair issues Kamps handles in Grand Rapids homes: leaking miter corners at gutter angles, sagging sections where hangers have pulled from rotted fascia, holes and cracks from physical impact, downspouts that have separated at the elbow joints, gutters pitched the wrong direction so water pools instead of drains, and end caps that have worked loose. If a repair will cost more than 40-50% of what new gutters would cost, Kamps will tell you that directly — you'll get an honest answer, not a padded repair quote.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture><img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-473600470_122132718890552346_3318289636169879185_n.jpg" alt="gutter repair work on a Grand Rapids Michigan residential home" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;"></picture>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Kamps -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>Gutter Repairs That Fix the Problem — Not Just the Visible Symptom</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        </div>
        <div>
          <h3>Root-Cause Diagnosis Before Any Work</h3>
          <p>Why is the seam leaking? Why is the gutter sagging? Kamps answers these questions before making repairs — otherwise you're patching symptoms while the underlying drainage problem continues damaging your fascia and foundation.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
        </div>
        <div>
          <h3>Honest About When Replacement Makes More Sense</h3>
          <p>If your gutters are 25 years old and failing in multiple places, Kamps will tell you — a replacement quote will be less than you'd pay for repeated repairs over the next two years. That's a conversation you deserve to have upfront.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <div>
          <h3>Same-Week Appointments Available</h3>
          <p>A gutter failing during a heavy spring rain isn't a problem you can schedule for three weeks out. Kamps prioritizes repair calls so water damage doesn't compound between the day you notice the problem and the day it gets fixed.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>30+ Years Means No West Michigan Surprises</h3>
          <p>Daniel Kamps has repaired gutters on Grand Rapids homes through decades of lake-effect winters. He knows which failure patterns are common in Kent County's older housing stock and how to address them correctly.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Gutter Leaking or Sagging? Get a Same-Week Repair Estimate.</h2>
    <p>Failing gutters accelerate fascia rot and basement water problems. Call Kamps for a free diagnosis and written repair quote before the next rainstorm hits Grand Rapids.</p>
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
      <h2>How Kamps Handles Gutter Repairs in Grand Rapids</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Diagnose the Issue</h3>
        <p>Daniel inspects the full gutter run — not just the visible problem spot. Understanding why the failure occurred determines whether a targeted repair or section replacement is the right solution.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Re-Secure Sagging Hangers</h3>
        <p>Sagging is almost always a fastener or fascia problem, not a gutter problem. Kamps re-secures hangers into sound wood or replaces rotted fascia sections so the fix holds through the next winter.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Seal or Patch Leaks</h3>
        <p>Seams, holes, and cracks are cleaned, prepared, and sealed with professional-grade gutter sealant designed for Michigan's temperature swings — not the hardware-store caulk that fails in 6 months.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Test Flow with Water</h3>
        <p>Every repair is tested with running water before Kamps leaves. Downspout flow is verified and discharge points are checked to confirm water is exiting where it should — not pooling at your foundation.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Questions About Gutter Repair in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How much does gutter repair cost in Grand Rapids?</h3>
        <p>Most isolated repairs — a leaking seam, a sagging hanger section, a hole, or a disconnected downspout elbow — run <strong>$100-$400</strong>. Replacing a damaged section of gutter runs <strong>$200-$700</strong> depending on length and material. Complex repairs involving fascia rot under the gutters can run higher since the root cause has to be addressed for the repair to last.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How do I know if my gutters need repair vs. replacement?</h3>
        <p>Repair makes sense when problems are isolated — one leaking seam, one sagging section, one disconnected downspout. Replacement becomes the better financial decision when the gutters are 20+ years old with multiple failing sections, widespread rust or corrosion, or evidence that fascia rot is occurring along the full run. A Kamps estimate will tell you exactly where on that spectrum your gutters sit.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What causes gutters to pull away from the house?</h3>
        <p>The two most common causes in Grand Rapids homes are <strong>rotted fascia boards</strong> and <strong>improper hanger spacing</strong>. Fascia rot happens when gutters hold water due to poor slope or clogs — the wood behind the gutter stays wet and eventually can't hold fasteners. Hanger spacing problems happen when original installation used spike-and-ferrule fasteners placed too far apart, which allows the gutter to pull out between the anchored points under ice and snow load.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section class="closing-cta">
  <div class="container">
    <h2>Catch Gutter Problems Before They Become Foundation Problems</h2>
    <p>A $200 gutter repair now can prevent a $3,000 foundation drainage project later. Get a free assessment from Kamps and know exactly what you're dealing with before anything gets worse.</p>
    <div class="btn-row">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
