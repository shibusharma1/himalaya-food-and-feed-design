<?php
/**
 * Himalayan Food and Feed - Brand Loading Indicator
 * 
 * Lightweight mountain silhouette and circular pulse using inline SVG.
 * Does not block access, has a short duration with instant fade out.
 */
?>
<div id="site-loader" class="site-loader" aria-hidden="true" role="status">
  <div class="flex flex-col items-center">
    <svg class="loader-mountain-svg mb-4" viewBox="0 0 100 80" fill="none" xmlns="http://www.w3.org/2000/svg">
      <!-- Outer sweeping crest -->
      <path d="M10 65C10 40 30 15 50 15C65 15 78 25 85 38" stroke="#5B8C26" stroke-width="4" stroke-linecap="round"/>
      <!-- Mountain Peaks -->
      <path d="M22 65L42 32L54 50L68 25L88 65H22Z" fill="#0D2350"/>
      <!-- Snow Highlights -->
      <path d="M42 32L46 42L40 44L36 38L42 32Z" fill="#FFFFFF"/>
      <path d="M68 25L73 35L67 38L64 33L68 25Z" fill="#FFFFFF"/>
      <!-- Base Swooshes -->
      <path d="M15 70C35 76 65 76 85 70" stroke="#F2A10F" stroke-width="4" stroke-linecap="round"/>
      <circle cx="50" cy="58" r="4" fill="#5B8C26"/>
    </svg>
    <div class="font-heading font-extrabold text-sm tracking-widest text-white uppercase">
      HIMALAYAN
    </div>
    <div class="font-heading font-bold text-[10px] tracking-[0.25em] text-brand-green mt-0.5">
      FOOD AND FEED
    </div>
  </div>
</div>
