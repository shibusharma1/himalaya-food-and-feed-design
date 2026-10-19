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
- **H1 (Hero / Page Title):** `clamp(2.25rem, 4.5vw, 3.75rem)` (36px &ndash; 60px), Line Height: 1.15, Weight: 800.
- **H2 (Section Headings):** `clamp(1.75rem, 3.2vw, 2.5rem)` (28px &ndash; 40px), Line Height: 1.2, Weight: 700. Features a dedicated 54px &times; 4px brand-green accent rule.
- **H3 (Card Headings &amp; Sub-sections):** `clamp(1.2rem, 2vw, 1.5rem)` (19px &ndash; 24px), Line Height: 1.25, Weight: 700.
- **Lead Paragraph:** `1.1875rem` (19px), Line Height: 1.7, Color: `#54607A`.
- **Body Copy:** `1.0625rem` (17px), Line Height: 1.625, Color: `#132040`.
- **Navigation Links:** `0.9375rem` (15px), Weight: 600, Montserrat.
- **Metadata / Footnotes:** `0.75rem` &ndash; `0.875rem` (12px &ndash; 14px).

---

## 4. Spacing, Containers &amp; Grid

### Container System
- Maximum layout width: `min(100% - 2.5rem, 1220px)`.
- Left and right gutters: `1rem` on mobile, `1.5rem` on tablet, `2rem` on desktop.

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

### Product &amp; Service Cards
- Clean `#FFFFFF` surface with subtle `1px solid #DBE1EC` border.
- Distinctive top border: `4px solid #5B8C26` (Green), turning `#F2A10F` (Orange) on hover.
- Images have an aspect ratio of `16:10` with subtle zoom scale on card hover.

### Director Badge Card
- High-contrast Navy (`#0D2350`) background with a prominent `12px solid #5B8C26` right border, inspired by the client's business card angle.

### Angular Brand Separators
- Sections featuring `.brand-skew-divider` display a subtle diagonal brand stripe at `54%` width skewed at `-14deg` in `#5B8C26` at `0.85` opacity on desktop screens, reinforcing the client's business card geometry.

---

## 6. Accessibility &amp; Motion Standards (WCAG 2.2 AA)
- **Focus Rings:** Mandatory high-visibility `outline: 3px solid #F2A10F; outline-offset: 3px;` on all interactive links, buttons, inputs, and summaries.
- **Touch Targets:** Minimum 44px &times; 44px on all tap targets.
- **Motion:** Micro-interactions (200ms &ndash; 350ms). Elements using `.reveal-on-scroll` smoothly fade in.
- **Reduced Motion Support:** `@media (prefers-reduced-motion: reduce)` automatically disables scroll animations, loader pulses, and transitions.
