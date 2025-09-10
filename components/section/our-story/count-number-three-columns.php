<?php

$pageID  = get_the_ID();
$section = get_field( 'Statistics_Section', $pageID );

$title1       = esc_html( ! empty( $section['Title_1'] ) ? $section['Title_1'] : '8.5%' );
$description1 = esc_html( ! empty( $section['Description_1'] ) ? $section['Description_1'] : 'Expected annual growth of the global supply chain industry.' );

$title2       = esc_html( ! empty( $section['Title_2'] ) ? $section['Title_2'] : '67%' );
$description2 = esc_html( ! empty( $section['Description_2'] ) ? $section['Description_2'] : 'Percent of supply chain professionals that agree digital transformation is crucial.' );

$title3       = esc_html( ! empty( $section['Title_3'] ) ? $section['Title_3'] : '20%' );
$description3 = esc_html( ! empty( $section['Description_3'] ) ? $section['Description_3'] : 'Projected increase in podcast listenership over the next 3 years.' );
?>
<div class="overflow-hidden rounded-t-100 relative">
  <section class="section">
    <div class="site-padding sm:py-60 py-72">
      <div class="w-layout-blockcontainer max-w-1120 w-container">
        <div class="flex gap-20 justify-between sm:flex-col">
          <div class="w-full relative">
            <div class="w-layout-blockcontainer max-w-240 w-full md:max-w-full w-container">
              <div class="text-center">
                <div class="mb-12">
                  <div class="font-family-secondary text-36 text-secondary tracking-[3.6px]"><?= $title1; ?></div>
                </div>
                <p class="font-semibold text-md"><?= $description1; ?></p>
              </div>
            </div>
            <div class="absolute absolute--r w-1 bg-secondary/25 sm:display-none"></div>
          </div>
          <div class="w-full relative">
            <div class="max-w-308 w-full md:max-w-full">
              <div class="text-center">
                <div class="mb-12">
                  <div class="font-family-secondary text-36 text-secondary tracking-[3.6px]"><?= $title2; ?></div>
                </div>
                <p class="font-semibold text-md">
                  <?= $description2; ?>
                </p>
              </div>
            </div>
            <div class="absolute absolute--r w-1 bg-secondary/25 sm:display-none"></div>
          </div>
          <div class="w-full relative">
            <div class="max-w-308 w-full md:max-w-full">
              <div class="text-center">
                <div class="mb-12">
                  <div class="font-family-secondary text-36 text-secondary tracking-[3.6px]"><?= $title3; ?></div>
                </div>
                <p class="font-semibold text-md">
                  <?= $description3; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="absolute absolute--full w-full h-full opacity-25 gradient2 z--1"></div>
</div>
