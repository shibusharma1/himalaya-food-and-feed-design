<?php
/**
 * Himalayan Food and Feed - About Us Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

$pageSeo = [
    'title' => 'About Us | Himalayan Food and Feed - B2B International Trade',
    'description' => 'Learn about Himalayan Food and Feed, an international B2B trading partner with offices in Denmark and Singapore, connecting food and feed ingredient producers with global buyers.',
    'canonical' => url('about-us.php'),
    'og_image' => url('assets/images/company/denmark-office.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'About Us', 'url' => url('about-us.php')]
    ]
];
$currentPageKey = 'about';

require __DIR__ . '/includes/header.php';
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="absolute inset-0 z-0">
    <img src="<?= asset('assets/images/company/denmark-office.webp') ?>" 
         alt="International corporate trading desk and European business hub" 
         width="800" height="533"
         class="w-full h-full object-cover opacity-20">
    <div class="absolute inset-0 bg-brand-navy/90"></div>
  </div>

  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>Corporate Profile &bull; Denmark &amp; Singapore</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        About Himalayan Food &amp; Feed
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        A focused international trading company built on one core mission: to make dependable, specification-matched ingredients straightforward to source, verify, and receive.
      </p>
    </div>
  </div>
</div>

<!-- Main Company Overview & Story -->
<section class="py-16 md:py-24 bg-white">
  <div class="site-container">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-7 space-y-6">
        <div class="text-xs font-bold uppercase tracking-wider text-brand-green font-heading">
          Our Foundation &amp; Approach
        </div>
        <h2 class="section-heading text-3xl sm:text-4xl font-extrabold text-brand-navy">
          Built on Practical Sourcing Experience
        </h2>
        <p class="text-slate-600 leading-relaxed text-base">
          Himalayan Food and Feed was founded by professionals who observed first-hand how challenging it can be for feed mills, food processors, and livestock enterprises to obtain dependable raw materials on time and strictly to written technical parameters.
        </p>
        <p class="text-slate-600 leading-relaxed text-base">
          The name <strong class="text-brand-navy">Himalayan</strong> reflects our founding roots in the Himalayan region &mdash; representing resilience, integrity, and endurance. Today, our operational reach connects agricultural producers, renderers, and chemical manufacturers across Europe and Asia with commercial buyers worldwide.
        </p>
        <p class="text-slate-600 leading-relaxed text-base">
          We do not treat trading as a faceless broker transaction. We prioritize plain-language commercial agreements, direct accessibility before and after invoicing, and complete documentation transparency across every consignment.
        </p>

        <!-- Mission & Promise Callouts -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
          <div class="p-5 rounded-xl bg-slate-50 border-l-4 border-brand-green border-t border-r border-b border-slate-200">
            <h3 class="text-base font-extrabold text-brand-navy font-heading mb-1.5 flex items-center gap-2">
              <i class="fa-solid fa-bullseye text-brand-green"></i>
              <span>Our Mission</span>
            </h3>
            <p class="text-xs text-slate-600 leading-relaxed m-0">
              To supply consistent, verified raw materials for the enterprises that nourish animals and communities, eliminating procurement uncertainty.
            </p>
          </div>

          <div class="p-5 rounded-xl bg-slate-50 border-l-4 border-brand-orange border-t border-r border-b border-slate-200">
            <h3 class="text-base font-extrabold text-brand-navy font-heading mb-1.5 flex items-center gap-2">
              <i class="fa-solid fa-handshake text-brand-orange"></i>
              <span>Our Commercial Promise</span>
            </h3>
            <p class="text-xs text-slate-600 leading-relaxed m-0">
              Clear specifications, transparent pricing without hidden extras, and on-time documentation delivery aligned with destination customs.
            </p>
          </div>
        </div>
      </div>

      <!-- Right Column: Visual of Singapore & Denmark Dual Hub -->
      <div class="lg:col-span-5 space-y-6">
        <div class="rounded-2xl overflow-hidden shadow-xl aspect-4/3 relative bg-slate-100">
          <img src="<?= asset('assets/images/company/singapore-trade.webp') ?>" 
               alt="Singapore international maritime logistics and shipping corridor" 
               loading="lazy" 
               width="800" height="533"
               class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-navy-dark/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white">
            <div class="text-xs font-bold uppercase tracking-wider text-brand-orange font-heading">Global Nexus</div>
            <div class="text-base font-bold font-heading">Singapore &bull; Maritime &amp; Asian Corridor</div>
            <p class="text-xs text-slate-200 mt-1">Connecting Southeast Asian, South Asian, and regional protein and additive flows.</p>
          </div>
        </div>

        <!-- Denmark Hub Box -->
        <div class="p-6 rounded-2xl bg-brand-navy text-white shadow-lg border-l-8 border-brand-green">
          <div class="flex items-start justify-between gap-4">
            <div>
              <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 font-heading block mb-1">
                European Commercial Hub
              </span>
              <h3 class="text-xl font-bold text-white font-heading m-0">
                Denmark Office
              </h3>
              <p class="text-xs text-slate-300 mt-1">
                <?= CLIENT_OFFICE_DENMARK ?>
              </p>
            </div>
            <i class="fa-solid fa-building-columns text-2xl text-slate-400"></i>
          </div>
          <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-300">
            <span>Direct Commercial Telephone:</span>
            <a href="tel:<?= CLIENT_PHONE_RAW ?>" class="text-brand-orange font-bold hover:underline"><?= CLIENT_PHONE ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="py-16 md:py-24 bg-brand-bg border-t border-slate-200">
  <div class="site-container">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs font-bold uppercase tracking-wider text-brand-green mb-2 font-heading">
        Core Principles
      </div>
      <h2 class="section-heading center text-3xl sm:text-4xl font-extrabold text-brand-navy">
        Our Commercial Values
      </h2>
      <p class="lead-text mt-3">
        In commodity supply chains, our reputation is built on accountability, precision, and mutual respect with long-term partners.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="service-card border-t-4 !border-t-brand-green">
        <div class="w-12 h-12 rounded-lg bg-green-100 text-brand-green flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-scale-balanced"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Responsibility</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          We stand firmly behind every transaction, whether a single trial container or multi-thousand-ton continuous supply contract. If parameters deviate, we address them proactively and commercially.
        </p>
      </div>

      <div class="service-card border-t-4 !border-t-brand-orange">
        <div class="w-12 h-12 rounded-lg bg-amber-100 text-brand-orange flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-award"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Commitment</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          We seek to make purchasing efficient and safe for our buyers. We invest time in understanding feed formulas, moisture sensitivity, and shelf-life requirements to optimize landed value.
        </p>
      </div>

      <div class="service-card border-t-4 !border-t-brand-navy">
        <div class="w-12 h-12 rounded-lg bg-blue-100 text-brand-navy flex items-center justify-center text-xl mb-5">
          <i class="fa-solid fa-leaf"></i>
        </div>
        <h3 class="text-xl font-bold text-brand-navy mb-2.5 font-heading">Sustainability</h3>
        <p class="text-slate-600 text-sm leading-relaxed">
          Sustainable commerce requires enduring partnerships. We prioritize raw materials produced under compliant environmental standards, fair labor practices, and efficient logistics that minimize supply chain waste.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Commercial Leadership Profile -->
<section class="py-16 md:py-24 bg-white border-t border-slate-200">
  <div class="site-container">
    <div class="max-w-4xl mx-auto">
      <div class="bg-brand-navy text-white rounded-3xl p-8 sm:p-12 shadow-2xl relative overflow-hidden brand-skew-divider border-r-8 border-brand-green">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center relative z-10">
          <div class="md:col-span-4 text-center md:text-left">
            <div class="w-24 h-24 rounded-2xl bg-white/10 border-2 border-white/20 flex items-center justify-center mx-auto md:mx-0 text-4xl text-brand-orange mb-4 shadow">
              <i class="fa-solid fa-user-tie"></i>
            </div>
            <h3 class="text-2xl font-extrabold text-white font-heading m-0"><?= CLIENT_DIRECTOR ?></h3>
            <div class="text-brand-orange font-bold text-sm tracking-wider uppercase mt-1">Director</div>
            <div class="text-xs text-slate-300 mt-0.5">Commercial &amp; Trade Operations</div>
          </div>

          <div class="md:col-span-8 space-y-4 border-t md:border-t-0 md:border-l border-white/10 pt-6 md:pt-0 md:pl-8 text-sm text-slate-200">
            <p class="leading-relaxed">
              Mr. Kumar Dhungel directs the international commercial activities, producer agreements, and trading operations for Himalayan Food and Feed. With personal oversight of all major client inquiries, he ensures that specifications, pricing structures, and logistical terms are executed transparently.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-xs">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-envelope text-brand-green"></i>
                <a href="mailto:<?= CLIENT_EMAIL ?>" class="hover:text-white underline"><?= CLIENT_EMAIL ?></a>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-phone text-brand-green"></i>
                <a href="tel:<?= CLIENT_PHONE_RAW ?>" class="hover:text-white"><?= CLIENT_PHONE ?></a>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-brands fa-whatsapp text-emerald-400"></i>
                <a href="<?= CLIENT_WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="hover:text-white">WhatsApp Commercial Desk</a>
              </div>
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-brand-orange"></i>
                <span><?= CLIENT_OFFICE_DENMARK ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
