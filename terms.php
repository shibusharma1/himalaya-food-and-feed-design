<?php
/**
 * Himalayan Food and Feed - Terms and Conditions of Trade
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';

$pageSeo = [
    'title' => 'Terms & Conditions of Trade | Himalayan Food and Feed',
    'description' => 'Commercial terms, quotation rules, Incoterms 2020 framework, and parameter tolerance guidelines for B2B transactions with Himalayan Food and Feed.',
    'canonical' => url('terms.php'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Terms of Trade', 'url' => url('terms.php')]
    ]
];
$currentPageKey = 'terms';

require __DIR__ . '/includes/header.php';
?>

<div class="relative bg-brand-navy text-white py-14 brand-skew-divider border-b-4 border-brand-green">
  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <h1 class="text-white text-3xl sm:text-4xl font-extrabold tracking-tight mt-2 font-heading">
      Terms &amp; Conditions of Trade
    </h1>
    <p class="text-slate-200 text-sm mt-1">
      Standard International B2B Commercial Principles &bull; Himalayan Food and Feed
    </p>
  </div>
</div>

<section class="py-16 bg-white">
  <div class="site-container max-w-4xl">
    <div class="prose max-w-none text-slate-700 space-y-6 text-sm leading-relaxed">
      
      <h2 class="text-xl font-bold text-brand-navy font-heading">1. Scope of Application</h2>
      <p>
        These commercial terms govern all quotation requests, sales contracts, and supply agreements entered into by Himalayan Food and Feed with international commercial purchasers, feed mills, food processors, and trading enterprises.
      </p>

      <h2 class="text-xl font-bold text-brand-navy font-heading">2. Quotation Validity &amp; Parameter Commitments</h2>
      <p>
        Due to volatility in international commodity, ocean freight, and agricultural raw material markets:
      </p>
      <ul class="list-disc pl-5 space-y-1.5">
        <li>Quotations issued by our commercial desk are valid for the specific time window stated on the formal quotation sheet (typically 24 to 72 hours).</li>
        <li>Numerical specifications published on this website represent standard trade parameter ranges. Authoritative contract specifications, moisture limits, and testing protocols are defined in the specific Sales Contract and confirmed via batch Certificate of Analysis (COA).</li>
      </ul>

      <h2 class="text-xl font-bold text-brand-navy font-heading">3. Trade Terms (Incoterms 2020)</h2>
      <p>
        All international shipments are contracted under the official International Chamber of Commerce (ICC) <strong>Incoterms&reg; 2020</strong> rules. The agreed Incoterm (e.g. CIF, CFR, FOB) determines the transfer of risk, delivery point, freight responsibility, and marine insurance requirements.
      </p>

      <h2 class="text-xl font-bold text-brand-navy font-heading">4. Quality Inspection &amp; Claims Protocol</h2>
      <p>
        Pre-shipment inspection by independent accredited agencies (such as SGS or Bureau Veritas) may be arranged at the loading port upon commercial agreement. In the event of parameter discrepancies at discharge:
      </p>
      <ul class="list-disc pl-5 space-y-1.5">
        <li>The buyer must notify Himalayan Food and Feed in writing within seven (7) business days of container discharge or customs release.</li>
        <li>Representative joint samples must be drawn according to standard international GAFTA / FOSFA sampling guidelines and submitted to an agreed accredited reference laboratory.</li>
      </ul>

      <h2 class="text-xl font-bold text-brand-navy font-heading">5. Force Majeure</h2>
      <p>
        Neither party shall be liable for failure or delay in performance resulting from causes beyond reasonable control, including acts of God, war, blockades, maritime embargoes, severe port closures, strikes, or governmental import/export prohibitions.
      </p>

      <h2 class="text-xl font-bold text-brand-navy font-heading">6. Contact &amp; Governance</h2>
      <p>
        For inquiries regarding specific commercial contract clauses, please contact:
      </p>
      <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-xs">
        <strong>Himalayan Food and Feed</strong><br>
        Commercial Desk: <?= CLIENT_OFFICE_DENMARK ?><br>
        Director: Kumar Dhungel<br>
        Email: <a href="mailto:<?= CLIENT_EMAIL ?>" class="text-brand-green underline"><?= CLIENT_EMAIL ?></a><br>
        Telephone: <?= CLIENT_PHONE ?>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
