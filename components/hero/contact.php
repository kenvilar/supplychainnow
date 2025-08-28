<?php

?>
<section class="section bg-cargogrey text-white rounded-b-100">
  <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
    <div class="w-layout-blockcontainer pt-20 w-container text-center max-w-544">
      <div class="mb-20">
        <img
          src="<?php
          echo get_stylesheet_directory_uri() . '/assets/img/convo.svg'; ?>"
          loading="lazy" alt="convo">
      </div>
      <div class="mb-16">
        <h1>Contact Us</h1>
      </div>
      <div>
        <p>Have a question? Suggestion? Idea for a partnership? Please fill out the form and we'll get back to you
          as soon as possible.
        </p>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img
      src="<?php
      if ( has_post_thumbnail( get_the_ID() ) ) {
        echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
      } else {
        echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--contact.avif';
      }
      ?>"
      loading="lazy" alt="hero contact image" class="image opacity-10">
  </div>
</section>
