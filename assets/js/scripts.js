/**
 * Himalayan Food and Feed - Interactive Script
 * 
 * Vanilla JavaScript implementation for mobile navigation, accessible dropdowns,
 * scroll reveals, form validation & AJAX feedback, back-to-top, and loader dismissal.
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initial Page Loader Dismissal
    initLoader();

    // 2. Sticky Header Scroll State
    initHeaderScroll();

    // 3. Mobile Navigation Drawer
    initMobileNav();

    // 4. Accessible Desktop Dropdowns
    initDropdowns();

    // 5. Scroll Reveal Animations (IntersectionObserver)
    initScrollReveals();

    // 6. Back-to-Top Button
    initBackToTop();

    // 7. Interactive Product Filter (Products Catalog Page)
    initProductFilter();

    // 8. Contact & Quote Enquiry Form Validation & Submission
    initQuoteForm();
});

/**
 * 1. Page Loader
 */
function initLoader() {
    const loader = document.getElementById('site-loader');
    if (!loader) return;

    const hideLoader = () => {
        loader.classList.add('hidden');
        setTimeout(() => {
            if (loader.parentNode) {
                loader.parentNode.removeChild(loader);
            }
        }, 500);
    };

    // Hide when window finishes loading or after maximum 1200ms safety timeout
    if (document.readyState === 'complete') {
        setTimeout(hideLoader, 300);
    } else {
        window.addEventListener('load', () => setTimeout(hideLoader, 250));
        setTimeout(hideLoader, 1200); // Safety limit
    }
}

/**
 * 2. Header Scroll State
 */
function initHeaderScroll() {
    const header = document.querySelector('.main-header');
    if (!header) return;

    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                if (window.scrollY > 40) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
}

/**
 * 3. Mobile Navigation Drawer
 */
function initMobileNav() {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const closeBtn = document.getElementById('mobile-menu-close');
    const drawer = document.getElementById('mobile-drawer');
    const overlay = document.getElementById('mobile-overlay');

    if (!toggleBtn || !drawer || !overlay) return;

    const openMenu = () => {
        drawer.classList.add('open');
        overlay.classList.add('open');
        toggleBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
        if (closeBtn) closeBtn.focus();
    };

    const closeMenu = () => {
        drawer.classList.remove('open');
        overlay.classList.remove('open');
        toggleBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        toggleBtn.focus();
    };

    toggleBtn.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    // Keyboard support: Escape closes menu
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && drawer.classList.contains('open')) {
            closeMenu();
        }
    });

    // Close on interior link click
    drawer.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });
}

/**
 * 4. Accessible Dropdown Menu
 */
function initDropdowns() {
    const dropdownItems = document.querySelectorAll('.nav-item-dropdown');

    dropdownItems.forEach(item => {
        const toggle = item.querySelector('.nav-dropdown-toggle');
        const menu = item.querySelector('.nav-dropdown');
        if (!toggle || !menu) return;

        // Toggle on click for touch devices
        toggle.addEventListener('click', (e) => {
            // If viewport is small or touch
            if (window.innerWidth < 1024) {
                e.preventDefault();
                const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
                toggle.setAttribute('aria-expanded', !isExpanded);
                menu.classList.toggle('visible');
            }
        });

        // Close on Escape
        item.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                toggle.setAttribute('aria-expanded', 'false');
                toggle.focus();
            }
        });
    });
}

/**
 * 5. Scroll Reveal Animations
 */
function initScrollReveals() {
    const reveals = document.querySelectorAll('.reveal-on-scroll');
    if (!reveals.length) return;

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    obs.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            rootMargin: '0px 0px -40px 0px',
            threshold: 0.1
        });

        reveals.forEach(el => observer.observe(el));
    } else {
        // Fallback for browsers without observer
        reveals.forEach(el => el.classList.add('is-visible'));
    }
}

/**
 * 6. Back-to-Top Button
 */
function initBackToTop() {
    const btn = document.getElementById('back-to-top');
    if (!btn) return;

    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                if (window.scrollY > 350) {
                    btn.classList.add('visible');
                } else {
                    btn.classList.remove('visible');
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    btn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        // Move focus to skip link or body top for keyboard users
        const skipLink = document.querySelector('.skip-link');
        if (skipLink) skipLink.focus();
    });
}

/**
 * 7. Product Catalog Filter
 */
function initProductFilter() {
    const filterButtons = document.querySelectorAll('[data-product-filter]');
    const productItems = document.querySelectorAll('[data-product-category]');

    if (!filterButtons.length || !productItems.length) return;

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-product-filter');

            // Update active button state
            filterButtons.forEach(b => {
                b.classList.remove('bg-navy', 'text-white');
                b.classList.add('bg-white', 'text-ink');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.remove('bg-white', 'text-ink');
            btn.classList.add('bg-navy', 'text-white');
            btn.setAttribute('aria-selected', 'true');

            // Filter items with smooth transition
            productItems.forEach(item => {
                const cat = item.getAttribute('data-product-category');
                if (filter === 'all' || cat === filter) {
                    item.style.display = '';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 20);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.96)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 250);
                }
            });
        });
    });
}

/**
 * 8. Quote Enquiry Form
 */
function initQuoteForm() {
    const form = document.getElementById('quote-form');
    if (!form) return;

    const alertBox = document.getElementById('form-alert');
    const submitBtn = form.querySelector('button[type="submit"]');

    const showAlert = (type, message) => {
        if (!alertBox) return;
        alertBox.className = type === 'success' 
            ? 'p-4 rounded-md bg-green-50 border border-green-200 text-green-800 mb-6 flex items-start gap-3'
            : 'p-4 rounded-md bg-red-50 border border-red-200 text-red-800 mb-6 flex items-start gap-3';
        alertBox.innerHTML = `
            <i class="fa-solid ${type === 'success' ? 'fa-circle-check text-green-600' : 'fa-circle-exclamation text-red-600'} text-xl mt-0.5"></i>
            <div>
                <p class="font-bold text-base mb-1">${type === 'success' ? 'Enquiry Transmitted' : 'Submission Error'}</p>
                <p class="text-sm">${message}</p>
            </div>
        `;
        alertBox.style.display = 'flex';
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    };

    const clearErrors = () => {
        form.querySelectorAll('.input-error-msg').forEach(el => el.remove());
        form.querySelectorAll('.border-red-500').forEach(el => el.classList.remove('border-red-500'));
        if (alertBox) alertBox.style.display = 'none';
    };

    const markError = (inputName, errorText) => {
        const input = form.querySelector(`[name="${inputName}"]`);
        if (!input) return;
        input.classList.add('border-red-500');

        const msg = document.createElement('p');
        msg.className = 'input-error-msg text-red-600 text-xs mt-1 font-semibold';
        msg.textContent = errorText;
        input.parentNode.appendChild(msg);
    };

    form.addEventListener('submit', (e) => {
        clearErrors();

        let hasError = false;
        const nameInput = form.querySelector('[name="name"]');
        const emailInput = form.querySelector('[name="email"]');
        const catInput = form.querySelector('[name="product_category"]');
        const msgInput = form.querySelector('[name="message"]');
        const privacyInput = form.querySelector('[name="privacy_consent"]');

        if (!nameInput.value.trim()) {
            markError('name', 'Full name is required.');
            hasError = true;
        }

        const emailVal = emailInput.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailVal || !emailRegex.test(emailVal)) {
            markError('email', 'A valid business email address is required.');
            hasError = true;
        }

        if (!catInput.value.trim()) {
            markError('product_category', 'Please select a product category.');
            hasError = true;
        }

        if (!msgInput.value.trim() || msgInput.value.trim().length < 10) {
            markError('message', 'Please provide at least 10 characters detailing your specifications.');
            hasError = true;
        }

        if (privacyInput && !privacyInput.checked) {
            markError('privacy_consent', 'You must agree to the privacy policy to submit.');
            hasError = true;
        }

        if (hasError) {
            e.preventDefault();
            showAlert('error', 'Please resolve the highlighted fields before submitting.');
            return;
        }

        // Send via AJAX if FormData & Fetch are available
        e.preventDefault();
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i> Transmitting Specification...';

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;

            if (data.success) {
                showAlert('success', data.message);
                form.reset();
            } else {
                showAlert('error', data.message || 'An error occurred during submission.');
                if (data.errors) {
                    Object.keys(data.errors).forEach(key => {
                        markError(key, data.errors[key]);
                    });
                }
            }
        })
        .catch(err => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
            showAlert('error', 'Network communication error. Please email kumar@himalayanfoodandfeed.com directly or chat on WhatsApp.');
        });
    });
}
