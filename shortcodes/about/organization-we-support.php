<?php

if ( ! function_exists( 'about_organizations_we_support_shortcode' ) ) {
  function about_organizations_we_support_shortcode() {
    $pageID  = get_the_ID();
    $section = get_field( 'Where_We_Give_Section', $pageID );
    ob_start();
    if ( ! empty( $section['Where_We_Give_Gallery'] ) ):
      foreach ( $section['Where_We_Give_Gallery'] as $idx => $item ) :
        ?>
        <div class="card max-w-400 h-180 overflow-hidden">
          <div class="flex justify-center items-center h-full p-12">
            <img class="w-auto h-full object-contain" src="<?= $item; ?>" loading="lazy" alt="<?= $idx + 1; ?>">
          </div>
        </div>
      <?php
      endforeach;
    else:
      ?>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/esf.svg'; ?>"
            loading="lazy" alt="esf">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/tat.svg'; ?>"
            loading="lazy" alt="tat">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/vets2industry.svg'; ?>"
            loading="lazy" alt="vets2industry">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/MAP-international.svg'; ?>"
            loading="lazy" alt="MAP international">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/Guam-Human-Rights-Initiative.svg'; ?>"
            loading="lazy" alt="Guam Human Rights Initiative">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/hope-for-justice.svg'; ?>"
            loading="lazy" alt="hope-for-justice">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/SFA-logo.svg'; ?>"
            loading="lazy" alt="SFA-logo">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/Dave-Krache-Foundation.svg'; ?>"
            loading="lazy" alt="Dave Krache Foundation">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/Books-for-Africa.svg'; ?>"
            loading="lazy" alt="Books for Africa">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/VETLANTA.svg'; ?>"
            loading="lazy" alt="VETLANTA">
        </div>
      </div>
      <div class="card max-w-400 h-180">
        <div class="flex justify-center items-center h-full p-12">
          <img
            src="<?php
            echo get_stylesheet_directory_uri() . '/assets/img/our-story/Local-churches-charities-and-more.svg'; ?>"
            loading="lazy" alt="Local churches, charities, and more!">
        </div>
      </div>
    <?php
    endif;

    return ob_get_clean();
  }
}

add_action( 'init', function () {
  add_shortcode( 'about_organizations_we_support', 'about_organizations_we_support_shortcode' );
} );