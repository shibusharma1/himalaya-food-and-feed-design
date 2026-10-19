# Himalayan Food and Feed &mdash; B2B Content Writing &amp; Editorial Guidelines

This guide establishes the tone of voice, editorial standards, and factual integrity required when adding or updating written content on the **Himalayan Food and Feed** platform.

---

## 1. Tone of Voice &amp; Target Audience

Our primary readers are professional B2B procurement managers, animal nutritionists, feed-mill plant managers, agricultural commodity brokers, and food wholesale directors across Europe, Asia, and global markets.

### Tone Principles:
- **Professional &amp; Pragmatic:** Speak directly to commercial realities &mdash; parameter tolerances, delivery schedules, packaging types, and certificate compliance.
- **Specification-Led:** Emphasize measurable parameters (e.g., minimum crude protein %, maximum moisture %, particle sizing, origin guarantees) rather than emotional rhetoric.
- **Conservative with Claims:** Make no claim that cannot be proven with an official Certificate of Analysis, Veterinary Health Certificate, or verifiable commercial bill of lading.
- **Accessible Commercial English:** Write clear, concise international English that is easily understood by non-native English speakers across global trade hubs.

---

## 2. Prohibited Content &amp; Anti-Patterns

Never include the following on any public page:
- **No Fabricated Testimonials:** Do not invent customer names, false quotes, or fabricated review stars.
- **No Fake Partner / Client Logos:** Do not paste logos of multinational corporations or competitor certifications without signed authorization.
- **No Unsupported Superlatives:** Avoid phrases such as *"the undisputed world leader"*, *"the cheapest prices on earth"*, or *"100% perfect quality guaranteed"*.
- **No Fabricated Facilities:** Do not state that the company owns massive warehouse complexes, vessel fleets, or chemical laboratories unless legal property ownership is documented.
- **No Keyword Stuffing:** Write natural sentences. Search engines and AI-assisted answer engines penalize repetitive keyword strings.

---

## 3. Product Specification Wording Conventions

In international commodity trading, raw agricultural parameters fluctuate across harvests and processing batches. To maintain legal and commercial integrity:
- Always preface numerical figures with **"Typical"** or **"Indicative parameter range"**.
- Accompany product listings with the standard notice:
  > *&ldquo;Final specifications and parameter limits confirmed per production lot by Certificate of Analysis (COA).&rdquo;*
- Clearly specify the packaging type (e.g. 25kg PE-lined craft bags, 1,000kg big bags, or bulk container liners).

---

## 4. How to Add or Edit Products

All product content is centralized in `config/products.php`. To add a new product or modify existing specifications:

1. Open `config/products.php`.
2. Locate the appropriate category array (e.g., `'plant-proteins'`).
3. Add or update the product array item:
   ```php
   [
       'id' => 'rapeseed-meal',
       'name' => 'Rapeseed Meal (Canola Meal)',
       'category' => 'Plant Proteins',
       'description' => 'Nutritious protein co-product from oil extraction suitable for ruminant and swine diets.',
       'application' => 'Dairy cattle rations, swine feeds.',
       'specs_status' => 'Indicative parameters: Crude Protein min 36-38%, Moisture max 12%. Confirmed per contract.',
       'grades' => ['Feed Grade Solvent Extracted'],
       'packaging' => 'Bulk container liner bags or 50 kg bags.',
       'doc_requirements' => 'Phytosanitary Certificate, COA, Weight & Quality Certificate.'
   ]
   ```
4. Save the file. The new product will automatically render on the category page (`products/plant-proteins.php`), appear in the general catalog (`products.php`), be filterable via JavaScript, and be indexed in the structured data JSON-LD schema.
