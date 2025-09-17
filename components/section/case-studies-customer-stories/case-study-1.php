<?php

$pageID   = get_the_ID();
$section  = get_field( 'Case_Study_#1_Section', $pageID );
$topTitle = esc_html( ! empty( $section['Top_Title'] ) ? $section['Top_Title'] : 'Case Study #1' );
$title    = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Group Purchasing Organization' );
?>
<section class="section">
  <div class="site-padding sm:py-60 pt-150 pb-80">
    <div class="w-layout-blockcontainer max-w-1252 w-container">
      <div class="flex gap-20 justify-between sm:flex-col">
        <div class="max-w-608 w-full md:max-w-full">
          <div class="mb-20">
            <div class="font-family-alternate font-semibold text-lg text-secondary"><em><?= $topTitle; ?></em></div>
          </div>
          <div class="mb-36">
            <h2><?= $title; ?></h2>
          </div>
          <div class="tracking-[1.6px]">
            <?php
            if ( ! empty( $section['Description'] ) ):
              echo $section['Description'];
            else:
              ?>
              Largest Group Purchasing Organization, specializing in procurement (“Company A”) partnered with Supply
              Chain Now on a Campaign that included a mix of podcasts, livestream, webinars and blogs for the below outcomes:
            <?php
            endif;
            ?>
          </div>
        </div>
        <div class="max-w-588 w-full md:max-w-full">
          <ul role="list" class="accordion w-list-unstyled">
            <?php
            if ( ! empty( $section['Accordion'] ) ):
              foreach ( $section['Accordion'] as $idx => $item ):
                $title = $item['Title'];
                $description = $item['Description'];
                ?>
                <li class="accordion-item">
                  <div class="accordion-item-header">
                    <div class="flex items-center">
                      <div class="font-semibold text-md">+ &nbsp; <?= $title; ?></div>
                    </div>
                  </div>
                  <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                      <div class="text-xs tracking-[1.2px] list-circle">
                        <?= $description; ?>
                      </div>
                    </div>
                  </div>
                  <div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
                </li>
              <?php
              endforeach;
            else:
              ?>
              <li class="accordion-item">
                <div class="accordion-item-header">
                  <div class="flex items-center">
                    <div class="font-semibold text-md">+ &nbsp; Brand Awareness</div>
                  </div>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                    <p class="text-xs tracking-[1.2px]">The marketing team at Company A wanted to create more brand
                      awareness across multiple industries.
                      <br>
                      <br>
                      Reaching Supply Chain Now’s diverse 900k+ audience proved beneficial for their brand awareness
                      goals.
                    </p>
                  </div>
                </div>
                <div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
              </li>
              <li class="accordion-item">
                <div class="accordion-item-header">
                  <div class="flex items-center">
                    <div class="font-semibold text-md">+ &nbsp; Lead Generation</div>
                  </div>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                    <div class="w-richtext">
                      <p class="text-xs tracking-[1.2px] mb-16">
                        <strong>In just one webinar with Supply Chain Now,
                          Company A had 394 total registrants:
                        </strong>
                      </p>
                      <ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
                        <li>Of which there were 207 attendees (52% attendee conversion rate)</li>
                        <li>Of those attendees, 191 were net new qualified leads and passed off to the sales team
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
              </li>
              <li class="accordion-item">
                <div class="accordion-item-header">
                  <div class="flex items-center">
                    <div class="font-semibold text-md">+ &nbsp; Content Creation</div>
                  </div>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                    <p class="text-xs tracking-[1.2px]">The webinar created with the Supply Chain Now team is still
                      being used one year later.
                      <br>
                      <br>
                      Being able to repurpose the content to continually generate leads is extremely impactful for
                      Company A.
                    </p>
                  </div>
                </div>
                <div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
              </li>
              <li class="accordion-item">
                <div class="accordion-item-header">
                  <div class="flex items-center">
                    <div class="font-semibold text-md">+ &nbsp; 3rd Party Validation</div>
                  </div>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                    <p class="text-xs tracking-[1.2px]">Using Supply Chain Now to create content resulted in 3rd
                      Party
                      Validation for Company A.
                      <br>
                      <br>
                      This led to content that was original, credible while boosting SEO and social media efforts.
                    </p>
                  </div>
                </div>
                <div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
              </li>
            <?php
            endif;
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
