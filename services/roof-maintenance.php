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
) . ',' . json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type'          => 'Question',
            'name'           => 'How often should I have my roof maintained in West Michigan?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Annually is the recommendation for most Grand Rapids homes, with bi-annual visits (before and after winter) for roofs over 15 years old or those with known vulnerable areas like low-slope sections, large overhanging trees, or previous flashing repairs. Michigan\'s freeze-thaw cycles are harder on roofing systems than most climates.'],
        ],
        [
            '@type'          => 'Question',
            'name'           => 'What does roof maintenance include?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A standard Kamps maintenance visit covers debris removal from valleys, gutters, and around chimneys; resealing of exposed flashings, pipe boots, and fasteners; visual assessment of all shingles for cracking, lifting, or granule loss; gutter attachment and drainage check; soffit and fascia condition; and a written log noting current condition, work performed, and anything to watch going forward.'],
        ],
        [
            '@type'          => 'Question',
            'name'           => 'Can regular maintenance actually prevent roof replacement?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes — significantly. A well-maintained asphalt shingle roof in Grand Rapids realistically lasts 25–30 years. The same roof without maintenance often needs replacement in 15–20 years. The math is straightforward — $400/year in maintenance vs. $15,000 premature replacement.'],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . ']';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* Standard service page styles */
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
<section class="hero hero-inner" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26__1_.webp');">
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
          <span class="eyebrow">Preventive Care</span>
          <h2>The $400 Visit That Routinely Prevents $4,000 Repairs</h2>
        </div>
        <p>Roof maintenance visits from Kamps typically run <strong>$200–$600</strong> depending on home size and what's found. That range covers debris removal from valleys and gutters, flashing reseal at all penetrations and joints, minor shingle repairs, gutter attachment checks, and a full condition walkthrough with notes. Kamps Professional Roofing is a licensed and insured roofing company based in Grand Rapids, MI, providing preventive roof care that protects your home from the predictable consequences of skipped maintenance — failed flashings that develop into active leaks, clogged valleys that back up under shingles during heavy rain, and loose fasteners that become missing shingles after the first significant storm.</p>
        <p>West Michigan's climate makes maintenance especially important. Ice dams are common on Grand Rapids homes with lower-pitched sections or inadequate attic ventilation — they form when heat escapes through the roof deck and melts snow that refreezes at the eaves. Regular maintenance allows Kamps to identify ventilation problems and vulnerable zones before ice season starts. Spring visits after the thaw check for any damage the winter caused before it has a chance to worsen through the summer.</p>
        <p>Every maintenance visit from Kamps includes a written log — what was found, what was done, and what to watch for. Over time, that log becomes a useful history of your roof's performance — helpful when selling the home, filing an insurance claim, or planning a future replacement timeline. A well-maintained asphalt shingle roof in Grand Rapids realistically lasts 25–30 years. The same roof without maintenance often needs replacement in 15–20 years.</p>
        <p>Daniel Kamps personally performs every maintenance visit — the same roofer with 30+ years of Kent County experience who would handle your replacement if and when that day comes. That continuity means nothing gets lost in translation between crews, and early warning signs get caught by someone who has seen thousands of West Michigan roofs age.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture>
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914925-2023-05-26__1_.webp" alt="roof maintenance being performed on a west michigan home near grand rapids" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
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
      <h2>Maintenance That Actually Extends Your Roof — Not Just Checks a Box</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line></svg></div>
        <div><h3>Written Maintenance Log Builds a Documented History</h3><p>Every visit is logged — conditions found, work performed, items to monitor. That documentation has real value when selling a home, supporting an insurance claim, or planning when replacement makes financial sense.</p></div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></div>
        <div><h3>Small Issues Caught Before They Become Expensive Repairs</h3><p>A lifted flashing resealed during a maintenance visit costs $50 in materials and time. Left for two winters, the same flashing can allow water to rot the decking beneath it — turning a minor item into a $1,500 repair minimum.</p></div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 16.1A5 5 0 0 1 5.5 8h.5a7 7 0 1 1 14 0h.5a5 5 0 0 1 1.9 8.1"></path><path d="M12 12v9"></path></svg></div>
        <div><h3>Michigan-Specific Seasonal Focus</h3><p>Spring maintenance catches winter damage before it compounds. Fall maintenance prepares flashings, valleys, and gutters for the ice and snow load ahead. West Michigan's climate has distinct seasonal stress patterns — and Kamps schedules maintenance accordingly.</p></div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
        <div><h3>30 Years of West Michigan Roofs — Daniel Knows What to Look For</h3><p>After 30+ years maintaining and replacing roofs in Grand Rapids, Daniel recognizes early failure patterns that a less-experienced eye would miss. That knowledge is what separates a thorough maintenance visit from a superficial inspection with a caulk gun.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
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

<!-- Process Steps -->
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

<!-- FAQ -->
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
        <p>Yes — significantly. A well-maintained asphalt shingle roof in Grand Rapids realistically lasts <strong>25–30 years</strong>. The same roof without maintenance often needs replacement in <strong>15–20 years</strong>. The difference is compound: small failures get addressed before they cause secondary damage to decking and structure. The math is straightforward — $400/year in maintenance vs. $15,000 premature replacement.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section class="closing-cta">
  <div class="container">
    <h2>The Best Time to Maintain Your Roof Is Before It Needs Repair</h2>
    <p>West Michigan winters are hard on roofs. Don't wait for a leak to find out what's happening up there. Schedule annual maintenance with Kamps and let Daniel keep a documented eye on your roof all year long.</p>
    <div class="btn-row">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule Roof Maintenance</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
