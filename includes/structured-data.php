<?php
/**
 * Himalayan Food and Feed - Structured Data (JSON-LD) Partial
 */
require_once __DIR__ . '/../config/seo.php';

$schemas = [];
// 1. Organization
$schemas[] = get_organization_schema();

// 2. WebSite
$schemas[] = get_website_schema();

// 3. Breadcrumbs
if (!empty($pageSeo['breadcrumbs'])) {
    $schemas[] = get_breadcrumb_schema($pageSeo['breadcrumbs']);
}

// 4. Extra schemas passed from individual pages
if (!empty($structuredDataExtra)) {
    if (isset($structuredDataExtra['@context'])) {
        $schemas[] = $structuredDataExtra;
    } elseif (is_array($structuredDataExtra)) {
        foreach ($structuredDataExtra as $item) {
            if (is_array($item)) {
                $schemas[] = $item;
            }
        }
    }
}
?>
<script type="application/ld+json">
<?= json_encode(['@context' => 'https://schema.org', '@graph' => $schemas], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
