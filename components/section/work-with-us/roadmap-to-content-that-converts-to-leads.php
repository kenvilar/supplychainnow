<?php

$pageID        = get_the_ID();
$section       = get_field( 'Your_Roadmap_to_Content_that_Converts_to_Leads_Section', $pageID );
$title         = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Your Roadmap to Content that Converts to Leads' );
$timelineText  = esc_html( ! empty( $section['Timeline_Text'] ) ? $section['Timeline_Text'] : '120 DAY TIMELINE' );
$timelineImage = esc_url( ! empty( $section['Timeline_Image'] ) ? $section['Timeline_Image'] : get_stylesheet_directory_uri() . '/assets/img/work-with-us/120-day-timeline.avif' );
?>
<section class="section">
  <div class="site-padding sm:py-60 py-72">
    <div class="w-layout-blockcontainer max-w-692 w-container">
      <div class="mb-36">
        <div class="mb-20">
          <h2 class="text-center"><?= $title; ?></h2>
        </div>
        <div class="w-layout-blockcontainer max-w-136 w-full h-1 relative bg-cargogrey/25 w-container">
          <div class="absolute absolute--r flex items-center pr-32">
            <div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
          </div>
        </div>
      </div>
      <div class="tracking-[1.6px] text-center">
        <?php
        if ( ! empty( $section['Description'] ) ):
          echo $section['Description'];
        else:
          ?>
          Our 120-day plan, taking you pre-show to post-show, is our tried and true process for optimal results from
          every partnership for better engagement, more downloads, and more qualified leads.
        <?php
        endif;
        ?>
      </div>
    </div>
    <div class="mb-72"></div>
    <div class="w-layout-blockcontainer max-w-1248 relative sm:text-center w-container">
      <div class="flex justify-center">
        <div class="flex items-center gap-20 justify-center bg-white px-12 sm:flex-col xs:px-0">
          <div class="flex w-embed">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
              <path d="M26.5243 3.34534H2V8.91693H26.5243V3.34534Z" stroke="#313F4A" stroke-width="2.33121"
                    stroke-miterlimit="10"></path>
              <path d="M26.5243 8.9169H2V25.6433H26.5243V8.9169Z" stroke="#313F4A" stroke-width="2.33121"
                    stroke-miterlimit="10"></path>
              <path d="M14.2622 3.05176e-05V5.57162" stroke="#313F4A" stroke-width="2.33121"
                    stroke-miterlimit="10"></path>
              <path d="M7.57153 3.05176e-05V5.57162" stroke="#313F4A" stroke-width="2.33121"
                    stroke-miterlimit="10"></path>
              <path d="M20.9526 3.05176e-05V5.57162" stroke="#313F4A" stroke-width="2.33121"
                    stroke-miterlimit="10"></path>
            </svg>
          </div>
          <div class="font-semibold text-2xl"><?= $timelineText; ?></div>
        </div>
      </div>
      <div class="absolute absolute--full w-full flex items-center justify-center z--1">
        <img
          src="<?php
          echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/12-day-timeline.avif'; ?>"
          loading="lazy" alt="12-day-timeline-line">
      </div>
    </div>
    <div class="mb-76"></div>
    <div class="w-layout-blockcontainer max-w-1264 w-container">
      <div class="flex justify-center">
        <img
          src="<?= $timelineImage; ?>"
          loading="lazy" alt="120 day timeline" class="image">
      </div>
    </div>
  </div>
</section>
