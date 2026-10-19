<?php
/**
 * Himalayan Food and Feed - Main Navigation Partial
 */
$currentPageKey = $currentPageKey ?? 'home';
?>
<header class="main-header w-full">
  <div class="site-container flex items-center justify-between py-3 gap-4">
    <!-- Brand Logo Lockup -->
    <a href="<?= url('index.php') ?>" class="flex items-center gap-3 text-decoration-none group" aria-label="Himalayan Food and Feed Homepage">
      <img src="<?= asset('assets/images/logo/logo-mark.png') ?>" 
           srcset="<?= asset('assets/images/logo/logo-mark.png') ?> 1x, <?= asset('assets/images/logo/logo-mark@2x.png') ?> 2x"
           alt="Himalayan Food and Feed Brand Emblem" 
           width="56" height="47"
           class="h-12 w-auto object-contain transition-transform group-hover:scale-105">
      <div class="flex flex-col">
        <span class="font-extrabold text-xl lg:text-2xl tracking-tight leading-none text-brand-navy font-heading">
          HIMALAYAN
        </span>
        <span class="font-bold text-[10px] lg:text-[11px] tracking-[0.2em] text-brand-green mt-1 font-heading">
          FOOD AND FEED
        </span>
      </div>
    </a>

    <!-- Desktop Navigation Menu -->
    <nav class="hidden lg:flex items-center gap-6" aria-label="Primary Navigation">
      <a href="<?= url('index.php') ?>" 
         class="nav-link <?= $currentPageKey === 'home' ? 'active' : '' ?>">
        Home
      </a>

      <a href="<?= url('about-us.php') ?>" 
         class="nav-link <?= $currentPageKey === 'about' ? 'active' : '' ?>">
        About Us
      </a>

      <!-- Products Dropdown -->
      <div class="relative nav-item-dropdown">
        <button type="button" 
                class="nav-link nav-dropdown-toggle flex items-center gap-1.5 <?= str_starts_with($currentPageKey, 'products') ? 'active' : '' ?>"
                aria-expanded="false" 
                aria-haspopup="true">
          <span>Products</span>
          <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200"></i>
        </button>
        <div class="nav-dropdown" role="menu">
          <div class="px-4 py-2 border-b border-slate-100 mb-1">
            <a href="<?= url('products.php') ?>" class="font-heading font-bold text-xs text-brand-navy hover:text-brand-orange uppercase tracking-wider flex items-center justify-between">
              <span>View All Products</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
          <a href="<?= url('products/animal-proteins.php') ?>" class="dropdown-link" role="menuitem">
            <i class="fa-solid fa-drumstick-bite text-brand-green"></i>
            <div>
              <div class="text-sm font-semibold text-slate-900">Animal Proteins</div>
              <div class="text-xs text-slate-500 font-normal">MBM, poultry meal, fish meal, feather meal</div>
            </div>
          </a>
          <a href="<?= url('products/plant-proteins.php') ?>" class="dropdown-link" role="menuitem">
            <i class="fa-solid fa-seedling text-brand-green"></i>
            <div>
              <div class="text-sm font-semibold text-slate-900">Plant Proteins</div>
              <div class="text-xs text-slate-500 font-normal">Soybean meal, corn gluten meal, DDGS</div>
            </div>
          </a>
          <a href="<?= url('products/feed-additives.php') ?>" class="dropdown-link" role="menuitem">
            <i class="fa-solid fa-flask text-brand-green"></i>
            <div>
              <div class="text-sm font-semibold text-slate-900">Feed Additives</div>
              <div class="text-xs text-slate-500 font-normal">Amino acids, choline chloride, binders</div>
            </div>
          </a>
          <a href="<?= url('products/minerals.php') ?>" class="dropdown-link" role="menuitem">
            <i class="fa-solid fa-cubes-stacked text-brand-green"></i>
            <div>
              <div class="text-sm font-semibold text-slate-900">Feed Minerals</div>
              <div class="text-xs text-slate-500 font-normal">DCP 18%, MCP 22% high bioavailable</div>
            </div>
          </a>
          <a href="<?= url('products/food-ingredients.php') ?>" class="dropdown-link" role="menuitem">
            <i class="fa-solid fa-wheat-awn text-brand-green"></i>
            <div>
              <div class="text-sm font-semibold text-slate-900">Food Ingredients</div>
              <div class="text-xs text-slate-500 font-normal">Commercial rice, soybeans, lentils, oils</div>
            </div>
          </a>
          <a href="<?= url('products/pet-food.php') ?>" class="dropdown-link" role="menuitem">
            <i class="fa-solid fa-paw text-brand-green"></i>
            <div>
              <div class="text-sm font-semibold text-slate-900">Pet Food Ingredients</div>
              <div class="text-xs text-slate-500 font-normal">Specialty low-ash meals &amp; formulation</div>
            </div>
          </a>
          <a href="<?= url('products/fmcg.php') ?>" class="dropdown-link" role="menuitem">
            <i class="fa-solid fa-boxes-packing text-brand-green"></i>
            <div>
              <div class="text-sm font-semibold text-slate-900">FMCG Goods</div>
              <div class="text-xs text-slate-500 font-normal">Packaged consumer trade products</div>
            </div>
          </a>
        </div>
      </div>

      <a href="<?= url('services.php') ?>" 
         class="nav-link <?= $currentPageKey === 'services' ? 'active' : '' ?>">
        Services
      </a>

      <a href="<?= url('why-choose-us.php') ?>" 
         class="nav-link <?= $currentPageKey === 'why' ? 'active' : '' ?>">
        Why Choose Us
      </a>

      <a href="<?= url('quality.php') ?>" 
         class="nav-link <?= $currentPageKey === 'quality' ? 'active' : '' ?>">
        Quality &amp; Specs
      </a>

      <a href="<?= url('contact.php') ?>" 
         class="nav-link <?= $currentPageKey === 'contact' ? 'active' : '' ?>">
        Contact
      </a>
    </nav>

    <!-- Header Actions (Quote CTA & Mobile Hamburger) -->
    <div class="flex items-center gap-3">
      <a href="<?= url('contact.php#quote-form') ?>" class="btn-primary hidden sm:inline-flex py-2.5 px-5 text-sm">
        <i class="fa-solid fa-file-lines text-xs"></i>
        <span>Request a Quote</span>
      </a>

      <!-- Mobile Hamburger Toggle -->
      <button type="button" 
              id="mobile-menu-toggle" 
              class="lg:hidden p-2 rounded-md text-brand-navy hover:bg-slate-100 focus:outline-none"
              aria-label="Open mobile navigation menu" 
              aria-expanded="false" 
              aria-controls="mobile-drawer">
        <i class="fa-solid fa-bars text-2xl"></i>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div id="mobile-overlay" class="mobile-overlay" aria-hidden="true"></div>
<div id="mobile-drawer" class="mobile-drawer" role="dialog" aria-modal="true" aria-label="Mobile Navigation Menu">
  <div class="flex items-center justify-between pb-4 border-b border-slate-200 mb-6">
    <div class="flex items-center gap-2">
      <img src="<?= asset('assets/images/logo/logo-mark.png') ?>" alt="Logo" class="h-9 w-auto">
      <span class="font-extrabold text-base tracking-tight text-brand-navy">HIMALAYAN</span>
    </div>
    <button type="button" 
            id="mobile-menu-close" 
            class="p-2 text-slate-600 hover:text-brand-navy focus:outline-none"
            aria-label="Close navigation menu">
      <i class="fa-solid fa-xmark text-2xl"></i>
    </button>
  </div>

  <nav class="flex flex-col gap-1 text-base font-semibold font-heading" aria-label="Mobile menu links">
    <a href="<?= url('index.php') ?>" class="py-2.5 px-3 rounded hover:bg-slate-100 <?= $currentPageKey === 'home' ? 'text-brand-green font-bold bg-slate-50' : 'text-slate-800' ?>">Home</a>
    <a href="<?= url('about-us.php') ?>" class="py-2.5 px-3 rounded hover:bg-slate-100 <?= $currentPageKey === 'about' ? 'text-brand-green font-bold bg-slate-50' : 'text-slate-800' ?>">About Us</a>
    
    <div class="py-2 px-3 text-xs uppercase tracking-wider text-slate-400 font-bold mt-2">Products</div>
    <a href="<?= url('products.php') ?>" class="py-2 px-4 rounded text-sm hover:bg-slate-100 <?= $currentPageKey === 'products' ? 'text-brand-green font-bold' : 'text-slate-700' ?>">All Products Overview</a>
    <a href="<?= url('products/animal-proteins.php') ?>" class="py-2 px-4 rounded text-sm hover:bg-slate-100 text-slate-700">Animal Proteins</a>
    <a href="<?= url('products/plant-proteins.php') ?>" class="py-2 px-4 rounded text-sm hover:bg-slate-100 text-slate-700">Plant Proteins</a>
    <a href="<?= url('products/feed-additives.php') ?>" class="py-2 px-4 rounded text-sm hover:bg-slate-100 text-slate-700">Feed Additives</a>
    <a href="<?= url('products/minerals.php') ?>" class="py-2 px-4 rounded text-sm hover:bg-slate-100 text-slate-700">Feed Minerals</a>
    <a href="<?= url('products/food-ingredients.php') ?>" class="py-2 px-4 rounded text-sm hover:bg-slate-100 text-slate-700">Food Ingredients</a>
    <a href="<?= url('products/pet-food.php') ?>" class="py-2 px-4 rounded text-sm hover:bg-slate-100 text-slate-700">Pet Food</a>
    <a href="<?= url('products/fmcg.php') ?>" class="py-2 px-4 rounded text-sm hover:bg-slate-100 text-slate-700">FMCG Goods</a>

    <div class="py-2 px-3 text-xs uppercase tracking-wider text-slate-400 font-bold mt-2">Company &amp; Trade</div>
    <a href="<?= url('services.php') ?>" class="py-2.5 px-3 rounded hover:bg-slate-100 <?= $currentPageKey === 'services' ? 'text-brand-green font-bold bg-slate-50' : 'text-slate-800' ?>">Services</a>
    <a href="<?= url('why-choose-us.php') ?>" class="py-2.5 px-3 rounded hover:bg-slate-100 <?= $currentPageKey === 'why' ? 'text-brand-green font-bold bg-slate-50' : 'text-slate-800' ?>">Why Choose Us</a>
    <a href="<?= url('quality.php') ?>" class="py-2.5 px-3 rounded hover:bg-slate-100 <?= $currentPageKey === 'quality' ? 'text-brand-green font-bold bg-slate-50' : 'text-slate-800' ?>">Quality &amp; Documentation</a>
    <a href="<?= url('markets.php') ?>" class="py-2.5 px-3 rounded hover:bg-slate-100 <?= $currentPageKey === 'markets' ? 'text-brand-green font-bold bg-slate-50' : 'text-slate-800' ?>">Markets &amp; Global Trade</a>
    <a href="<?= url('faq.php') ?>" class="py-2.5 px-3 rounded hover:bg-slate-100 <?= $currentPageKey === 'faq' ? 'text-brand-green font-bold bg-slate-50' : 'text-slate-800' ?>">Frequently Asked Questions</a>
    <a href="<?= url('contact.php') ?>" class="py-2.5 px-3 rounded hover:bg-slate-100 <?= $currentPageKey === 'contact' ? 'text-brand-green font-bold bg-slate-50' : 'text-slate-800' ?>">Contact &amp; Quotes</a>
  </nav>

  <div class="mt-auto pt-6 border-t border-slate-200">
    <a href="<?= url('contact.php#quote-form') ?>" class="btn-primary w-full text-center justify-center mb-3">
      Request a Quote
    </a>
    <div class="text-xs text-slate-500 text-center">
      <div>Offices: Denmark &amp; Singapore</div>
      <div class="mt-1"><a href="tel:<?= CLIENT_PHONE_RAW ?>" class="font-semibold text-brand-navy"><?= CLIENT_PHONE ?></a></div>
    </div>
  </div>
</div>
