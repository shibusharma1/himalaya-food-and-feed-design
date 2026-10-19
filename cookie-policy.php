<?php
/**
 * Himalayan Food and Feed - Cookie Policy
 */
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/config/seo.php';

$pageSeo = [
    'title' => 'Cookie Policy | Himalayan Food and Feed',
    'description' => 'Information on our technical cookies and minimal data storage practices. We do not use third-party advertising or behavioral tracking cookies.',
    'canonical' => url('cookie-policy.php'),
    'breadcrumbs' => [
        ['name' => 'Home', 'url' => url('index.php')],
        ['name' => 'Cookie Policy', 'url' => url('cookie-policy.php')]
    ]
];
$currentPageKey = 'cookie';

require __DIR__ . '/includes/header.php';
?>

<div class="relative bg-brand-navy text-white py-14 brand-skew-divider border-b-4 border-brand-green">
  <div class="site-container relative z-10">
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>
    <h1 class="text-white text-3xl sm:text-4xl font-extrabold tracking-tight mt-2 font-heading">
      Cookie Policy
    </h1>
    <p class="text-slate-200 text-sm mt-1">
      Minimal, Technical Cookie Notice &bull; Himalayan Food and Feed
    </p>
  </div>
</div>

<section class="py-16 bg-white">
  <div class="site-container max-w-4xl">
    <div class="prose max-w-none text-slate-700 space-y-6 text-sm leading-relaxed">
      
      <h2 class="text-xl font-bold text-brand-navy font-heading">1. Purpose of This Cookie Notice</h2>
      <p>
        Himalayan Food and Feed respects the privacy of corporate visitors. Our corporate website does <strong>not</strong> employ invasive third-party behavioral profiling trackers, programmatic advertising pixels, or cross-site fingerprinting technologies.
      </p>

      <h2 class="text-xl font-bold text-brand-navy font-heading">2. Strictly Necessary Technical Cookies</h2>
      <p>
        We use only strictly necessary technical session cookies that are essential for the security and functionality of the website:
      </p>
      <div class="overflow-x-auto">
        <table class="w-full text-left border border-slate-200 text-xs">
          <thead class="bg-slate-50 border-b border-slate-200 text-slate-800 font-heading">
            <tr>
              <th class="p-3">Cookie Name</th>
              <th class="p-3">Provider</th>
              <th class="p-3">Purpose</th>
              <th class="p-3">Duration</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            <tr>
              <td class="p-3 font-mono font-bold text-brand-navy">PHPSESSID</td>
              <td class="p-3">Himalayan Food and Feed</td>
              <td class="p-3">Maintains technical session state for Cross-Site Request Forgery (CSRF) token verification on quotation forms.</td>
              <td class="p-3">Session (expires upon browser close)</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="text-xl font-bold text-brand-navy font-heading">3. Managing and Disabling Cookies</h2>
      <p>
        You can configure your browser settings to decline or delete cookies at any time. Because our only cookie is strictly necessary for cryptographic form security, blocking it may prevent online quotation submission forms from verifying successfully.
      </p>

      <h2 class="text-xl font-bold text-brand-navy font-heading">4. Contact Information</h2>
      <p>
        If you have any questions about our technical cookie practices, please contact us at <a href="mailto:<?= CLIENT_EMAIL ?>" class="text-brand-green underline font-semibold"><?= CLIENT_EMAIL ?></a>.
      </p>

    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
