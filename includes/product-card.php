<?php
/**
 * Himalayan Food and Feed - Reusable Product Card Component
 */
if (isset($productCategory)):
    // Renders a category card
?>
  <div class="product-card group" data-product-category="<?= e($productCategory['id']) ?>">
    <div class="product-img-wrapper">
      <img src="<?= asset($productCategory['image']) ?>" 
           alt="<?= e($productCategory['title']) ?>" 
           loading="lazy" 
           width="400" 
           height="250"
           class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
      <div class="absolute bottom-3 left-3 text-white flex items-center gap-2">
        <span class="w-8 h-8 rounded-full bg-brand-green/90 flex items-center justify-center text-sm shadow">
          <i class="fa-solid <?= e($productCategory['icon']) ?>"></i>
        </span>
        <span class="text-xs font-bold font-heading uppercase tracking-wider text-slate-200">
          <?= count($productCategory['items']) ?> Products
        </span>
      </div>
    </div>
    <div class="p-6 flex flex-col flex-grow">
      <h3 class="text-xl font-extrabold text-brand-navy mb-2 font-heading group-hover:text-brand-green transition-colors">
        <a href="<?= url($productCategory['url']) ?>" class="after:absolute after:inset-0">
          <?= e($productCategory['title']) ?>
        </a>
      </h3>
      <p class="text-slate-600 text-sm mb-4 leading-relaxed flex-grow">
        <?= e($productCategory['short_desc']) ?>
      </p>
      <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-brand-navy font-heading">
        <span class="flex items-center gap-1 group-hover:text-brand-orange transition-colors">
          <span>View Specifications</span>
          <i class="fa-solid fa-arrow-right text-[10px]"></i>
        </span>
        <span class="text-slate-400 font-normal">B2B Supply</span>
      </div>
    </div>
  </div>
<?php elseif (isset($productItem)): 
    // Renders an individual product item card
    $itemImg = $productItem['image'] ?? ('assets/images/products/items/' . ($productItem['id'] ?? 'item') . '.webp');
?>
  <div class="product-card group flex flex-col overflow-hidden bg-white rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300" data-product-category="<?= e($productItem['cat_id'] ?? '') ?>">
    <!-- Product Thumbnail Image -->
    <div class="product-img-wrapper relative aspect-[16/10] overflow-hidden bg-slate-100 border-b border-slate-100">
      <a href="<?= url('product-detail.php?id=' . urlencode($productItem['id'])) ?>" class="block w-full h-full">
        <img src="<?= asset($itemImg) ?>" 
             alt="<?= e($productItem['name']) ?>" 
             loading="lazy" 
             width="640" 
             height="400"
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
      </a>
      <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent pointer-events-none"></div>
      <div class="absolute top-3 left-3">
        <span class="px-2.5 py-1 rounded bg-white/95 backdrop-blur-sm text-slate-800 text-[11px] font-bold font-heading shadow-sm inline-flex items-center gap-1.5">
          <i class="fa-solid fa-circle-check text-brand-green"></i>
          <span><?= e($productItem['category'] ?? 'Feed & Food') ?></span>
        </span>
      </div>
      <div class="absolute bottom-2.5 right-3">
        <span class="px-2 py-0.5 rounded bg-brand-navy/90 text-white text-[10px] font-bold font-heading uppercase tracking-wider">
          B2B Supply
        </span>
      </div>
    </div>

    <div class="p-6 flex flex-col flex-grow">
      <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading group-hover:text-brand-green transition-colors">
        <a href="<?= url('product-detail.php?id=' . urlencode($productItem['id'])) ?>">
          <?= e($productItem['name']) ?>
        </a>
      </h3>

      <p class="text-slate-600 text-sm mb-6 leading-relaxed flex-grow">
        <?= e($productItem['description']) ?>
      </p>

      <!-- Actions: View Details -->
      <div class="pt-4 border-t border-slate-100 mt-auto">
        <a href="<?= url('product-detail.php?id=' . urlencode($productItem['id'])) ?>" 
           class="btn-primary text-xs py-2.5 px-4 w-full text-center justify-center inline-flex items-center gap-2 group-hover:bg-brand-navy-dark group-hover:text-white hover:text-white transition-colors">
          <span>View Details</span>
          <i class="fa-solid fa-arrow-right text-[11px] transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
<?php endif; ?>
