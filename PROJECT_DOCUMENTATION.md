# Himalayan Food and Feed &mdash; Technical Project Documentation

## 1. Application Architecture

The **Himalayan Food and Feed** platform is built as a modular, lightweight, server-rendered PHP application (PHP 8.2+) engineered for maximum reliability, speed, and standard cPanel hosting compatibility without requiring Node.js, Webpack, or framework overhead.

```
himalayan-food-and-feed/
|-- index.php                      # Homepage (Hero, Product Lines, Sourcing Model, FAQ, CTA)
|-- about-us.php                   # Corporate Story, Mission, Values, Commercial Leadership
|-- products.php                   # Filterable Interactive Catalog & Category Overview
|-- services.php                   # Sourcing, Verification, Ocean Freight, Formulation Support
|-- why-choose-us.php              # Six Verified Business Strengths
|-- quality.php                    # Quality Assurance Framework, Lab Testing, Documents
|-- markets.php                    # Dual Commercial Hubs: Denmark & Singapore
|-- faq.php                        # Buyer Knowledge Base with Accessible Accordions
|-- contact.php                    # Director Contact Details & Quotation Request Portal
|-- privacy-policy.php             # GDPR & International Data Protection Policy
|-- cookie-policy.php              # Minimal Technical Cookie Notice
|-- terms.php                      # Commercial Terms of Trade & Incoterms Guidelines
|-- 404.php                        # Branded HTTP 404 Error Page
|-- robots.txt                     # Technical Crawler Directives & AI Access Allowances
|-- sitemap.xml                    # Canonical Production XML Sitemap
|-- .htaccess                      # Apache URL Rewriting, Security Headers & Browser Caching
|-- .env.example                   # Environment Configuration Blueprint
|-- README.md                      # Developer Quick Start & Maintenance Guide
|-- PROJECT_DOCUMENTATION.md       # Architecture & Component Specifications
|-- CONTENT_GUIDELINES.md          # Editorial Tone & Content Update Guide
|
|-- config/
|   |-- app.php                    # App constants, verified contact info, routing helpers
|   |-- seo.php                    # SEO defaults, meta generators, JSON-LD schema builder
|   |-- mail.php                   # Email dispatcher, transport options, dev simulation
|   |-- products.php               # Centralized product catalog data model
|
|-- includes/
|   |-- header.php                 # HTML5 doctype, head tags, fonts, CDNs, skip link
|   |-- topbar.php                 # Top commercial contact bar
|   |-- navigation.php             # Desktop nav, product dropdown, mobile menu drawer
|   |-- footer.php                 # Multi-column footer, legal disclosures, scripts
|   |-- breadcrumbs.php            # Semantic breadcrumb navigation
|   |-- back-to-top.php            # Floating back-to-top button
|   |-- whatsapp-button.php        # Floating WhatsApp action button
|   |-- loader.php                 # Brand-aligned SVG loading animation
|   |-- quote-form.php             # Reusable quote form with CSRF and honeypot
|   |-- seo-meta.php               # Meta tags, canonical links, Open Graph, Twitter
|   |-- structured-data.php        # Schema.org JSON-LD graph renderer
|   |-- product-card.php           # Reusable product and category card renderer
|   |-- cta-section.php            # Reusable B2B call-to-action banner
|
|-- products/
|   |-- animal-proteins.php        # MBM, poultry meal, fish meal, feather meal
|   |-- plant-proteins.php         # Soybean meal, corn gluten meal, DDGS
|   |-- feed-additives.php         # Amino acids, choline chloride, mycotoxin binders
|   |-- minerals.php               # Dicalcium phosphate (DCP), MCP 22%
|   |-- food-ingredients.php       # Commercial rice, food soybeans, lentils, vegetable oils
|   |-- pet-food.php               # Pet food ingredients & contract private label
|   |-- fmcg.php                   # Packaged trade commodities
|
|-- handlers/
|   |-- contact-submit.php         # Server-side validation, rate limiting & submission
|
|-- assets/
|   |-- css/
|   |   |-- style.css              # Custom CSS tokens, components, accessibility states
|   |-- js/
|   |   |-- scripts.js             # Vanilla JS: drawer, dropdown, reveals, AJAX form
|   |-- images/
|       |-- logo/                  # Logo PNGs, WebPs, original raster, SVGs, favicon
|       |-- hero/                  # Bulk logistics and grain harvest photography
|       |-- products/              # WebP imagery for each product line
|       |-- services/              # Quality testing and ocean freight imagery
|       |-- company/               # Denmark and Singapore trade hub imagery
|
|-- docs/
|   |-- DESIGN_SYSTEM.md           # Color tokens, typography scales, spacing rules
|   |-- SEO_AND_GEO.md             # Technical metadata, schemas, and GEO strategies
|   |-- DEPLOYMENT.md              # Practical cPanel hosting and DNS deliverability guide
|   |-- CONTENT_APPROVAL.md        # Fact-checking register & client approval status
|   |-- ASSET_LICENSES.md          # Origin and commercial licenses for all assets
|
|-- tests/
    |-- manual-checklist.md        # Complete QA verification checklist
```

---

## 2. Reusable Layout &amp; Component Lifecycle

Every page follows a standardized server-side composition pattern:

1. **Configuration Loading:**
   ```php
   require_once __DIR__ . '/config/app.php';
   require_once __DIR__ . '/config/seo.php';
   require_once __DIR__ . '/config/products.php';
   ```
2. **Page-Specific Metadata Definition:**
   ```php
   $pageSeo = [
       'title' => 'Page Title | Himalayan Food and Feed',
       'description' => 'Targeted meta description...',
       'canonical' => url('page-url.php'),
       'breadcrumbs' => [...]
   ];
   $currentPageKey = 'active-nav-key';
   ```
3. **Template Inclusion:**
   ```php
   require __DIR__ . '/includes/header.php';
   // Page content here...
   require __DIR__ . '/includes/footer.php';
   ```

---

## 3. Security &amp; Defensive Programming

1. **Output Escaping:** The global helper function `e(?string $value)` applies `htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5, 'UTF-8')` to prevent Cross-Site Scripting (XSS).
2. **Session-Based CSRF Protection:** Cryptographic 32-byte tokens (`bin2hex(random_bytes(32))`) stored in `$_SESSION['csrf_token']` and validated strictly via `hash_equals()` on form submissions.
3. **Honeypot Spam Defense:** Form includes an invisible field (`contact_security_check`). If populated by automated bots, the submission is silently dropped.
4. **Rate Limiting:** Form submissions are tracked per session timestamp window (max 5 submissions per 10 minutes) returning HTTP `429 Too Many Requests` on abuse.
5. **Header Injection Prevention:** Newline characters (`\r` and `\n`) are stripped from all email headers (`From`, `Reply-To`, `Subject`).
6. **Error Suppression in Production:** `display_errors` is disabled by default in `config/app.php` with `log_errors` enabled to prevent exposing server paths or environment details.
