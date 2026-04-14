<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Roof Replacement Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Kamps Professional Roofing replaces roofs across Grand Rapids, MI. Asphalt, metal, cedar, and slate options. Free itemized estimates. 30+ years of West Michigan experience.';
$pageKeywords    = 'roof replacement grand rapids mi, new roof installation grand rapids, residential roof replacement kent county, affordable roof replacement grand rapids';
$canonicalUrl    = SITE_URL . '/services/roof-replacement';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-27.webp';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-27.webp';

$breadcrumbs = [
    ['name' => 'Home',             'url' => '/'],
    ['name' => 'Services',         'url' => '/services'],
    ['name' => 'Roof Replacement', 'url' => '/services/roof-replacement'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Roof Replacement',
    'Complete residential roof replacement in Grand Rapids, MI. Kamps Professional Roofing installs asphalt, metal, cedar, tile, and slate roofing systems with full yard cleanup and a workmanship guarantee.',
    '/services/roof-replacement'
) . ',' . json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type'          => 'Question',
            'name'           => 'How much does roof replacement cost in Grand Rapids?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Most residential replacements in Kent County run $8,000–$18,000. A standard 1,500–2,500 sq ft home with asphalt shingles typically falls in the $8,000–$14,000 range. Metal, cedar shake, and slate systems start around $12,000 and can exceed $18,000 for larger or steeply pitched roofs. Kamps provides fully itemized written estimates so you know exactly what you\'re paying for.'],
        ],
        [
            '@type'          => 'Question',
            'name'           => 'How long does a roof replacement take?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Most single-family homes in Grand Rapids are completed in one day. Larger homes, complex rooflines with multiple valleys and penetrations, or two-story structures may run into a second day. Weather holds are rare but possible — Kamps will communicate proactively if a schedule change is needed.'],
        ],
        [
            '@type'          => 'Question',
            'name'           => 'What roofing materials does Kamps install?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Kamps installs asphalt shingles (3-tab and architectural), metal roofing (standing seam and exposed fastener), cedar shake, tile, and slate. Daniel will walk you through the pros, cons, and cost differences of each so you can make an informed decision.'],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . ']';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* Standard service page styles */
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

<!-- Breadcrumb -->
<?php echo breadcrumb_nav($breadcrumbs); ?>

<!-- Hero — CTA #1 -->
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-27.webp');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Roof Replacement Grand Rapids, MI</h1>
      <p class="hero-subtitle">Full residential roof replacement with itemized estimates, clean removal, and 30+ years of West Michigan experience behind every installation.</p>
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
          <span class="eyebrow">Residential Roofing</span>
          <h2>A Roof That Holds Up to Michigan Winters — Built Right the First Time</h2>
        </div>
        <p>Most Grand Rapids homes need a full roof replacement every 20–25 years, though Michigan's freeze-thaw cycles and spring hail storms can accelerate that timeline. For a typical 1,500–2,500 sq ft home in Kent County, a complete asphalt shingle replacement runs <strong>$8,000–$14,000</strong>. Metal, cedar, or slate systems range from <strong>$12,000–$18,000+</strong> depending on pitch, complexity, and material grade. Every estimate from Kamps is fully itemized — you'll see labor, material, and disposal costs broken out line by line.</p>
        <p>The replacement process starts with a full tear-off of your existing shingles and a thorough inspection of the decking below. Any soft or damaged sheathing is replaced before the new system goes down — this is where shortcuts get taken on cheap jobs, and where Kamps does not cut corners. Ice-and-water shield is installed in all vulnerable zones (valleys, eaves, penetrations) before synthetic underlayment and new shingles are laid.</p>
        <p>West Michigan's climate demands specific installation practices: proper ridge ventilation to handle summer heat and attic moisture, correct flashing at chimneys, dormers, and pipe boots to survive ice buildup, and high-wind fastening schedules for roofs in exposed areas near the lakeshore. These details matter more in Grand Rapids than in most parts of the country — Daniel Kamps has been doing this here for over three decades and knows exactly what Michigan roofs need.</p>
        <p>After installation, Kamps does a complete yard cleanup including a magnetic nail sweep of the lawn and driveway — so your kids and tires don't pay the price for the project. You'll receive a written summary of everything installed, the manufacturer warranty information, and a recommended maintenance schedule.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture>
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-2025-06-27.webp" alt="roof replacement in progress on a Grand Rapids MI residential home" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Kamps -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>What Makes a Roof Replacement Worth Every Dollar</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg></div>
        <div><h3>Itemized Estimates — No Hidden Charges</h3><p>You get a line-by-line breakdown of labor, materials, tear-off, and disposal before anything starts. If the scope changes, you're notified in writing before a single additional dollar is spent.</p></div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
        <div><h3>Daniel Kamps Oversees Every Replacement</h3><p>This isn't a company that sends a crew you've never met. Daniel personally manages every roof replacement — the same guy who gives you the estimate is the one accountable for the finished product.</p></div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg></div>
        <div><h3>Full Yard Cleanup &amp; Magnetic Nail Sweep</h3><p>Every replacement includes complete debris removal and a thorough magnetic sweep of your yard, driveway, and landscaping. You won't find roofing nails with your car tires.</p></div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></div>
        <div><h3>30+ Grand Rapids Winters Mean No Surprises</h3><p>Every West Michigan quirk — ice dams, wind uplift near Lake Michigan, rapid freeze-thaw in spring — is factored into how Kamps installs roofs in this area. That local knowledge protects your investment.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Ready to Replace Your Roof? Get a Free, Itemized Estimate.</h2>
    <p>Most replacement projects are scheduled and completed within 1–2 weeks of your estimate. Call or reach out online — Daniel will walk your roof personally before quoting.</p>
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
      <h2>How Kamps Handles Your Roof Replacement</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Free Estimate &amp; Roof Inspection</h3>
        <p>Daniel walks your roof and checks decking, flashing, ventilation, and gutters. You get a written, itemized quote — no verbal ballparks.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Material Selection &amp; Scheduling</h3>
        <p>Choose from asphalt, metal, cedar, tile, or slate. We confirm your install date and order materials — most projects scheduled within 1–2 weeks.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Tear-Off &amp; Deck Preparation</h3>
        <p>Full removal of existing shingles. Any soft or water-damaged decking is replaced. Ice-and-water shield and underlayment installed before new shingles go down.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Installation, Cleanup &amp; Walkthrough</h3>
        <p>New roof installed to manufacturer specs. Full yard cleanup and magnetic nail sweep. Final walkthrough with documentation and warranty paperwork.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Questions About Roof Replacement in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How much does roof replacement cost in Grand Rapids?</h3>
        <p>Most residential replacements in Kent County run <strong>$8,000–$18,000</strong>. A standard 1,500–2,500 sq ft home with asphalt shingles typically falls in the $8,000–$14,000 range. Metal, cedar shake, and slate systems start around $12,000 and can exceed $18,000 for larger or steeply pitched roofs. Kamps provides fully itemized written estimates so you know exactly what you're paying for.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How long does a roof replacement take?</h3>
        <p>Most single-family homes in Grand Rapids are completed in <strong>one day</strong>. Larger homes, complex rooflines with multiple valleys and penetrations, or two-story structures may run into a second day. Weather holds are rare but possible — Kamps will communicate proactively if a schedule change is needed.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What roofing materials does Kamps install?</h3>
        <p>Kamps installs <strong>asphalt shingles</strong> (3-tab and architectural), <strong>metal roofing</strong> (standing seam and exposed fastener), <strong>cedar shake</strong>, <strong>tile</strong>, and <strong>slate</strong>. Daniel will walk you through the pros, cons, and cost differences of each so you can make an informed decision — not just the most profitable one for the contractor.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">Your Roof Protects Everything Underneath It</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Don't wait for a small issue to become a structural one. Get a free, no-pressure estimate from Daniel Kamps and know exactly what your replacement will cost before committing to anything.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
