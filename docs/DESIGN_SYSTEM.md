# Himalayan Food and Feed &mdash; Design System &amp; Brand Tokens

## 1. Visual Identity &amp; Brand Philosophy
The design system for **Himalayan Food and Feed** reflects the stature, stability, and precision expected of an international B2B agricultural and feed ingredient supplier. It avoids consumer e-commerce gimmicks, excessive gradients, glassmorphism, or generic template styling.

The primary visual identity is derived directly from the client's official business card, brand emblem, and the mountain silhouette with livestock and agricultural motifs.

---

## 2. Color Palette &amp; Tokens

| Token Name | Hex Code | Semantic Role | Usage Context |
| :--- | :--- | :--- | :--- |
| **Corporate Navy** | `#0D2350` | Primary Brand Color | Hero backgrounds, header text, primary headings, footer, high-contrast containers |
| **Dark Navy** | `#071533` | Deep Background | Topbar, dark accents, footer legal divider |
| **Light Navy** | `#183777` | Accent Ink | Hover states, secondary borders |
| **Brand Green** | `#5B8C26` | Trust &amp; Agriculture | Accent borders, secondary buttons, success indicators, category icons |
| **Light Green** | `#7CB837` | Highlight Accent | Badges, subtle hover tints |
| **Dark Green** | `#43661B` | Focus State &amp; Hover | Button hover states, high-contrast dark text on green tints |
| **Accent Orange** | `#F2A10F` | Primary Interactive Action | Primary "Request a Quote" buttons, call-to-action highlights, badges |
| **Orange Hover** | `#D98D07` | Interactive Hover | Button hover, active border highlights |
| **Light Background** | `#F5F7FB` | Page Surface | Main body background, contrasting soft card backgrounds |
| **Surface White** | `#FFFFFF` | Card &amp; Component Surface | Product cards, form containers, modal surfaces |
| **Primary Ink** | `#132040` | Body Typography | Primary readable body text, form field text |
| **Muted Slate** | `#54607A` | Secondary Typography | Descriptions, captions, helper text, breadcrumb inactive crumbs |
| **Border Line** | `#DBE1EC` | Structure &amp; Division | Table borders, card outlines, form field borders |
| **Mountain Blue** | `#8FA3C8` | Secondary Illustration | Decorative vectors, mountain snow shadows |

---

## 3. Typography Hierarchy

### Font Families
- **Headings, Navigation &amp; Interactive Buttons:** `Montserrat`, sans-serif (Weights: 600 Semi-Bold, 700 Bold, 800 Extra-Bold).
- **Body Copy, Contact Info, Forms &amp; Specifications:** `Source Sans 3`, sans-serif (Weights: 400 Regular, 600 Semi-Bold, 700 Bold).

### Typographic Scale
- **H1 (Hero / Page Title):** `text-3xl sm:text-4xl` (`1.875rem` &ndash; `2.25rem` / 30px &ndash; 36px on tablet and desktop), Line Height: 1.2, Weight: 800. Standardized across all page hero banners for a compact, balanced corporate presentation.
- **H2 (Section Headings):** `clamp(1.75rem, 3.2vw, 2.5rem)` (28px &ndash; 40px), Line Height: 1.2, Weight: 700. Features a dedicated 54px &times; 4px brand-green accent rule.
- **H3 (Card Headings &amp; Sub-sections):** `clamp(1.2rem, 2vw, 1.5rem)` (19px &ndash; 24px), Line Height: 1.25, Weight: 700.
- **Lead Paragraph:** `1.1875rem` (19px), Line Height: 1.7, Color: `#54607A`.
- **Body Copy:** `1.0625rem` (17px), Line Height: 1.625, Color: `#132040`.
- **Navigation Links:** `0.9375rem` (15px), Weight: 600, Montserrat.
- **Metadata / Footnotes:** `0.75rem` &ndash; `0.875rem` (12px &ndash; 14px).

---

## 4. Spacing, Containers &amp; Grid

### Container System
- Maximum layout width: `min(100% - 1.5rem, 1320px)`.
- Left and right gutters: `0.5rem` on mobile, `0.75rem` on tablet/desktop (refined for optimal width utilization).

### Spacing Tokens
- Section vertical padding: `py-16` (64px) on mobile / tablet; `py-24` (96px) on desktop.
- Grid gap: `gap-6` (24px) to `gap-8` (32px).
- Corner radii:
  - Small elements (inputs, badges, small buttons): `var(--radius-sm)` = `6px`.
  - Medium elements (cards, service boxes): `var(--radius-md)` = `10px`.
  - Large elements (director badge card, CTA banners): `var(--radius-lg)` = `16px` &ndash; `24px`.

---

## 5. Components &amp; UI Patterns

### Buttons
- **Primary CTA (`.btn-primary`):** Solid `#F2A10F` (Accent Orange) with `#0D2350` bold text. Subtle box shadow `rgba(242, 161, 15, 0.3)`. Translates `-2px` on hover.
- **Secondary CTA (`.btn-secondary`):** Transparent with `2px solid rgba(255, 255, 255, 0.8)` on dark hero/CTA sections.
- **Green Accent Button (`.btn-green`):** Solid `#5B8C26` with `#FFFFFF` text. Used for "Learn More" and WhatsApp contact triggers.
- **Outline Navy Button (`.btn-outline-navy`):** Transparent with `2px solid #0D2350` border.

### Interactive Catalog Filter Buttons (`.catalog-filter-btn`)
- **Active State (`[aria-selected="true"]` / `.is-active`):** High-contrast solid Corporate Navy (`#0D2350`, `var(--color-navy)`), crisp white text (`#FFFFFF`), matching `#0D2350` border, and prominent shadow `0 4px 14px rgba(13, 35, 80, 0.25)`. On hover, background deepens to `#071533` with white text, preventing low-contrast washed-out states.
- **Inactive State (`[aria-selected="false"]`):** Clean `#FFFFFF` background with `#132040` (`var(--color-ink)`) text and `#DBE1EC` border. On hover, transitions to `#F8FAFC` background with `#0D2350` text and `#CBD5E1` border.
- **Accessibility:** Full `aria-selected` synchronization, keyboard focus indicators, and smooth 200ms transitions.

### Product &amp; Service Cards
- **Service Cards (`.service-card`):** Clean `#FFFFFF` surface with a uniform `1px solid #DBE1EC` border on all four sides. Features smooth hover elevation (`transform: translateY(-4px); box-shadow: var(--shadow-card)`). Colored top borders and top-border hover transitions were deliberately removed for a restrained, modern, and uncluttered enterprise trading aesthetic.
- **Product Cards (`.product-card`):** Dedicated `16:10` aspect ratio photography (`assets/images/products/items/*.webp`), lot-verified micro-badges (`COA Verified`, `Vetted Supply`), clear product heading and short description, and dedicated "View Details" action with animated directional indicator. Cluttered technical specifications are moved to the dedicated `product-detail.php` dossier.
- **Product Detail Layout (`product-detail.php`):** Two-column enterprise view featuring hero breadcrumb navigation, lot verification status, high-resolution imagery, logistics and containerized supply parameters, director contact card, structured indicative technical specification table, commercial disclaimer alert, export documentation pack checklist, and pre-filled inquiry form.

### Director Badge Card
- High-contrast Navy (`#0D2350`) background with a prominent `12px solid #5B8C26` right border, inspired by the client's business card angle.

### Angular Brand Separators
- Sections featuring `.brand-skew-divider` display a subtle diagonal brand stripe at `54%` width skewed at `-14deg` in `#5B8C26` at `0.85` opacity on desktop screens, reinforcing the client's business card geometry.

### Floating Action Controls
- **Floating WhatsApp Button (`.whatsapp-float`):**
  - **Default (Idle) State:** Compact 52px circular action button showing only the WhatsApp icon (`fa-brands fa-whatsapp`).
  - **Hover / Focus State:** Smoothly expands horizontally into a rounded pill revealing the "WhatsApp" text label with a subtle `-3px` lift and enhanced drop shadow (`0 8px 24px rgba(37, 211, 102, 0.5)`).
  - **Mobile State (`≤640px`):** Renders as a dedicated 48px circle with the text hidden to preserve viewport space and touch ergonomics.
- **Back to Top Button (`.back-to-top`):** Pinned at `bottom: 80px` (above the WhatsApp button), smoothly fading and translating in when scrolled past 350px.

---

## 6. Accessibility &amp; Motion Standards (WCAG 2.2 AA)
- **Focus Rings:** Mandatory high-visibility `outline: 3px solid #F2A10F; outline-offset: 3px;` on all interactive links, buttons, inputs, and summaries.
- **Touch Targets:** Minimum 44px &times; 44px on all tap targets.
- **Motion:** Micro-interactions (200ms &ndash; 350ms). Elements using `.reveal-on-scroll` smoothly fade in.
- **Reduced Motion Support:** `@media (prefers-reduced-motion: reduce)` automatically disables scroll animations, loader pulses, and transitions.
