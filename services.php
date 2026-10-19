<?php
/**
 * Himalayan Food and Feed - Services Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

$pageSeo = [
    'title' => 'Services | Sourcing, Quality Documentation & Global Trade Logistics',
    'description' => 'Explore the B2B trading services offered by Himalayan Food and Feed: Ingredient sourcing, specification matching, sample coordination, lab COA verification, and ocean logistics.',
    'canonical' => url('services.php'),
    'og_image' => url('assets/images/services/logistics-shipping.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Services', 'url' => url('services.php')]
    ]
];
$currentPageKey = 'services';

$structuredDataExtra = [
    get_service_schema('Ingredient Sourcing & Producer Coordination', 'Identifying and qualifying producer batches to match buyer nutritional parameters.'),
    get_service_schema('Quality & Specification Alignment', 'Verification of batch parameters, moisture limits, and independent laboratory COA documentation.'),
    get_service_schema('International Trade Logistics & Shipping', 'Containerized freight (FCL), liner bags, and ocean shipping coordination under Incoterms 2020.')
];

require __DIR__ . '/includes/header.php';
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="absolute inset-0 z-0">
    <img src="<?= asset('assets/images/services/logistics-shipping.webp') ?>" 
         alt="International shipping terminal and containerized freight logistics" 
         width="800" height="533"
         class="w-full h-full object-cover opacity-20">
    <div class="absolute inset-0 bg-brand-navy/90"></div>
  </div>

  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>End-to-End B2B Trading Support</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        Our Commercial Services
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        More than commodity supply: we provide commercial coordination, specification verification, regulatory paperwork alignment, and maritime logistics to make global procurement reliable.
      </p>
    </div>
  </div>
</div>

<!-- Main Services Section -->
<section class="py-16 md:py-24 bg-white">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
        Core Capabilities
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        What We Do for Our Trade Partners
      </h2>
      <p class="lead-text mt-3">
        Every international shipment involves commercial, technical, and logistical layers. We manage these components with hands-on precision.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Service 1: Sourcing -->
      <div class="service-card flex flex-col">
        <div class="w-12 h-12 rounded-lg bg-green-100 text-brand-green flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-magnifying-glass-location"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Product Sourcing &amp; Producer Matching</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          We identify qualified agricultural processors, rendering facilities, and chemical synthesis plants across Europe and Asia. We vet production consistency and ensure raw materials meet your required nutritional specifications.
        </p>
        <ul class="text-xs text-slate-500 space-y-1.5 pt-3 border-t border-slate-100 list-none p-0 m-0">
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Vetted multi-origin network</li>
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Direct plant relationship management</li>
        </ul>
      </div>

      <!-- Service 2: Specification -->
      <div class="service-card flex flex-col">
        <div class="w-12 h-12 rounded-lg bg-blue-100 text-brand-navy flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-sliders"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Specification Alignment &amp; Verification</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          We bridge the technical gap between feed formulators and commodity producers. We confirm parameters such as crude protein, moisture, ash, TVN, particle size, and amino acid profiles before confirming sales contracts.
        </p>
        <ul class="text-xs text-slate-500 space-y-1.5 pt-3 border-t border-slate-100 list-none p-0 m-0">
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Realistic parameter tolerances</li>
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Written contract guarantees</li>
        </ul>
      </div>

      <!-- Service 3: Samples -->
      <div class="service-card flex flex-col">
        <div class="w-12 h-12 rounded-lg bg-amber-100 text-brand-orange flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-vial"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Sample Coordination</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          Prior to commercial container dispatch, we coordinate representative batch samples dispatched via international express courier for your quality control team to test in-house.
        </p>
        <ul class="text-xs text-slate-500 space-y-1.5 pt-3 border-t border-slate-100 list-none p-0 m-0">
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Representative lot sampling</li>
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Courier tracking and chain of custody</li>
        </ul>
      </div>

      <!-- Service 4: Quality Docs -->
      <div class="service-card flex flex-col">
        <div class="w-12 h-12 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-certificate"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Quality &amp; Laboratory Documentation</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          We arrange official Certificates of Analysis (COA) from accredited laboratories, independent pre-shipment inspections (e.g. SGS / Bureau Veritas), and microbiological screening certificates for Salmonella and Enterobacteria.
        </p>
        <ul class="text-xs text-slate-500 space-y-1.5 pt-3 border-t border-slate-100 list-none p-0 m-0">
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Independent laboratory assays</li>
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Official veterinary clearances</li>
        </ul>
      </div>

      <!-- Service 5: Logistics -->
      <div class="service-card flex flex-col">
        <div class="w-12 h-12 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-ship"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Ocean Freight &amp; Multimodal Logistics</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          We coordinate 20-foot and 40-foot container shipments (FCL), specialized bulk container liner bags, flexitanks for liquid oils, and bulk vessel bookings under Incoterms 2020 (CIF, CFR, FOB).
        </p>
        <ul class="text-xs text-slate-500 space-y-1.5 pt-3 border-t border-slate-100 list-none p-0 m-0">
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Reputable global shipping lines</li>
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Port-to-port tracking &amp; status updates</li>
        </ul>
      </div>

      <!-- Service 6: Consulting -->
      <div class="service-card flex flex-col">
        <div class="w-12 h-12 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-calculator"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Feed Mill Sourcing Support</h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow">
          We assist feed mills and nutritionists in evaluating nutrient-cost trade-offs across protein sources (e.g., comparing crude protein cost per unit between poultry meal, fish meal, soybean meal, and DDGS).
        </p>
        <ul class="text-xs text-slate-500 space-y-1.5 pt-3 border-t border-slate-100 list-none p-0 m-0">
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Commercial protein-cost comparisons</li>
          <li><i class="fa-solid fa-check text-brand-green mr-1.5"></i> Practical ingredient substitution insights</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
