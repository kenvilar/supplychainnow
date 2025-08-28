<?php

?>
<section class="section bg-cargogrey text-white rounded-b-100">
  <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
    <div class="w-layout-blockcontainer pt-20 w-container text-center max-w-1220">
      <div class="mb-20">
        <img
          src="<?php
          echo get_stylesheet_directory_uri() . '/assets/img/icons/play-icon.svg'; ?>"
          loading="lazy" alt="play-icon">
      </div>
      <div class="mb-16">
        <h1>Brands</h1>
      </div>
      <div>
        <p class="font-family-alternate font-medium text-xl tracking-[2.4px] capitalize">
          Explore the #1 Voice of Supply Chain and Find What Speaks to You
        </p>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img src="<?php
    if ( has_post_thumbnail( get_the_ID() ) ) {
      echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
    } else {
      echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--brands.avif';
    }
    ?>"
         loading="lazy" alt="hero-brands" class="image opacity-10">
  </div>
</section>
