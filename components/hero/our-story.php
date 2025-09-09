<?php

$pageID     = get_the_ID();
$page_title = esc_html( get_field( 'Page_Title', $pageID ) ?: 'Our Story' );
$hero_image = esc_url( get_field( 'Hero_Image',
  $pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--our-story.avif' );
?>
<section class="section bg-cargogrey text-white rounded-b-100">
  <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
    <div class="w-layout-blockcontainer pt-20 w-container text-center max-w-960">
      <div class="mb-20">
        <img
          src="<?php
          echo get_stylesheet_directory_uri() . '/assets/img/icons/our-story-icon.svg' ?>"
          loading="lazy" alt="our story icon">
      </div>
      <div class="mb-16">
        <h1><?= $page_title; ?></h1>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img
      src="<?= $hero_image; ?>"
      loading="lazy" alt="hero-our-story" class="image opacity-10">
  </div>
</section>
