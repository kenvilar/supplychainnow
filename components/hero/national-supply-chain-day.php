<?php

$pageID      = get_the_ID();
$page_title  = esc_html( get_field( 'Page_Title',
  $pageID ) ?: 'A Celebration and Spotlight of the Industry That Connects the World' );
$description = esc_html( get_field( 'Description', $pageID ) ?: "" );
$hero_image  = esc_url( get_field( 'Hero_Image',
  $pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--national-supply-chain-day.avif' );
$icon        = esc_url( get_field( 'Icon',
  $pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/national-supply-chain-day.avif' );
$hide_icon   = get_field( 'Hide_Icon', $pageID ) ?: false;
?>
<section class="section bg-cargogrey text-white rounded-b-100">
  <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
    <div class="w-layout-blockcontainer max-w-888 w-container">
      <div class="pt-20 md:pt-0">
        <div class="flex items-center justify-between gap-20 sm:flex-col">
          <div class="max-w-328 w-full md:max-w-full <?= $hide_icon ? 'hidden' : '' ?>">
            <img
              src="<?= $icon; ?>"
              loading="lazy" alt="national supply chain day" class="w-full h-full max-w-none fit-cover">
          </div>
          <div class="max-w-500 w-full md:max-w-full sm:text-center">
            <h1 class="font-family-alternate font-normal text-xl tracking-[2.4px]">
              <?= $page_title; ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img
      src="<?= $hero_image; ?>"
      loading="lazy" alt="hero-national-supply-chain-day" class="image opacity-10">
  </div>
</section>
