<?php
/**
 * Himalayan Food and Feed - Markets & Global Trade Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

$pageSeo = [
    'title' => 'Global Markets & Trade Routes | Europe & Asia Sourcing Corridors',
    'description' => 'Explore the international trading presence of Himalayan Food and Feed. Operating commercial desks in Denmark and Singapore to coordinate commodity trade across Europe and Asia.',
    'canonical' => url('markets.php'),
    'og_image' => url('assets/images/company/singapore-trade.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Markets & Global Trade', 'url' => url('markets.php')]
    ]
];
$currentPageKey = 'markets';

require __DIR__ . '/includes/header.php';
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="absolute inset-0 z-0">
    <img src="<?= asset('assets/images/company/singapore-trade.webp') ?>" 
         alt="International shipping hub and maritime trade routes" 
         width="800" height="533"
         class="w-full h-full object-cover opacity-20">
    <div class="absolute inset-0 bg-brand-navy/90"></div>
  </div>

  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>Cross-Continental Trade Corridors</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        Markets &amp; Global Trade Presence
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        With commercial desks established in Denmark and Singapore, Himalayan Food and Feed connects agricultural producers with industrial buyers across major European and Asian shipping routes.
      </p>
    </div>
  </div>
</div>

<!-- Dual Hub Presence Section -->
<section class="py-16 md:py-24 bg-white">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
        Operational Desks
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        Dual Commercial Presence: Denmark &amp; Singapore
      </h2>
      <p class="lead-text mt-3">
        Operating across European and Asian time zones allows us to coordinate procurement schedules, trade financing, and regulatory import clearances seamlessly.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Hub 1: Denmark -->
      <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-green transition-all shadow-sm flex flex-col">
        <div class="flex items-center justify-between mb-6">
          <span class="w-12 h-12 rounded-xl bg-brand-navy text-white flex items-center justify-center text-xl shadow">
            <i class="fa-solid fa-landmark-flag text-brand-orange"></i>
          </span>
          <span class="px-3 py-1 rounded-full bg-blue-100 text-brand-navy text-xs font-bold uppercase font-heading">
            European Hub
          </span>
        </div>
        <h3 class="text-2xl font-extrabold text-brand-navy font-heading mb-2">Denmark Commercial Desk</h3>
        <p class="text-slate-500 text-xs mb-4 font-semibold"><?= CLIENT_OFFICE_DENMARK ?></p>
        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
          Our Denmark office serves as the commercial gateway for European trading operations, coordinating veterinary-inspected animal proteins, European plant proteins, and Nordic feed ingredients.
        </p>
        <div class="pt-4 border-t border-slate-200 text-xs space-y-2 text-slate-600">
          <div><strong class="text-slate-900 font-heading">Direct Contact:</strong> <?= CLIENT_PHONE ?></div>
          <div><strong class="text-slate-900 font-heading">Desk Lead:</strong> Kumar Dhungel, Director</div>
          <div><strong class="text-slate-900 font-heading">Core Flows:</strong> EU origin proteins, feed phosphates, specialized additives.</div>
        </div>
      </div>

      <!-- Hub 2: Singapore -->
      <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-green transition-all shadow-sm flex flex-col">
        <div class="flex items-center justify-between mb-6">
          <span class="w-12 h-12 rounded-xl bg-brand-navy text-white flex items-center justify-center text-xl shadow">
            <i class="fa-solid fa-ship text-brand-green"></i>
          </span>
          <span class="px-3 py-1 rounded-full bg-emerald-100 text-brand-green text-xs font-bold uppercase font-heading">
            Asian Hub
          </span>
        </div>
        <h3 class="text-2xl font-extrabold text-brand-navy font-heading mb-2">Singapore Commercial Presence</h3>
        <p class="text-slate-500 text-xs mb-4 font-semibold">Asian Trade Corridor</p>
        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
          Singapore anchors our Asian commodity network, facilitating trade finance, maritime documentation, and supply coordination for regional feed mills, aquaculture enterprises, and food wholesalers.
        </p>
        <div class="pt-4 border-t border-slate-200 text-xs space-y-2 text-slate-600">
          <div><strong class="text-slate-900 font-heading">Time Zone Advantage:</strong> Rapid regional alignment across Asian trading hours.</div>
          <div><strong class="text-slate-900 font-heading">Shipping Corridors:</strong> Southeast Asia, Indian Ocean, and East Asia container lines.</div>
          <div><strong class="text-slate-900 font-heading">Core Flows:</strong> Rice, pulses, feed amino acids, soybean meal, edible vegetable oils.</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Logistics & Freight Execution -->
<section class="py-16 md:py-24 bg-brand-bg border-t border-slate-200">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-orange mb-2 font-heading">
        Freight Execution
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        Logistical Capabilities &amp; Trade Terms
      </h2>
      <p class="lead-text mt-3">
        We execute shipments under internationally recognized Incoterms 2020 rules, providing transparency from loading port to point of discharge.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
        <div class="w-10 h-10 rounded-lg bg-orange-100 text-brand-orange flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-box"></i>
        </div>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Containerized Cargo (FCL)</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Standard 20-foot and 40-foot container shipping for bagged proteins, minerals, and additives. Bulk container liner bags are deployed for free-flowing soybean meal and grain co-products.
        </p>
      </div>

      <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
        <div class="w-10 h-10 rounded-lg bg-green-100 text-brand-green flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-oil-can"></i>
        </div>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Liquid Freight (Flexitanks)</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          For refined and crude vegetable oils, we utilize 24,000-liter food-grade flexitanks fitted in 20ft dry containers, as well as 1,000L IBCs and 200L steel/plastic drums.
        </p>
      </div>

      <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
        <div class="w-10 h-10 rounded-lg bg-blue-100 text-brand-navy flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-file-contract"></i>
        </div>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Incoterms Execution</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          We quote and contract primarily under CIF (Cost, Insurance, and Freight), CFR, and FOB terms, coordinating with leading maritime carriers for reliable transit schedules.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
