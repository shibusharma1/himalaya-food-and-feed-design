<?php

/**
 * Himalayan Food and Feed - Comprehensive Product Specification & Detail View
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

// Retrieve product identifier from query params
$productId = $_GET['id'] ?? $_GET['product'] ?? $_GET['slug'] ?? '';
$catId = $_GET['cat'] ?? null;

$product = null;
if (!empty($productId)) {
  $product = find_product($productId, $catId);
}

// Fallback to first product if none specified or not found
if (!$product) {
  header("Location: " . url('products.php'));
  exit;
}

$category = get_category($product['cat_id']);
$catTitle = $category['title'] ?? ($product['category'] ?? 'Products');
$catUrl = $category['url'] ?? 'products.php';

$pageSeo = [
  'title' => $product['name'] . ' | Technical Specifications & B2B Supply | Himalayan Food and Feed',
  'description' => 'Source ' . $product['name'] . ' from Himalayan Food and Feed. ' . $product['description'] . ' International bulk supply, COA verification, and multi-origin logistics from Denmark & Singapore.',
  'canonical' => url('product-detail.php?id=' . urlencode($product['id'])),
  'og_image' => url($product['image']),
  'breadcrumbs' => [
    ['name' => 'Home', 'url' => url('index.php')],
    ['name' => 'Products', 'url' => url('products.php')],
    ['name' => $catTitle, 'url' => url($catUrl)],
    ['name' => $product['name'], 'url' => url('product-detail.php?id=' . urlencode($product['id']))]
  ]
];
$currentPageKey = 'products';

// JSON-LD structured data for this product
$structuredDataExtra = get_product_schema($product);

// URL to contact page with pre-selected product and category
$quoteUrl = url('contact.php?product=' . urlencode($product['name']) . '&cat=' . urlencode($catTitle) . '#quote-form');

// Related products from the same category (excluding current item)
$relatedItems = [];
if (!empty($category['items'])) {
  foreach ($category['items'] as $item) {
    if ($item['id'] !== $product['id']) {
      $relatedItems[] = $item;
    }
  }
}

require __DIR__ . '/includes/header.php';
?>

<!-- Hero Header Section -->
<section class="relative bg-brand-navy text-white py-14 sm:py-16 lg:py-20 brand-skew-divider border-b-4 border-brand-green overflow-hidden">
  <!-- Subtle Commodity Background Image with Overlay -->
  <div class="absolute inset-0 z-0">
    <img src="<?= asset($product['image']) ?>"
      alt="<?= e($product['name']) ?>"
      fetchpriority="high"
      width="1200" height="675"
      class="w-full h-full object-cover object-center opacity-15 blur-[2px]">
    <div class="absolute inset-0 bg-gradient-to-r from-brand-navy-dark via-brand-navy/95 to-brand-navy/85"></div>
  </div>

  <div class="site-container relative z-10">
    <!-- Breadcrumb Navigation -->
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <div class="mt-6 max-w-4xl">
      <!-- Category & Quality Badges -->
      <div class="flex flex-wrap items-center gap-2.5 mb-4">
        <a href="<?= url($catUrl) ?>" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 hover:bg-white/20 text-brand-orange text-xs font-bold font-heading uppercase tracking-wider transition-colors">
          <i class="fa-solid fa-arrow-left text-[10px]"></i>
          <span><?= e($catTitle) ?></span>
        </a>
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-green/20 text-brand-green-light border border-brand-green/30 text-xs font-bold font-heading uppercase tracking-wider">
          <i class="fa-solid fa-certificate"></i>
          <span>Batch COA Verified</span>
        </span>
        <span class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-800/80 text-slate-300 text-xs font-semibold">
          <i class="fa-solid fa-shield-halved text-brand-orange"></i>
          <span><?= e($product['grades'][0] ?? 'Export Grade') ?></span>
        </span>
      </div>

      <!-- Main Product Title -->
      <h1 class="text-white text-3xl sm:text-4xl lg:text-4xl font-extrabold tracking-tight leading-[1.15] font-heading mb-4">
        <?= e($product['name']) ?>
      </h1>

      <p class="text-slate-200 text-base sm:text-lg lg:text-xl font-normal leading-relaxed max-w-3xl">
        <?= e($product['description']) ?>
      </p>

      <!-- Quick Trust Indicators -->
      <div class="mt-6 pt-6 border-t border-white/10 flex flex-wrap items-center gap-y-3 gap-x-6 text-xs text-slate-300 font-semibold">
        <span class="flex items-center gap-2">
          <i class="fa-solid fa-flask-vial text-brand-orange"></i>
          <span>Laboratory Lot Testing</span>
        </span>
        <span class="flex items-center gap-2">
          <i class="fa-solid fa-ship text-brand-green"></i>
          <span>CIF / CFR / FOB Maritime Freight</span>
        </span>
        <span class="flex items-center gap-2">
          <i class="fa-solid fa-file-shield text-brand-orange"></i>
          <span>Veterinary &amp; Origin Certification</span>
        </span>
        <span class="flex items-center gap-2">
          <i class="fa-solid fa-earth-europe text-brand-green"></i>
          <span>Denmark &amp; Singapore Trade Desks</span>
        </span>
      </div>

      <!-- Hero Call-to-Actions -->
      <div class="mt-8 flex flex-wrap items-center gap-4">
        <a href="<?= $quoteUrl ?>" class="btn-primary py-3 px-6 text-sm inline-flex items-center gap-2">
          <i class="fa-solid fa-file-invoice mr-1"></i>
          <span>Request Quote and Specialization</span>
          <i class="fa-solid fa-arrow-right text-xs ml-1" aria-hidden="true"></i>
        </a>
        <a href="https://wa.me/<?= CLIENT_PHONE_RAW ?>?text=<?= urlencode('Hello Kumar, I would like to request a quotation and specialization for ' . $product['name'] . '.') ?>"
          target="_blank"
          rel="noopener noreferrer"
          class="btn-secondary py-3 px-6 text-sm inline-flex items-center gap-2">
          <i class="fa-brands fa-whatsapp text-green-400 text-base"></i>
          <span>Direct WhatsApp Desk</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Main Detail & Technical Specifications Section -->
<section class="py-8 sm:py-10 lg:py-12 bg-brand-bg">
  <div class="site-container">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

      <!-- Left Column: Photography & Sourcing Credentials (5 cols) -->
      <div class="lg:col-span-5 space-y-8">

        <!-- Product Imagery Card -->
        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm group">
          <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
            <img src="<?= asset($product['image']) ?>"
              alt="<?= e($product['name']) ?>"
              loading="eager"
              width="800" height="500"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent pointer-events-none"></div>

            <div class="absolute top-4 left-4">
              <span class="px-3 py-1 rounded bg-white/95 backdrop-blur-sm text-brand-navy text-xs font-bold font-heading shadow-sm inline-flex items-center gap-1.5">
                <i class="fa-solid fa-certificate text-brand-green"></i>
                <span>COA Verified Lot</span>
              </span>
            </div>

            <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white text-xs">
              <span class="font-heading font-semibold text-slate-100 drop-shadow flex items-center gap-1.5">
                <i class="fa-solid fa-cube text-brand-orange"></i>
                <span><?= e($product['grades'][0] ?? 'Prime Quality') ?></span>
              </span>
              <span class="text-[11px] text-slate-200 bg-slate-900/70 px-2.5 py-1 rounded backdrop-blur-sm">
                <?= e($catTitle) ?>
              </span>
            </div>
          </div>

          <div class="p-5 bg-slate-50 border-t border-slate-100 text-xs text-slate-600 flex items-center justify-between">
            <span class="flex items-center gap-1.5 font-medium">
              <i class="fa-solid fa-camera text-slate-400"></i>
              <span>Representative Product Sample</span>
            </span>
            <span class="text-brand-green font-bold uppercase tracking-wider">
              Vetted Supply
            </span>
          </div>
        </div>

        <!-- Sourcing & Commercial Supply Card -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm space-y-4">
          <h3 class="text-lg font-bold text-brand-navy font-heading flex items-center gap-2 border-b border-slate-100 pb-3">
            <i class="fa-solid fa-boxes-stacked text-brand-orange"></i>
            <span>Logistics &amp; Sourcing Overview</span>
          </h3>

          <div class="space-y-3.5 text-xs">
            <div class="flex items-start justify-between gap-3">
              <span class="text-slate-500 font-semibold shrink-0">Trading Network:</span>
              <span class="text-brand-navy font-bold text-right">Denmark &amp; Singapore Trade Desks</span>
            </div>
            <div class="flex items-start justify-between gap-3 pt-2 border-t border-slate-100">
              <span class="text-slate-500 font-semibold shrink-0">Standard Packaging:</span>
              <span class="text-slate-700 text-right"><?= e($product['packaging']) ?></span>
            </div>
            <div class="flex items-start justify-between gap-3 pt-2 border-t border-slate-100">
              <span class="text-slate-500 font-semibold shrink-0">Supported Incoterms:</span>
              <span class="text-brand-navy font-bold text-right">CIF, CFR, FOB (Incoterms 2020)</span>
            </div>
            <div class="flex items-start justify-between gap-3 pt-2 border-t border-slate-100">
              <span class="text-slate-500 font-semibold shrink-0">Typical Batch Consignment:</span>
              <span class="text-slate-700 text-right">FCL (20-26 MT) or Break-Bulk / Trial Mixed Pallet</span>
            </div>
            <div class="flex items-start justify-between gap-3 pt-2 border-t border-slate-100">
              <span class="text-slate-500 font-semibold shrink-0">Testing Protocol:</span>
              <span class="text-slate-700 text-right">Third-party laboratory analysis / Official Veterinary COA</span>
            </div>
          </div>
        </div>

        <!-- Direct Commercial Contact Card -->
        <div class="bg-brand-navy text-white rounded-xl p-6 shadow-md relative overflow-hidden">
          <div class="relative z-10 space-y-4">
            <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-brand-orange bg-white/10 px-3 py-1 rounded-full">
              <i class="fa-solid fa-handshake"></i>
              <span>Commercial Trade Desk</span>
            </div>

            <div>
              <h4 class="text-lg font-bold font-heading text-white"><?= CLIENT_DIRECTOR ?></h4>
              <p class="text-xs text-slate-300">Director &bull; Himalayan Food and Feed</p>
            </div>

            <p class="text-xs text-slate-200 leading-relaxed">
              Connect directly with our commercial trading desk for volume availability, firm freight indications, and lot-specific COA verification.
            </p>

            <div class="space-y-2 pt-2 border-t border-white/10 text-xs">
              <a href="tel:<?= CLIENT_PHONE ?>" class="flex items-center gap-2.5 text-slate-200 hover:text-white transition-colors">
                <i class="fa-solid fa-phone text-brand-orange w-4"></i>
                <span class="font-mono"><?= CLIENT_PHONE ?></span>
              </a>
              <a href="mailto:<?= CLIENT_EMAIL ?>" class="flex items-center gap-2.5 text-slate-200 hover:text-white transition-colors">
                <i class="fa-solid fa-envelope text-brand-green w-4"></i>
                <span><?= CLIENT_EMAIL ?></span>
              </a>
              <div class="flex items-center gap-2.5 text-slate-300">
                <i class="fa-solid fa-location-dot text-brand-orange w-4"></i>
                <span><?= CLIENT_OFFICE_DENMARK ?></span>
              </div>
            </div>

            <div class="pt-2">
              <a href="https://wa.me/<?= CLIENT_PHONE_RAW ?>?text=<?= urlencode('Hello Kumar, I would like to inquire about sourcing ' . $product['name'] . '.') ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="w-full py-2.5 px-4 rounded-md bg-green-600 hover:bg-green-500 text-white font-heading font-bold text-xs uppercase tracking-wider text-center inline-flex items-center justify-center gap-2 transition-colors">
                <i class="fa-brands fa-whatsapp text-sm"></i>
                <span>Chat with Kumar on WhatsApp</span>
              </a>
            </div>
          </div>

          <!-- Decorative Ambient Element -->
          <div class="absolute -right-12 -bottom-12 w-40 h-40 bg-brand-green/10 rounded-full blur-2xl pointer-events-none"></div>
        </div>

      </div>

      <!-- Right Column: Technical Specifications & Full Dossier (7 cols) -->
      <div class="lg:col-span-7 space-y-8">

        <!-- Section 1: Detailed Overview -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 sm:p-8 shadow-sm">
          <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
            Ingredient Profile
          </div>
          <h2 class="text-2xl font-extrabold text-brand-navy font-heading mb-4">
            Commercial &amp; Nutritional Characterization
          </h2>
          <div class="prose max-w-none text-slate-600 text-sm sm:text-base leading-relaxed space-y-3">
            <p>
              <strong><?= e($product['name']) ?></strong> is coordinated and supplied through established global supply channels, meeting the rigorous demands of industrial feed mills, food processors, and livestock nutrition programs.
            </p>
            <p>
              Each shipment is inspected at the source facility for sensory purity, moisture uniformity, and compliance with the buyer's target chemical criteria. Sourcing protocols emphasize traceability, hygienic handling, and transparent documentation from port of origin to arrival destination.
            </p>
          </div>
        </div>

        <!-- Section 2: Target Applications & Target Sectors -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 sm:p-8 shadow-sm">
          <div class="text-xs font-bold uppercase tracking-wider text-brand-orange mb-2 font-heading">
            Formulation Scope
          </div>
          <h2 class="text-2xl font-extrabold text-brand-navy font-heading mb-3">
            Target Applications &amp; Livestock Sectors
          </h2>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            <?= e($product['application']) ?>
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
            <div class="flex items-center gap-3 p-3 rounded-lg bg-slate-50 border border-slate-100 text-xs">
              <span class="w-8 h-8 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center shrink-0">
                <i class="fa-solid fa-check"></i>
              </span>
              <span class="font-heading font-semibold text-slate-800">Precision Feed Mills &amp; Premix Formulators</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-lg bg-slate-50 border border-slate-100 text-xs">
              <span class="w-8 h-8 rounded-full bg-brand-orange/10 text-brand-orange flex items-center justify-center shrink-0">
                <i class="fa-solid fa-check"></i>
              </span>
              <span class="font-heading font-semibold text-slate-800">Commercial Poultry, Swine &amp; Aqua Rations</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-lg bg-slate-50 border border-slate-100 text-xs">
              <span class="w-8 h-8 rounded-full bg-brand-navy/10 text-brand-navy flex items-center justify-center shrink-0">
                <i class="fa-solid fa-check"></i>
              </span>
              <span class="font-heading font-semibold text-slate-800">Specialty Pet Food &amp; Extruded Nutrition</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-lg bg-slate-50 border border-slate-100 text-xs">
              <span class="w-8 h-8 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center shrink-0">
                <i class="fa-solid fa-check"></i>
              </span>
              <span class="font-heading font-semibold text-slate-800">Institutional Commodity Importers &amp; Wholesalers</span>
            </div>
          </div>
        </div>

        <!-- Section 3: Structured Specification Parameters Table -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 sm:p-8 shadow-sm">
          <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-1 font-heading">
                Quality Verification
              </div>
              <h2 class="text-2xl font-extrabold text-brand-navy font-heading">
                Indicative Technical Specifications
              </h2>
            </div>
            <span class="px-3 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold font-mono">
              Lot Certified
            </span>
          </div>

          <p class="text-slate-600 text-xs leading-relaxed mb-6">
            <?= e($product['specs_status']) ?>
          </p>

          <?php if (!empty($product['parameters'])): ?>
            <div class="overflow-x-auto border border-slate-200 rounded-lg">
              <table class="w-full text-left text-xs border-collapse">
                <thead>
                  <tr class="bg-slate-50 border-b border-slate-200 text-slate-800 font-heading font-bold">
                    <th class="py-3 px-4">Parameter / Test Indicator</th>
                    <th class="py-3 px-4">Indicative Commercial Value</th>
                    <th class="py-3 px-4 text-right">Verification Basis</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700">
                  <?php foreach ($product['parameters'] as $param): ?>
                    <tr class="hover:bg-slate-50/60 transition-colors">
                      <td class="py-3 px-4 font-semibold text-slate-900"><?= e($param['param']) ?></td>
                      <td class="py-3 px-4 font-mono font-medium text-brand-navy"><?= e($param['val']) ?></td>
                      <td class="py-3 px-4 text-right text-slate-500">Lot COA Certified</td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php endif; ?>

          <!-- Commercial Disclaimer Alert Box -->
          <div class="mt-6 p-4 rounded-xl bg-amber-50/90 border border-amber-200 text-amber-900 text-xs leading-relaxed flex items-start gap-3">
            <i class="fa-solid fa-circle-info text-brand-orange text-base mt-0.5 shrink-0"></i>
            <div>
              <strong class="font-heading font-bold block mb-0.5">Commercial Specification Guarantee:</strong>
              Numerical values represent standard indicative trade ranges across commercial production lots. Final contract parameters, microbiological limits, heavy metal thresholds, and guaranteed minimums/maximums are agreed in the formal sales contract and verified by an official Certificate of Analysis (COA) prior to dispatch.
            </div>
          </div>
        </div>

        <!-- Section 4: Available Commercial Grades & Packaging -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 sm:p-8 shadow-sm">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Grades Column -->
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-brand-orange mb-2 font-heading">
                Quality Tiers
              </div>
              <h3 class="text-lg font-bold text-brand-navy font-heading mb-3">
                Available Commercial Grades
              </h3>
              <ul class="space-y-2 text-xs">
                <?php foreach ($product['grades'] as $grade): ?>
                  <li class="flex items-center gap-2 text-slate-700">
                    <i class="fa-solid fa-circle-check text-brand-green text-xs shrink-0"></i>
                    <span class="font-semibold text-slate-900"><?= e($grade) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <!-- Packaging Column -->
            <div class="md:border-l md:border-slate-200 md:pl-6">
              <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
                Packaging Configurations
              </div>
              <h3 class="text-lg font-bold text-brand-navy font-heading mb-3">
                Packing &amp; Containment
              </h3>
              <p class="text-slate-600 text-xs leading-relaxed mb-3">
                <?= e($product['packaging']) ?>
              </p>
              <div class="flex items-center gap-2 text-xs text-slate-500 font-semibold">
                <i class="fa-solid fa-truck-ramp-box text-brand-orange"></i>
                <span>Custom private labeling available for contract volumes</span>
              </div>
            </div>

          </div>
        </div>

        <!-- Section 5: Export & Regulatory Documentation Pack -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 sm:p-8 shadow-sm">
          <div class="text-xs font-bold uppercase tracking-wider text-brand-navy mb-2 font-heading">
            Trade Assurance
          </div>
          <h2 class="text-2xl font-extrabold text-brand-navy font-heading mb-3">
            Export &amp; Regulatory Documentation Pack
          </h2>
          <p class="text-slate-600 text-xs leading-relaxed mb-4">
            Every shipment dispatched through Himalayan Food and Feed is accompanied by a full dossier of international compliance documents:
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
            <div class="flex items-start gap-2.5 p-3 rounded-lg bg-slate-50 border border-slate-100">
              <i class="fa-solid fa-file-shield text-brand-green text-sm mt-0.5 shrink-0"></i>
              <div>
                <span class="font-bold text-slate-900 block font-heading">Certificate of Analysis (COA)</span>
                <span class="text-slate-500">Official lot assay confirming parameter compliance.</span>
              </div>
            </div>

            <div class="flex items-start gap-2.5 p-3 rounded-lg bg-slate-50 border border-slate-100">
              <i class="fa-solid fa-stamp text-brand-orange text-sm mt-0.5 shrink-0"></i>
              <div>
                <span class="font-bold text-slate-900 block font-heading">Certificate of Origin (COO)</span>
                <span class="text-slate-500">Chamber of Commerce origin authentication.</span>
              </div>
            </div>

            <div class="flex items-start gap-2.5 p-3 rounded-lg bg-slate-50 border border-slate-100">
              <i class="fa-solid fa-clipboard-check text-brand-green text-sm mt-0.5 shrink-0"></i>
              <div>
                <span class="font-bold text-slate-900 block font-heading">Veterinary / Health Certificate</span>
                <span class="text-slate-500">Government authority export clearance.</span>
              </div>
            </div>

            <div class="flex items-start gap-2.5 p-3 rounded-lg bg-slate-50 border border-slate-100">
              <i class="fa-solid fa-file-invoice-dollar text-brand-navy text-sm mt-0.5 shrink-0"></i>
              <div>
                <span class="font-bold text-slate-900 block font-heading">Shipping &amp; Commercial Papers</span>
                <span class="text-slate-500">Clean Ocean Bill of Lading, Invoice &amp; Packing List.</span>
              </div>
            </div>
          </div>

          <div class="mt-4 pt-4 border-t border-slate-100 text-xs text-slate-600">
            <strong>Applicable Lot Requirements:</strong> <?= e($product['doc_requirements']) ?>
          </div>
        </div>
        <div class="pt-2">
          <!-- <a href="<?= $quoteUrl ?>"
            class="btn-primary w-full sm:w-auto text-sm sm:text-base md:text-lg py-3.5 sm:py-4 px-5 sm:px-8 md:px-10 rounded-xl shadow-md hover:shadow-xl inline-flex items-center justify-center gap-2.5 sm:gap-3 group transition-all duration-200 font-bold font-heading hover:-translate-y-0.5 text-center leading-snug sm:leading-normal">
            <i class="fa-solid fa-file-invoice text-base sm:text-lg shrink-0" aria-hidden="true"></i>
            <span>Request Quote and Specialization</span>
            <i class="fa-solid fa-arrow-right text-xs sm:text-sm shrink-0 transition-transform duration-200 group-hover:translate-x-1.5" aria-hidden="true"></i>
          </a> -->
          <a href="<?= $quoteUrl ?>" class="btn-primary py-3 px-6 text-sm inline-flex items-center gap-2">
            <i class="fa-solid fa-file-invoice mr-1"></i>
            <span>Request Quote and Specialization</span>
            <i class="fa-solid fa-arrow-right text-xs ml-1" aria-hidden="true"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Section: Related Products in this Category -->
<?php if (!empty($relatedItems)): ?>
  <section class="py-10 sm:py-12 lg:py-14 bg-brand-bg border-t border-slate-200">
    <div class="site-container">
      <div class="flex flex-wrap items-end justify-between gap-4 mb-10">
        <div>
          <div class="text-xs font-bold uppercase tracking-wider text-brand-orange mb-2 font-heading">
            Explore Related Products
          </div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-navy font-heading">
            Other Products in <?= e($catTitle) ?>
          </h2>
        </div>
        <a href="<?= url($catUrl) ?>" class="text-xs font-bold text-brand-navy hover:text-brand-orange inline-flex items-center gap-1.5 transition-colors font-heading uppercase tracking-wider">
          <span>View Full Category</span>
          <i class="fa-solid fa-arrow-right text-[11px]"></i>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($relatedItems as $item): ?>
          <div class="product-card group bg-white rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden">
            <!-- Thumbnail Header -->
            <div class="relative aspect-[16/10] overflow-hidden bg-slate-100 border-b border-slate-100">
              <a href="<?= url('product-detail.php?id=' . urlencode($item['id'])) ?>" class="block w-full h-full">
                <img src="<?= asset($item['image']) ?>"
                  alt="<?= e($item['name']) ?>"
                  loading="lazy"
                  width="640"
                  height="400"
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
              </a>
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent pointer-events-none"></div>
              <div class="absolute top-3 left-3">
                <span class="px-2.5 py-1 rounded bg-white/95 backdrop-blur-sm text-brand-navy text-[11px] font-bold font-heading shadow-sm inline-flex items-center gap-1.5">
                  <i class="fa-solid fa-certificate text-brand-green"></i>
                  <span>COA Verified</span>
                </span>
              </div>
              <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs">
                <span class="font-heading font-semibold text-slate-100 drop-shadow flex items-center gap-1.5">
                  <i class="fa-solid fa-cube text-brand-orange"></i>
                  <span><?= e($item['grades'][0] ?? 'Export Grade') ?></span>
                </span>
                <span class="text-[11px] text-slate-200 bg-slate-900/60 px-2 py-0.5 rounded backdrop-blur-sm">
                  <?= e($catTitle) ?>
                </span>
              </div>
            </div>

            <!-- Card Body -->
            <div class="p-6 flex flex-col flex-grow">
              <h3 class="text-lg font-bold text-brand-navy font-heading group-hover:text-brand-green transition-colors mb-2">
                <a href="<?= url('product-detail.php?id=' . urlencode($item['id'])) ?>">
                  <?= e($item['name']) ?>
                </a>
              </h3>

              <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                <?= e($item['description']) ?>
              </p>

              <div class="pt-4 border-t border-slate-100 mt-auto">
                <a href="<?= url('product-detail.php?id=' . urlencode($item['id'])) ?>"
                  class="btn-primary text-xs py-2.5 px-4 w-full text-center justify-center inline-flex items-center gap-2 group-hover:bg-brand-navy-dark group-hover:text-white hover:text-white transition-colors">
                  <span>View Details</span>
                  <i class="fa-solid fa-arrow-right text-[11px] transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Section: Site CTA Banner -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>