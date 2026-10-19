<?php
/**
 * Himalayan Food and Feed - Why Choose Us Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

$pageSeo = [
    'title' => 'Why Choose Us | Verified B2B Strengths & Commercial Transparency',
    'description' => 'Discover six practical reasons food and feed ingredient buyers choose Himalayan Food and Feed: Verifiable quality, supply continuity, transparent pricing, and dual European-Asian trade hubs.',
    'canonical' => url('why-choose-us.php'),
    'og_image' => url('assets/images/services/sourcing-trade.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Why Choose Us', 'url' => url('why-choose-us.php')]
    ]
];
$currentPageKey = 'why';

require __DIR__ . '/includes/header.php';
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="absolute inset-0 z-0">
    <img src="<?= asset('assets/images/services/sourcing-trade.webp') ?>" 
         alt="International trade partner negotiation and commercial agreement" 
         width="800" height="533"
         class="w-full h-full object-cover opacity-20">
    <div class="absolute inset-0 bg-brand-navy/90"></div>
  </div>

  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>Verified Commercial Advantages</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        Why Trade With Himalayan
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        Six practical reasons procurement managers, feed mills, and food wholesalers rely on our sourcing desk for their critical raw material supply.
      </p>
    </div>
  </div>
</div>

<!-- 6 Core Reasons Section -->
<section class="py-16 md:py-24 bg-white">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
        Commercial Principles
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        Built on Measurable Value, Not Empty Claims
      </h2>
      <p class="lead-text mt-3">
        We understand the risks buyers face in commodity markets: unpredictable parameter variations, delayed shipping documents, and unreturned emails. Here is how we do business differently.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-green transition-all shadow-sm flex flex-col">
        <div class="w-12 h-12 rounded-xl bg-brand-navy text-white flex items-center justify-center text-xl mb-6 shadow">
          <i class="fa-solid fa-microscope text-brand-orange"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-3 font-heading">1. Quality You Can Verify</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          We don't ask you to take quality on faith. Every commercial consignment is backed by batch-specific Certificates of Analysis (COA) from accredited laboratories, verifying parameters like crude protein, moisture, ash, and heavy metal screening.
        </p>
        <div class="text-xs font-bold text-brand-green font-heading uppercase tracking-wider">
          <i class="fa-solid fa-check mr-1"></i> Objective Lab Verification
        </div>
      </div>

      <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-green transition-all shadow-sm flex flex-col">
        <div class="w-12 h-12 rounded-xl bg-brand-navy text-white flex items-center justify-center text-xl mb-6 shadow">
          <i class="fa-solid fa-shield-halved text-brand-green"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-3 font-heading">2. Supply That Holds</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          We qualify more than one vetted processing facility for each core commodity line. If one regional plant experiences seasonal harvest constraints or maintenance downtime, alternative approved sources can be mobilized.
        </p>
        <div class="text-xs font-bold text-brand-green font-heading uppercase tracking-wider">
          <i class="fa-solid fa-check mr-1"></i> Supply Chain Redundancy
        </div>
      </div>

      <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-green transition-all shadow-sm flex flex-col">
        <div class="w-12 h-12 rounded-xl bg-brand-navy text-white flex items-center justify-center text-xl mb-6 shadow">
          <i class="fa-solid fa-receipt text-brand-orange"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-3 font-heading">3. Transparent Pricing</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          Our quotes clearly detail what is included: raw material cost, bag packaging specification, ocean freight rate, insurance, and export documentation. No surprise surcharges or ambiguous fees.
        </p>
        <div class="text-xs font-bold text-brand-green font-heading uppercase tracking-wider">
          <i class="fa-solid fa-check mr-1"></i> All-Inclusive Quotations
        </div>
      </div>

      <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-green transition-all shadow-sm flex flex-col">
        <div class="w-12 h-12 rounded-xl bg-brand-navy text-white flex items-center justify-center text-xl mb-6 shadow">
          <i class="fa-solid fa-globe text-brand-green"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-3 font-heading">4. Dual Trade Hub Reach</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          With our European desk in Denmark (Saven 2630) and our Asian commercial presence in Singapore, we operate across time zones. You deal with one accountable team from initial quote to port discharge.
        </p>
        <div class="text-xs font-bold text-brand-green font-heading uppercase tracking-wider">
          <i class="fa-solid fa-check mr-1"></i> Europe &amp; Asia Presence
        </div>
      </div>

      <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-green transition-all shadow-sm flex flex-col">
        <div class="w-12 h-12 rounded-xl bg-brand-navy text-white flex items-center justify-center text-xl mb-6 shadow">
          <i class="fa-solid fa-cubes text-brand-orange"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-3 font-heading">5. Flexible Order Sizes</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          We understand that testing a new formulation requires trial quantities before committing to quarterly contracts. We accommodate single-container test orders (FCL) as well as continuous multi-month supply programs.
        </p>
        <div class="text-xs font-bold text-brand-green font-heading uppercase tracking-wider">
          <i class="fa-solid fa-check mr-1"></i> Trial Lots &amp; FCL Shipments
        </div>
      </div>

      <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-green transition-all shadow-sm flex flex-col">
        <div class="w-12 h-12 rounded-xl bg-brand-navy text-white flex items-center justify-center text-xl mb-6 shadow">
          <i class="fa-solid fa-comments text-brand-green"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-3 font-heading">6. Fast, Personal Communication</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          No generic ticket systems or unresponsive call centers. Connect directly with Director Kumar Dhungel and our commercial team via email or WhatsApp, with guaranteed responses within one business day.
        </p>
        <div class="text-xs font-bold text-brand-green font-heading uppercase tracking-wider">
          <i class="fa-solid fa-check mr-1"></i> 1-Business-Day Response Time
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
