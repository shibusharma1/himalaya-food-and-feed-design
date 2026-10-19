<?php
/**
 * Himalayan Food and Feed - Contact Us & Quote Request Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

// Check if pre-selected via query string
$selectedCategory = $_GET['cat'] ?? '';
$selectedProduct = $_GET['product'] ?? '';

$pageSeo = [
    'title' => 'Contact Us & Request a Quote | Himalayan Food and Feed',
    'description' => 'Contact our commercial desk in Denmark and Singapore. Request formal B2B quotations for animal proteins, plant proteins, feed additives, minerals, and food ingredients.',
    'canonical' => url('contact.php'),
    'og_image' => url('assets/images/company/denmark-office.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Contact Us', 'url' => url('contact.php')]
    ]
];
$currentPageKey = 'contact';

$structuredDataExtra = [
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => 'Contact Himalayan Food and Feed',
    'description' => 'Commercial B2B inquiry desk for food and animal feed ingredients.',
    'mainEntity' => get_organization_schema()
];

require __DIR__ . '/includes/header.php';
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>Commercial Desk &bull; Rapid Response</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        Contact Our Commercial Team
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        Tell us what ingredients you need, target parameter ranges, required volume, and destination port. We will evaluate current availability and provide a tailored B2B quotation.
      </p>
    </div>
  </div>
</div>

<!-- Main Contact & Form Section -->
<section class="py-16 md:py-24 bg-brand-bg">
  <div class="site-container">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      
      <!-- Left Column: Form (Span 7) -->
      <div class="lg:col-span-7" id="quote-form">
        <?php require __DIR__ . '/includes/quote-form.php'; ?>
      </div>

      <!-- Right Column: Verified Contact Card & Desks (Span 5) -->
      <div class="lg:col-span-5 space-y-6">
        
        <!-- Director Card (Inspired by Client Business Card) -->
        <div class="director-badge-card">
          <div class="flex items-start justify-between gap-4 mb-4">
            <div>
              <span class="text-brand-orange text-xs font-bold uppercase tracking-wider font-heading block mb-1">
                Commercial Director
              </span>
              <h3 class="text-2xl font-extrabold text-white font-heading m-0">
                <?= CLIENT_DIRECTOR ?>
              </h3>
              <div class="text-emerald-400 font-semibold text-sm">Director &bull; Trade Operations</div>
            </div>
            <img src="<?= asset('assets/images/logo/logo-mark.png') ?>" alt="Logo Emblem" class="h-12 w-auto bg-white/10 rounded p-1">
          </div>

          <div class="space-y-3 text-sm text-slate-200 border-t border-white/10 pt-4">
            <div class="flex items-start gap-3">
              <i class="fa-solid fa-location-dot text-brand-orange text-base mt-1 shrink-0"></i>
              <div>
                <span class="text-white font-bold block">Denmark Office:</span>
                <span><?= CLIENT_OFFICE_DENMARK ?></span>
              </div>
            </div>

            <div class="flex items-center gap-3">
              <i class="fa-solid fa-phone text-brand-green text-base shrink-0"></i>
              <div>
                <span class="text-white font-bold block">Direct Telephone:</span>
                <a href="tel:<?= CLIENT_PHONE_RAW ?>" class="hover:text-white underline"><?= CLIENT_PHONE ?></a>
              </div>
            </div>

            <div class="flex items-center gap-3">
              <i class="fa-solid fa-envelope text-brand-green text-base shrink-0"></i>
              <div>
                <span class="text-white font-bold block">Commercial Email:</span>
                <a href="mailto:<?= CLIENT_EMAIL ?>" class="hover:text-white underline break-all"><?= CLIENT_EMAIL ?></a>
              </div>
            </div>

            <div class="flex items-center gap-3">
              <i class="fa-solid fa-globe text-brand-orange text-base shrink-0"></i>
              <div>
                <span class="text-white font-bold block">Official Website:</span>
                <span class="text-slate-300">www.himalayanfoodandfeed.com</span>
              </div>
            </div>

            <div class="flex items-center gap-3 pt-2">
              <i class="fa-brands fa-whatsapp text-emerald-400 text-lg shrink-0"></i>
              <a href="<?= CLIENT_WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-300 hover:text-white font-bold underline">
                Chat Directly on WhatsApp (+45 52 17 56 66)
              </a>
            </div>
          </div>

          <div class="mt-6 pt-4 border-t border-white/10 text-xs text-slate-300 flex items-center justify-between">
            <span>Trading Corridors:</span>
            <span class="font-bold text-white uppercase tracking-wider">Denmark &bull; Singapore</span>
          </div>
        </div>

        <!-- Commercial Hours & Expectations -->
        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm space-y-4 text-xs text-slate-600">
          <h4 class="text-sm font-bold text-brand-navy font-heading flex items-center gap-2">
            <i class="fa-solid fa-business-time text-brand-green"></i>
            <span>Commercial Desk Availability</span>
          </h4>
          <p class="leading-relaxed">
            Our dual offices in Denmark and Singapore allow us to monitor European and Asian market sessions effectively. Standard commercial responses are provided within <strong>one working day</strong>.
          </p>
          <div class="p-3 rounded-lg bg-slate-50 border border-slate-200 text-slate-700">
            <strong>Urgent Inquiries?</strong> For urgent specification confirmations on active tenders, reach us directly via WhatsApp.
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
