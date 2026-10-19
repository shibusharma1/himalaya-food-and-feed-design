<?php
/**
 * Himalayan Food and Feed - Shared Footer Partial
 */
?>
  </main><!-- End #main-content -->

  <footer class="bg-brand-navy text-white pt-16 pb-8 border-t-4 border-brand-green relative overflow-hidden" role="contentinfo">
    <div class="site-container">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-700/60 text-sm">
        
        <!-- Column 1: Company Info & Emblem (Span 2 on lg) -->
        <div class="lg:col-span-2">
          <a href="<?= url('index.php') ?>" class="inline-flex items-center gap-3 text-white text-decoration-none mb-4 group">
            <img src="<?= asset('assets/images/logo/logo-mark.png') ?>" 
                 srcset="<?= asset('assets/images/logo/logo-mark.png') ?> 1x, <?= asset('assets/images/logo/logo-mark@2x.png') ?> 2x"
                 alt="Himalayan Food and Feed Emblem" 
                 width="50" height="42"
                 class="h-10 w-auto object-contain bg-white/10 rounded p-1">
            <div class="flex flex-col">
              <span class="font-extrabold text-xl tracking-tight text-white font-heading">HIMALAYAN</span>
              <span class="font-bold text-[10px] tracking-[0.2em] text-brand-green font-heading">FOOD AND FEED</span>
            </div>
          </a>
          <p class="text-slate-300 text-sm leading-relaxed max-w-sm mb-5">
            International B2B partner supplying animal and plant proteins, specialty feed additives, minerals, food staples, and pet food raw materials. Dedicated to specification-first sourcing and verified trade coordination.
          </p>
          <div class="p-3.5 rounded-lg bg-white/5 border border-white/10 text-xs text-slate-300 space-y-1.5 max-w-sm">
            <div><strong class="text-white">Dual Presence:</strong> Denmark &amp; Singapore</div>
            <div><strong class="text-white">Commercial Desk:</strong> Saven 2630, Denmark</div>
          </div>
        </div>

        <!-- Column 2: Product Lines -->
        <div>
          <h4 class="text-white font-bold text-sm uppercase tracking-wider font-heading mb-4 text-brand-orange">
            Product Categories
          </h4>
          <ul class="space-y-2.5 text-slate-300 p-0 m-0 list-none">
            <li><a href="<?= url('products/animal-proteins.php') ?>" class="hover:text-white hover:underline transition-colors">Animal Proteins</a></li>
            <li><a href="<?= url('products/plant-proteins.php') ?>" class="hover:text-white hover:underline transition-colors">Plant Proteins</a></li>
            <li><a href="<?= url('products/feed-additives.php') ?>" class="hover:text-white hover:underline transition-colors">Feed Additives</a></li>
            <li><a href="<?= url('products/minerals.php') ?>" class="hover:text-white hover:underline transition-colors">Feed Minerals (DCP/MCP)</a></li>
            <li><a href="<?= url('products/food-ingredients.php') ?>" class="hover:text-white hover:underline transition-colors">Food Ingredients &amp; Rice</a></li>
            <li><a href="<?= url('products/pet-food.php') ?>" class="hover:text-white hover:underline transition-colors">Pet Food Ingredients</a></li>
            <li><a href="<?= url('products/fmcg.php') ?>" class="hover:text-white hover:underline transition-colors">FMCG Goods</a></li>
          </ul>
        </div>

        <!-- Column 3: Corporate & Trade -->
        <div>
          <h4 class="text-white font-bold text-sm uppercase tracking-wider font-heading mb-4 text-brand-green">
            Corporate &amp; Trade
          </h4>
          <ul class="space-y-2.5 text-slate-300 p-0 m-0 list-none">
            <li><a href="<?= url('about-us.php') ?>" class="hover:text-white hover:underline transition-colors">About Himalayan</a></li>
            <li><a href="<?= url('services.php') ?>" class="hover:text-white hover:underline transition-colors">Trading &amp; Sourcing Services</a></li>
            <li><a href="<?= url('why-choose-us.php') ?>" class="hover:text-white hover:underline transition-colors">Why Choose Us</a></li>
            <li><a href="<?= url('quality.php') ?>" class="hover:text-white hover:underline transition-colors">Quality &amp; Specifications</a></li>
            <li><a href="<?= url('markets.php') ?>" class="hover:text-white hover:underline transition-colors">Markets &amp; Global Trade</a></li>
            <li><a href="<?= url('faq.php') ?>" class="hover:text-white hover:underline transition-colors">Buyer FAQ</a></li>
            <li><a href="<?= url('contact.php') ?>" class="hover:text-white hover:underline transition-colors">Contact Commercial Desk</a></li>
          </ul>
        </div>

        <!-- Column 4: Verified Contact -->
        <div>
          <h4 class="text-white font-bold text-sm uppercase tracking-wider font-heading mb-4 text-brand-orange">
            Commercial Reach
          </h4>
          <div class="space-y-3 text-slate-300 text-xs">
            <div class="flex items-start gap-2.5">
              <i class="fa-solid fa-user-tie text-brand-green mt-1"></i>
              <div>
                <div class="font-bold text-white text-sm">Kumar Dhungel</div>
                <div class="text-slate-400">Director</div>
              </div>
            </div>
            <div class="flex items-start gap-2.5">
              <i class="fa-solid fa-location-dot text-brand-orange mt-1"></i>
              <div>
                <span class="text-white font-semibold">Denmark Office:</span><br>
                Saven 2630, Denmark
              </div>
            </div>
            <div class="flex items-start gap-2.5">
              <i class="fa-solid fa-envelope text-brand-green mt-1"></i>
              <a href="mailto:<?= CLIENT_EMAIL ?>" class="text-slate-200 hover:text-white break-all">
                <?= CLIENT_EMAIL ?>
              </a>
            </div>
            <div class="flex items-start gap-2.5">
              <i class="fa-solid fa-phone text-brand-green mt-1"></i>
              <a href="tel:<?= CLIENT_PHONE_RAW ?>" class="text-slate-200 hover:text-white">
                <?= CLIENT_PHONE ?>
              </a>
            </div>
            <div class="flex items-start gap-2.5">
              <i class="fa-brands fa-whatsapp text-emerald-400 mt-1"></i>
              <a href="<?= CLIENT_WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-300 hover:text-white font-semibold">
                Chat on WhatsApp (+45 52 17 56 66)
              </a>
            </div>
          </div>
        </div>

      </div>

      <!-- Legal & Copyright Bar -->
      <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-400">
        <div>
          &copy; <?= date('Y') ?> <strong>Himalayan Food and Feed</strong>. All rights reserved.
          <span class="block text-[11px] text-slate-400 mt-1">
            B2B Notice: Numerical specifications are indicative parameters. Authoritative lot parameters confirmed via verified Certificate of Analysis (COA) prior to dispatch.
          </span>
        </div>
        <div class="flex flex-wrap items-center gap-5">
          <a href="<?= url('privacy-policy.php') ?>" class="hover:text-white transition-colors">Privacy Policy</a>
          <span class="text-slate-600">|</span>
          <a href="<?= url('cookie-policy.php') ?>" class="hover:text-white transition-colors">Cookie Policy</a>
          <span class="text-slate-600">|</span>
          <a href="<?= url('terms.php') ?>" class="hover:text-white transition-colors">Terms of Trade</a>
          <span class="text-slate-600">|</span>
          <a href="<?= url('sitemap.xml') ?>" class="hover:text-white transition-colors" target="_blank">Sitemap</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Floating Utility Actions -->
  <?php require __DIR__ . '/whatsapp-button.php'; ?>
  <?php require __DIR__ . '/back-to-top.php'; ?>

  <!-- Scripts -->
  <script src="<?= asset('assets/js/scripts.js') ?>" defer></script>
</body>
</html>
