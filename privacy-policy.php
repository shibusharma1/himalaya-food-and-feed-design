<?php
/**
 * Himalayan Food and Feed - Privacy Policy
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';

$pageSeo = [
    'title' => 'Privacy Policy | Himalayan Food and Feed',
    'description' => 'Privacy policy and data protection framework for Himalayan Food and Feed. Information regarding the collection, use, and security of commercial B2B inquiry data.',
    'canonical' => url('privacy-policy.php'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Privacy Policy', 'url' => url('privacy-policy.php')]
    ]
];
$currentPageKey = 'privacy';

require __DIR__ . '/includes/header.php';
?>

<div class="relative bg-brand-navy text-white py-14 brand-skew-divider border-b-4 border-brand-green">
  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <h1 class="text-white text-3xl sm:text-4xl font-extrabold tracking-tight mt-2 font-heading">
      Privacy Policy &amp; Data Protection
    </h1>
    <p class="text-slate-200 text-sm mt-1">
      Last updated: <?= date('F Y') ?> &bull; Data Controller: Himalayan Food and Feed
    </p>
  </div>
</div>

<section class="py-16 bg-white">
  <div class="site-container max-w-4xl">
    <div class="prose max-w-none text-slate-700 space-y-6 text-sm leading-relaxed">
      
      <h2 class="text-xl font-bold text-brand-navy font-heading">1. Introduction &amp; Scope</h2>
      <p>
        Himalayan Food and Feed (&ldquo;we&rdquo;, &ldquo;us&rdquo;, or &ldquo;our&rdquo;) operates the website <a href="<?= APP_CANONICAL_DOMAIN ?>" class="text-brand-green font-semibold"><?= APP_CANONICAL_DOMAIN ?></a>. This Privacy Policy details our practices concerning the collection, processing, storage, and protection of information provided by commercial clients, feed mills, suppliers, and prospective business partners.
      </p>

      <h2 class="text-xl font-bold text-brand-navy font-heading">2. Information We Collect</h2>
      <p>
        As an international business-to-business (B2B) trading enterprise, we collect only information that is strictly relevant and necessary for processing commercial ingredient inquiries, issuing formal price quotations, and executing trade contracts:
      </p>
      <ul class="list-disc pl-5 space-y-1.5">
        <li><strong>Commercial Contact Details:</strong> Full name, professional title, business email address, company name, telephone or WhatsApp contact number, and country of business.</li>
        <li><strong>Product &amp; Logistics Specifications:</strong> Target ingredient line, parameter requirements, required volumes, packaging preferences, and designated port of destination.</li>
        <li><strong>Technical Log Data:</strong> Standard internet protocol (IP) addresses, browser headers, and submission timestamps used strictly for rate limiting, CSRF verification, and server security.</li>
      </ul>

      <h2 class="text-xl font-bold text-brand-navy font-heading">3. Purpose and Legal Basis of Processing</h2>
      <p>
        We process commercial enquiry data under the legal basis of legitimate commercial interest and pre-contractual discussions at the request of the prospective buyer (Article 6(1)(b) of the General Data Protection Regulation &ndash; GDPR). Data is utilized solely to:
      </p>
      <ul class="list-disc pl-5 space-y-1.5">
        <li>Review nutritional specifications and evaluate product availability.</li>
        <li>Issue formal quotation sheets and delivery timetables.</li>
        <li>Coordinate representative laboratory samples and pre-shipment inspections.</li>
        <li>Maintain commercial correspondence with registered trading partners.</li>
      </ul>

      <h2 class="text-xl font-bold text-brand-navy font-heading">4. Data Confidentiality &amp; Third Parties</h2>
      <p>
        We do <strong>not</strong> sell, rent, license, or disclose your corporate data to external marketing agencies or consumer profiling databases. Information is shared only with authorized operational parties essential to fulfilling your commercial order:
      </p>
      <ul class="list-disc pl-5 space-y-1.5">
        <li>Accredited independent testing laboratories (e.g. SGS / Bureau Veritas) for sample verification.</li>
        <li>Designated ocean shipping lines, freight forwarders, and customs clearance brokers.</li>
        <li>Authorized government veterinary and phytosanitary border agencies required by law.</li>
      </ul>

      <h2 class="text-xl font-bold text-brand-navy font-heading">5. Data Retention &amp; Security</h2>
      <p>
        We implement defensive server configurations, encrypted HTTPS transmission, session-based CSRF protection, and restricted internal access to protect all commercial communications. Inquiries that do not materialize into commercial transactions are safely expunged according to standard business record cycles.
      </p>

      <h2 class="text-xl font-bold text-brand-navy font-heading">6. Your Rights</h2>
      <p>
        Under applicable data protection laws (including the EU/EEA GDPR), you maintain the right to access, rectify, or request the erasure of your personal contact data held by us. You may exercise these rights at any time by contacting our commercial director:
      </p>
      <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-xs">
        <strong>Data Controller:</strong> Himalayan Food and Feed<br>
        <strong>Director:</strong> Kumar Dhungel<br>
        <strong>Email:</strong> <a href="mailto:<?= CLIENT_EMAIL ?>" class="text-brand-green underline"><?= CLIENT_EMAIL ?></a><br>
        <strong>Commercial Office:</strong> <?= CLIENT_OFFICE_DENMARK ?><br>
        <strong>Telephone:</strong> <?= CLIENT_PHONE ?>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
