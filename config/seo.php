<?php
/**
 * Himalayan Food and Feed - SEO & Structured Data Configuration
 * 
 * Provides automated metadata, canonical URLs, Open Graph tags, and
 * schema.org JSON-LD generation for all pages and catalog entities.
 */

require_once __DIR__ . '/app.php';

function get_seo_defaults(): array {
    return [
        'title' => 'Himalayan Food and Feed | International Food & Animal Feed Ingredients B2B',
        'description' => 'International B2B supplier of animal and plant proteins, feed additives, minerals, food staples and pet food ingredients. Commercial presence in Denmark and Singapore.',
        'canonical' => get_base_url(),
        'og_type' => 'website',
        'og_image' => url('assets/images/hero/hero-bulk-logistics.webp'),
        'robots' => 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => url('/')]
        ]
    ];
}

/**
 * Generate JSON-LD Organization Schema
 */
function get_organization_schema(): array {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        '@id' => APP_CANONICAL_DOMAIN . '/#organization',
        'name' => APP_NAME,
        'url' => APP_CANONICAL_DOMAIN,
        'logo' => [
            '@type' => 'ImageObject',
            '@id' => APP_CANONICAL_DOMAIN . '/#logo',
            'url' => APP_CANONICAL_DOMAIN . '/assets/images/logo/logo-mark.png',
            'caption' => APP_NAME . ' Logo'
        ],
        'image' => APP_CANONICAL_DOMAIN . '/assets/images/logo/logo-mark.png',
        'description' => 'International B2B trading partner supplying food ingredients, animal feed raw materials, proteins, minerals, and additives.',
        'email' => CLIENT_EMAIL,
        'telephone' => CLIENT_PHONE,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Saven 2630',
            'addressCountry' => 'DK'
        ],
        'areaServed' => [
            'Europe',
            'Asia',
            'Worldwide'
        ],
        'knowsAbout' => [
            'Animal Feed Ingredients',
            'Plant Proteins',
            'Feed Additives',
            'Feed Minerals',
            'Agricultural Food Commodities',
            'Pet Food Nutrition',
            'International Commodity Trading'
        ],
        'contactPoint' => [
            [
                '@type' => 'ContactPoint',
                'telephone' => CLIENT_PHONE,
                'email' => CLIENT_EMAIL,
                'contactType' => 'sales and commercial enquiries',
                'areaServed' => ['Europe', 'Asia', 'Worldwide'],
                'availableLanguage' => ['English']
            ]
        ]
    ];
}

/**
 * Generate JSON-LD WebSite Schema
 */
function get_website_schema(): array {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        '@id' => APP_CANONICAL_DOMAIN . '/#website',
        'name' => APP_NAME,
        'url' => APP_CANONICAL_DOMAIN,
        'description' => 'B2B trading partner for food and animal feed ingredients across Europe and Asia.',
        'publisher' => [
            '@id' => APP_CANONICAL_DOMAIN . '/#organization'
        ]
    ];
}

/**
 * Generate JSON-LD BreadcrumbList Schema
 */
function get_breadcrumb_schema(array $breadcrumbs): array {
    $items = [];
    $pos = 1;
    foreach ($breadcrumbs as $crumb) {
        $items[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => $crumb['name'],
            'item' => $crumb['url']
        ];
    }
    return [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $items
    ];
}

/**
 * Generate JSON-LD ItemList / CollectionPage Schema for Products
 */
function get_collection_schema(string $name, string $description, array $items): array {
    $itemList = [];
    $pos = 1;
    foreach ($items as $item) {
        $itemList[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => $item['name'] ?? $item['title'],
            'description' => $item['description'] ?? $item['short_desc']
        ];
    }
    return [
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        'name' => $name,
        'description' => $description,
        'mainEntity' => [
            '@type' => 'ItemList',
            'itemListElement' => $itemList
        ]
    ];
}

/**
 * Generate JSON-LD FAQPage Schema
 */
function get_faq_schema(array $faqs): array {
    $entities = [];
    foreach ($faqs as $faq) {
        $entities[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }
    return [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $entities
    ];
}

/**
 * Generate JSON-LD Service Schema
 */
function get_service_schema(string $serviceName, string $description): array {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $serviceName,
        'description' => $description,
        'provider' => [
            '@id' => APP_CANONICAL_DOMAIN . '/#organization'
        ],
        'areaServed' => ['Europe', 'Asia', 'Worldwide']
    ];
}
