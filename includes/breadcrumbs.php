<?php
/**
 * Himalayan Food and Feed - Breadcrumb Component
 */
$breadcrumbs = $breadcrumbs ?? ($pageSeo['breadcrumbs'] ?? []);
if (!empty($breadcrumbs) && count($breadcrumbs) > 1):
?>
<nav class="breadcrumb-nav py-3 text-sm text-slate-300" aria-label="Breadcrumbs">
  <ol class="flex flex-wrap items-center gap-2 list-none p-0 m-0">
    <?php foreach ($breadcrumbs as $i => $crumb): ?>
      <?php $isLast = ($i === count($breadcrumbs) - 1); ?>
      <li class="flex items-center gap-2">
        <?php if (!$isLast): ?>
          <a href="<?= e($crumb['url']) ?>" class="hover:text-brand-orange text-slate-300 transition-colors">
            <?= e($crumb['name']) ?>
          </a>
          <span class="text-slate-500 text-xs" aria-hidden="true">/</span>
        <?php else: ?>
          <span class="text-white font-semibold" aria-current="page">
            <?= e($crumb['name']) ?>
          </span>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</nav>
<?php endif; ?>
