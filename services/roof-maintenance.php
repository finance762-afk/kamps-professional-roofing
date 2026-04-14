<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Roof Maintenance Grand Rapids MI | Kamps Professional Roofing';
$pageDescription = 'Preventive roof maintenance in Grand Rapids, MI. Kamps clears debris, seals flashings, and catches small issues before they become expensive repairs — with written maintenance logs.';
$pageKeywords    = 'roof maintenance grand rapids mi, preventive roof care west michigan, seasonal roof maintenance kent county, roof maintenance services grand rapids';
$canonicalUrl    = SITE_URL . '/services/roof-maintenance';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26__1_.webp';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26__1_.webp';

$breadcrumbs = [
    ['name' => 'Home',               'url' => '/'],
    ['name' => 'Services',           'url' => '/services'],
    ['name' => 'Roof Maintenance',   'url' => '/services/roof-maintenance'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Roof Maintenance',
    'Kamps Professional Roofing provides annual and bi-annual roof maintenance for Grand Rapids, MI homeowners. Debris clearing, flashing seal-up, minor shingle repairs, gutter inspection, and written maintenance logs — protecting roofs across West Michigan from premature failure.',
    '/services/roof-maintenance'
) . ']';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ── Page-specific: Roof Maintenance ─────────────────────── */
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

/* Cost comparison block */
.cost-compare {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
  margin: 1.75rem 0;
}
.cost-card {
  border-radius: var(--radius-lg);
  padding: 1.5rem;
  text-align: center;
}
.cost-card.maintained {
  background: linear-gradient(135deg, rgba(6, 182, 212, 0.1), rgba(26, 43, 60, 0.08));
  border: 2px solid var(--color-accent);
}
.cost-card.neglected {
  background: rgba(220, 38, 38, 0.06);
  border: 2px solid rgba(220, 38, 38, 0.3);
}
.cost-card .cost-label {
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 0.5rem;
}
.cost-card.maintained .cost-label { color: var(--color-accent); }
.cost-card.neglected .cost-label { color: #dc2626; }
.cost-card .cost-number {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 800;
  line-height: 1;
  color: var(--color-dark);
  margin-bottom: 0.4rem;
}
.cost-card .cost-desc { font-size: 0.8rem; color: var(--color-gray); }

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
  .faq-grid { grid-template-columns: 1fr; }
}
@media (max-width: 767px) {
  .why-grid { grid-template-columns: 1fr; }
  .cost-compare { grid-template-columns: 1fr; }
  .stat-overlay { right: 0; bottom: -1rem; }
}
@media (max-width: 480px) {
  .process-grid { grid-template-columns: 1fr; }
}
</style>

<?php echo breadcrumb_nav($breadcrumbs); ?>

<!-- INNER HERO — CTA #1 ──────────────────────────────────── -->
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26__1_.webp');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Roof Maintenance Grand Rapids, MI</h1>
      <p class="hero-subtitle">Annual or bi-annual maintenance keeps West Michigan roofs performing longer — debris cleared, flashings sealed, gutters checked, and everything documented in a written log.</p>
      <div class="hero-buttons">
        <a href="/contact" class="btn btn-accent btn-lg">Schedule Maintenance</a>
        <?php echo phone_link('btn btn-outline-white btn-lg', 'Call Now'); ?>
      </div>
      <div class="hero-trust">
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          Written Maintenance Log
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 11 4 16"></polyline></svg>
          Extend Your Roof's Life
        </span>
      </div>
    </div>
  </div>
</section>

<!-- TICKER STRIP ─────────────────────────────────────────── -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>Preventive Maintenance</span><span>★★★★★</span><span>30+ Years Experience</span><span>Written Maintenance Logs</span><span>Grand Rapids, MI</span><span>Extend Roof Life</span><span>Seasonal Care</span><span>★★★★★</span>
    <span>Preventive Maintenance</span><span>★★★★★</span><span>30+ Years Experience</span><span>Written Maintenance Logs</span><span>Grand Rapids, MI</span><span>Extend Roof Life</span><span>Seasonal Care</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL ───────────────────────────────────────── -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
          <span class="eyebrow">Preventive Care</span>
          <h2>The $400 Visit That Routinely Prevents $4,000 Repairs</h2>
        </div>
        <p>Roof maintenance visits from Kamps typically run <strong>$200–$600</strong> depending on home size and what's found. That range covers debris removal from valleys and gutters, flashing reseal at all penetrations and joints, minor shingle repairs, gutter attachment checks, and a full condition walkthrough with notes. What that cost protects against is the predictable consequence of skipped maintenance — failed flashings that develop into active leaks, clogged valleys that back up under shingles during heavy rain, and loose fasteners that become missing shingles after the first significant storm.</p>

        <div class="cost-compare">
          <div class="cost-card maintained">
            <div class="cost-label">Annual Maintenance</div>
            <div class="cost-number">$200–600</div>
            <div class="cost-desc">Per visit — documented condition log, debris clear, flashing seals, minor repairs, full system check</div>
          </div>
          <div class="cost-card neglected">
            <div class="cost-label">Skipped Maintenance</div>
            <div class="cost-number">$2k–15k+</div>
            <div class="cost-desc">Reactive repair or early replacement when small problems become structural failures</div>
          </div>
        </div>

        <p>West Michigan's climate makes maintenance especially important. Ice dams are common on Grand Rapids homes with lower-pitched sections or inadequate attic ventilation — they form when heat escapes through the roof deck and melts snow that refreezes at the eaves. Regular maintenance allows Kamps to identify ventilation problems and vulnerable zones before ice season starts. Spring visits after the thaw check for any damage the winter caused before it has a chance to worsen through the summer.</p>
        <p>Every maintenance visit from Kamps includes a written log — what was found, what was done, and what to watch for. Over time, that log becomes a useful history of your roof's performance — helpful when selling the home, filing an insurance claim, or planning a future replacement timeline.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26__1_.webp"
            alt="roof maintenance being performed on a west michigan home near grand rapids"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">25–30yr</div>
          <div class="label">Well-Maintained Roof Life</div>
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
      <h2>Maintenance That Actually Extends Your Roof — Not Just Checks a Box</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line></svg>
        </div>
        <div>
          <h3>Written Maintenance Log Builds a Documented History</h3>
          <p>Every visit is logged — conditions found, work performed, items to monitor. That documentation has real value when selling a home, supporting an insurance claim, or planning when replacement makes financial sense.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </div>
        <div>
          <h3>Small Issues Caught Before They Become Expensive Repairs</h3>
          <p>A lifted flashing resealed during a maintenance visit costs $50 in materials and time. Left for two winters, the same flashing can allow water to rot the decking beneath it — turning a minor item into a $1,500 repair minimum.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 16.1A5 5 0 0 1 5.5 8h.5a7 7 0 1 1 14 0h.5a5 5 0 0 1 1.9 8.1"></path><path d="M12 12v9"></path></svg>
        </div>
        <div>
          <h3>Michigan-Specific Seasonal Focus</h3>
          <p>Spring maintenance catches winter damage before it compounds. Fall maintenance prepares flashings, valleys, and gutters for the ice and snow load ahead. West Michigan's climate has distinct seasonal stress patterns — and Kamps schedules maintenance accordingly.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>30 Years of West Michigan Roofs — Daniel Knows What to Look For</h3>
          <p>After 30+ years maintaining and replacing roofs in Grand Rapids, Daniel recognizes early failure patterns that a less-experienced eye would miss. That knowledge is what separates a thorough maintenance visit from a superficial inspection with a caulk gun.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — CTA #2 ─────────────────────────────────── -->
<div class="cta-banner">
  <div class="container">
    <h2>A Well-Maintained Roof Lasts 10 Years Longer Than One That Isn't</h2>
    <p>Annual maintenance is one of the highest-return investments a Grand Rapids homeowner can make in their property. Schedule a visit with Kamps before the next storm season starts.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule Roof Maintenance</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</div>

<!-- PROCESS STEPS ────────────────────────────────────────── -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">How It Works</span>
      <h2>What a Kamps Maintenance Visit Actually Covers</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Annual or Bi-Annual Inspection</h3>
        <p>Full rooftop condition assessment — shingles, flashings, valleys, ridge, and all penetrations. Notes current condition and any changes since the last visit.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Debris Clearing</h3>
        <p>Removes accumulated debris from valleys, around chimneys, and from gutters — organic material that holds moisture and accelerates shingle and flashing deterioration.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Seal Exposed Fasteners &amp; Flashings</h3>
        <p>Re-seals any cracking or lifting caulk at flashings, exposed nail heads, pipe boots, and ridge cap joints — the most common source of developing leaks on maintained roofs.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Written Maintenance Log</h3>
        <p>Date-stamped documentation of what was found, what was done, and what to monitor — a running record of your roof's condition over time that actually has value when you need it.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION ──────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Roof Maintenance Questions for Grand Rapids Homeowners</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How often should I have my roof maintained in West Michigan?</h3>
        <p><strong>Annually</strong> is the recommendation for most Grand Rapids homes, with bi-annual visits (before and after winter) for roofs over 15 years old or those with known vulnerable areas like low-slope sections, large overhanging trees, or previous flashing repairs. Michigan's freeze-thaw cycles are harder on roofing systems than most climates — the maintenance cadence reflects that reality, not a sales schedule.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What does roof maintenance include?</h3>
        <p>A standard Kamps maintenance visit covers: debris removal from valleys, gutters, and around chimneys; resealing of exposed flashings, pipe boots, and fasteners; visual assessment of all shingles for cracking, lifting, or granule loss; gutter attachment and drainage check; soffit and fascia condition; and a written log noting current condition, work performed, and anything to watch going forward. Minor shingle repairs are included when found.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Can regular maintenance actually prevent roof replacement?</h3>
        <p>Yes — significantly. A well-maintained asphalt shingle roof in Grand Rapids realistically lasts <strong>25–30 years</strong>. The same roof without maintenance often needs replacement in <strong>15–20 years</strong>. The difference is compound: small failures get addressed before they cause secondary damage to decking and structure, and the overall system stays in better condition with each passing season. The math is straightforward — $400/year in maintenance vs. $15,000 premature replacement.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What's the real cost comparison between maintenance and ignoring it?</h3>
        <p>A typical annual maintenance visit from Kamps runs <strong>$200–$600</strong>. Common reactive repairs from deferred maintenance — failed valley flashing causing deck damage, a clogged gutter that lifted shingles during ice season, a cracked pipe boot that let water in for two winters — run <strong>$1,500–$4,000 each</strong>. A premature replacement triggered by compounded neglect adds up to <strong>$12,000–$18,000</strong>. The ROI on proactive maintenance is not subtle.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 ─────────────────────────────────── -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">The Best Time to Maintain Your Roof Is Before It Needs Repair</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">West Michigan winters are hard on roofs. Don't wait for a leak to find out what's happening up there. Schedule annual maintenance with Kamps and let Daniel keep a documented eye on your roof all year long.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule Roof Maintenance</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
