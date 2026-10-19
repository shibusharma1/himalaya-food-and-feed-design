<?php
/**
 * Himalayan Food and Feed - B2B Quotation Enquiry Form Component
 */
$csrfToken = $_SESSION['csrf_token'] ?? '';
$flashSuccess = $_SESSION['flash_success'] ?? null;
$flashError = $_SESSION['flash_error'] ?? null;
$flashErrors = $_SESSION['flash_errors'] ?? [];
$formOld = $_SESSION['form_old'] ?? [];

// Clear flash messages once rendered
unset($_SESSION['flash_success'], $_SESSION['flash_error'], $_SESSION['flash_errors'], $_SESSION['form_old']);

$selectedCategory = $selectedCategory ?? ($formOld['product_category'] ?? '');
?>
<div id="quote-form-container" class="bg-white rounded-xl shadow-lg border border-slate-200 p-6 sm:p-8 lg:p-10">
  <div class="border-b border-slate-200 pb-5 mb-6">
    <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-brand-green bg-green-50 px-3 py-1 rounded-full mb-2">
      <i class="fa-solid fa-paper-plane"></i>
      <span>Commercial Enquiry</span>
    </div>
    <h3 class="text-2xl font-extrabold text-brand-navy font-heading">
      Request a Product Quotation
    </h3>
    <p class="text-slate-600 text-sm mt-1">
      Submit your ingredient requirements, required quantity, and destination port. Our director and trading desk will respond within one business day.
    </p>
  </div>

  <!-- Dynamic / Server Flash Message Box -->
  <?php if ($flashSuccess): ?>
    <div class="p-4 rounded-md bg-green-50 border border-green-200 text-green-800 mb-6 flex items-start gap-3" role="alert">
      <i class="fa-solid fa-circle-check text-green-600 text-xl mt-0.5"></i>
      <div>
        <p class="font-bold text-base mb-1">Enquiry Transmitted Successfully</p>
        <p class="text-sm"><?= e($flashSuccess) ?></p>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($flashError): ?>
    <div class="p-4 rounded-md bg-red-50 border border-red-200 text-red-800 mb-6 flex items-start gap-3" role="alert">
      <i class="fa-solid fa-circle-exclamation text-red-600 text-xl mt-0.5"></i>
      <div>
        <p class="font-bold text-base mb-1">Please Review Submission</p>
        <p class="text-sm"><?= e($flashError) ?></p>
      </div>
    </div>
  <?php endif; ?>

  <!-- JS Client Alert Box Placeholder -->
  <div id="form-alert" class="hidden" role="alert"></div>

  <form id="quote-form" action="<?= url('handlers/contact-submit.php') ?>" method="POST" novalidate class="space-y-5">
    <!-- Security CSRF & Honeypot -->
    <input type="hidden" name="csrf_token" value="<?= e($csrfToken) ?>">
    <!-- Honeypot field (hidden from legitimate users, filled by bots) -->
    <div style="display:none;" aria-hidden="true">
      <label for="contact_security_check">Leave this field empty</label>
      <input type="text" id="contact_security_check" name="contact_security_check" tabindex="-1" autocomplete="off">
    </div>

    <!-- Row 1: Name & Business Email -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
      <div>
        <label for="input-name" class="block text-sm font-bold text-slate-800 mb-1 font-heading">
          Full Name <span class="text-red-500">*</span>
        </label>
        <input type="text" 
               id="input-name" 
               name="name" 
               required 
               autocomplete="name" 
               maxlength="100"
               value="<?= e($formOld['name'] ?? '') ?>"
               placeholder="e.g. John Doe"
               class="w-full px-4 py-2.5 rounded-md border border-slate-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange text-slate-900 transition-colors <?= isset($flashErrors['name']) ? 'border-red-500' : '' ?>">
        <?php if (isset($flashErrors['name'])): ?>
          <p class="text-red-600 text-xs mt-1 font-semibold"><?= e($flashErrors['name']) ?></p>
        <?php endif; ?>
      </div>

      <div>
        <label for="input-email" class="block text-sm font-bold text-slate-800 mb-1 font-heading">
          Business Email <span class="text-red-500">*</span>
        </label>
        <input type="email" 
               id="input-email" 
               name="email" 
               required 
               autocomplete="email" 
               maxlength="120"
               value="<?= e($formOld['email'] ?? '') ?>"
               placeholder="name@company.com"
               class="w-full px-4 py-2.5 rounded-md border border-slate-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange text-slate-900 transition-colors <?= isset($flashErrors['email']) ? 'border-red-500' : '' ?>">
        <?php if (isset($flashErrors['email'])): ?>
          <p class="text-red-600 text-xs mt-1 font-semibold"><?= e($flashErrors['email']) ?></p>
        <?php endif; ?>
      </div>
    </div>

    <!-- Row 2: Company & Phone -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
      <div>
        <label for="input-company" class="block text-sm font-bold text-slate-800 mb-1 font-heading">
          Company Name <span class="text-slate-400 font-normal">(Optional)</span>
        </label>
        <input type="text" 
               id="input-company" 
               name="company" 
               autocomplete="organization" 
               maxlength="150"
               value="<?= e($formOld['company'] ?? '') ?>"
               placeholder="Feed Mill / Trading Co."
               class="w-full px-4 py-2.5 rounded-md border border-slate-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange text-slate-900 transition-colors">
      </div>

      <div>
        <label for="input-phone" class="block text-sm font-bold text-slate-800 mb-1 font-heading">
          Telephone / WhatsApp <span class="text-slate-400 font-normal">(Optional)</span>
        </label>
        <input type="tel" 
               id="input-phone" 
               name="phone" 
               autocomplete="tel" 
               maxlength="30"
               value="<?= e($formOld['phone'] ?? '') ?>"
               placeholder="+45 ... or international code"
               class="w-full px-4 py-2.5 rounded-md border border-slate-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange text-slate-900 transition-colors">
      </div>
    </div>

    <!-- Row 3: Product Category Selection -->
    <div>
      <label for="select-category" class="block text-sm font-bold text-slate-800 mb-1 font-heading">
        Product Category <span class="text-red-500">*</span>
      </label>
      <select id="select-category" 
              name="product_category" 
              required
              class="w-full px-4 py-2.5 rounded-md border border-slate-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange text-slate-900 transition-colors <?= isset($flashErrors['product_category']) ? 'border-red-500' : '' ?>">
        <option value="">-- Please Select Product Line --</option>
        <option value="Animal Proteins" <?= $selectedCategory === 'Animal Proteins' ? 'selected' : '' ?>>Animal Proteins (MBM, Poultry Meal, Fish Meal, Feather Meal)</option>
        <option value="Plant Proteins" <?= $selectedCategory === 'Plant Proteins' ? 'selected' : '' ?>>Plant Proteins (Soybean Meal, Corn Gluten Meal, DDGS)</option>
        <option value="Feed Additives" <?= $selectedCategory === 'Feed Additives' ? 'selected' : '' ?>>Feed Additives (Amino Acids, Choline Chloride, Binders)</option>
        <option value="Feed Minerals" <?= $selectedCategory === 'Feed Minerals' ? 'selected' : '' ?>>Feed Minerals (DCP 18%, MCP 22%)</option>
        <option value="Food Ingredients & Grains" <?= $selectedCategory === 'Food Ingredients & Grains' ? 'selected' : '' ?>>Food Ingredients &amp; Grains (Rice, Soybeans, Lentils, Oils)</option>
        <option value="Pet Food Ingredients" <?= $selectedCategory === 'Pet Food Ingredients' ? 'selected' : '' ?>>Pet Food Ingredients &amp; Formulation</option>
        <option value="FMCG Goods" <?= $selectedCategory === 'FMCG Goods' ? 'selected' : '' ?>>FMCG Packaged Goods</option>
        <option value="General Commercial Enquiry" <?= $selectedCategory === 'General Commercial Enquiry' ? 'selected' : '' ?>>General Commercial / Trade Partnership</option>
      </select>
      <?php if (isset($flashErrors['product_category'])): ?>
        <p class="text-red-600 text-xs mt-1 font-semibold"><?= e($flashErrors['product_category']) ?></p>
      <?php endif; ?>
    </div>

    <!-- Row 4: Quantity & Destination Port -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
      <div>
        <label for="input-quantity" class="block text-sm font-bold text-slate-800 mb-1 font-heading">
          Target Quantity &amp; Unit <span class="text-slate-400 font-normal">(e.g. 100 MT)</span>
        </label>
        <input type="text" 
               id="input-quantity" 
               name="quantity" 
               maxlength="100"
               value="<?= e($formOld['quantity'] ?? '') ?>"
               placeholder="e.g. 50 Metric Tons / 2 FCL"
               class="w-full px-4 py-2.5 rounded-md border border-slate-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange text-slate-900 transition-colors">
      </div>

      <div>
        <label for="input-destination" class="block text-sm font-bold text-slate-800 mb-1 font-heading">
          Destination Country / Port <span class="text-slate-400 font-normal">(Incoterm)</span>
        </label>
        <input type="text" 
               id="input-destination" 
               name="destination" 
               maxlength="150"
               value="<?= e($formOld['destination'] ?? '') ?>"
               placeholder="e.g. CIF Port of Rotterdam or FOB"
               class="w-full px-4 py-2.5 rounded-md border border-slate-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange text-slate-900 transition-colors">
      </div>
    </div>

    <!-- Row 5: Specification & Message -->
    <div>
      <label for="input-message" class="block text-sm font-bold text-slate-800 mb-1 font-heading">
        Product Specifications &amp; Requirements <span class="text-red-500">*</span>
      </label>
      <textarea id="input-message" 
                name="message" 
                rows="4" 
                required 
                maxlength="4000"
                placeholder="Specify your required parameters (e.g. minimum protein %, moisture limit, packaging preferences, delivery schedule, or sample requirements)..."
                class="w-full px-4 py-2.5 rounded-md border border-slate-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange text-slate-900 transition-colors <?= isset($flashErrors['message']) ? 'border-red-500' : '' ?>"><?= e($formOld['message'] ?? '') ?></textarea>
      <?php if (isset($flashErrors['message'])): ?>
        <p class="text-red-600 text-xs mt-1 font-semibold"><?= e($flashErrors['message']) ?></p>
      <?php endif; ?>
    </div>

    <!-- Privacy Consent Checkbox -->
    <div class="flex items-start gap-3 pt-1">
      <input type="checkbox" 
             id="privacy-consent" 
             name="privacy_consent" 
             value="1" 
             required
             class="mt-1 h-4 w-4 text-brand-green focus:ring-brand-orange border-slate-300 rounded">
      <label for="privacy-consent" class="text-xs text-slate-600 leading-relaxed select-none">
        I acknowledge that the information submitted will be used exclusively by Himalayan Food and Feed to process this commercial B2B quotation request in accordance with the <a href="<?= url('privacy-policy.php') ?>" class="text-brand-navy underline font-semibold hover:text-brand-green" target="_blank">Privacy Policy</a>. No data is shared with unrelated third parties.
      </label>
    </div>
    <?php if (isset($flashErrors['privacy_consent'])): ?>
      <p class="text-red-600 text-xs font-semibold"><?= e($flashErrors['privacy_consent']) ?></p>
    <?php endif; ?>

    <!-- Submit Button & Assurances -->
    <div class="pt-2 flex flex-col sm:flex-row items-center justify-between gap-4">
      <button type="submit" class="btn-primary w-full sm:w-auto py-3.5 px-8 text-base">
        <i class="fa-solid fa-paper-plane text-sm"></i>
        <span>Send Enquiry for Quotation</span>
      </button>
      <div class="flex items-center gap-2 text-xs text-slate-500">
        <i class="fa-solid fa-lock text-brand-green"></i>
        <span>Strict B2B Confidentiality Guaranteed</span>
      </div>
    </div>
  </form>
</div>
