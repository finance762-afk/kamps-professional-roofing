<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Storm Damage Roof Repair Grand Rapids MI | Kamps Roofing';
$pageDescription = 'Hail, wind, or fallen debris damage your roof in Grand Rapids? Kamps provides free storm inspections, works directly with insurance adjusters, and handles full restoration across West Michigan.';
$pageKeywords    = 'storm damage roof repair grand rapids, hail damage roof repair michigan, wind damage roof repair kent county, weather damage restoration grand rapids';
$canonicalUrl    = SITE_URL . '/services/storm-damage-roof-repair';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-469959852_122125591724552346_2841148046403983928_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-469959852_122125591724552346_2841148046403983928_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',                        'url' => '/'],
    ['name' => 'Services',                    'url' => '/services'],
    ['name' => 'Storm Damage Roof Repair',    'url' => '/services/storm-damage-roof-repair'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Storm Damage Roof Repair',
    'Kamps Professional Roofing repairs hail damage, wind damage, and severe weather damage on Grand Rapids, MI roofs. Free storm inspections, full insurance documentation, and direct adjuster communication throughout Kent County and West Michigan.',
    '/services/storm-damage-roof-repair'
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
<section class="hero hero-inner" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-469959852_122125591724552346_2841148046403983928_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Storm Damage Roof Repair Grand Rapids, MI</h1>
      <p class="hero-subtitle">Hail, wind, ice, or falling debris — Kamps provides free storm inspections and handles the entire claims process from documentation through final restoration.</p>
      <div class="hero-buttons">
        <a href="/contact" class="btn btn-accent btn-lg">Get a Free Storm Inspection</a>
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
          <span class="eyebrow">Storm &amp; Weather Damage</span>
          <h2>West Michigan Gets Hit Hard — Know What to Do When It Happens</h2>
        </div>
        <p>Grand Rapids and the surrounding Kent County area sits in a high-activity corridor for severe thunderstorms, hail events, and lake-effect weather systems off Lake Michigan. Hail-producing storms are common from April through September, and the area regularly sees straight-line wind events that lift shingles and compromise flashings. If your neighborhood was hit, your roof should be inspected within a few days — damage isn't always obvious from the ground, and insurance claims typically must be filed within 1-3 years of the event.</p>
        <p>The three most common types of storm damage in the Grand Rapids area are hail damage (circular dents or bruising on shingles, granule loss, dents on gutters), wind damage (lifted, creased, or missing shingles along ridges and rakes, flashing pulled from walls), and ice/tree damage (ice dams along eaves, fallen branches that dent or puncture the deck). Even 1-inch hail can compromise an aging asphalt roof, and large granule deposits in gutters after a high-wind event are a clear sign that shingles have been damaged.</p>
        <p>Kamps provides free storm damage inspections throughout the Grand Rapids area — no charge to get on your roof and assess the situation. You'll know what's damaged, what the scope of repair looks like, and what a claim would realistically cover before you decide to file. Daniel has been through hundreds of insurance claims and works directly with adjusters — not through a third-party company, not through an 800-number call center. He provides the photo documentation and written damage assessment that adjusters need, and advocates for a repair scope that actually covers the full extent of damage.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture>
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-469959852_122125591724552346_2841148046403983928_n.jpg" alt="Storm damage roof repair on Grand Rapids Michigan home after hail and wind event" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
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
      <h2>Navigating Storm Claims Takes More Than a Ladder and Shingles</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <div>
          <h3>Free Storm Inspections — Know Before You File</h3>
          <p>Kamps inspects the full roof at no charge after any significant storm event in the Grand Rapids area. You know what's damaged and what it will cost before deciding how to proceed.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>Direct Adjuster Communication</h3>
          <p>Daniel Kamps has decades of experience working directly with insurance adjusters. He documents what they need and advocates for a repair scope that actually covers the full damage.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
        </div>
        <div>
          <h3>Written Scope Before Any Job Begins</h3>
          <p>No vague commitments. Before a single shingle is touched, you'll have a written scope of work aligned with your insurance adjuster's estimate — no surprises at the end of the job.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <div>
          <h3>30+ Michigan Storm Seasons in West Michigan</h3>
          <p>Kamps has worked through every type of severe weather West Michigan throws — including tornado-adjacent events, multi-inch hail, and winter ice storms. That experience shows in efficiency.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Did Your Neighborhood Get Hit? Get a Free Inspection Before Filing.</h2>
    <p>Knowing the scope of damage before you call your insurance company puts you in a stronger position. Kamps inspects roofs throughout Kent County at no cost after storm events.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule a Free Storm Inspection</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</div>

<!-- Process Steps -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">How It Works</span>
      <h2>From First Inspection Through Final Restoration</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Free Storm Damage Inspection</h3>
        <p>Daniel walks the full roof looking for hail bruising, wind-lifted sections, failed flashings, and granule loss. You get a clear picture of what happened and what it will take to fix.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Insurance Documentation</h3>
        <p>Photos, written damage assessment, and a repair scope designed to match standard insurance adjuster documentation requirements — ready for your claim submission.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Work With Your Adjuster</h3>
        <p>Daniel communicates with your adjuster on your behalf — addressing scope gaps, supplementing claims where additional damage is found, and keeping the process moving.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Full Restoration</h3>
        <p>Once the claim is settled, Kamps completes the full repair or replacement per the agreed scope. No hidden costs, no material substitutions, and a workmanship guarantee.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Storm Damage Roof Repair Questions — Grand Rapids Area</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How do I know if my roof has storm damage?</h3>
        <p>For <strong>hail</strong>: Look for circular bruise marks on shingles, granule loss creating dark spots, and dents on metal gutters and vents. For <strong>wind</strong>: Look for lifted, creased, or missing shingles along the ridge and edges, and flashing pulled from walls. After any significant storm in Grand Rapids, a rooftop inspection is the only reliable way to assess the true extent of damage.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How long after a storm do I have to file a claim in Michigan?</h3>
        <p>Michigan homeowner's insurance policies typically allow <strong>1-3 years</strong> to file a claim after a storm event, but this varies by policy. The critical step is documenting the damage as soon as possible — hail bruising becomes harder to identify as shingles weather, and insurers may dispute the cause if filing is delayed.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Does Kamps work with insurance companies on storm claims?</h3>
        <p>Yes — Daniel has been working directly with insurance adjusters for over 30 years on storm damage claims across the Grand Rapids area. He provides the documentation adjusters need, communicates with them directly, and can supplement claims where additional damage is identified during the repair.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section class="closing-cta">
  <div class="container">
    <h2>Storm Damage Gets Worse the Longer You Wait</h2>
    <p>One storm can affect an entire neighborhood in Grand Rapids. Kamps is in your area, knows your insurance landscape, and provides free storm inspections before any commitment.</p>
    <div class="btn-row">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Storm Inspection</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
