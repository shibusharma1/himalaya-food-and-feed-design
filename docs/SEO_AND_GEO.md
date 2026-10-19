# Himalayan Food and Feed &mdash; Technical SEO &amp; GEO (Generative Engine Optimization)

## 1. Technical SEO Architecture

Every public page of the **Himalayan Food and Feed** platform is server-rendered via PHP and outputs fully formed semantic HTML without requiring JavaScript execution for indexing.

### Metadata Rules
1. **Unique Titles:** Format is `[Page / Product Topic] | Himalayan Food and Feed`. Titles are restricted to 50&ndash;60 characters without unnatural keyword repetition.
2. **Meta Descriptions:** Tailored 145&ndash;160 character descriptions summarizing the specific commodity line or commercial service offered on that URL.
3. **Canonical URLs:** Self-referential absolute canonical links (`<link rel="canonical">`) pointing to the official production domain (`https://www.himalayanfoodandfeed.com/...`) to prevent duplicate indexing across protocol or query variations.
4. **Open Graph &amp; Twitter Cards:** Complete social graph tags enabling preview generation on LinkedIn, WhatsApp, Facebook, and Twitter.

---

## 2. Structured Data (JSON-LD) Implementations

The website implements valid schema.org schemas structured in `@graph` JSON-LD blocks within `<head>`:

### Schema Types Deployed:
- **`Organization`:** Declares entity identity, official brand name, logo URL, director contact point, official Denmark address (`Saven 2630`), areas served (`Europe, Asia, Worldwide`), and commercial competencies (`Animal Feed Ingredients, Plant Proteins, Feed Additives, Minerals, Agricultural Commodities`).
- **`WebSite`:** Declares the site as an authoritative corporate property and connects back to the publisher entity.
- **`BreadcrumbList`:** Implemented hierarchically on all interior and category pages to reflect site hierarchy and generate rich search breadcrumbs.
- **`CollectionPage` / `ItemList`:** Deployed across `products.php` and category pages (`animal-proteins.php`, etc.) defining every product item, category, and application.
- **`Service`:** Deployed on `services.php` defining ingredient sourcing, specification verification, and ocean freight logistics.
- **`FAQPage`:** Deployed on `faq.php` and homepage marking up authentic buyer questions and answers.
- **`ContactPage`:** Deployed on `contact.php` referencing the official contact point and director.

> [!NOTE]
> All structured data strictly matches visible page text. We do **not** inject fabricated user reviews, false star ratings, fictitious product prices, or unverified location schema.

---

## 3. Generative Engine Optimization (GEO) Strategy

Generative Engine Optimization prepares the website to be accurately understood, indexed, and cited by AI-assisted search experiences, conversational search engines, and answer systems (including Google Search Generative Experience, Microsoft Copilot, ChatGPT Search, and Perplexity).

### Core GEO Strategies Implemented:
1. **Entity Clarity &amp; Consistency:**
   - Consistent commercial naming: `Himalayan Food and Feed`.
   - Clear identification of director: `Kumar Dhungel, Director`.
   - Clear geographical presence: `Offices in Denmark and Singapore` with verified address `Saven 2630, Denmark`.
2. **Answer-Oriented Paragraph Formulation:**
   - Content directly answers standard B2B procurement queries:
     - What products are supplied?
     - What is the minimum order quantity (MOQ)?
     - How are specifications confirmed?
     - Are samples available before contract?
     - What shipping terms (Incoterms 2020) and documentation are provided?
3. **Machine-Readable Structure:**
   - Heading tags (`h1`, `h2`, `h3`) follow a strict semantic hierarchy.
   - Key parameters (applications, indicative ranges, packaging, documentation) are marked up in clean structured lists rather than dense narrative text.
4. **Server-Rendered Crawlability:**
   - Essential product descriptions, category relationships, and company facts reside in server-rendered PHP templates. No client-side hydration or JavaScript execution is required to read any content.
5. **Permissive AI Crawler Directives:**
   - `robots.txt` explicitly allows responsible AI search crawlers (`GPTBot`, `ClaudeBot`, `PerplexityBot`, `Googlebot`, `Bingbot`) while protecting private administrative and handler endpoints.

---

## 4. Crawlability, Sitemap &amp; Robots Configuration

- **`robots.txt`:** Allows full crawling of `/`, `/assets/css/`, `/assets/js/`, `/assets/images/`, and explicitly references the XML sitemap. Disallows direct crawling of internal `/config/`, `/handlers/`, `/storage/`, and log files.
- **`sitemap.xml`:** Lists all 19 public canonical URLs with update frequencies, priority ratings (1.0 for homepage, 0.9 for products and contact, 0.85 for categories), and last modified timestamps.
- **HTTP 404 Response:** `404.php` issues a true `404 Not Found` header with helpful links to prevent soft-404 search penalties.

---

## 5. Deployment Domain Configuration

When deploying from local development to production:
1. Update `APP_CANONICAL_DOMAIN` in `config/app.php` if different from `https://www.himalayanfoodandfeed.com`.
2. Submit `https://www.himalayanfoodandfeed.com/sitemap.xml` to Google Search Console and Bing Webmaster Tools.
3. Validate structured data via the official Google Rich Results Test (`https://search.google.com/test/rich-results`).
