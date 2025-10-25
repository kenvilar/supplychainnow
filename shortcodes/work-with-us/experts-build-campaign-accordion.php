<?php

if ( ! function_exists( 'work_with_us_experts_build_campaign_accordion_shortcode' ) ) {
	function work_with_us_experts_build_campaign_accordion_shortcode( $atts, $content = null ) {
		$pageID  = get_the_ID();
		$section = get_field( 'Let_Our_Experts_Build_a_Custom_Campaign_for_You_Section', $pageID );

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
                <div class="w-richtext list-circle text-xs tracking-[1.2px] pl-28">
									<?= $description; ?>
                </div>
              </div>
            </div>
            <div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
          </li>
				<?php
					//
				endforeach;
			else:
				?>
        <li class="accordion-item">
          <div class="accordion-item-header">
            <div class="flex items-center">
              <div class="font-semibold text-md">+ &nbsp; Podcast</div>
            </div>
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="w-richtext">
                <ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
                  <li>Brand awareness</li>
                  <li>Thought leadership</li>
                  <li>3rd party validation</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
        </li>
        <li class="accordion-item">
          <div class="accordion-item-header">
            <div class="flex items-center">
              <div class="font-semibold text-md">+ &nbsp; Livestream</div>
            </div>
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="w-richtext">
                <ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
                  <li>Thought leadership</li>
                  <li>Genuine engagement</li>
                  <li>Social traffic</li>
                  <li>3rd party validation</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
        </li>
        <li class="accordion-item">
          <div class="accordion-item-header">
            <div class="flex items-center">
              <div class="font-semibold text-md">+ &nbsp; Webinar</div>
            </div>
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="w-richtext">
                <ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
                  <li>Brand awareness</li>
                  <li>Genuine engagement</li>
                  <li>Lead generation</li>
                  <li>3rd party validation</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
        </li>
        <li class="accordion-item">
          <div class="accordion-item-header">
            <div class="flex items-center">
              <div class="font-semibold text-md">+ &nbsp; Advertisement</div>
            </div>
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="w-richtext">
                <ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
                  <li>Brand awareness</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
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
	add_shortcode( 'work_with_us_experts_build_campaign_accordion',
		'work_with_us_experts_build_campaign_accordion_shortcode' );
} );