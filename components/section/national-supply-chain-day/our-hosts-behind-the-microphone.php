<?php

$pageID     = get_the_ID();
$section    = get_field( 'Celebrating_the_Backbone_of_the_Industry_Section', $pageID );
$title      = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Celebrating the Backbone of the Industry' );
$buttonText = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Learn More' );
$buttonLink = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : 'https://linktr.ee/Supplychainnow?fbclid=PAZXh0bgNhZW0CMTEAAaeUwT0HgleEdMIgdSFAMNFw5XHXweqOR0cBt5kQKeNX1PVUZDW1gomBKleWzw_aem_sF5GDmuaeT-qg4pzKobvwA' );
?>
<section class="section sm:text-center">
  <div class="site-padding sm:py-60 py-92">
    <div class="w-layout-blockcontainer max-w-708 w-container">
      <div class="mb-44">
        <div class="mb-20">
          <h2 class="text-center"><?= $title; ?></h2>
        </div>
        <div class="w-layout-blockcontainer max-w-136 w-full h-1 relative bg-cargogrey/25 w-container">
          <div class="absolute absolute--r flex items-center pr-32">
            <div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
          </div>
        </div>
      </div>
      <div class="mb-48">
        <div class="w-layout-blockcontainer max-w-644 w-container tracking-[1.6px]">
          <?php
          if ( $section['Description'] ):
            echo $section['Description'];
          else:
            ?>
            <p>National Supply Chain Day®, is a celebration and a spotlight on the industry
              professionals of Supply Chain: the people that connect the world. From the intricate logistics that
              power your morning coffee to the complex networks ensuring critical medical supplies reach their
              destinations, supply chain professionals are the backbone of our connected world.
              <br>
              <br>
              <strong>Join us every year on April 29th as we delve into the stories, breakthroughs and technologies of
                the global supply chain.
              </strong>
            </p>
          <?php
          endif;
          ?>
        </div>
      </div>
      <div class="w-layout-blockcontainer max-w-424 sm:max-w-full w-container">
        <div class="flex items-center flex-wrap justify-center gap-20 sm:flex-col">
          <div class="flex">
            <a
              href="<?= $buttonLink; ?>"
              target="_blank" class="btn primary w-inline-block">
              <div><?= $buttonText; ?></div>
            </a>
          </div>
          <?php
          echo do_shortcode( '[national_supply_chain_day_follow_us]' );
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
