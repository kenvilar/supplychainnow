<?php

$pageID  = get_the_ID();
$section = get_field( 'Results_that_Keep_Building_Section', $pageID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Results that Keep Building' );
$image   = esc_url( ! empty( $section['Image'] ) ? $section['Image'] : get_stylesheet_directory_uri() . '/assets/img/work-with-us/results-that-keep-building.avif' );
?>
<div class="rounded-100 bg-whispergray">
  <section class="section">
    <div class="site-padding sm:py-60 py-84">
      <div class="w-layout-blockcontainer max-w-1200 w-container">
        <div class="mb-32">
          <div class="site-padding">
            <div class="w-layout-blockcontainer max-w-836 text-center w-container">
              <h2><?= $title; ?></h2>
            </div>
          </div>
        </div>
        <div class="flex items-center justify-center">
          <img
            src="<?= $image; ?>"
            loading="lazy" alt="results that keep building" class="image">
        </div>
      </div>
    </div>
  </section>
</div>
