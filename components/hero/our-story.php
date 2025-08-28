<?php

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
        <h1>Our Story</h1>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img
      src="<?php
      if ( has_post_thumbnail( get_the_ID() ) ) {
        echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
      } else {
        echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--our-story.avif';
      }
      ?>"
      loading="lazy" alt="hero-our-story" class="image opacity-10">
  </div>
</section>
