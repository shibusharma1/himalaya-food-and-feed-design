<?php
/**
 * Himalayan Food and Feed - SEO Metadata Partial
 */
require_once __DIR__ . '/../config/seo.php';

$seo = array_merge(get_seo_defaults(), $pageSeo ?? []);
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?= e($seo['title']) ?></title>
<meta name="description" content="<?= e($seo['description']) ?>">
<meta name="robots" content="<?= e($seo['robots']) ?>">
<link rel="canonical" href="<?= e($seo['canonical']) ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="<?= e($seo['og_type']) ?>">
<meta property="og:url" content="<?= e($seo['canonical']) ?>">
<meta property="og:title" content="<?= e($seo['title']) ?>">
<meta property="og:description" content="<?= e($seo['description']) ?>">
<meta property="og:image" content="<?= e($seo['og_image']) ?>">
<meta property="og:site_name" content="<?= APP_NAME ?>">
<meta property="og:locale" content="en_US">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?= e($seo['canonical']) ?>">
<meta name="twitter:title" content="<?= e($seo['title']) ?>">
<meta name="twitter:description" content="<?= e($seo['description']) ?>">
<meta name="twitter:image" content="<?= e($seo['og_image']) ?>">

<!-- Favicon & Touch Icons -->
<link rel="icon" type="image/svg+xml" href="<?= asset('assets/images/logo/favicon.svg') ?>">
<link rel="icon" type="image/png" href="<?= asset('assets/images/logo/logo-mark.png') ?>">
<link rel="apple-touch-icon" href="<?= asset('assets/images/logo/logo-mark@2x.png') ?>">
