<?php

$pageID     = get_the_ID();
$section    = get_field( 'Celebrating_National_Supply_Chain_Day_Section', $pageID );
$title      = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Celebrating National Supply Chain Day℠' );
$image      = esc_url( ! empty( $section['Image'] ) ? $section['Image'] : get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/celebrating-national-supply-chain-day.avif' );
$buttonText = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Register for the 2026 Event' );
$buttonLink = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/contact/?register-for-the-2026-event=true' );
?>
<section class="section">
  <div class="site-padding sm:py-60 py-92">
    <div class="w-layout-blockcontainer max-w-832 w-container">
      <div class="mb-52">
        <h2 class="text-center"><?= $title; ?></h2>
      </div>
      <div class="mb-52">
        <div class="w-layout-blockcontainer max-w-828 w-container">
          <div class="overflow-hidden rounded-24">
            <img
              src="<?= $image; ?>"
              loading="lazy" alt="celebrating national supply chain day"
              class="w-full h-full max-w-none fit-cover">
          </div>
        </div>
      </div>
      <div class="mb-52">
        <div class="w-layout-blockcontainer max-w-676 w-container text-center tracking-[1.6px]">
          <?php
          if ( ! empty( $section['Description'] ) ):
            echo $section['Description'];
          else:
            ?>
            <p>Join us as Scott W. Luton and National Supply Chain Day® founder,
              Mary
              Kate Love, host the special edition livestream as we commemorate National Supply Chain Day®.
              <br>
              <br>
              Tune in as we welcome special guests, share exciting announcements, celebrate, and shine a spotlight on
              the industry professionals of Supply Chain: the people who connect the world.
            </p>
          <?php
          endif;
          ?>
        </div>
      </div>
      <div class="flex justify-center sm:flex-col">
        <div class="flex">
          <a href="<?= $buttonLink; ?>" class="btn primary w-inline-block">
            <div><?= $buttonText; ?></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
