<?php
/**
 * Himalayan Food and Feed - Reusable B2B Call-to-Action Section
 */
$ctaTitle = $ctaTitle ?? "Let's Discuss Your Ingredient Requirements";
$ctaSubtitle = $ctaSubtitle ?? "Send your required specification, target volume, and destination port. Our commercial team will evaluate availability and provide a tailored B2B quotation within one working day.";
?>
<section class="py-16 md:py-20 bg-brand-navy text-white relative overflow-hidden brand-skew-divider border-t-4 border-brand-green">
  <!-- Subtle background glow -->
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand-green opacity-10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-brand-orange opacity-10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="site-container relative z-10">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-orange text-xs font-bold tracking-wider uppercase mb-4">
        <i class="fa-solid fa-handshake"></i>
        <span>Direct Sourcing &amp; Supply Coordination</span>
      </div>
      <h2 class="text-white text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight mb-4 font-heading">
        <?= e($ctaTitle) ?>
      </h2>
      <p class="text-slate-200 text-lg md:text-xl font-normal leading-relaxed mb-8 max-w-2xl">
        <?= e($ctaSubtitle) ?>
      </p>
      <div class="flex flex-wrap items-center gap-4">
        <a href="<?= url('contact.php#quote-form') ?>" class="btn-primary text-base py-3.5 px-7">
          <i class="fa-solid fa-file-invoice text-sm"></i>
          <span>Request a Formal Quote</span>
        </a>
        <a href="<?= CLIENT_WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary text-base py-3.5 px-6">
          <i class="fa-brands fa-whatsapp text-lg text-emerald-400"></i>
          <span>Chat on WhatsApp</span>
        </a>
        <a href="mailto:<?= CLIENT_EMAIL ?>" class="text-slate-300 hover:text-white underline underline-offset-4 text-sm font-semibold ml-2">
          Or email kumar@himalayanfoodandfeed.com
        </a>
      </div>
    </div>
  </div>
</section>
