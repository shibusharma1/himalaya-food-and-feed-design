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
?>
  <div class="product-card p-6 flex flex-col" data-product-category="<?= e($productItem['cat_id'] ?? '') ?>">
    <div class="flex items-start justify-between gap-3 mb-3">
      <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-700 text-xs font-bold font-heading">
        <?= e($productItem['category'] ?? 'Feed & Food') ?>
      </span>
      <span class="text-brand-green text-sm">
        <i class="fa-solid fa-circle-check"></i>
      </span>
    </div>

    <h3 class="text-lg font-bold text-brand-navy mb-2 font-heading">
      <?= e($productItem['name']) ?>
    </h3>

    <p class="text-slate-600 text-sm mb-4 leading-relaxed">
      <?= e($productItem['description']) ?>
    </p>

    <!-- Indicative Specifications & Applications Box -->
    <div class="bg-slate-50 border border-slate-200 rounded-md p-3.5 mb-4 text-xs space-y-2 mt-auto">
      <div>
        <strong class="text-slate-900 font-heading block">Intended Application:</strong>
        <span class="text-slate-600"><?= e($productItem['application']) ?></span>
      </div>
      <div class="pt-1.5 border-t border-slate-200/60">
        <strong class="text-brand-green font-heading block">Specification Parameter:</strong>
        <span class="text-slate-600"><?= e($productItem['specs_status']) ?></span>
      </div>
      <?php if (!empty($productItem['packaging'])): ?>
        <div class="pt-1.5 border-t border-slate-200/60">
          <strong class="text-slate-900 font-heading block">Standard Packaging:</strong>
          <span class="text-slate-600"><?= e($productItem['packaging']) ?></span>
        </div>
      <?php endif; ?>
    </div>

    <!-- Actions -->
    <div class="pt-3 border-t border-slate-100 flex items-center justify-between gap-3">
      <a href="<?= url('contact.php?product=' . urlencode($productItem['name']) . '&cat=' . urlencode($productItem['category']) . '#quote-form') ?>" 
         class="btn-primary text-xs py-2 px-3.5 w-full text-center justify-center">
        <i class="fa-solid fa-file-pen"></i>
        <span>Request Quotation</span>
      </a>
    </div>
  </div>
<?php endif; ?>
