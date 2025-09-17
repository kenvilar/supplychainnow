<?php

$pageID  = get_the_ID();
$section = get_field( 'The_#1_Voice_of_Supply_Chain_Section', $pageID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'The #1 Voice of Supply Chain' );

$stat1Title = esc_html( ! empty( $section['Stat_1_Title'] ) ? $section['Stat_1_Title'] : 'Top 5%' );
$stat2Title = esc_html( ! empty( $section['Stat_2_Title'] ) ? $section['Stat_2_Title'] : '300+' );
$stat3Title = esc_html( ! empty( $section['Stat_3_Title'] ) ? $section['Stat_3_Title'] : '100s' );
$stat4Title = esc_html( ! empty( $section['Stat_4_Title'] ) ? $section['Stat_4_Title'] : 'Industry Practitioners' );
$stat5Title = esc_html( ! empty( $section['Stat_5_Title'] ) ? $section['Stat_5_Title'] : '1M+' );

$stat2Description = ! empty( $section['Stat_2_Description'] ) ? $section['Stat_2_Description'] : 'Average Registrations';
$stat3Description = ! empty( $section['Stat_3_Description'] ) ? $section['Stat_3_Description'] : 'of Leads per Webinar';
$stat4Description = ! empty( $section['Stat_4_Description'] ) ? $section['Stat_4_Description'] : 'as Hosts &amp; Co-Hosts';
$stat5Description = ! empty( $section['Stat_5_Description'] ) ? $section['Stat_5_Description'] : 'Total Network Following';
?>
<section class="section">
  <div class="site-padding sm:py-60 py-100">
    <div class="w-layout-blockcontainer max-w-1252 text-center w-container">
      <div class="mb-40">
        <h2><?= $title; ?></h2>
      </div>
      <div class="flex gap-20 justify-between md:flex-col">
        <div>
          <div class="mb-12">
            <div class="font-family-secondary text-36 tracking-[3.6px] text-secondary"><?= $stat1Title; ?></div>
          </div>
          <div class="font-family-secondary font-semibold text-md">
            <?php
            if ( ! empty( $section['Stat_1_Description'] ) ):
              echo $section['Stat_1_Description'];
            else:
              ?>
              of all Global Podcasts
              <div class="mb-8"></div>
              <div class="text-15 font-light">(Downloads)</div>
            <?php
            endif;
            ?>
          </div>
        </div>
        <div class="w-1 bg-secondary/25"></div>
        <div class="max-w-124 w-full md:max-w-full">
          <div class="mb-12">
            <div class="font-family-secondary text-36 tracking-[3.6px] text-secondary"><?= $stat2Title; ?></div>
          </div>
          <div class="font-family-secondary font-semibold text-md"><?= $stat2Description; ?></div>
        </div>
        <div class="w-1 bg-secondary/25"></div>
        <div class="max-w-120 w-full md:max-w-full">
          <div class="mb-12">
            <div class="font-family-secondary text-36 tracking-[3.6px] text-secondary"><?= $stat3Title; ?></div>
          </div>
          <div class="font-family-secondary font-semibold text-md"><?= $stat3Description; ?></div>
        </div>
        <div class="w-1 bg-secondary/25"></div>
        <div class="max-w-188 w-full md:max-w-full">
          <div class="mb-12">
            <div class="font-family-secondary text-36 tracking-[3.6px] text-secondary"><?= $stat4Title; ?></div>
          </div>
          <div class="font-family-secondary font-semibold text-md"><?= $stat4Description; ?></div>
        </div>
        <div class="w-1 bg-secondary/25"></div>
        <div class="max-w-140 w-full md:max-w-full">
          <div class="mb-12">
            <div class="font-family-secondary text-36 tracking-[3.6px] text-secondary"><?= $stat5Title; ?></div>
          </div>
          <div class="font-family-secondary font-semibold text-md"><?= $stat5Description; ?></div>
        </div>
      </div>
    </div>
  </div>
</section>
