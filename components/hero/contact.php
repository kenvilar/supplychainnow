<?php

$pageID      = get_the_ID();
$page_title  = esc_html( get_field( 'Page_Title', $pageID ) ?: 'Contact Us' );
$description = esc_html( get_field( 'Description',
  $pageID ) ?: "Have a question? Suggestion? Idea for a partnership? Please fill out the form and we'll get back to you as soon as possible." );
$hero_image  = esc_url( get_field( 'Hero_Image',
  $pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--contact.avif' );
$icon        = esc_url( get_field( 'Icon',
  $pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/icons/convo.svg' );
$hide_icon   = get_field( 'Hide_Icon', $pageID ) ?: false;
?>
<section class="section bg-cargogrey text-white rounded-b-100">
  <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
    <div class="w-layout-blockcontainer pt-20 w-container text-center max-w-544">
      <div class="mb-20 <?= $hide_icon ? 'hidden' : '' ?>">
        <img
          class="size-53 mx-auto"
          src="<?= $icon; ?>"
          loading="lazy" alt="convo">
      </div>
      <div class="mb-16">
        <h1><?= $page_title; ?></h1>
      </div>
      <div>
        <p>
          <?= $description; ?>
        </p>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img
      src="<?= $hero_image; ?>"
      loading="lazy" alt="hero contact image" class="image opacity-10">
  </div>
</section>
