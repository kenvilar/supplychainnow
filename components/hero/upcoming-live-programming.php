<?php

$pageID      = get_the_ID();
$page_title  = esc_html( get_field( 'Page_Title', $pageID ) ?: 'Upcoming Live Programming' );
$description = esc_html( get_field( 'Description', $pageID ) ?: "" );
$hero_image  = esc_url( get_field( 'Hero_Image',
  $pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--upcoming-live-programming.avif' );
$icon        = esc_url( get_field( 'Icon',
  $pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/icons/calendar.svg' );
$hide_icon   = get_field( 'Hide_Icon', $pageID ) ?: false;
?>
<div class="relative">
  <section class="section bg-cargogrey text-white rounded-b-100 overflow-visible!">
    <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10 pb-200">
      <div class="w-layout-blockcontainer pt-40 w-container text-center max-w-960">
        <div class="mb-20 <?= $hide_icon ? 'hidden' : '' ?>">
          <img
            class="size-53 mx-auto"
            src="<?= $icon; ?>"
            loading="lazy" alt="">
        </div>
        <div class="mb-16">
          <h1><?= $page_title; ?></h1>
        </div>
      </div>
    </div>
    <div class="absolute absolute--full w-full h-full">
      <img
        src="<?= $hero_image; ?>"
        loading="lazy" alt="hero-upcoming-live-programming" class="image opacity-10">
    </div>
  </section>
  <div class="pt-12 pb-100 relative z-20">
    <div class="absolute absolute--b px-12 sm:relative">
      <div class="w-layout-blockcontainer max-w-1048 w-container">
        <div class="flex gap-32 justify-between sm:flex-col">
          <div class="card">
            <div class="w-full h-full pt-48 pb-40 px-52">
              <div class="mb-16">
                <div class="font-family-alternate font-medium text-xl tracking-[2.4px]">Livestreams</div>
              </div>
              <div class="mb-32">
                <p class="tracking-[1.6px]">Get real-time insights on supply chain trends. Register to join the
                  conversation.
                </p>
              </div>
              <?php
              echo get_template_part( "components/ui/btn", null, [
                "text"       => "Register Now",
                "link"       => "#upcoming-livestreams",
                "style"      => "primary",
                "class"      => "",
                'attributes' => [
                  'onclick' => "location.href='#upcoming-livestreams'"
                  /*'target' => '_blank',
                  'rel' => 'noopener noreferrer',*/
                ],
                //onclick="location.href='#target'"
              ] ); ?>
            </div>
          </div>
          <div class="card">
            <div class="w-full h-full pt-48 pb-40 px-52">
              <div class="mb-16">
                <div class="font-family-alternate font-medium text-xl tracking-[2.4px]">Webinars</div>
              </div>
              <div class="mb-32">
                <p class="tracking-[1.6px]">Learn from industry leaders.
                  <br>
                  Sign up to save your spot.
                </p>
              </div>
              <?php
              echo get_template_part( "components/ui/btn", null, [
                "text"       => "Register Now",
                "link"       => "#upcoming-webinars",
                "style"      => "tertiary",
                "class"      => "",
                'attributes' => [
                  'onclick' => "location.href='#upcoming-webinars'"
                  /*'target' => '_blank',
                  'rel' => 'noopener noreferrer',*/
                ],
              ] ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
