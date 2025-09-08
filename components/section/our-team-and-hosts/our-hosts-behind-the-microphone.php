<?php

$postID      = get_the_ID();
$section     = get_field( 'Our_Hosts_Behind_the_Microphone_Section', $postID );
$title       = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Our Hosts Behind the Microphone' );
$description = $section['Description'] ?? '';
?>
<section class="section">
  <div class="site-padding sm:py-60 py-100">
    <div class="w-layout-blockcontainer max-w-708 w-container">
      <div class="mb-36">
        <h2 class="text-center"><?= $title; ?></h2>
      </div>
      <div class="w-layout-blockcontainer max-w-692 w-full md:max-w-full w-container">
        <?php
        if ( ! empty( $description ) ) {
          echo '<div class="tracking-[1.6px]">' . wp_kses_post( $section['Description'] ) . '</div>';
        } else {
          ?>
          <p class="tracking-[1.6px]">Our hosts are not just talking heads. They are real, experienced practitioners
            with
            decades of supply chain experience in some of the top companies in the world, including P&amp;G, UPS,
            Goodyear, and NASA. They've written books on supply chain and industry knowledge, introduced new solutions,
            and are trailblazers and Hall of Famers within their respective industry segments.
            <br>
            <br>
            They bring deep expertise to the conversation and are passionate about giving the stage to voices in the
            industry that need to be heard.
          </p>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
</section>
