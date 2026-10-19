<?php
/**
 * Himalayan Food and Feed - Frequently Asked Questions (FAQ) Page
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';
require_once __DIR__ . '/config/products.php';

$faqs = [
    [
        'q' => 'What is your minimum order quantity (MOQ)?',
        'a' => 'Minimum order quantities depend on the product category. For bulk commodities (such as soybean meal, DDGS, animal proteins, and rice), shipments are typically arranged in Full Container Loads (FCL &mdash; approx. 20 to 26 metric tons depending on container size and weight limits). For micro-ingredients, amino acids, and specialty feed additives, trial quantities and mixed pallet consignments can be coordinated.'
    ],
    [
        'q' => 'Can you supply ingredients to our feed mill\'s exact custom specification?',
        'a' => 'Yes. In fact, our operating model is specification-first. When you share your nutritional parameters (such as minimum crude protein, maximum moisture, ash limits, pepsin digestibility, or amino acid profile), we verify achievable batch parameters with our vetted processing partners before issuing a formal commercial offer.'
    ],
    [
        'q' => 'How can a prospective buyer request a product quotation?',
        'a' => 'You can request a quotation through our website quotation form, by emailing kumar@himalayanfoodandfeed.com, or by messaging our commercial desk on WhatsApp (+45 52 17 56 66). Please include the product name, target specification parameters, desired volume (MT / containers), and destination port or Incoterm.'
    ],
    [
        'q' => 'Are representative samples available prior to entering a contract?',
        'a' => 'Yes. For verified commercial buyers and registered feed manufacturers, representative batch samples can be dispatched via international courier for laboratory analysis and formulation testing. Contact our commercial desk with your company details and delivery address.'
    ],
    [
        'q' => 'What documentation is provided with every shipment?',
        'a' => 'Standard trade packages include: Commercial Invoice, Packing List, Full Set Clean On-Board Ocean Bills of Lading, Certificate of Origin (COO), and Certificate of Analysis (COA). For animal proteins, an official Veterinary Health Certificate is provided. For grains and plant commodities, an official Phytosanitary Certificate is included. Independent inspection reports (SGS / Bureau Veritas) can be arranged.'
    ],
    [
        'q' => 'What Incoterms and delivery options do you offer?',
        'a' => 'We execute shipments under Incoterms 2020 rules, primarily CIF (Cost, Insurance, and Freight to your designated discharge port), CFR (Cost and Freight), and FOB (Free on Board at origin loading port).'
    ],
    [
        'q' => 'What payment methods and trade terms are supported?',
        'a' => 'Standard international B2B payment terms include confirmed irrevocable Letters of Credit (L/C at sight) from first-class international banks, and commercial Telegraphic Transfers (T/T), agreed per transaction.'
    ],
    [
        'q' => 'Where are your commercial offices located?',
        'a' => 'Himalayan Food and Feed operates commercial desks in Denmark (Saven 2630, Denmark) and Singapore. This dual footprint connects European agricultural producers and Asian commercial trade corridors.'
    ],
    [
        'q' => 'How do you ensure batch consistency across shipments?',
        'a' => 'We maintain relationships with vetted primary processing plants and require batch-specific quality testing before dispatch. Clear parameter tolerances are specified in every sales contract to prevent variation between lots.'
    ],
    [
        'q' => 'How quickly will our commercial inquiry receive a reply?',
        'a' => 'Our commercial team responds to all verified B2B inquiries within one business day via email or WhatsApp.'
    ]
];

$pageSeo = [
    'title' => 'FAQ | Frequently Asked Questions for Food & Feed Ingredient Buyers',
    'description' => 'Answers to key buyer questions regarding minimum order quantities, specification matching, sample testing, trade documentation, Incoterms, and payment methods.',
    'canonical' => url('faq.php'),
    'og_image' => url('assets/images/services/sourcing-trade.webp'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Frequently Asked Questions', 'url' => url('faq.php')]
    ]
];
$currentPageKey = 'faq';

// Structured Data for FAQPage
$structuredDataExtra = get_faq_schema($faqs);

require __DIR__ . '/includes/header.php';
?>

<!-- Hero Header -->
<div class="relative bg-brand-navy text-white py-16 sm:py-20 brand-skew-divider border-b-4 border-brand-green">
  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <div class="max-w-3xl mt-4">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold uppercase tracking-wider mb-4">
        <span>Buyer Knowledge Base</span>
      </div>
      <h1 class="text-white text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        Frequently Asked Questions
      </h1>
      <p class="text-slate-200 text-lg sm:text-xl font-normal leading-relaxed">
        Clear, factual answers to common commercial, logistical, and technical questions regarding our food and feed ingredient sourcing operations.
      </p>
    </div>
  </div>
</div>

<!-- FAQ Accordions Section -->
<section class="py-16 md:py-24 bg-brand-bg">
  <div class="site-container">
    <div class="max-w-3xl mx-auto space-y-4">
      <?php foreach ($faqs as $i => $faq): ?>
        <details class="faq-item" <?= $i === 0 ? 'open' : '' ?>>
          <summary><?= e($faq['q']) ?></summary>
          <div class="faq-answer">
            <?= $faq['a'] ?>
          </div>
        </details>
      <?php endforeach; ?>
    </div>

    <!-- Still Have Questions Box -->
    <div class="max-w-3xl mx-auto mt-12 p-8 rounded-2xl bg-white border border-slate-200 shadow-sm text-center">
      <h3 class="text-xl font-bold text-brand-navy font-heading mb-2">Have a Question Not Listed Here?</h3>
      <p class="text-slate-600 text-sm mb-6 max-w-lg mx-auto">
        Our commercial desk is available to discuss specific ingredient grades, moisture parameters, or destination customs requirements.
      </p>
      <div class="flex flex-wrap items-center justify-center gap-4">
        <a href="<?= url('contact.php#quote-form') ?>" class="btn-primary text-sm py-3 px-6">
          <span>Submit Commercial Question</span>
        </a>
        <a href="<?= CLIENT_WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn-green text-sm py-3 px-6">
          <i class="fa-brands fa-whatsapp text-base"></i>
          <span>Chat on WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<?php require __DIR__ . '/includes/cta-section.php'; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
