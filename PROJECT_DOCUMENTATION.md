# Himalayan Food and Feed &mdash; Technical Project Documentation

## 1. Application Architecture

The **Himalayan Food and Feed** platform is built as a modular, lightweight, server-rendered PHP application (PHP 8.2+) engineered for maximum reliability, speed, and standard cPanel hosting compatibility without requiring Node.js, Webpack, or framework overhead.

```
himalayan-food-and-feed/
|-- index.php                      # Homepage (Hero, Product Lines, Sourcing Model, FAQ, CTA)
|-- about-us.php                   # Corporate Story, Mission, Values, Commercial Leadership
|-- products.php                   # Filterable Interactive Catalog & Category Overview
|-- product-detail.php             # Comprehensive Single Product Dossier, Parameters & Specs
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

---

## 4. UI &amp; Design System Revisions Log

The following visual and structural refinements have been applied across the codebase:

1. **Heading Typography Scale (`text-4xl` Standardization):**
   - Converted all hero banner and section title `text-5xl` and `lg:text-[3.25rem]` classes across all 18 templates (`index.php`, `about-us.php`, `contact.php`, `faq.php`, `markets.php`, `products.php`, all 7 category detail pages, `quality.php`, `services.php`, `why-choose-us.php`, `includes/cta-section.php`, and `404.php`) to `text-4xl` (`text-white text-3xl sm:text-4xl lg:text-4xl font-extrabold tracking-tight leading-[1.15] font-heading`).
   - Improves typographic balance, prevents awkward headline line wraps on laptops/tablets, and produces a more restrained corporate B2B feel.

2. **Clean, Borderless-Top Service Cards:**
   - Removed all `border-t-4 !border-t-brand-*` utility classes from `.service-card` elements in `about-us.php`.
   - Removed the default `border-top` declaration and hover `border-top-color` rule from `.service-card` in `assets/css/style.css`.
   - Cards now feature a consistent 1px structural outline with subtle hover lift and box shadow, aligning with international trade website standards.

3. **Container Max-Width &amp; Side Spacing:**
   - Standardized layout container to `--container-max: min(100% - 1.5rem, 1320px)` with tightened horizontal gutters (`0.5rem` / `0.75rem`), optimizing content density while preserving responsive margins across all viewports.

4. **Product Item Photography:**
   - Sourced and optimized 19 dedicated B2B commodity WebP images under `assets/images/products/items/` at 16:10 aspect ratio.
   - Wired each image into `config/products.php` with cache-busting `asset()` helpers across `includes/product-card.php` and the 7 product category views.

5. **Catalog Filter Button Contrast &amp; Active Visibility:**
   - Corrected filter button styling on `products.php` and `assets/js/scripts.js` from unconfigured `bg-navy` / `text-ink` to genuine brand utility classes (`bg-brand-navy`, `text-brand-ink`).
   - Implemented `.catalog-filter-btn` in `assets/css/style.css` with high-contrast `[aria-selected="true"]` and `.is-active` rules: solid Corporate Navy background (`#0D2350`), pure white text (`#FFFFFF`), active border, and shadow.
   - Enforced high-contrast active hover states (`#071533` with white text), resolving the previous issue where active buttons appeared faint or transparent on light backgrounds.

6. **Floating WhatsApp Action Hover Expansion:**
   - Redesigned `.whatsapp-float` in `assets/css/style.css` so that it displays as a sleek 52px circular icon button by default.
   - On desktop hover or focus, smoothly animates horizontally into an expanded pill revealing the bold "WhatsApp" label, while gracefully collapsing on mobile screens (`≤640px`) to preserve touch screen estate.

7. **Dedicated Product Detail Pages & Card Streamlining:**
   - Streamlined product cards on category pages (`products/animal-proteins.php`, `plant-proteins.php`, etc.) and `includes/product-card.php` (`products.php`), removing the cluttered outside specifications box.
   - Preserved core card elements: 16:10 product image, status badges (`COA Verified`, `Vetted Supply`), product name, short description, and dedicated "View Details" button with animated arrow icon.
   - Built a comprehensive, high-end single product dossier template `product-detail.php` (with canonical 301 rewrites configured in `.htaccess`):
     - Enterprise hero header with breadcrumbs, lot verification badges, and direct commercial CTAs.
     - Two-column technical dossier featuring high-resolution photography, sourcing network details (Denmark / Singapore), logistics overview (CIF / CFR / FOB, packaging, container loads), and direct trader contact card for Director Kumar Dhungel.
     - Structured B2B technical parameter table, target applications breakdown, commercial grades, export documentation checklist, and related products showcase.
     - High-impact "Request Quote and Specialization" commercial action redirecting to `contact.php#quote-form` with the specific product, matching category, and structured inquiry draft automatically pre-selected.
     - Full JSON-LD `Product` schema generation in `config/seo.php` and sitemap indexing across all 19 catalog items.

8. **Product Detail CTA Optimization & Full Mobile Responsiveness:**
   - Standardized the primary "Request Quote and Specialization" button placed right after the Export Documentation section on `product-detail.php`.
   - Optimized typography with responsive scaling (`text-sm sm:text-base md:text-lg`), comfortable fluid padding (`py-3.5 sm:py-4 px-5 sm:px-8 md:px-10`), and `leading-snug sm:leading-normal`.
   - Configured layout to `w-full sm:w-auto inline-flex items-center justify-center` so it renders as a comfortable full-width touch element on mobile phones (< 640px) while maintaining clean left-aligned enterprise proportions on tablets and desktop monitors.
   - Applied `shrink-0` to leading (`fa-file-invoice`) and trailing animated (`fa-arrow-right`) icons, preventing flex distortion on narrow viewports (320px–375px) and ensuring zero horizontal scroll overflow across all screen sizes.

9. **Vertical Section Spacing Optimization:**
   - Replaced oversized section padding on `product-detail.php` (`py-14 sm:py-18 lg:py-24`, which previously introduced up to 96px of vertical void) with an architecturally balanced scale: `py-8 sm:py-10 lg:py-12` (32px mobile / 40px tablet / 48px desktop).
   - Brings the product photograph, trading desks information, and technical specification cards above the fold on desktop and immediately accessible without excessive scrolling on mobile.
   - Harmonized the adjacent Related Products showcase section to `py-10 sm:py-12 lg:py-14`, establishing cohesive vertical rhythm throughout the dossier.

10. **View Details Button Hover Contrast & Text Inversion:**
    - Added `group-hover:text-white hover:text-white` to all `.btn-primary` "View Details" action buttons across `includes/product-card.php`, `product-detail.php`, and all 7 category pages (`products/*.php`).
    - Enforced a corresponding global stylesheet rule in `assets/css/style.css` (`.product-card:hover .btn-primary, .product-card .btn-primary:hover`) guaranteeing high-contrast white text (`#FFFFFF`) against the dark corporate navy hover background (`#071533`).
    - Eliminates low-contrast dark-on-dark text rendering when product cards or buttons enter hover/focus states.
