<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Gutter Cleaning Grand Rapids MI | Kamps Professional Roofing';
$pageDescription = 'Professional gutter cleaning in Grand Rapids, MI. Hand-clearing, downspout flush, and damage report. $100–$300 for most homes. Spring and fall scheduling available.';
$pageKeywords    = 'gutter cleaning grand rapids, gutter cleaning services mi, professional gutter cleaning grand rapids, seasonal gutter maintenance';
$canonicalUrl    = SITE_URL . '/services/gutter-cleaning';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-481269628_122142156398552346_3436541066417212894_n.jpg';
$currentPage     = 'services';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-481269628_122142156398552346_3436541066417212894_n.jpg';

$breadcrumbs = [
    ['name' => 'Home',            'url' => '/'],
    ['name' => 'Services',        'url' => '/services'],
    ['name' => 'Gutter Cleaning', 'url' => '/services/gutter-cleaning'],
];

$schemaMarkup = '[' . breadcrumb_schema($breadcrumbs) . ',' . service_schema(
    'Gutter Cleaning',
    'Professional gutter cleaning in Grand Rapids, MI. Kamps Professional Roofing hand-clears all debris, flushes downspouts, and provides a written report of any damage found. Twice-yearly scheduling for West Michigan seasonal maintenance.',
    '/services/gutter-cleaning'
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
<section class="inner-hero" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-481269628_122142156398552346_3436541066417212894_n.jpg');">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <span class="hero-eyebrow">Kamps Professional Roofing</span>
      <h1>Gutter Cleaning Grand Rapids, MI</h1>
      <p class="hero-subtitle">Clogged gutters rot fascia and flood basements. Kamps clears debris by hand, flushes every downspout, and reports any damage found — $100–$300 for most homes.</p>
      <div class="hero-buttons">
        <a href="/contact" class="btn btn-accent btn-lg">Schedule a Cleaning</a>
        <?php echo phone_link('btn btn-outline-white btn-lg', 'Call Now'); ?>
      </div>
      <div class="hero-trust">
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Downspout Flush Included
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
          Written Damage Report
        </span>
      </div>
    </div>
  </div>
</section>

<!-- TICKER STRIP -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>Hand-Cleared — Not Just Blown</span><span>★★★★★</span><span>Downspout Flush Included</span><span>Written Damage Report</span><span>Grand Rapids, MI</span><span>Spring &amp; Fall Scheduling</span><span>Licensed &amp; Insured</span><span>★★★★★</span>
    <span>Hand-Cleared — Not Just Blown</span><span>★★★★★</span><span>Downspout Flush Included</span><span>Written Damage Report</span><span>Grand Rapids, MI</span><span>Spring &amp; Fall Scheduling</span><span>Licensed &amp; Insured</span><span>★★★★★</span>
  </div>
</div>

<!-- SERVICE DETAIL -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="about-split" data-animate>
      <div class="about-content">
        <div class="section-header" style="text-align:left; margin-bottom: 2rem;">
          <span class="eyebrow">Gutter Services</span>
          <h2>Michigan Maples, Spring Seeds, and Fall Leaves — Grand Rapids Gutters Clog Fast</h2>
        </div>
        <p>Professional gutter cleaning on most Grand Rapids homes runs <strong>$100–$300</strong>. That range reflects differences in home height (single vs. two-story), linear footage of gutter, and debris load — a maple-surrounded bungalow in Eastown versus a newer two-story in Rockford are very different cleaning jobs. Kamps provides written quotes before any cleaning begins so you know the cost upfront.</p>
        <p>Grand Rapids has some of the highest silver maple density of any Midwest city. These trees produce seed pods in spring that compact inside gutters into a dense, wet mat that's more effective at blocking water flow than fall leaves. West Michigan homeowners who only clean gutters in the fall are missing the spring clog that forms after maple seed drop in May — and that's the one that causes fascia rot by trapping moisture against wood for the entire summer.</p>
        <p>Clogged gutters have a chain reaction of consequences that go far beyond overflow during a rainstorm. Water backing up against the fascia leads to wood rot that eventually requires fascia board replacement — a preventable expense. Overflow near the foundation causes basement water intrusion, a leading problem in Grand Rapids' older neighborhoods like Heritage Hill and Creston. In winter, debris-packed gutters prevent drainage and contribute to ice dam formation along the eaves.</p>
        <p>Kamps clears gutters by hand — not just with a leaf blower, which pushes debris to the corners and downspout connections without removing it. Every downspout is flushed with water and verified for flow. At the end of every cleaning, Kamps provides a written summary of any damage observed: loose hangers, separated seams, holes, or signs of fascia rot. You'll have a clear picture of your gutter system's condition without paying for a separate inspection.</p>
        <p style="font-size: 0.8rem; color: var(--color-gray);">Last Updated: April 2026</p>
      </div>
      <div class="about-image">
        <picture>
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/kamps-professional-roofing/photos/1776176914927-481269628_122142156398552346_3436541066417212894_n.jpg"
            alt="professional gutter cleaning service on a Grand Rapids Michigan home"
            width="600"
            height="450"
            loading="lazy"
            style="border-radius: var(--radius-lg); width: 100%; object-fit: cover;">
        </picture>
        <div class="stat-overlay">
          <div class="big-number">2x</div>
          <div class="label">Per Year Recommended</div>
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
      <h2>More Than a Blower — Cleaning That Actually Clears Your Gutters</h2>
    </div>
    <div class="why-grid">
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
        </div>
        <div>
          <h3>Hand-Clearing, Not Just Blowing</h3>
          <p>Leaf blowers scatter debris without clearing corner pockets and downspout inlets — the exact points where clogs form and water backs up. Kamps hand-clears all debris including the compacted maple seed mats that accumulate in Grand Rapids gutters each spring.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10z"></path><polyline points="12 6 12 12 8 14"></polyline></svg>
        </div>
        <div>
          <h3>Downspout Flush Included in Every Service</h3>
          <p>Gutter cleaning without flushing the downspouts is incomplete. A clean gutter trough with a blocked downspout still causes overflow. Kamps verifies water flows freely through every downspout and identifies underground discharge blockages where they exist.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        </div>
        <div>
          <h3>Written Damage Report After Every Cleaning</h3>
          <p>Every Kamps cleaning ends with a written summary of what was found — loose hangers, leaking seams, holes, or signs of fascia rot. You'll have documentation of your gutter system's current condition, not just a clean bill of health you have to take on faith.</p>
        </div>
      </div>
      <div class="why-item" data-animate>
        <div class="why-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        </div>
        <div>
          <h3>Michigan Seasonal Timing — Spring and Fall</h3>
          <p>Kamps schedules gutter cleanings around Grand Rapids' two critical windows: late May after maple seed drop, and late November after peak leaf fall. Skip either one and you're leaving your gutters clogged during the season most likely to cause damage.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER — mid-page CTA #2 -->
<div class="cta-banner">
  <div class="container">
    <h2>Schedule Your Spring or Fall Gutter Cleaning — Spots Fill Quickly</h2>
    <p>Grand Rapids' maple season and fall leaf drop fill Kamps' gutter cleaning schedule fast. Call or reach out now to lock in your seasonal cleaning date before the window closes.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule a Cleaning</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</div>

<!-- PROCESS STEPS -->
<section style="background: var(--color-light); padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">How It Works</span>
      <h2>What Kamps Does During a Gutter Cleaning in Grand Rapids</h2>
    </div>
    <div class="process-grid">
      <div class="process-step" data-animate>
        <div class="process-number">1</div>
        <h3>Hand-Clear All Debris</h3>
        <p>Every section of gutter is hand-cleared from end to end. Leaves, seed pods, shingle grit, and compacted debris are removed — not blown toward the downspout inlet where it will re-clog immediately.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">2</div>
        <h3>Flush With Water</h3>
        <p>After hand-clearing, gutters are flushed with water to confirm clear flow and identify any remaining blockages. This step also reveals slow-draining areas that indicate the gutter slope needs adjustment.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">3</div>
        <h3>Check Downspout Flow</h3>
        <p>Each downspout is flushed individually and observed for full, unrestricted flow. Underground connections are checked where accessible. Blockages inside downspout pipes are cleared or documented for repair.</p>
      </div>
      <div class="process-step" data-animate>
        <div class="process-number">4</div>
        <h3>Report Any Damage Found</h3>
        <p>Kamps documents any loose hangers, separating seams, holes, or fascia rot observed during the cleaning. You receive a written summary so you can track your gutter system's condition over time and address issues before they worsen.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="eyebrow">Common Questions</span>
      <h2>Questions About Gutter Cleaning in Grand Rapids</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item" data-animate>
        <h3>How often should I clean gutters in Grand Rapids?</h3>
        <p>Grand Rapids homeowners should clean gutters <strong>twice a year</strong>: once in late May after silver maple seed drop ends, and once in late November after peak leaf fall. Homes with heavy tree coverage — particularly maples, oaks, or large elms overhanging the roof — may benefit from a third cleaning in August when smaller debris accumulates. Skipping the spring cleaning is the most common mistake in this area because the seed pod mats that form in May trap moisture against the fascia for months.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>How much does professional gutter cleaning cost in Grand Rapids?</h3>
        <p>Most residential cleanings in Kent County run <strong>$100–$300</strong>. Single-story homes with moderate debris are at the low end; two-story homes with heavy tree coverage requiring more ladder repositioning and debris volume fall toward the upper end. Kamps provides a written quote before starting so you know the exact cost. The cleaning includes hand-clearing, downspout flush, and a written report — not just a quick pass with a blower.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>What happens if I don't clean my gutters?</h3>
        <p>Clogged gutters trigger several cascading problems in Grand Rapids homes. Overflow during heavy rain erodes foundation plantings and directs water toward basement walls. Standing debris stays wet year-round, rotting the fascia boards behind the gutter. In winter, debris blocks drainage and contributes to ice dam formation at the eaves. Over 3–5 years of neglect, the combined damage to fascia, foundation, and the gutter system itself typically costs far more than consistent cleaning would have.</p>
      </div>
      <div class="faq-item" data-animate>
        <h3>Can gutter guards eliminate the need for cleaning?</h3>
        <p>High-quality micro-mesh guards significantly reduce cleaning frequency — from twice yearly to every 2–3 years for most homes. They don't eliminate maintenance entirely; shingle grit and small debris still accumulate on the mesh surface over time and need to be cleared. In Grand Rapids' heavy maple-seed environment, reverse-curve style guards (the ones most heavily advertised) actually perform poorly and can require more maintenance than no guards at all. Kamps only recommends micro-mesh styles if you're looking at guards as an add-on.</p>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA — CTA #3 -->
<section style="background: var(--color-dark); padding: 5rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="color: white; margin-bottom: 1rem;">Clogged Gutters Are the Leading Cause of Preventable Fascia Rot in Grand Rapids</h2>
    <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Schedule your spring or fall cleaning with Kamps before the seasonal slots fill. A $150 cleaning is significantly cheaper than the fascia repair it prevents.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">Schedule a Cleaning</a>
      <?php echo phone_link('btn btn-outline-white btn-lg'); ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
