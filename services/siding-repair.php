<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Siding Repair Grand Rapids MI | Kamps Professional Roofing';
$pageDescription = 'Siding repair in Grand Rapids, MI. Hail damage, cracked panels, warped sections, and wind damage repaired. $200–$1,200 for most repairs. Insurance documentation available. Free estimates.';
$pageKeywords    = 'siding repair grand rapids, fix home siding mi, damaged siding repair grand rapids, storm damage siding repair';
$canonicalUrl    = SITE_URL . '/services/siding-repair';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482125034_122146001564552346_2600838399371235041_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482125034_122146001564552346_2600838399371235041_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',          'url' => '/'],
    ['name' => 'Services',      'url' => '/services'],
    ['name' => 'Siding Repair', 'url' => '/services/siding-repair'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Siding Repair',
    'Siding repair in Grand Rapids, MI. Kamps Professional Roofing repairs cracked, hail-damaged, warped, and wind-damaged siding panels with color-matching experience and honest assessment on whether repair or replacement is the better investment.',
    '/services/siding-repair'
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
<section class="hero hero-inner" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482125034_122146001564552346_2600838399371235041_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Siding Repair Grand Rapids, MI</h1>
      <p class="hero-subtitle">Cracked panels, hail dents, heat-warped sections, and storm damage repaired with color-matching experience and honest advice on whether repair or full replacement is the better call.</p>
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
          <span class="eyebrow">Siding Services</span>
          <h2>Fix Damaged Siding Before Water Gets Behind It — West Michigan Storms Don't Wait</h2>
        </div>
        <p>Most siding panel repairs in Grand Rapids run <strong>$200–$1,200</strong> for isolated damage. Larger areas requiring section replacement can run higher depending on square footage and the accessibility of the affected wall. Kamps provides written quotes before any work begins — storm damage estimates are documented in detail for insurance claim purposes when applicable.</p>
        <p>West Michigan generates significant hail activity between April and September, with Grand Rapids' position relative to Lake Michigan contributing to storm development. Hail damage to vinyl siding presents as circular impact marks, cracks at impact points, and occasionally punched-through panels on severe events. This type of damage is often insurance-covered — Kamps documents hail damage in a format insurers accept and can assist with the claims process. Heat warping is a different problem: south and west elevations can see surface temperatures above 160 degrees on summer afternoons, and low-grade vinyl panels installed too tight buckle and warp under these conditions. Repairing warped panels requires understanding why the warping occurred — replacing without correcting the cause means the problem returns.</p>
        <p>Wind damage from severe weather typically presents as panels partially separated from the wall, J-channel trim pulled loose at corners, or full panel sections blown off. These failures expose the substrate and house wrap to direct weather — Kamps prioritizes these calls since every rain event that hits an exposed wall section increases the risk of structural moisture damage. A temporary patch to stop water intrusion can often be applied on the same visit as the estimate, buying time until matching material arrives for the permanent repair.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="about-image">
        <picture><img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482125034_122146001564552346_2600838399371235041_n.jpg" alt="siding repair work on a Grand Rapids Michigan home after storm damage" width="600" height="450" loading="lazy" style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;"></picture>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Kamps -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Why Kamps</span>
      <h2>Siding Repairs That Address the Damage and Its Cause</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <div>
          <h3>Color-Matching Experience</h3>
          <p>Patching siding invisibly requires knowing how installed panels have weathered and sourcing replacement material that accounts for that change. Kamps has matched siding profiles and colors in Grand Rapids for decades — the repair won't call attention to itself from the street.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div>
          <h3>Honest Assessment: Repair vs. Replacement</h3>
          <p>Siding that's damaged in one area but failing system-wide is a repair-and-repeat situation that costs more than replacement over time. Kamps will tell you directly when the math doesn't favor repair — and give you a replacement quote so you can make an informed decision.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>Insurance Documentation for Storm Damage</h3>
          <p>Hail and wind damage to siding is regularly covered by homeowner's insurance. Kamps documents storm damage with the detail insurers require — photo evidence, scope of damage, and a written repair estimate in the format needed to support your claim.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <div>
          <h3>Fast Turnaround on Exposed Wall Sections</h3>
          <p>Every day a panel is missing or cracked, your wall assembly is exposed to West Michigan weather. Kamps prioritizes repairs where substrate exposure is occurring — a temporary patch to stop water intrusion can often be applied on the same visit as the estimate.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-page CTA — CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Storm Damage on Your Siding? Get a Documented Estimate Before You Call Your Insurer</h2>
    <p>Kamps documents hail and wind damage in the format insurance companies need. A free estimate from Kamps gives you the information your adjuster will ask for.</p>
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
      <h2>How Kamps Handles Siding Repairs in Grand Rapids</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Document the Damage</h3>
        <p>Full inspection of affected areas with photos and written damage scope. For storm events, documentation is structured to support insurance claims. Written estimate provided before any work begins.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Source Matching Material</h3>
        <p>Kamps sources replacement panels in the correct profile, color, and texture to match your existing siding. Age and weathering are factored into material selection so the repair blends rather than stands out.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Remove Damaged Panels</h3>
        <p>Damaged panels and trim removed carefully to avoid disturbing adjacent undamaged sections. Substrate and house wrap inspected during removal — any water damage found is documented and addressed before new panels go up.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Install and Match Profile</h3>
        <p>Replacement panels installed to manufacturer specs with proper expansion gaps and fastening pattern. Trim, corners, and J-channel restored to match original. Site cleaned at completion.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Frequently Asked Questions</span>
      <h2>Questions About Siding Repair in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>Can damaged siding be repaired without replacing everything?</h3>
        <p>Yes — isolated panel damage, hail impacts on a specific wall, and localized cracking can all be repaired by replacing only the affected sections. The key variable is whether matching material is available for your profile. Siding profiles that have been discontinued by the manufacturer make perfect matching impossible, which sometimes makes full-wall or full-home replacement the more practical solution aesthetically. Kamps will source match options before recommending replacement.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How much does siding repair cost in Grand Rapids?</h3>
        <p>Most isolated panel repairs run <strong>$200–$1,200</strong> depending on the number of panels affected, wall height, and whether any trim or corner pieces need replacement. Larger damage areas requiring full wall section replacement can run higher. Storm damage claims through insurance typically cover repair to damaged areas at replacement cost — Kamps provides the documentation insurers require to process these claims.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How do I know if my siding is storm damaged?</h3>
        <p>After a hail event, look for <strong>circular impact marks or cracks</strong> on siding panels — the same storm that damages your siding usually leaves marks on aluminum window screens and gutters, which is good supporting evidence for an insurance claim. Wind damage is more visible: separated panels, pulled J-channel at corners, or completely missing sections. If you saw a significant storm come through Grand Rapids and have any unexplained marks, a free inspection from Kamps will tell you definitively what you have.</p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA — CTA #3 -->
<section class="closing-cta">
  <div class="container">
    <h2>Don't Let Damaged Siding Become a Water Damage Problem</h2>
    <p>Every rain event that hits cracked or missing siding risks moisture getting behind the wall. Get a free estimate and insurance documentation from Kamps before the next storm hits.</p>
    <div class="btn-row">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
