<?php

?>
<section class="section bg-cargogrey text-white rounded-b-100">
  <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
    <div class="w-layout-blockcontainer max-w-888 w-container">
      <div class="pt-20 md:pt-0">
        <div class="flex items-center justify-between gap-20 sm:flex-col">
          <div class="max-w-328 w-full md:max-w-full">
            <img
              src="<?php
              echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/national-supply-chain-day.avif'; ?>"
              loading="lazy" alt="national supply chain day" class="w-full h-full max-w-none fit-cover">
          </div>
          <div class="max-w-500 w-full md:max-w-full sm:text-center">
            <h1 class="font-family-alternate font-normal text-xl tracking-[2.4px]">
              Celebrating the Backbone of the Industry
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img
      src="<?php
      if ( has_post_thumbnail( get_the_ID() ) ) {
        echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
      } else {
        echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--national-supply-chain-day.avif';
      }
      ?>"
      loading="lazy" alt="hero-national-supply-chain-day" class="image opacity-10">
  </div>
</section>
