# Himalayan Food and Feed &mdash; Quality Assurance &amp; Testing Checklist

This checklist documents all functional, visual, accessibility, and code quality verification performed on the **Himalayan Food and Feed** platform.

---

## 1. Functional Verification

| Test Case | Description | Expected Outcome | Result |
| :--- | :--- | :--- | :--- |
| **TC-01** | Homepage load | Server-rendered HTML outputs without PHP warnings or notices. | **PASS** |
| **TC-02** | Header navigation | All menu links (`Home`, `About`, `Products`, `Services`, `Why Choose Us`, `Quality`, `Contact`) point to valid URLs. | **PASS** |
| **TC-03** | Product dropdown | Desktop dropdown opens on hover/focus and displays all 7 category links. | **PASS** |
| **TC-04** | Mobile navigation drawer | Hamburger button opens drawer, sets `aria-expanded="true"`, traps focus, and closes on Escape or backdrop tap. | **PASS** |
| **TC-05** | Category pages | All 7 dedicated category pages load with specific breadcrumbs, descriptions, and product items. | **PASS** |
| **TC-06** | Interactive product filter | On `products.php`, clicking category filter buttons correctly shows/hides corresponding cards. | **PASS** |
| **TC-07** | Quote form &ndash; required fields | Submitting an empty form is rejected on client-side and server-side with specific field error highlights. | **PASS** |
| **TC-08** | Quote form &ndash; email validation | Entering invalid email addresses (e.g. `invalid@`, `test`) is rejected with actionable feedback. | **PASS** |
| **TC-09** | Quote form &ndash; CSRF protection | Modifying or omitting the `csrf_token` hidden field results in an HTTP 403 rejection. | **PASS** |
| **TC-10** | Quote form &ndash; honeypot spam | Populating `contact_security_check` silently succeeds without dispatching email. | **PASS** |
| **TC-11** | Quote form &ndash; rate limiting | Submitting more than 5 requests in 10 minutes returns HTTP 429 rate limit error. | **PASS** |
| **TC-12** | Form submission feedback | Valid submission returns clear success notification and safely resets the form inputs. | **PASS** |
| **TC-13** | Back-to-top button | Becomes visible after scrolling past 350px and smoothly scrolls viewport to top when clicked. | **PASS** |
| **TC-14** | WhatsApp action | Floating button triggers `https://wa.me/4552175666` in a new tab without blocking content. | **PASS** |
| **TC-15** | Custom 404 page | Requesting an invalid URL returns a valid 404 page and an HTTP `404 Not Found` response code. | **PASS** |
| **TC-16** | Sitemap &amp; Robots | `sitemap.xml` returns well-formed XML; `robots.txt` contains clean crawler directives. | **PASS** |

---

## 2. Responsive &amp; Visual Testing

| Screen Width | Target Device Category | Check Items | Status |
| :--- | :--- | :--- | :--- |
| **320px** | Ultra-narrow mobile (iPhone SE 1st gen) | No horizontal overflow, buttons wrap cleanly, text remains legible. | **PASS** |
| **375px &ndash; 390px** | Standard smartphones (iPhone 12/13/14/15) | Form fields fill width comfortably, navigation drawer operates smoothly. | **PASS** |
| **430px** | Large smartphones (Pro Max / Plus) | High-definition logo renders crisp, hero typography clamps nicely. | **PASS** |
| **640px** | Small tablets / landscape phones | Grid switches to 2-column layout where appropriate. | **PASS** |
| **768px &ndash; 860px** | Tablets in portrait (iPad) | Header elements remain balanced without clipping or text wrapping. | **PASS** |
| **1024px** | Tablets in landscape / small laptops | Desktop navigation renders with products dropdown; brand skew lines active. | **PASS** |
| **1280px &ndash; 1440px** | Standard desktop monitors | Max-width container maintains comfortable reading margins (1220px). | **PASS** |
| **1920px** | Full HD &amp; Ultrawide displays | Backgrounds span full viewport without layout breakage or distorted images. | **PASS** |
| **Zoom: 110% &ndash; 125%** | Browser zoom magnification | No overlapping navigation items or clipped text containers. | **PASS** |

---

## 3. Accessibility &amp; Standards (WCAG 2.2 AA)

- [x] **Keyboard Navigation:** Full tab order throughout header, dropdown, skip-to-content, buttons, accordions, and form fields.
- [x] **Visible Focus Indicators:** High-contrast `outline: 3px solid #F2A10F; outline-offset: 3px;` active on all interactive elements.
- [x] **Semantic Landmarks:** `<header>`, `<nav>`, `<main id="main-content">`, `<section>`, `<article>`, and `<footer>` used appropriately.
- [x] **Headings Hierarchy:** Single `<h1>` per page, followed by logically nested `<h2>` and `<h3>` tags without skipping levels.
- [x] **Form Labels:** Every form input has an explicit `<label for="...">` element.
- [x] **Image Alt Text:** Informative alt attributes on all product, hero, and corporate imagery; purely decorative icons use `aria-hidden="true"`.
- [x] **Reduced Motion Support:** `@media (prefers-reduced-motion: reduce)` disables animations and transition effects.

---

## 4. Code Quality &amp; Security Validation

- [x] **PHP Syntax Check:** All PHP files passed `php -l` without errors or syntax warnings.
- [x] **No Hard-Coded Credentials:** All sensitive environment options loaded via environment variables or safe defaults.
- [x] **XSS Prevention:** Output escaping enforced via `e()` (`htmlspecialchars`) across all dynamic parameters.
- [x] **CSRF Token Validation:** Cryptographic verification enforced on all state-changing POST actions.
