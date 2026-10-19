<?php
/**
 * Himalayan Food and Feed - Shared Header Partial
 */
require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../config/seo.php';
require_once __DIR__ . '/../config/products.php';

$pageSeo = $pageSeo ?? [];
$currentPageKey = $currentPageKey ?? 'home';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <?php require __DIR__ . '/seo-meta.php'; ?>

  <!-- Google Fonts Preconnect & Load -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Source+Sans+3:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Font Awesome Free CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Tailwind CSS CDN & Official Browser Configuration -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              navy: '#0D2350',
              'navy-dark': '#071533',
              'navy-light': '#183777',
              green: '#5B8C26',
              'green-light': '#7CB837',
              'green-dark': '#43661B',
              orange: '#F2A10F',
              'orange-hover': '#D98D07',
              bg: '#F5F7FB',
              ink: '#132040',
              muted: '#54607A',
              border: '#DBE1EC',
              'mountain-blue': '#8FA3C8'
            }
          },
          fontFamily: {
            heading: ['Montserrat', 'system-ui', '-apple-system', 'sans-serif'],
            body: ['Source Sans 3', 'system-ui', '-apple-system', 'sans-serif']
          }
        }
      }
    };
  </script>

  <!-- Custom Corporate Design System Stylesheet -->
  <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">

  <!-- JSON-LD Structured Data -->
  <?php require __DIR__ . '/structured-data.php'; ?>
</head>
<body class="bg-brand-bg text-brand-ink antialiased flex flex-col min-h-screen">
  <!-- Skip to Content for Keyboard & Screen Reader Accessibility -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <!-- Brand Loading Animation (Dismisses gracefully on load) -->
  <?php require __DIR__ . '/loader.php'; ?>

  <!-- Topbar with Verified Commercial Information -->
  <?php require __DIR__ . '/topbar.php'; ?>

  <!-- Main Navigation & Header -->
  <?php require __DIR__ . '/navigation.php'; ?>

  <!-- Main Landmark for Semantic Structure & Accessibility Focus -->
  <main id="main-content" tabindex="-1" class="flex-grow focus:outline-none">
