<?php

$pageID  = get_the_ID();
$section = get_field( 'Where_We_Give_Section', $pageID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Where We Give' );
?>
<section class="section">
  <div class="site-padding sm:py-60 py-76">
    <div class="w-layout-blockcontainer max-w-1252 w-container">
      <div class="mb-44">
        <div class="mb-20">
          <h2 class="text-center"><?= $title; ?></h2>
        </div>
        <?php
        get_template_part( 'components/line-with-blinking-dot', null, [
          'maxWidthClassnames' => ''
        ] );
        ?>
      </div>
      <div class="mb-44">
        <div class="w-layout-blockcontainer max-w-612 w-container">
          <div class="text-center tracking-[1.6px]">
            <?php
            if ( ! empty( $section['Description'] ) ):
              echo $section['Description'];
            else:
              ?>
              <p>
                We believe in the power of generosity to drive meaningful impact. With a
                commitment to sharing our resources, time, and expertise, we aim to make a difference wherever we are.
                Through genuine, purposeful action, we strive to be the change that is needed in the world today.
                <br>
                <br>
                <strong>Here are just a few of the organizations we support:</strong>
              </p>
            <?php
            endif;
            ?>
          </div>
        </div>
      </div>
      <div>
        <div class="flex flex-wrap gap-20 justify-center">
          <?php
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
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
