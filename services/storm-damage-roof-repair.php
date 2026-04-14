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
/* ── Page-specific: Storm Damage Roof Repair ─────────────── */
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
  background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
  color: white;
  border-radius: var(--radius-lg);
  padding: 1.25rem 1.75rem;
  text-align: center;
  box-shadow: var(--shadow-lg);
}
.stat-overlay .big-number {
  font-family: var(--font-heading);
  font-size: 2rem;
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

/* Storm damage type cards */
.damage-types {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.25rem;
  margin: 2rem 0;
}
.damage-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: 1.5rem;
  box-shadow: var(--shadow-card);
  border-top: 3px solid var(--color-accent);
}
.damage-card h4 { font-size: 0.95rem; margin-bottom: 0.5rem; color: var(--color-dark); }
.damage-card p { font-size: 0.85rem; color: var(--color-gray); line-height: 1.5; }

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
  .damage-types { grid-template-columns: 1fr 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
}
@media (max-width: 767px) {
  .why-grid { grid-template-columns: 1fr; }
  .stat-overlay { right: 0; bottom: -1rem; }
  .damage-types { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .process-grid { grid-template-columns: 1fr; }
}
</style>

<?php echo breadcrumb_nav($breadcrumbs); ?>

<!-- INNER HERO — CTA #1 ──────────────────────────────────── -->
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-469959852_122125591724552346_2841148046403983928_n.jpg');">
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
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          Free Storm Inspections
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
          Works With Your Insurance
        </span>
      </div>
    </div>
  </div>
</section>

<!-- TICKER STRIP ─────────────────────────────────────────── -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>Free Storm Inspections</span><span>★★★★★</span><span>Hail &amp; Wind Damage</span><span>Insurance Claims Experts</span><span>Grand Rapids, MI</span><span>30+ Years Experience</span><span>Same-Day Response</span><span>★★★★★</span>
    <span>Free Storm Inspections</span><span>★★★★★</span><span>Hail &amp; Wind Damage</span><span>Insurance Claims Experts</span><span>Grand Rapids, MI</span><span>30+ Years Experience</span><span>Same-Day Response</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL ───────────────────────────────────────── -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
          <span class="eyebrow">Storm &amp; Weather Damage</span>
          <h2>West Michigan Gets Hit Hard — Know What to Do When It Happens to Your Roof</h2>
        </div>
        <p>Grand Rapids and the surrounding Kent County area sits in a high-activity corridor for severe thunderstorms, hail events, and lake-effect weather systems off Lake Michigan. Hail-producing storms are common from April through September, and the area regularly sees the kind of straight-line wind events that lift shingles and compromise flashings. If your neighborhood was hit, your roof should be inspected within a few days — damage isn't always obvious from the ground, and insurance claims typically must be filed within 1–3 years of the event.</p>

        <div class="damage-types">
          <div class="damage-card">
            <h4>Hail Damage</h4>
            <p>Look for circular dents or bruising on shingles, granule loss concentrated in impact areas, and dents on gutters or fascia metal. Even 1-inch hail can compromise an aging asphalt roof.</p>
          </div>
          <div class="damage-card">
            <h4>Wind Damage</h4>
            <p>Lifted, creased, or missing shingles — especially along ridges and rakes. Flashing pulled away from walls or chimneys. Check your gutters for large granule deposits after high-wind events.</p>
          </div>
          <div class="damage-card">
            <h4>Ice &amp; Tree Damage</h4>
            <p>Ice dams along eaves in winter. Fallen branches that dent or puncture the deck. Limb scraping that wears through shingle surfaces over time — especially on homes near mature trees.</p>
          </div>
        </div>

        <p>Kamps provides free storm damage inspections throughout the Grand Rapids area — no charge to get on your roof and assess the situation. You'll know what's damaged, what the scope of repair looks like, and what a claim would realistically cover before you decide to file. Daniel has been through hundreds of insurance claims and works directly with adjusters — not through a third-party company, not through an 800-number call center.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914926-469959852_122125591724552346_2841148046403983928_n.jpg"
            alt="storm damage roof repair on grand rapids michigan home after hail and wind event"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">100s</div>
          <div class="label">Storm Claims Handled</div>
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
      <h2>Navigating Storm Claims Takes More Than a Ladder and Shingles</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </div>
        <div>
          <h3>Free Storm Damage Inspections — Know Before You File</h3>
          <p>Kamps inspects the full roof at no charge after any significant storm event in the Grand Rapids area. You know what's damaged and what it will cost before deciding how to proceed.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <div>
          <h3>Direct Adjuster Communication — Daniel Handles It</h3>
          <p>Daniel Kamps has decades of experience working directly with insurance adjusters. He speaks their language, documents what they need, and advocates for a repair scope that actually covers the full damage.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
        </div>
        <div>
          <h3>Written Scope Before Any Job Begins</h3>
          <p>No vague commitments. Before a single shingle is touched, you'll have a written scope of work aligned with your insurance adjuster's estimate — no surprises at the end of the job.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 16.1A5 5 0 0 1 5.5 8h.5a7 7 0 1 1 14 0h.5a5 5 0 0 1 1.9 8.1"></path><path d="M12 12v9"></path><path d="M8 17l4 4 4-4"></path></svg>
        </div>
        <div>
          <h3>30+ Michigan Storm Seasons in West Michigan</h3>
          <p>Kamps has worked through every type of severe weather West Michigan throws — including tornado-adjacent events, multi-inch hail, and winter ice storms. That experience shows in how efficiently storm damage gets handled.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — CTA #2 ─────────────────────────────────── -->
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

<!-- PROCESS STEPS ────────────────────────────────────────── -->
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
        <p>Daniel walks the full roof looking for hail bruising, wind-lifted sections, failed flashings, and granule loss. You get a clear picture of what happened and what it will take to fix it.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Insurance Documentation Package</h3>
        <p>Photos, written damage assessment, and a repair scope designed to match standard insurance adjuster documentation requirements — ready for your claim submission.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Work Directly With Your Adjuster</h3>
        <p>Daniel communicates with your adjuster on your behalf — addressing scope gaps, supplementing claims where additional damage is found, and keeping the process moving forward.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Full Restoration</h3>
        <p>Once the claim is settled, Kamps completes the full repair or replacement per the agreed scope. No hidden costs, no material substitutions, and a workmanship guarantee on every job.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION ──────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Storm Damage Roof Repair Questions — Grand Rapids Area</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How do I know if my roof has storm damage?</h3>
        <p>For <strong>hail</strong>: Look for circular bruise marks or soft spots on shingles (visible when pressed), granule loss creating dark spots, and dents on metal gutters, fascia, and vents. For <strong>wind</strong>: Look for lifted, creased, or missing shingles — especially along the ridge, rakes, and edges — and flashing that's pulled away from walls. After any significant storm in Grand Rapids, a rooftop inspection is the only reliable way to assess the true extent of damage.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How long after a storm do I have to file a roofing claim in Michigan?</h3>
        <p>Michigan homeowner's insurance policies typically allow <strong>1–3 years</strong> to file a claim after a storm event, but this varies by policy. The critical step is documenting the damage as soon as possible — hail bruising becomes harder to identify as shingles weather, and insurers may dispute the cause if filing is delayed. If your area was hit, schedule an inspection within days, not months.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Does Kamps work with insurance companies on storm claims?</h3>
        <p>Yes — Daniel has been working directly with insurance adjusters for over 30 years on storm damage claims across the Grand Rapids area. He provides the documentation adjusters need, communicates with them directly during the inspection and scope process, and can supplement claims where additional damage is identified during the repair. You don't navigate the claim alone.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What types of storm damage does Kamps repair?</h3>
        <p>Kamps handles all weather-related roof damage common in West Michigan: <strong>hail damage</strong> (shingle bruising and granule loss), <strong>wind damage</strong> (lifted and missing shingles, flashing failure), <strong>fallen tree and branch damage</strong> (structural punctures and deck damage), <strong>ice dam damage</strong> (lifted shingles, soffit damage, interior water intrusion), and <strong>severe storm structural damage</strong> from tornado-proximity events. If a Michigan storm caused it, Kamps handles it.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 ─────────────────────────────────── -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">Storm Damage Gets Worse the Longer You Wait</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">One storm can affect an entire neighborhood in Grand Rapids. Kamps is in your area, knows your insurance landscape, and provides free storm inspections before any commitment. Start with a call.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Storm Inspection</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
