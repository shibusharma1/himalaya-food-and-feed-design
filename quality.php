<?php
/**
 * Himalayan Food and Feed - Quality & Documentation Standards Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

$pageSeo = [
    'title' => 'Quality & Documentation Standards | Laboratory Analysis & Traceability',
    'description' => 'Understand our verification framework: How buyers coordinate specifications, batch samples, independent COAs, veterinary health certificates, and phytosanitary documentation.',
    'canonical' => url('quality.php'),
    'og_image' => url('assets/images/services/quality-inspection.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Quality & Documentation', 'url' => url('quality.php')]
    ]
];
$currentPageKey = 'quality';

require __DIR__ . '/includes/header.php';
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="absolute inset-0 z-0">
    <img src="<?= asset('assets/images/services/quality-inspection.webp') ?>" 
         alt="Laboratory testing and ingredient quality assurance" 
         width="800" height="533"
         class="w-full h-full object-cover opacity-20">
    <div class="absolute inset-0 bg-brand-navy/90"></div>
  </div>

  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>Verification &bull; Compliance &bull; Transparency</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        Quality &amp; Documentation Standards
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        How we verify parameters, coordinate representative testing samples, and deliver the mandatory regulatory documentation for your destination port.
      </p>
    </div>
  </div>
</div>

<!-- Core Quality Pillars -->
<section class="py-16 md:py-24 bg-white">
  <div class="site-container">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-7 space-y-6">
        <div class="text-xs font-bold uppercase tracking-wider text-brand-green font-heading">
          Documentary Rigor
        </div>
        <h2 class="section-heading text-3xl sm:text-4xl font-extrabold text-brand-navy">
          Our Specification-First Verification Framework
        </h2>
        <p class="text-slate-600 leading-relaxed text-base">
          In international food and animal feed ingredients trade, receiving a shipment that fails to meet your laboratory's incoming standards halts production lines and creates regulatory distress. We eliminate ambiguity by establishing agreed parameter ranges in writing before any contract is executed.
        </p>
        <p class="text-slate-600 leading-relaxed text-base">
          Depending on the commodity and destination country, we coordinate with accredited independent inspection agencies (such as SGS, Bureau Veritas, or certified national authorities) to conduct pre-shipment sampling, container seal verification, and chemical assays.
        </p>

        <div class="p-5 rounded-xl bg-slate-50 border-l-4 border-brand-green border-slate-200 border text-sm text-slate-700 space-y-2">
          <strong class="font-heading font-bold text-brand-navy block">What We Ensure on Every Consignment:</strong>
          <ul class="space-y-1.5 list-none p-0 m-0 text-xs">
            <li><i class="fa-solid fa-check text-brand-green mr-2"></i> Clearly defined contract parameters (crude protein, maximum moisture, ash, fat, TVN).</li>
            <li><i class="fa-solid fa-check text-brand-green mr-2"></i> Full batch traceability from vetted producer facilities.</li>
            <li><i class="fa-solid fa-check text-brand-green mr-2"></i> Advance documentation draft review before vessel departure.</li>
          </ul>
        </div>
      </div>

      <!-- Right Column: Documents Graphic -->
      <div class="lg:col-span-5 bg-brand-bg rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <h3 class="text-lg font-bold text-brand-navy font-heading mb-4 flex items-center gap-2">
          <i class="fa-solid fa-folder-open text-brand-orange"></i>
          <span>Standard Trade Documents Package</span>
        </h3>
        <ul class="space-y-3 p-0 m-0 list-none text-xs text-slate-600">
          <li class="p-3 bg-white rounded-lg border border-slate-200 flex items-start gap-3">
            <i class="fa-solid fa-file-circle-check text-brand-green mt-0.5 text-sm"></i>
            <div>
              <strong class="text-slate-900 block font-heading">Certificate of Analysis (COA)</strong>
              <span>Issued by manufacturer or accredited independent testing laboratory.</span>
            </div>
          </li>
          <li class="p-3 bg-white rounded-lg border border-slate-200 flex items-start gap-3">
            <i class="fa-solid fa-shield-virus text-brand-orange mt-0.5 text-sm"></i>
            <div>
              <strong class="text-slate-900 block font-heading">Veterinary Health Certificate</strong>
              <span>Government veterinary inspection clearance for animal protein ingredients.</span>
            </div>
          </li>
          <li class="p-3 bg-white rounded-lg border border-slate-200 flex items-start gap-3">
            <i class="fa-solid fa-wheat-awn text-brand-green mt-0.5 text-sm"></i>
            <div>
              <strong class="text-slate-900 block font-heading">Phytosanitary Certificate</strong>
              <span>Official plant protection clearance for grains, oilseeds, and pulses.</span>
            </div>
          </li>
          <li class="p-3 bg-white rounded-lg border border-slate-200 flex items-start gap-3">
            <i class="fa-solid fa-passport text-brand-navy mt-0.5 text-sm"></i>
            <div>
              <strong class="text-slate-900 block font-heading">Certificate of Origin (COO)</strong>
              <span>Chamber of Commerce or designated authority proof of origin.</span>
            </div>
          </li>
          <li class="p-3 bg-white rounded-lg border border-slate-200 flex items-start gap-3">
            <i class="fa-solid fa-ship text-brand-orange mt-0.5 text-sm"></i>
            <div>
              <strong class="text-slate-900 block font-heading">Full Set Clean On-Board Bill of Lading</strong>
              <span>Original ocean shipping documents conveying title of goods.</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Sample Testing Protocol -->
<section class="py-16 md:py-24 bg-brand-bg border-t border-slate-200">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-orange mb-2 font-heading">
        Verification Steps
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        How We Coordinate Sample Testing
      </h2>
      <p class="lead-text mt-3">
        Before entering into large-volume contracts, buyers have the right to test and evaluate raw material performance.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
        <div class="w-10 h-10 rounded-full bg-brand-navy text-white flex items-center justify-center font-bold mb-4 font-heading">1</div>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Sample Request</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Provide your target specification and delivery address. We confirm current production batch availability and check whether destination customs allows sample import.
        </p>
      </div>

      <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
        <div class="w-10 h-10 rounded-full bg-brand-green text-white flex items-center justify-center font-bold mb-4 font-heading">2</div>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Courier Dispatch</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Samples are drawn from actual factory production lots, sealed in airtight packaging with lot coding, and dispatched via express air courier with tracking.
        </p>
      </div>

      <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
        <div class="w-10 h-10 rounded-full bg-brand-orange text-white flex items-center justify-center font-bold mb-4 font-heading">3</div>
        <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">Results Alignment</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Once your internal laboratory confirms moisture, crude protein, and sensory parameters, commercial terms and delivery schedules are finalized.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
