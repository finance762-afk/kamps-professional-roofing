<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Siding Repair Grand Rapids MI | Kamps Roofing';
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
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482125034_122146001564552346_2600838399371235041_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Siding Repair Grand Rapids, MI</h1>
      <p class="hero-subtitle">Cracked panels, hail dents, heat-warped sections, and storm damage repaired with color-matching experience and honest advice on whether repair or full replacement is the better call for your home.</p>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          Insurance Documentation
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
    <span>Storm Damage Specialists</span><span>★★★★★</span><span>Insurance Documentation</span><span>Color Matching Experience</span><span>Grand Rapids, MI</span><span>Honest Repair vs. Replace Advice</span><span>Licensed &amp; Insured</span><span>★★★★★</span>
    <span>Storm Damage Specialists</span><span>★★★★★</span><span>Insurance Documentation</span><span>Color Matching Experience</span><span>Grand Rapids, MI</span><span>Honest Repair vs. Replace Advice</span><span>Licensed &amp; Insured</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align:left; margin-bottom: 2rem;">
          <span class="eyebrow">Siding Services</span>
          <h2>Fix Damaged Siding Before Water Gets Behind It — West Michigan Storms Don't Wait</h2>
        </div>
        <p>Most siding panel repairs in Grand Rapids run <strong>$200–$1,200</strong> for isolated damage. Larger areas requiring section replacement can run higher depending on square footage and the accessibility of the affected wall. Kamps provides written quotes before any work begins — storm damage estimates are documented in detail for insurance claim purposes when applicable.</p>
        <p>West Michigan generates significant hail activity between April and September, with Grand Rapids' position relative to Lake Michigan contributing to storm development. Hail damage to vinyl siding presents as circular impact marks, cracks at impact points, and occasionally punched-through panels on severe events. This type of damage is often insurance-covered — Kamps has experience documenting hail damage in a format insurers accept and can assist with the claims process.</p>
        <p>Heat warping is a different problem entirely. South and west elevations in Grand Rapids can see surface temperatures above 160°F on summer afternoons, particularly where a light-colored masonry wall, concrete driveway, or vehicle reflects heat back onto the siding. Low-grade vinyl panels installed too tight — without proper expansion gaps — buckle and warp under these conditions. Repairing warped panels requires understanding why the warping occurred; replacing damaged panels without correcting the cause (usually improper gap spacing during the original install) means the problem returns within a few seasons.</p>
        <p>Wind damage from severe weather events typically presents as panels partially separated from the wall, J-channel trim pulled loose at corners, or full panel sections blown off. These failures often expose the substrate and house wrap to direct weather — Kamps prioritizes these calls since every rain event that hits an exposed wall section increases the risk of structural moisture damage.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914928-482125034_122146001564552346_2600838399371235041_n.jpg"
            alt="siding repair work on a Grand Rapids Michigan home after storm damage"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">$200</div>
          <div class="label">Repairs Starting At</div>
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
      <h2>Siding Repairs That Address the Damage and Its Cause</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="13.5" cy="6.5" r="2.5"></circle><circle cx="17.5" cy="10.5" r="2.5"></circle><circle cx="8.5" cy="7.5" r="2.5"></circle><circle cx="6.5" cy="12.5" r="2.5"></circle><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.47-1.125a.381.381 0 01-.086-.21c0-.41.333-.744.744-.744H16c3.314 0 6-2.686 6-6 0-4.97-4.686-9-10-9z"></path></svg>
        </div>
        <div>
          <h3>Color-Matching Experience</h3>
          <p>Patching siding invisibly requires knowing how installed panels have weathered and sourcing replacement material that accounts for that change. Kamps has matched siding profiles and colors in Grand Rapids for decades — the repair won't call attention to itself from the street.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        </div>
        <div>
          <h3>Honest Assessment: Repair vs. Replacement</h3>
          <p>Siding that's damaged in one area but failing system-wide is a repair-and-repeat situation that costs more than replacement over time. Kamps will tell you directly when the math doesn't favor repair — and give you a replacement quote so you can make an informed decision.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
        </div>
        <div>
          <h3>Insurance Documentation for Storm Damage</h3>
          <p>Hail and wind damage to siding is regularly covered by homeowner's insurance. Kamps documents storm damage with the detail insurers require — photo evidence, scope of damage, and a written repair estimate in the format needed to support your claim.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        </div>
        <div>
          <h3>Fast Turnaround on Exposed Wall Sections</h3>
          <p>Every day a panel is missing or cracked, your wall assembly is exposed to West Michigan weather. Kamps prioritizes repairs where substrate exposure is occurring — a temporary patch to stop water intrusion can often be applied on the same visit as the estimate.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — mid-page CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Storm Damage on Your Siding? Get a Documented Estimate Before You Call Your Insurer.</h2>
    <p>Kamps documents hail and wind damage in the format insurance companies need. A free estimate from Kamps gives you the information your adjuster will ask for.</p>
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

<!-- FAQ SECTION -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Common Questions</span>
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
        <p>After a hail event, look for <strong>circular impact marks or cracks</strong> on siding panels — the same storm that damages your siding usually leaves marks on aluminum window screens and gutters, which is good supporting evidence for an insurance claim. Wind damage is more visible: separated panels, pulled J-channel at corners, or completely missing sections. If you saw a significant storm come through Grand Rapids and have newer siding with any unexplained marks, a free inspection from Kamps will tell you definitively what you have.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Will patched siding match perfectly?</h3>
        <p>New panels will match the original color closely but may not be identical to siding that has weathered in place for years. The degree of visible difference depends on how long the existing siding has been on the home and the color — lighter colors show less variation than darker tones. Kamps sources the closest available match and, for significant repairs, can sometimes use panels from less-visible wall sections to replace high-visibility damage, moving new material to the inconspicuous location where a slight difference won't be noticed from the street.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">Storm Damage or Cracked Panels — Don't Let Exposed Siding Become a Water Damage Problem</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Every rain event that hits damaged siding risks moisture getting behind the wall. Get a free estimate and documentation from Kamps before the next storm hits.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
