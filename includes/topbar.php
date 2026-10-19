<?php
/**
 * Himalayan Food and Feed - Topbar Partial
 */
?>
<div class="topbar py-2 px-4 hidden md:block">
  <div class="site-container flex flex-wrap items-center justify-between gap-4 text-xs">
    <div class="flex items-center gap-6">
      <span class="flex items-center gap-2 text-slate-300">
        <i class="fa-solid fa-location-dot text-brand-orange"></i>
        <span>Offices: <strong>Denmark &amp; Singapore</strong> | Saven 2630, Denmark</span>
      </span>
      <span class="text-slate-500">|</span>
      <span class="text-slate-300 flex items-center gap-1.5">
        <i class="fa-solid fa-shield-halved text-brand-green"></i>
        <span>B2B International Food &amp; Feed Ingredients</span>
      </span>
    </div>
    <div class="flex items-center gap-5">
      <a href="mailto:<?= CLIENT_EMAIL ?>" class="text-slate-200 hover:text-brand-orange transition-colors flex items-center gap-1.5">
        <i class="fa-solid fa-envelope text-brand-orange"></i>
        <span><?= CLIENT_EMAIL ?></span>
      </a>
      <a href="tel:<?= CLIENT_PHONE_RAW ?>" class="text-slate-200 hover:text-brand-orange transition-colors flex items-center gap-1.5">
        <i class="fa-solid fa-phone text-brand-green"></i>
        <span><?= CLIENT_PHONE ?></span>
      </a>
    </div>
  </div>
</div>
