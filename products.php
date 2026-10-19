<?php
/**
 * Himalayan Food and Feed - Complete Products Catalog Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

$pageSeo = [
    'title' => 'Products Catalog | Food, Animal Feed Proteins, Additives & Minerals',
    'description' => 'Browse our international B2B catalog: Animal Proteins (MBM, poultry meal, fish meal), Plant Proteins (soybean meal, DDGS), Feed Additives, Minerals (DCP/MCP), Food Ingredients, and Pet Food.',
    'canonical' => url('products.php'),
    'og_image' => url('assets/images/products/plant-proteins.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Products', 'url' => url('products.php')]
    ]
];
$currentPageKey = 'products';

// Add ItemList Schema
$allProducts = get_all_products();
$structuredDataExtra = get_collection_schema(
    'Himalayan Food and Feed Product Catalog',
    'Industrial raw materials, feed proteins, mineral ingredients, and food staples.',
    $allProducts
);

require __DIR__ . '/includes/header.php';
$categories = get_all_categories();
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="absolute inset-0 z-0">
    <img src="<?= asset('assets/images/hero/hero-feed-grain.webp') ?>" 
         alt="Agricultural grain harvest and commercial bulk feed ingredients" 
         width="1200" height="675"
         class="w-full h-full object-cover opacity-20">
    <div class="absolute inset-0 bg-brand-navy/90"></div>
  </div>

  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>B2B Commodity &amp; Ingredient Catalog</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        Our Complete Product Portfolio
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        Everything we supply, in one place. Explore our seven specialized product categories or filter by specific ingredient lines to view applications, parameter ranges, and packaging options.
      </p>
    </div>
  </div>
</div>

<!-- Category Overview Cards -->
<section class="py-12 bg-white border-b border-slate-200">
  <div class="site-container">
    <div class="flex items-center justify-between mb-8">
      <div>
        <h2 class="text-2xl font-extrabold text-brand-navy font-heading m-0">Product Lines</h2>
        <p class="text-xs text-slate-500 mt-1">Select any line to view its dedicated technical overview</p>
      </div>
      <a href="<?= url('contact.php#quote-form') ?>" class="btn-primary text-xs py-2 px-4 hidden sm:inline-flex">
        <span>Request Multi-Product Quote</span>
      </a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-4">
      <?php foreach ($categories as $cat): ?>
        <a href="<?= url($cat['url']) ?>" 
           class="p-4 rounded-xl bg-slate-50 border border-slate-200 hover:border-brand-green hover:shadow-md transition-all text-center flex flex-col items-center group">
          <span class="w-10 h-10 rounded-full bg-white text-brand-green border border-slate-200 flex items-center justify-center text-base mb-2 group-hover:bg-brand-green group-hover:text-white transition-colors">
            <i class="fa-solid <?= e($cat['icon']) ?>"></i>
          </span>
          <span class="text-xs font-bold text-slate-900 font-heading group-hover:text-brand-navy">
            <?= e($cat['title']) ?>
          </span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Filter Tabs & Product Grid -->
<section class="py-16 md:py-24 bg-brand-bg">
  <div class="site-container">
    
    <!-- Filter Navigation Buttons -->
    <div class="mb-10 flex flex-wrap items-center justify-center gap-2">
      <button type="button" 
              data-product-filter="all" 
              aria-selected="true"
              class="px-4 py-2 rounded-full font-heading font-bold text-xs uppercase tracking-wider transition-colors shadow-sm bg-navy text-white">
        All Products (<?= count($allProducts) ?>)
      </button>
      <?php foreach ($categories as $cat): ?>
        <button type="button" 
                data-product-filter="<?= e($cat['id']) ?>" 
                aria-selected="false"
                class="px-4 py-2 rounded-full font-heading font-bold text-xs uppercase tracking-wider transition-colors shadow-sm bg-white text-ink hover:bg-slate-100">
          <?= e($cat['title']) ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Product Grid -->
    <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($allProducts as $item): ?>
        <?php $productItem = $item; require __DIR__ . '/includes/product-card.php'; ?>
      <?php endforeach; ?>
    </div>

    <!-- Technical Accuracy & Specification Notice -->
    <div class="mt-16 p-6 rounded-2xl bg-amber-50/80 border border-amber-200 text-amber-900 text-sm leading-relaxed max-w-4xl mx-auto flex items-start gap-4">
      <i class="fa-solid fa-circle-info text-brand-orange text-xl mt-0.5 shrink-0"></i>
      <div>
        <strong class="font-heading font-bold block mb-1">Commercial Specification Notice:</strong>
        Numerical specifications cited above represent indicative trade ranges across commercial standard grades. Actual contract guarantees, maximum moisture limits, microbiological thresholds, and certified parameters are confirmed per production lot and verified via formal Certificate of Analysis (COA) prior to dispatch.
      </div>
    </div>

  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
