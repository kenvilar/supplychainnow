<?php

if ( ! function_exists( 'our_team_and_hosts_meet_the_team_shortcode' ) ) {
	function our_team_and_hosts_meet_the_team_shortcode( $atts, $content = null ) {
		$postId  = get_the_ID();
		$section = get_field( 'Meet_the_Team_Section', $postId );

		$defaults = array(
			'class' => '',
			'id'    => '',
		);

		$raw_atts = is_array( $atts ) ? $atts : array();
		$atts     = shortcode_atts( $defaults, $raw_atts );

		$class = esc_attr( $atts['class'] );
		$id    = esc_attr( $atts['id'] );
		ob_start();

		$team_members = new WP_Query( [
			'post_type'      => 'meet_the_team',
			'posts_per_page' => - 1,
			'post_status'    => 'publish',
			'orderby'        => 'menu_order',
			'order'          => 'ASC'
		] );

		if ( ! empty( $section['Meet_the_Team'] ) ) : ?>
      <div meet-the-team-list
           class="grid grid-cols-3 gap-32 md:grid-cols-2 sm:grid-cols-1">
				<?php
				foreach ( $section['Meet_the_Team'] as $item ) :
					//$team_members->the_post();
					$item = $item['Item'];
					$item_title = esc_html( get_the_title( $item->ID ) );
					$item_content = esc_html( get_the_content( null, false, $item->ID ) );
					$item_image = get_the_post_thumbnail_url( $item->ID, 'full' );
					$item_designation = esc_html( get_post_meta( $item->ID, 'designation', true ) );
					$item_linkedin_url = esc_url( get_post_meta( $item->ID, 'linkedin_url', true ) );
					?>
          <div role="listitem" class="group">
            <div class="overflow-hidden rounded-24 relative h-396">
              <div
                class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
                <div class="px-12 pt-40 pb-28 h-full">
                  <div class="w-layout-blockcontainer max-w-312 h-full w-container">
                    <div class="w-layout-vflex h-full flex justify-between">
                      <div class="md:invisible">
                        <div class="mb-4">
                          <h3 from-fullname-wrapper="" class="text-2xl">
														<?= $item_title; ?></h3>
                        </div>
                        <div class="mb-36">
                          <div from-role-wrapper="" class="font-family-secondary text-primary">
														<?= $item_designation; ?>
                          </div>
                        </div>
                        <div class="pr-20 md:pr-0">
                          <div class="our-team-paragraph-truncate w-richtext" scn-text-limit="4">
														<?= $item_content; ?>
                          </div>
                          <div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
														<?= $item_content; ?>
                          </div>
                        </div>
                      </div>
                      <div class="flex justify-between gap-12 items-center w-full">
                        <div class="flex items-center gap-12 md:invisible">
                          <div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
                          <div from-linkedin-wrapper="" class="flex items-center">
                            <a href="<?= $item_linkedin_url; ?>" target="_blank"
                               class="outline-none w-inline-block">
                              <div class="flex items-center justify-center hover:text-primary w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20"
                                     fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.00012207 10.4453C0.00012207 5.19861 4.25342 0.945312 9.50012 0.945312C14.7468 0.945312 19.0001 5.19861 19.0001 10.4453C19.0001 15.692 14.7468 19.9453 9.50012 19.9453C4.25342 19.9453 0.00012207 15.692 0.00012207 10.4453ZM4.86887 8.84219V15.1953H6.88763V8.84219H4.86887ZM4.75012 6.82344C4.75012 7.47656 5.22512 7.95156 5.87825 7.95156C6.53137 7.95156 7.00637 7.47656 7.00637 6.82344C7.00637 6.17031 6.53137 5.69531 5.87825 5.69531C5.2845 5.69531 4.75012 6.17031 4.75012 6.82344ZM12.2314 15.1953H14.1314V11.2766C14.1314 9.31719 12.9439 8.66406 11.8157 8.66406C10.8064 8.66406 10.0939 9.31719 9.91574 9.73281V8.84219H8.01575V15.1953H10.0345V11.8109C10.0345 10.9203 10.6282 10.4453 11.222 10.4453C11.8157 10.4453 12.2314 10.7422 12.2314 11.7516V15.1953Z"
                                        fill="currentColor"></path>
                                </svg>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div open-modal=""
                             class="flex cursor-pointer text-primary transition-all hover:text-white w-embed">
                          <svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" viewBox="0 0 42 43"
                               fill="none">
                            <path
                              d="M21 41.4727C32.0457 41.4727 41 32.5184 41 21.4727C41 10.427 32.0457 1.47266 21 1.47266C9.95431 1.47266 1 10.427 1 21.4727C1 32.5184 9.95431 41.4727 21 41.4727Z"
                              stroke="currentColor" stroke-width="2" stroke-miterlimit="10"></path>
                            <path d="M15.2832 27.4744L26.3075 16.45" stroke="currentColor" stroke-width="2"
                                  stroke-miterlimit="10"></path>
                            <path d="M17.1305 16.45L26.3078 16.45L26.3078 25.6273" stroke="currentColor"
                                  stroke-width="2" stroke-miterlimit="10"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div from-image-wrapper="" class="absolute absolute--full w-full h-full grayscale-100">
                <img
                  src="<?= $item_image; ?>"
                  loading="lazy" alt="<?= esc_attr( $item_title ); ?>" class="image aspect-square">
              </div>
            </div>
          </div>
				<?php
				endforeach; ?>
      </div>
		<?php
    elseif ( ( $team_members->have_posts() ) ):
			?>
      <div meet-the-team-list
           class="grid grid-cols-3 gap-32 md:grid-cols-2 sm:grid-cols-1">
				<?php
				while ( $team_members->have_posts() ) : $team_members->the_post(); ?>
          <div role="listitem" class="group">
            <div class="overflow-hidden rounded-24 relative h-396">
              <div
                class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
                <div class="px-12 pt-40 pb-28 h-full">
                  <div class="w-layout-blockcontainer max-w-312 h-full w-container">
                    <div class="w-layout-vflex h-full flex justify-between">
                      <div class="md:invisible">
                        <div class="mb-4">
                          <h3 from-fullname-wrapper="" class="text-2xl"><?php
														the_title(); ?></h3>
                        </div>
                        <div class="mb-36">
                          <div from-role-wrapper="" class="font-family-secondary text-primary">
														<?php
														echo esc_html( get_post_meta( get_the_ID(), 'designation', true ) ); ?>
                          </div>
                        </div>
                        <div class="pr-20 md:pr-0">
                          <div class="our-team-paragraph-truncate w-richtext" scn-text-limit="4">
														<?php
														the_content(); ?>
                          </div>
                          <div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
														<?php
														the_content(); ?>
                          </div>
                        </div>
                      </div>
                      <div class="flex justify-between gap-12 items-center w-full">
                        <div class="flex items-center gap-12 md:invisible">
                          <div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
                          <div from-linkedin-wrapper="" class="flex items-center">
                            <a href="<?php
														echo esc_url( get_post_meta( get_the_ID(), 'linkedin_url', true ) ); ?>" target="_blank"
                               class="outline-none w-inline-block">
                              <div class="flex items-center justify-center hover:text-primary w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20"
                                     fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.00012207 10.4453C0.00012207 5.19861 4.25342 0.945312 9.50012 0.945312C14.7468 0.945312 19.0001 5.19861 19.0001 10.4453C19.0001 15.692 14.7468 19.9453 9.50012 19.9453C4.25342 19.9453 0.00012207 15.692 0.00012207 10.4453ZM4.86887 8.84219V15.1953H6.88763V8.84219H4.86887ZM4.75012 6.82344C4.75012 7.47656 5.22512 7.95156 5.87825 7.95156C6.53137 7.95156 7.00637 7.47656 7.00637 6.82344C7.00637 6.17031 6.53137 5.69531 5.87825 5.69531C5.2845 5.69531 4.75012 6.17031 4.75012 6.82344ZM12.2314 15.1953H14.1314V11.2766C14.1314 9.31719 12.9439 8.66406 11.8157 8.66406C10.8064 8.66406 10.0939 9.31719 9.91574 9.73281V8.84219H8.01575V15.1953H10.0345V11.8109C10.0345 10.9203 10.6282 10.4453 11.222 10.4453C11.8157 10.4453 12.2314 10.7422 12.2314 11.7516V15.1953Z"
                                        fill="currentColor"></path>
                                </svg>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div open-modal=""
                             class="flex cursor-pointer text-primary transition-all hover:text-white w-embed">
                          <svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" viewBox="0 0 42 43"
                               fill="none">
                            <path
                              d="M21 41.4727C32.0457 41.4727 41 32.5184 41 21.4727C41 10.427 32.0457 1.47266 21 1.47266C9.95431 1.47266 1 10.427 1 21.4727C1 32.5184 9.95431 41.4727 21 41.4727Z"
                              stroke="currentColor" stroke-width="2" stroke-miterlimit="10"></path>
                            <path d="M15.2832 27.4744L26.3075 16.45" stroke="currentColor" stroke-width="2"
                                  stroke-miterlimit="10"></path>
                            <path d="M17.1305 16.45L26.3078 16.45L26.3078 25.6273" stroke="currentColor"
                                  stroke-width="2" stroke-miterlimit="10"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div from-image-wrapper="" class="absolute absolute--full w-full h-full grayscale-100">
                <img
                  src="<?php
									echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>"
                  loading="lazy" alt="<?php
								echo esc_attr( get_the_title() ); ?>" class="image aspect-square">
              </div>
            </div>
          </div>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
      </div>
		<?php
		else:
			?>
      <div class="text-center">No team members found.</div>
		<?php
		endif;
		wp_reset_postdata();

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'our_team_and_hosts_meet_the_team', 'our_team_and_hosts_meet_the_team_shortcode' );
} );