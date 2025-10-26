[success_stories_accordion_1]
<?php

if ( ! function_exists( 'success_stories_accordion_1_shortcode' ) ) {
	function success_stories_accordion_1_shortcode( $atts, $content = null ) {
		$pageID  = get_the_ID();
		$section = get_field( 'Case_Study_#1_Section', $pageID );

		$defaults = array(
			'class' => '',
			'id'    => '',
		);

		$raw_atts = is_array( $atts ) ? $atts : array();
		$atts     = shortcode_atts( $defaults, $raw_atts );

		$class = esc_attr( $atts['class'] );
		$id    = esc_attr( $atts['id'] );
		ob_start();
		?>
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
		<?php
		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'success_stories_accordion_1', 'success_stories_accordion_1_shortcode' );
} );
