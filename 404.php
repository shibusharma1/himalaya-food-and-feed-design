<?php
/**
 * Himalayan Food and Feed - Custom 404 Error Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';

// Emit true 404 HTTP response status
http_response_code(404);

$pageSeo = [
    'title' => 'Page Not Found (404) | Himalayan Food and Feed',
    'description' => 'The requested commodity or trade page could not be located. Browse our product catalog or contact our commercial desk.',
    'canonical' => url('404.php'),
    'robots' => 'noindex, follow',
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => '404 Not Found', 'url' => url('404.php')]
    ]
];
$currentPageKey = '404';

require __DIR__ . '/includes/header.php';
?>

<section class="py-20 md:py-28 bg-brand-bg flex-grow flex items-center">
  <div class="site-container max-w-2xl text-center">
    <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-amber-100 text-brand-orange text-3xl font-extrabold mb-6 shadow-sm">
      <i class="fa-solid fa-triangle-exclamation"></i>
    </div>
    
    <span class="text-xs font-bold uppercase tracking-widest text-brand-green font-heading block mb-2">
      HTTP Error 404
    </span>
    
    <h1 class="text-4xl sm:text-5xl font-extrabold text-brand-navy mb-4 font-heading">
      Page Not Found
    </h1>
    
    <p class="text-slate-600 text-base sm:text-lg leading-relaxed mb-8 max-w-lg mx-auto">
      The specific page, commodity specification, or link you are seeking has been moved or does not exist. Please browse our product catalog or contact our commercial desk.
    </p>

    <div class="flex flex-wrap items-center justify-center gap-4">
      <a href="<?= url('index.php') ?>" class="btn-primary py-3 px-6 text-sm">
        <i class="fa-solid fa-house mr-1"></i>
        <span>Return to Homepage</span>
      </a>
      <a href="<?= url('products.php') ?>" class="btn-green py-3 px-6 text-sm">
        <i class="fa-solid fa-boxes-stacked mr-1"></i>
        <span>Explore All Products</span>
      </a>
      <a href="<?= url('contact.php') ?>" class="btn-outline-navy py-3 px-6 text-sm">
        <i class="fa-solid fa-envelope mr-1"></i>
        <span>Contact Trading Desk</span>
      </a>
    </div>

    <!-- Quick Links Box -->
    <div class="mt-12 p-6 rounded-xl bg-white border border-slate-200 shadow-sm text-left max-w-lg mx-auto">
      <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500 font-heading mb-3">
        Popular Product Lines:
      </h3>
      <div class="grid grid-cols-2 gap-2 text-xs">
        <a href="<?= url('products/animal-proteins.php') ?>" class="text-brand-navy hover:text-brand-green font-semibold flex items-center gap-1.5">
          <i class="fa-solid fa-chevron-right text-[10px] text-brand-orange"></i> Animal Proteins
        </a>
        <a href="<?= url('products/plant-proteins.php') ?>" class="text-brand-navy hover:text-brand-green font-semibold flex items-center gap-1.5">
          <i class="fa-solid fa-chevron-right text-[10px] text-brand-orange"></i> Plant Proteins
        </a>
        <a href="<?= url('products/feed-additives.php') ?>" class="text-brand-navy hover:text-brand-green font-semibold flex items-center gap-1.5">
          <i class="fa-solid fa-chevron-right text-[10px] text-brand-orange"></i> Feed Additives
        </a>
        <a href="<?= url('products/minerals.php') ?>" class="text-brand-navy hover:text-brand-green font-semibold flex items-center gap-1.5">
          <i class="fa-solid fa-chevron-right text-[10px] text-brand-orange"></i> Feed Minerals
        </a>
        <a href="<?= url('products/food-ingredients.php') ?>" class="text-brand-navy hover:text-brand-green font-semibold flex items-center gap-1.5">
          <i class="fa-solid fa-chevron-right text-[10px] text-brand-orange"></i> Food Ingredients
        </a>
        <a href="<?= url('products/pet-food.php') ?>" class="text-brand-navy hover:text-brand-green font-semibold flex items-center gap-1.5">
          <i class="fa-solid fa-chevron-right text-[10px] text-brand-orange"></i> Pet Food
        </a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
