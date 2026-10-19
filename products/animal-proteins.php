<?php
/**
 * Himalayan Food and Feed - Animal Proteins Category Detail Page
 */
require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../config/seo.php';
require_once __DIR__ . '/../config/products.php';

$catId = 'animal-proteins';
$category = get_category($catId);
if (!$category) {
    header("Location: " . url('products.php'));
    exit;
}

$pageSeo = [
    'title' => 'Animal Proteins | Meat and Bone Meal, Poultry Meal, Fish Meal & Feather Meal',
    'description' => 'Source high-protein animal feed ingredients: Meat & Bone Meal (MBM), Poultry By-Product Meal, Fish Meal, and Hydrolyzed Feather Meal. International supply from Denmark & Singapore.',
    'canonical' => url('products/animal-proteins.php'),
    'og_image' => url($category['image']),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Products', 'url' => url('products.php')],
        ['name' => $category['title'], 'url' => url('products/animal-proteins.php')]
    ]
];
$currentPageKey = 'products/animal-proteins';

$structuredDataExtra = get_collection_schema(
    $category['title'],
    $category['overview'],
    $category['items']
);

require __DIR__ . '/../includes/header.php';
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="absolute inset-0 z-0">
    <img src="<?= asset($category['image']) ?>" 
         alt="<?= e($category['title']) ?> feed ingredients" 
         width="800" height="533"
         class="w-full h-full object-cover opacity-20">
    <div class="absolute inset-0 bg-brand-navy/90"></div>
  </div>

  <div class="site-container relative z-10">
    <?php require __DIR__ . '/../includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>High-Density Amino Acid Nutrition</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        <?= e($category['title']) ?>
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        <?= e($category['tagline']) ?>
      </p>
    </div>
  </div>
</div>

<!-- Category Overview -->
<section class="py-12 bg-white border-b border-slate-200">
  <div class="site-container">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      <div class="lg:col-span-8">
        <h2 class="text-2xl font-bold text-brand-navy font-heading mb-3">Commercial Overview</h2>
        <p class="text-slate-600 leading-relaxed text-base mb-4">
          <?= e($category['overview']) ?>
        </p>
        <div class="flex flex-wrap items-center gap-6 text-xs text-slate-500 font-semibold">
          <span class="flex items-center gap-2 text-brand-navy">
            <i class="fa-solid fa-check-double text-brand-green"></i> Veterinary Inspected Facilities
          </span>
          <span class="flex items-center gap-2 text-brand-navy">
            <i class="fa-solid fa-flask-vial text-brand-orange"></i> Batch Digestibility Testing
          </span>
          <span class="flex items-center gap-2 text-brand-navy">
            <i class="fa-solid fa-ship text-brand-green"></i> Containerized Bulk &amp; Bagged Logistics
          </span>
        </div>
      </div>
      <div class="lg:col-span-4 bg-slate-50 p-6 rounded-xl border border-slate-200 text-center">
        <div class="text-xs font-bold uppercase tracking-wider text-slate-500 font-heading mb-2">Need a Quotation?</div>
        <p class="text-xs text-slate-600 mb-4">Share your crude protein target and monthly volume.</p>
        <a href="<?= url('contact.php?cat=' . urlencode($category['title']) . '#quote-form') ?>" class="btn-primary text-xs py-3 px-6 w-full justify-center">
          Request Animal Protein Quote
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Product Items Grid -->
<section class="py-16 md:py-24 bg-brand-bg">
  <div class="site-container">
    <div class="max-w-2xl mb-12">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
        Product Specifications
      </div>
      <h2 class="section-heading text-3xl font-extrabold text-brand-navy">
        Available Products &amp; Parameter Ranges
      </h2>
      <p class="lead-text mt-3">
        Explore each animal protein option below. Detailed Certificate of Analysis (COA) is provided for each production lot.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <?php foreach ($category['items'] as $item): ?>
        <div class="product-card group bg-white rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden">
          <!-- Product Photography Header -->
          <div class="relative aspect-[16/10] overflow-hidden bg-slate-100 border-b border-slate-100">
            <img src="<?= asset($item['image']) ?>" 
                 alt="<?= e($item['name']) ?>" 
                 loading="lazy" 
                 width="640" 
                 height="400" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
            <div class="absolute top-3 left-3">
              <span class="px-2.5 py-1 rounded bg-white/95 backdrop-blur-sm text-brand-navy text-[11px] font-bold font-heading shadow-sm inline-flex items-center gap-1.5">
                <i class="fa-solid fa-certificate text-brand-green"></i>
                <span>COA Verified</span>
              </span>
            </div>
            <div class="absolute top-3 right-3">
              <span class="px-2.5 py-1 rounded bg-green-700/90 backdrop-blur-sm text-white text-[11px] font-bold font-heading uppercase tracking-wider shadow-sm">
                Vetted Supply
              </span>
            </div>
            <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs">
              <span class="font-heading font-semibold text-slate-100 drop-shadow flex items-center gap-1.5">
                <i class="fa-solid fa-cube text-brand-orange"></i>
                <span><?= e($item['grades'][0] ?? 'Export Grade') ?></span>
              </span>
              <span class="text-[11px] text-slate-200 bg-slate-900/60 px-2 py-0.5 rounded backdrop-blur-sm">
                <?= e($category['title']) ?>
              </span>
            </div>
          </div>

          <!-- Product Details Body -->
          <div class="p-6 sm:p-7 flex flex-col flex-grow">
            <div class="flex items-start justify-between gap-4 mb-2.5">
              <h3 class="text-xl font-bold text-brand-navy font-heading group-hover:text-brand-green transition-colors m-0">
                <?= e($item['name']) ?>
              </h3>
            </div>

            <p class="text-slate-600 text-sm leading-relaxed mb-6">
              <?= e($item['description']) ?>
            </p>

            <div class="bg-slate-50 rounded-lg p-4 border border-slate-200/80 space-y-3 text-xs mb-6 mt-auto">
              <div>
                <strong class="text-slate-900 font-heading block mb-0.5">Target Applications:</strong>
                <span class="text-slate-600"><?= e($item['application']) ?></span>
              </div>
              <div class="pt-2 border-t border-slate-200">
                <strong class="text-brand-green font-heading block mb-0.5">Indicative Specification Range:</strong>
                <span class="text-slate-600"><?= e($item['specs_status']) ?></span>
              </div>
              <div class="pt-2 border-t border-slate-200">
                <strong class="text-slate-900 font-heading block mb-0.5">Standard Packaging:</strong>
                <span class="text-slate-600"><?= e($item['packaging']) ?></span>
              </div>
              <div class="pt-2 border-t border-slate-200">
                <strong class="text-brand-orange font-heading block mb-0.5">Documentation Supplied:</strong>
                <span class="text-slate-600"><?= e($item['doc_requirements']) ?></span>
              </div>
            </div>

            <div class="pt-2">
              <a href="<?= url('contact.php?product=' . urlencode($item['name']) . '&cat=' . urlencode($category['title']) . '#quote-form') ?>" 
                 class="btn-primary text-xs py-2.5 px-5 w-full text-center justify-center">
                <i class="fa-solid fa-file-invoice mr-1.5"></i>
                <span>Enquire for <?= e($item['name']) ?></span>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/../includes/cta-section.php'; ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
