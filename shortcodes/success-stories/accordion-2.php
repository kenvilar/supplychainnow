[success_stories_accordion_1]
<?php

if ( ! function_exists( 'success_stories_accordion_2_shortcode' ) ) {
	function success_stories_accordion_2_shortcode( $atts, $content = null ) {
		$pageID  = get_the_ID();
		$section = get_field( 'Case_Study_#2_Section', $pageID );

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
              <div class="font-semibold text-md">+ &nbsp; Brand Awareness / Thought Leadership</div>
            </div>
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <p class="text-xs tracking-[1.2px]">After growing rapidly (via sales and acquisitions) the last
                few
                years, brand clarity and awareness became even more crucial.
                <br>
                <br>
                The Supply Chain Now team helped drive clarity around Company B’s messages and positioned
                Company B as a Thought Leader in the space.
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
              <p class="text-xs tracking-[1.2px]">Supply Chain Now Campaigns see anywhere between 500K - 1M
                impressions across social media.
                <br>
                <br>
                Company B was able to reach new and existing customers by sparking conversation online with
                the content they created with Supply Chain Now.
              </p>
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
              <p class="text-xs tracking-[1.2px]">Compared to every other webinar they have done (both
                internally
                and with external third parties), the Supply Chain Now webinar beat the others for registrants
                by 180%!
                <br>
                <br>
                The conversion rate to attendees was 49%, which is more than double that the 20% they usually
                experience.
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
	add_shortcode( 'success_stories_accordion_2', 'success_stories_accordion_2_shortcode' );
} );
