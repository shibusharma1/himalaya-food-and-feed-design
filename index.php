<?php
/**
 * Himalayan Food and Feed - Home Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

$pageSeo = [
    'title' => 'Himalayan Food and Feed | Reliable Food & Feed Ingredients for Global B2B Markets',
    'description' => 'International B2B supplier of animal proteins, plant proteins, feed additives, minerals, food staples and pet food ingredients. Sourcing coordination from Denmark and Singapore.',
    'canonical' => url('index.php'),
    'og_image' => url('assets/images/hero/hero-bulk-logistics.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')]
    ]
];
$currentPageKey = 'home';

require __DIR__ . '/includes/header.php';
$categories = get_all_categories();
?>

<!-- Section A: Hero -->
<section class="relative bg-brand-navy text-white overflow-hidden brand-skew-divider border-b-4 border-brand-green">
  <!-- Background Image with High Priority Eager Load and Restrained Navy Overlay -->
  <div class="absolute inset-0 z-0">
    <img src="<?= asset('assets/images/hero/hero-bulk-logistics.webp') ?>" 
         alt="International maritime commodity vessel and agricultural bulk logistics" 
         fetchpriority="high"
         width="1200" height="675"
         class="w-full h-full object-cover object-center opacity-25">
    <div class="absolute inset-0 bg-gradient-to-r from-brand-navy-dark via-brand-navy/95 to-brand-navy/80"></div>
  </div>

  <div class="site-container relative z-10 py-16 sm:py-20 lg:py-28">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <!-- Left Column: Primary Copy & CTAs -->
      <div class="lg:col-span-7 space-y-6">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-brand-orange text-xs font-bold uppercase tracking-wider">
          <i class="fa-solid fa-earth-americas"></i>
          <span>Global B2B Supply &bull; Denmark &amp; Singapore</span>
        </div>

        <h1 class="text-white text-3xl sm:text-5xl lg:text-[3.25rem] font-extrabold tracking-tight leading-[1.15] font-heading">
          Reliable Food &amp; Feed Ingredients for Global B2B Markets
        </h1>

        <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed max-w-2xl">
          Connecting businesses with food ingredients, animal feed raw materials, proteins, minerals, and additives through a focused, specification-led trading approach.
        </p>

        <div class="flex flex-wrap items-center gap-4 pt-2">
          <a href="<?= url('contact.php#quote-form') ?>" class="btn-primary py-3.5 px-7 text-base">
            <i class="fa-solid fa-file-invoice text-sm"></i>
            <span>Request a Quote</span>
          </a>
          <a href="<?= url('products.php') ?>" class="btn-secondary py-3.5 px-6 text-base">
            <span>Explore Products</span>
            <i class="fa-solid fa-arrow-right text-xs ml-1"></i>
          </a>
        </div>

        <!-- Quick Assurance Badges -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-6 border-t border-white/10 text-xs text-slate-300">
          <div class="flex items-center gap-2.5">
            <span class="w-6 h-6 rounded-full bg-brand-green/20 text-brand-green flex items-center justify-center shrink-0">
              <i class="fa-solid fa-check text-xs"></i>
            </span>
            <span>Specification-First Enquiries</span>
          </div>
          <div class="flex items-center gap-2.5">
            <span class="w-6 h-6 rounded-full bg-brand-orange/20 text-brand-orange flex items-center justify-center shrink-0">
              <i class="fa-solid fa-certificate text-xs"></i>
            </span>
            <span>Batch COA Verification</span>
          </div>
          <div class="flex items-center gap-2.5 col-span-2 sm:col-span-1">
            <span class="w-6 h-6 rounded-full bg-brand-green/20 text-brand-green flex items-center justify-center shrink-0">
              <i class="fa-solid fa-ship text-xs"></i>
            </span>
            <span>Europe &amp; Asia Trade Routes</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Product Line Highlights Card -->
      <div class="lg:col-span-5">
        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 sm:p-8 shadow-2xl relative">
          <div class="text-xs font-bold uppercase tracking-widest text-brand-orange mb-3 font-heading flex items-center justify-between">
            <span>Core Trade Lines</span>
            <span class="text-slate-300 text-[11px] font-normal">Dual Sourcing</span>
          </div>
          <h2 class="text-2xl font-bold text-white mb-4 font-heading !after:hidden">
            Comprehensive Supply Lines
          </h2>
          <ul class="space-y-3 p-0 m-0 list-none text-sm text-slate-100">
            <li class="flex items-center justify-between p-2.5 rounded-lg bg-white/5 hover:bg-white/10 transition-colors">
              <div class="flex items-center gap-3">
                <i class="fa-solid fa-drumstick-bite text-brand-orange w-5 text-center"></i>
                <span class="font-semibold">Animal Proteins</span>
              </div>
              <span class="text-xs text-slate-300">MBM, Poultry, Fish</span>
            </li>
            <li class="flex items-center justify-between p-2.5 rounded-lg bg-white/5 hover:bg-white/10 transition-colors">
              <div class="flex items-center gap-3">
                <i class="fa-solid fa-seedling text-brand-green w-5 text-center"></i>
                <span class="font-semibold">Plant Proteins</span>
              </div>
              <span class="text-xs text-slate-300">Soybean Meal, DDGS</span>
            </li>
            <li class="flex items-center justify-between p-2.5 rounded-lg bg-white/5 hover:bg-white/10 transition-colors">
              <div class="flex items-center gap-3">
                <i class="fa-solid fa-flask text-brand-orange w-5 text-center"></i>
                <span class="font-semibold">Feed Additives</span>
              </div>
              <span class="text-xs text-slate-300">Amino Acids, Choline</span>
            </li>
            <li class="flex items-center justify-between p-2.5 rounded-lg bg-white/5 hover:bg-white/10 transition-colors">
              <div class="flex items-center gap-3">
                <i class="fa-solid fa-cubes-stacked text-brand-green w-5 text-center"></i>
                <span class="font-semibold">Feed Minerals</span>
              </div>
              <span class="text-xs text-slate-300">DCP 18%, MCP 22%</span>
            </li>
            <li class="flex items-center justify-between p-2.5 rounded-lg bg-white/5 hover:bg-white/10 transition-colors">
              <div class="flex items-center gap-3">
                <i class="fa-solid fa-wheat-awn text-brand-orange w-5 text-center"></i>
                <span class="font-semibold">Food Ingredients</span>
              </div>
              <span class="text-xs text-slate-300">Rice, Pulses, Oils</span>
            </li>
            <li class="flex items-center justify-between p-2.5 rounded-lg bg-white/5 hover:bg-white/10 transition-colors">
              <div class="flex items-center gap-3">
                <i class="fa-solid fa-paw text-brand-green w-5 text-center"></i>
                <span class="font-semibold">Pet Food &amp; FMCG</span>
              </div>
              <span class="text-xs text-slate-300">Meals &amp; Packaged Goods</span>
            </li>
          </ul>

          <div class="mt-6 pt-4 border-t border-white/10 flex items-center justify-between">
            <span class="text-xs text-slate-300">Have specific parameters?</span>
            <a href="<?= url('contact.php') ?>" class="text-xs font-bold text-brand-orange hover:text-white flex items-center gap-1 transition-colors">
              <span>Send Specification</span>
              <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section B: Product Categories Grid -->
<section class="py-16 md:py-24 bg-brand-bg">
  <div class="site-container">
    <div class="max-w-2xl mb-12">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
        Commodity &amp; Ingredient Catalog
      </div>
      <h2 class="section-heading text-3xl sm:text-4xl font-extrabold text-brand-navy">
        Our Core Product Categories
      </h2>
      <p class="lead-text mt-3">
        We specialize in sourcing, quality verification, and commercial coordination across foundational food, feed, and companion animal nutrition raw materials.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($categories as $cat): ?>
        <?php $productCategory = $cat; require __DIR__ . '/includes/product-card.php'; ?>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 text-center">
      <a href="<?= url('products.php') ?>" class="btn-outline-navy py-3 px-8 text-sm font-bold">
        <span>View Complete Catalog with Technical Descriptions</span>
        <i class="fa-solid fa-arrow-right text-xs ml-2"></i>
      </a>
    </div>
  </div>
</section>

<!-- Section C: Company Introduction & Dual Presence -->
<section class="py-16 md:py-24 bg-white border-y border-slate-200">
  <div class="site-container">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <div class="text-xs font-bold uppercase tracking-wider text-brand-orange font-heading">
          International Trade Partner
        </div>
        <h2 class="section-heading text-3xl sm:text-4xl font-extrabold text-brand-navy">
          Connecting Reliable Producers with Industrial Buyers
        </h2>
        <p class="text-slate-600 leading-relaxed text-base">
          Himalayan Food and Feed was established with a singular focus: to make the procurement of essential raw materials dependable, transparent, and aligned with precise technical specifications. The name reflects our roots in the Himalayan region, while our operational footprint bridges Europe and Asia.
        </p>
        <p class="text-slate-600 leading-relaxed text-base">
          Operating commercial desks in Denmark and Singapore allows us to coordinate procurement across time zones, align import regulations, and provide direct commercial communication from the first inquiry through delivery at your agreed port.
        </p>

        <div class="grid grid-cols-2 gap-6 pt-4">
          <div class="border-l-4 border-brand-green pl-4">
            <div class="text-xl font-extrabold text-brand-navy font-heading">Denmark &bull; Europe</div>
            <div class="text-xs text-slate-500 mt-1">Saven 2630, Denmark desk for European trade coordination.</div>
          </div>
          <div class="border-l-4 border-brand-orange pl-4">
            <div class="text-xl font-extrabold text-brand-navy font-heading">Singapore &bull; Asia</div>
            <div class="text-xs text-slate-500 mt-1">Commercial presence connecting key Asian agricultural corridors.</div>
          </div>
        </div>

        <div class="pt-4 flex flex-wrap gap-4">
          <a href="<?= url('about-us.php') ?>" class="btn-green py-3 px-6 text-sm">
            <span>Learn More About Us</span>
            <i class="fa-solid fa-arrow-right text-xs ml-1"></i>
          </a>
          <a href="<?= url('services.php') ?>" class="btn-outline-navy py-3 px-6 text-sm">
            <span>Our Sourcing Services</span>
          </a>
        </div>
      </div>

      <!-- Right Visual & Director Card -->
      <div class="lg:col-span-6 space-y-6">
        <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-video bg-slate-100">
          <img src="<?= asset('assets/images/services/sourcing-trade.webp') ?>" 
               alt="Commercial commodity negotiation and international contract review" 
               loading="lazy" 
               width="800" height="533"
               class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-navy-dark/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white">
            <span class="px-2.5 py-1 rounded bg-brand-orange text-brand-navy text-xs font-bold uppercase font-heading">
              Direct Governance
            </span>
            <p class="text-sm font-semibold text-slate-100 mt-1">
              Personal oversight of every commercial contract and specification agreement.
            </p>
          </div>
        </div>

        <!-- Director Card -->
        <div class="director-badge-card">
          <div class="flex items-start justify-between gap-4">
            <div>
              <span class="text-brand-orange text-xs font-bold uppercase tracking-wider font-heading block mb-1">
                Commercial Leadership
              </span>
              <h3 class="text-2xl font-extrabold text-white font-heading m-0">
                <?= CLIENT_DIRECTOR ?>
              </h3>
              <div class="text-emerald-400 font-semibold text-sm mb-4">Director</div>
            </div>
            <img src="<?= asset('assets/images/logo/logo-mark.png') ?>" alt="Emblem" class="h-10 w-auto opacity-70">
          </div>
          <div class="space-y-2 text-sm text-slate-200 border-t border-white/10 pt-3">
            <div class="flex items-center gap-3">
              <i class="fa-solid fa-envelope text-brand-orange w-4 text-center"></i>
              <a href="mailto:<?= CLIENT_EMAIL ?>" class="hover:text-white underline"><?= CLIENT_EMAIL ?></a>
            </div>
            <div class="flex items-center gap-3">
              <i class="fa-solid fa-phone text-brand-green w-4 text-center"></i>
              <a href="tel:<?= CLIENT_PHONE_RAW ?>" class="hover:text-white"><?= CLIENT_PHONE ?></a>
            </div>
            <div class="flex items-center gap-3">
              <i class="fa-solid fa-location-dot text-slate-400 w-4 text-center"></i>
              <span><?= CLIENT_OFFICE_DENMARK ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section D: Business Strengths -->
<section class="py-16 md:py-24 bg-brand-bg">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
        Why Trade With Himalayan
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        Operational Strengths You Can Rely On
      </h2>
      <p class="lead-text mt-3">
        In international commodity trade, dependability stems from transparent specifications, direct communication, and strict documentation discipline.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="service-card">
        <div class="w-12 h-12 rounded-lg bg-green-100 text-brand-green flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-clipboard-check"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Specification-Led Sourcing</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          We match your feed mill or production recipe to verified producer batches. Every quote explicitly states parameter ranges, moisture limits, and required testing.
        </p>
      </div>

      <div class="service-card">
        <div class="w-12 h-12 rounded-lg bg-blue-100 text-brand-navy flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-network-wired"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Multiple Producer Channels</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          We maintain relationships across vetted producers for critical commodities, ensuring that localized harvest disruptions or processing downtime do not halt your production line.
        </p>
      </div>

      <div class="service-card">
        <div class="w-12 h-12 rounded-lg bg-amber-100 text-brand-orange flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-file-contract"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Complete Trade Documentation</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Veterinary health certificates, certificates of origin, phytosanitary clearance, bill of lading, and independent laboratory COAs coordinated for seamless customs clearance.
        </p>
      </div>

      <div class="service-card">
        <div class="w-12 h-12 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-clock"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Prompt Commercial Feedback</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Our dual presence in Europe and Asia guarantees quick turnaround on inquiries. Get specification checks and price quotes within one business day via email or WhatsApp.
        </p>
      </div>

      <div class="service-card">
        <div class="w-12 h-12 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-boxes-stacked"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Flexible Commercial Lots</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          From trial container loads (FCL) to verify performance in your formulas, to full multi-container contracts and repeat scheduled deliveries across quarterly programs.
        </p>
      </div>

      <div class="service-card">
        <div class="w-12 h-12 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-handshake-angle"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Post-Sales Reachability</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          We remain accessible and accountable throughout transit, discharge, and inspection. Long-term commercial trust is earned through consistent performance after invoicing.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section E: How the Process Works -->
<section class="py-16 md:py-24 bg-white border-t border-slate-200">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-orange mb-2 font-heading">
        Straightforward B2B Execution
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        How We Work Together
      </h2>
      <p class="lead-text mt-3">
        From initial formulation parameters to agreed port delivery, our four-step execution process is designed for clarity, compliance, and on-time performance.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="border-t-4 border-brand-orange pt-6 relative">
        <span class="text-4xl font-black text-slate-200 font-heading block mb-2">01</span>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Share Requirements</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Send your required product name, target specification parameters, desired volume (MT / containers), and target destination port or Incoterms.
        </p>
      </div>

      <div class="border-t-4 border-brand-green pt-6 relative">
        <span class="text-4xl font-black text-slate-200 font-heading block mb-2">02</span>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Confirm Terms &amp; Specs</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          We verify producer availability, confirm achievable parameters, provide sample options if applicable, and present a clear commercial quote.
        </p>
      </div>

      <div class="border-t-4 border-brand-navy pt-6 relative">
        <span class="text-4xl font-black text-slate-200 font-heading block mb-2">03</span>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Coordinate Compliance</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Veterinary, phytosanitary, and quality certificates of analysis (COA) are aligned with destination country import requirements prior to dispatch.
        </p>
      </div>

      <div class="border-t-4 border-brand-green pt-6 relative">
        <span class="text-4xl font-black text-slate-200 font-heading block mb-2">04</span>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Dispatch &amp; Delivery</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Logistics, container packing, ocean transit tracking, and full documentation delivery are executed to your agreed port or facility.
        </p>
      </div>
    </div>

    <div class="mt-12 p-6 rounded-xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-6">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-brand-green text-white flex items-center justify-center shrink-0">
          <i class="fa-solid fa-file-circle-check text-xl"></i>
        </div>
        <div>
          <h4 class="font-bold text-brand-navy text-base font-heading">Need a sample for formulation testing?</h4>
          <p class="text-xs text-slate-600">Sample coordination is available for qualified commercial feed mills and brand manufacturers.</p>
        </div>
      </div>
      <a href="<?= url('contact.php#quote-form') ?>" class="btn-primary text-sm py-2.5 px-6 whitespace-nowrap">
        <span>Request Sample / Quote</span>
      </a>
    </div>
  </div>
</section>

<!-- Section G: Quality and Documentation Standards -->
<section class="py-16 md:py-24 bg-brand-bg border-t border-slate-200">
  <div class="site-container">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <div class="text-xs font-bold uppercase tracking-wider text-brand-green font-heading">
          Technical Verification
        </div>
        <h2 class="section-heading text-3xl sm:text-4xl font-extrabold text-brand-navy">
          Quality Control &amp; Trade Documentation
        </h2>
        <p class="text-slate-600 leading-relaxed text-base">
          In international food and animal feed trade, a product is only as dependable as the documentation supporting it. We work with accredited testing laboratories and authorized inspection agencies (such as SGS, Bureau Veritas, or equivalent national entities) to verify specifications.
        </p>
        
        <div class="space-y-3 pt-2">
          <div class="flex items-start gap-3 p-3.5 rounded-lg bg-white border border-slate-200 shadow-sm">
            <i class="fa-solid fa-microscope text-brand-green text-lg mt-0.5"></i>
            <div>
              <strong class="text-brand-navy font-heading text-sm block">Certificate of Analysis (COA)</strong>
              <span class="text-xs text-slate-600">Batch-specific parameters including crude protein, moisture, ash, fat, and heavy metal screening.</span>
            </div>
          </div>

          <div class="flex items-start gap-3 p-3.5 rounded-lg bg-white border border-slate-200 shadow-sm">
            <i class="fa-solid fa-shield-virus text-brand-orange text-lg mt-0.5"></i>
            <div>
              <strong class="text-brand-navy font-heading text-sm block">Veterinary &amp; Phytosanitary Clearance</strong>
              <span class="text-xs text-slate-600">Official government health clearances confirming disease-free origin, heat processing, and pest-free agricultural status.</span>
            </div>
          </div>

          <div class="flex items-start gap-3 p-3.5 rounded-lg bg-white border border-slate-200 shadow-sm">
            <i class="fa-solid fa-passport text-brand-navy text-lg mt-0.5"></i>
            <div>
              <strong class="text-brand-navy font-heading text-sm block">Country of Origin &amp; Traceability</strong>
              <span class="text-xs text-slate-600">Authentic Certificates of Origin and lot coding for full supply chain traceability from source facility to arrival.</span>
            </div>
          </div>
        </div>

        <div class="pt-2">
          <a href="<?= url('quality.php') ?>" class="btn-outline-navy py-2.5 px-6 text-sm font-bold">
            <span>Read Our Full Quality &amp; Documentation Standards</span>
          </a>
        </div>
      </div>

      <!-- Right Column: Visual of Quality Inspection -->
      <div class="lg:col-span-6">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white aspect-4/3 bg-slate-100">
          <img src="<?= asset('assets/images/services/quality-inspection.webp') ?>" 
               alt="Feed ingredient quality control and laboratory specification analysis" 
               loading="lazy" 
               width="800" height="600"
               class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/85 via-transparent to-transparent"></div>
          <div class="absolute bottom-6 left-6 right-6 text-white">
            <div class="font-bold text-lg font-heading">Objective Third-Party Testing</div>
            <p class="text-xs text-slate-200 mt-1">
              Final lot approval is anchored to verified certificates, ensuring compliance with both the buyer's formulation parameters and national regulatory import standards.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section H: FAQ Preview -->
<section class="py-16 md:py-24 bg-white border-t border-slate-200">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-orange mb-2 font-heading">
        Buyer Guidance
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        Frequently Asked Questions
      </h2>
      <p class="lead-text mt-3">
        Key details on commercial ordering, specification agreements, sample requests, and international logistics.
      </p>
    </div>

    <div class="max-w-3xl mx-auto space-y-4">
      <details class="faq-item" open>
        <summary>What is your minimum order quantity (MOQ)?</summary>
        <div class="faq-answer">
          Minimum order quantities depend on the product category. For bulk ingredients such as soybean meal, DDGS, and animal proteins, shipments are typically arranged in Full Container Loads (FCL &mdash; approx. 20 to 26 metric tons depending on container type) or multi-container contracts. For specialty feed additives, amino acids, and minerals, trial quantities and mixed pallet consignments can be arranged.
        </div>
      </details>

      <details class="faq-item">
        <summary>Can you supply to our feed mill's exact custom specification?</summary>
        <div class="faq-answer">
          Yes. In fact, our operating model is specification-first. When you share your nutritional targets (e.g. minimum crude protein, maximum moisture, ash limits, pepsin digestibility, or amino acid profile), we verify achievable batch parameters with our vetted processing partners before issuing a formal commercial offer.
        </div>
      </details>

      <details class="faq-item">
        <summary>Are samples available before placing a commercial contract?</summary>
        <div class="faq-answer">
          Yes. For verified commercial buyers and registered feed manufacturers, representative batch samples can be dispatched via international courier for laboratory analysis and formulation testing. Contact our commercial desk with your company details and delivery address.
        </div>
      </details>

      <details class="faq-item">
        <summary>What trade terms (Incoterms) and payment methods do you support?</summary>
        <div class="faq-answer">
          We routinely execute contracts under Incoterms 2020 including CIF (Cost, Insurance &amp; Freight to your designated port), CFR, and FOB (Free on Board). Standard international B2B payment terms include confirmed irrevocable Letters of Credit (L/C at sight) and commercial Telegraphic Transfers (T/T), agreed per transaction.
        </div>
      </details>
    </div>

    <div class="mt-8 text-center">
      <a href="<?= url('faq.php') ?>" class="text-sm font-bold text-brand-navy hover:text-brand-orange inline-flex items-center gap-1.5 transition-colors">
        <span>View all 12 frequently asked trade questions</span>
        <i class="fa-solid fa-arrow-right text-xs"></i>
      </a>
    </div>
  </div>
</section>

<!-- Section I: Final CTA Banner -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
