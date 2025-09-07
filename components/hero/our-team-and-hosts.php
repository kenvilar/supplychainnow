<?php

$postId     = get_the_ID();
$page_title = get_field( 'Page_Title', $postId ) ?: 'Our Team & Hosts';
$hero_image = get_field( 'Hero_Image',
  $postId ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--our-team-and-hosts.avif';
?>
<section class="section bg-cargogrey text-white rounded-b-100">
  <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
    <div class="w-layout-blockcontainer pt-20 w-container text-center">
      <div class="mb-20">
        <img
          src="<?php
          echo get_stylesheet_directory_uri() . '/assets/img/icons/three-persons-network.svg'; ?>"
          loading="lazy" alt="three persons network ">
      </div>
      <div class="mb-16">
        <h1>
          <?php
          echo esc_html( $page_title ); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img
      src="<?php
      echo esc_url( $hero_image ); ?>"
      loading="lazy" alt="hero our team and hosts" class="image opacity-10">
  </div>
</section>
