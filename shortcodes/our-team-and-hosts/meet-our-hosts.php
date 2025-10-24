<?php

if ( ! function_exists( 'our_team_and_hosts_meet_our_hosts_shortcode' ) ) {
	function our_team_and_hosts_meet_our_hosts_shortcode( $atts, $content = null ) {
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
    <div class="text-white w-dyn-list">
      <div meet-the-team-list class="grid grid-cols-3 gap-32 md:grid-cols-2 sm:grid-cols-1">
				<?php
				if ( have_rows( 'Meet_Our_Hosts' ) ) :
					while ( have_rows( 'Meet_Our_Hosts' ) ) : the_row();
						$host         = get_sub_field( 'Meet_Our_Hosts' );
						$name         = get_field( 'host_name', $host->ID );
						$designation  = get_field( 'designation', $host->ID );
						$image        = get_field( 'host_image_upload', $host->ID );
						$linkedinUrl  = get_field( 'linkedin_profile_link', $host->ID );
						$host_content = get_the_content( null, false, $host->ID );
						?>
            <div role="listitem" class="group w-dyn-item">
              <div class="overflow-hidden rounded-24 relative h-396">
                <div
                  class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
                  <div class="px-12 pt-40 pb-28 h-full">
                    <div class="w-layout-blockcontainer max-w-312 h-full w-container">
                      <div class="w-layout-vflex h-full flex justify-between">
                        <div class="md:invisible">
                          <div class="mb-4">
                            <h3 from-fullname-wrapper="" class="text-2xl">
															<?php
															echo $name; ?>
                            </h3>
                          </div>
                          <div class="mb-36">
                            <div from-role-wrapper="" class="font-family-secondary text-primary">
															<?php
															echo $designation; ?>
                            </div>
                          </div>
                          <div class="pr-20 md:pr-0">
                            <div class="our-team-paragraph-truncate w-richtext rt--plain" scn-text-limit="4">
															<?php
															echo $host_content; ?>
                            </div>
                            <div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
															<?php
															echo $host_content; ?>
                            </div>
                          </div>
                        </div>
                        <div class="flex justify-between gap-12 items-center w-full">
                          <div class="flex items-center gap-12 md:invisible">
                            <div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
                            <div from-linkedin-wrapper="" class="flex items-center">
                              <a href="<?php
															echo esc_url( $linkedinUrl ); ?>" target="_blank"
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
										echo esc_url( $image ); ?>"
                    loading="lazy" alt="<?php
									echo $name; ?>"
                    class="image aspect-square">
                </div>
              </div>
            </div>
					<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
        <!--<div role="listitem" class="group">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Enrique Alvarez</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host, Logistics with
													Purpose®
												</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Enrique serves as Managing Director at
													Vector Global Logistics and believes we all have a personal responsibility t...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Enrique serves as Managing Director at Vector Global Logistics and believes we all have a
														personal responsibility to change the world. He is hard working, relationship minded and
														pro-active. Enrique trusts that the key to logistics is having a good and responsible team
														that truly partners with the clients and does whatever is necessary to see them succeed.
														He is a proud sponsor of Vector’s unique results-based work environment and before
														venturing into logistics he worked for the Boston Consulting Group (BCG). During his time
														at BCG, he worked in different industries such as Telecommunications, Energy, Industrial
														Goods, Building Materials, and Private Banking. His main focus was always on the
														operations, sales, and supply chain processes, with case focus on, logistics, growth
														strategy, and cost reduction. Prior to joining BCG, Enrique worked for Grupo Vitro, a
														Mexican glass manufacturer, for five years holding different positions from sales and
														logistics manager to supply chain project leader in charge of five warehouses in Colombia.
													</p>
													<p>He has an MBA from The Wharton School of Business and a BS, in Mechanical Engineer from
														the Technologico de Monterrey in Mexico. Enrique’s passions are soccer and the ocean, and
														he also enjoys traveling, getting to know new people, and spending time with his wife and
														two kids, Emma and Enrique.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/enrique-alvarez-64332a2/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/68805463e095a766b86dd54f_Enrique%20Alvarez.avif"
								loading="lazy" alt="Enrique Alvarez"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Kristi Porter</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host, Logistics with
													Purpose®
												</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Kristi Porter is VP of Sales and Marketing
													at Vector Global Logistics, a company that is changing the world through sup...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Kristi Porter is VP of Sales and Marketing at Vector Global Logistics, a company that is
														changing the world through supply chain. In her role, she oversees all marketing efforts
														and supports the sales team in doing what they do best. In addition to this role, she is
														the Chief Do-Gooder at Signify, which assists nonprofits and social impact companies
														through copywriting and marketing strategy consulting. She has almost 20 years of
														professional experience, and loves every opportunity to help people do more good.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/kporter9876/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/6880546df51bb1ed70a9b9de_Kristi%20Porter.avif"
								loading="lazy" alt="Kristi Porter"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Sofia Rivas</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host, Supply Chain Now
													en Espanol
												</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Sofia self-identifies as Supply Chain
													Ambassador, her mission is to advocate for the field and inspire young generations from...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Sofia self-identifies as Supply Chain Ambassador, her mission is to advocate for the
														field and inspire young generations from diverse backgrounds and cultures to join the
														industry so that thought diversity is increased and change accelerated. Recognized as
														Linkedin Top Voice and Linkedin Community Top Voice in Supply Chain Management, as well as
														Emerging Leader in Supply Chain by CSCMP 2024, Top Women in Supply Chain by Supply &amp;
														Demand Executive 2023, and Coup de Coeur Global Women Leaders in Supply Chain by B2G
														Consulting in 2021.
													</p>
													<p>Public speaker at multiple international events from keynotes and panels, to webinars and
														guest lectures for bachelor's and master's degrees, discussing topics such as
														sustainability, women in the industry, technology and innovation. Writer at different
														online magazines on logistics, supply chain and technology. Podcast host and guest on
														different recognized programs in the industry. Sofia has more than 5 years of experience
														from academic research and field studies to warehouse operations, demand planning and
														network design. She has worked in manufacturing, airport operations, e-commerce retail,
														and technology hardware across Latin America, North America and Europe.
													</p>
													<p>Currently working as Supply Chain Network Design and Optimization Manager at HP within
														their Global Supply Chain and Logistics team.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/sofia-rivas-herrera-18aa99183/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/68805478e38dbd5e35f5b071_Sofia%20Rivas.avif"
								loading="lazy" alt="Sofia Rivas"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Kevin L. Jackson</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host, Digital
													Transformers
												</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Kevin L. Jackson is a globally recognized
													Thought Leader, Industry Influencer and Founder/Author of the award wi...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Kevin L. Jackson is a globally recognized Thought Leader,
														<a href="https://webfluential.com/KevinLJackson">Industry Influencer</a>
														and Founder/Author of the award winning “
														<a href="https://gcglobalnet.com/blog"><em>Cloud Musings</em></a>
														” blog. &nbsp;He has also been recognized as a “
														<a href="https://onalytica.com/blog/posts/5g-top-100-influencers/">Top 5G Influencer</a>
														” (Onalytica 2019, Radar 2020), a “
														<a
															href="https://www.thinkers360.com/top-50-global-thought-leaders-and-influencers-on-digital-transformation-july-2020/">
															Top 50 Global Digital Transformation Thought Leader
														</a>
														” (Thinkers 360 2019) and provides strategic consulting and integrated social media
														services to AT&amp;T, Intel, Broadcom, Ericsson and other leading companies. Mr. Jackson’s
														commercial experience includes Vice President J.P. Morgan Chase, Worldwide Sales Executive
														for IBM and SAIC (Engility) Director Cloud Solutions. He has served on teams that have
														supported digital transformation projects for the North Atlantic Treaty Organization
														(NATO) and the US Intelligence Community. &nbsp;Kevin’s formal education includes a MS
														Computer Engineering from Naval Postgraduate School; MA National Security &amp; Strategic
														Studies from Naval War College; and a BS Aerospace Engineering from the United States
														Naval Academy. Internationally recognizable firms that have sponsored articles authored by
														him include
														<a
															href="https://kevinljackson.blogspot.com/2018/05/human-led-collaboration-with-machines.html">
															Cisco
														</a>
														,
														<a href="https://kevinljackson.blogspot.com/2018/05/a-path-to-hybrid-cloud.html">
															Microsoft
														</a>
														, Citrix and
														<a
															href="https://kevinljackson.blogspot.com/2018/05/taking-canadian-insurance-industry.html">
															IBM
														</a>
														. &nbsp;Books include “
														<a
															href="https://www.amazon.com/Click-Transform-Digital-Transformation-Business/dp/1943386900/ref=tmm_pap_swatch_0">
															Click to Transform
														</a>
														” (Leaders Press, 2020), “
														<a
															href="https://www.packtpub.com/virtualization-and-cloud/architecting-cloud-computing-solutions">
															Architecting Cloud Computing Solutions
														</a>
														” (Packt, 2018), and “
														<a href="https://www.tandf.net/books/details/9781498729437/">Practical Cloud Security: A
															Cross Industry View
														</a>
														” (Taylor &amp; Francis, 2016). He also delivers online training through
														<a href="https://sopa.tulane.edu/content/kevin-jackson">Tulane University</a>
														,
														<a href="https://www.oreilly.com/pub/au/7819">O’Reilly Media</a>
														,
														<a href="https://www.linkedin.com/learning/instructors/kevin-l-jackson">LinkedIn
															Learning
														</a>
														, and
														<a href="https://www.pluralsight.com/authors/kevinl-jackson">Pluralsight</a>
														. &nbsp;Mr. Jackson retired from the U.S. Navy in 1994, earning specialties in
														<a href="https://sp.nps.edu/SSE_591.html">Space Systems Engineering</a>
														,
														<a href="https://en.wikipedia.org/wiki/Carrier_onboard_delivery">Carrier Onboard Delivery
															Logistics
														</a>
														and carrier-based
														<a href="https://en.wikipedia.org/wiki/Airborne_early_warning_and_control">Airborne Early
															Warning and Control
														</a>
														. While active, he also served with the
														<a href="https://www.nro.gov/">National Reconnaissance Office, Operational Support
															Office
														</a>
														, providing tactical support to Navy and Marine Corps forces worldwide.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/kjackson/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/68805621b18b05f09403152f_Kevin%20L.%20Jackson.avif"
								loading="lazy" alt="Kevin L. Jackson"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Lloyd Knight</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host, Tango Tango</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Lloyd Knight is a dedicated advocate for
													military veterans, currently serving as the Veteran Talent Acquisition Strategy Man...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Lloyd Knight is a dedicated advocate for military veterans, currently serving as the
														Veteran Talent Acquisition Strategy Manager at UPS Global Headquarters in Atlanta, GA. In
														this pivotal role, he oversees the hiring and retention strategies for a robust workforce
														of 19,000 military veterans, ensuring that their unique skills and experiences are
														recognized and valued. A passionate leader in veteran engagement, Lloyd has made
														significant contributions to UPS, including founding the first Veterans Business Resource
														Group and developing the inaugural Veterans Management Training Program and has served as
														the Chairman of the UPS Veterans Council, fostering a culture of support and inclusion.
													</p>
													<p>As the co-founder and President of VETLANTA, Lloyd is at the forefront of an industry
														collaboration aimed at making Atlanta the premier community for veterans and their
														families. His influence in the community is further amplified through his role as a Career
														Readiness Instructor for FourBlock, where he teaches at Emory University's Goizueta
														Business School in the Masters in Business for Veterans Program. Lloyd is also the host of
														the Tango Tango Podcast, produced by Supply Chain Now, where he shares insights and
														stories that resonate with veterans and their supporters. His commitment to service is
														evident in his volunteer work with multiple non-profits, including Leadership Forsyth,
														American Corporate Partners, Travis Manion Foundation, FourBlock, and Hire Heroes USA. In
														recognition of his exceptional community service, he was honored with the 2018 UPS Jim
														Casey Community Service Award, a prestigious accolade awarded to just one of 500,000
														global UPS employees.
													</p>
													<p>An accomplished author, Lloyd penned KNIGHTWORK: My Unfinished Journey of VETLANTA, and
														he hosts The Landing Zone Podcast, a valuable resource designed to assist service members
														and veterans in navigating their career transitions. Lloyd holds associate degrees from
														the Community College of the Air Force in Human Resources and Aircrew Operations, as well
														as a BA and MA in Transportation and Logistics Management from American Military
														University. He also earned a Graduate Certificate in Nonprofit Management from the
														University of Georgia, equipping him with the skills to make a lasting impact in the
														veteran community. With a blend of professional expertise and heartfelt dedication, Lloyd
														Knight continues to champion the cause of veterans, ensuring they receive the support and
														opportunities they deserve.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/lloydknight/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/6880562e0677d635859b4c2c_Lloyd%20Knight.avif"
								loading="lazy" alt="Lloyd Knight"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Karin Bursa</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Karin Bursa is the 2020 Supply Chain Pro
													to Know of the Year and the Host of the TEKTOK Digital Supply Chain Podcast p...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>
														<strong>Karin Bursa</strong>
														is the 2020 Supply Chain Pro to Know of the Year and the
														Host of the TEKTOK Digital Supply Chain Podcast powered by Supply Chain Now. With more
														than 25 years of supply chain and technology expertise <em>(and the scars to prove
															it)</em>, Karin has the heart of a teacher and has helped nearly 1,000 customers
														transform their businesses and share their success stories. Today, she helps B2B
														technology companies introduce new products, capture customer success and grow global
														revenue, market share and profitability. In addition to her recognition as the 2020 Supply
														Chain Pro to Know of the Year, Karin has also been recognized as a 2019 and 2018 Supply
														Chain Pro to Know, 2009 Technology Marketing Executive of the Year and a 2008 Women in
														Technology Finalist.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/karinbursa/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/68805639fed15b7bc7c0dfc9_Karin%20Bursa.avif"
								loading="lazy" alt="Karin Bursa"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Tandreia Bellamy</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Tandreia Bellamy retired as the Vice
													President of Industrial Engineering for UPS Supply Chain Solutions which included...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Tandreia Bellamy retired as the Vice President of Industrial Engineering for UPS Supply
														Chain Solutions which included the Global Logistics, Global Freight Forwarding and UPS
														Freight business units. She was responsible for operations strategy and planning, asset
														management, forecasting, and technology tool development to optimize sustainable
														efficiency while driving world class service.
													</p>
													<p>Tandreia held similar positions at the business unit level for Global Logistics and
														Global Freight forwarding. As the leader of the Global Logistics engineering function, she
														directed all industrial engineering activies related to distribution, service parts
														logistics (post-sales support), and mail innovations (low cost, light weight shipping
														partnership with the USPS). Between these roles Tandreia helped to establish the Advanced
														Technology Group which was formed to research and develop cutting edge solutions focused
														on reducing reliance on manual labor.
													</p>
													<p>Tandreia began her career in 1986 as a part-time hourly manual package handling employee.
														She spent the great majority of her career in the small package business unit which is
														responsible for the pick-up, sort, transport and delivery of packages domestically. She
														held various positions in Industrial Engineering, Marketing, Inside and On-road operations
														in Central Florida before transferring to Atlanta for a position in Corporate Product
														Development and Corporate Industrial Engineering. Tandreia later held IE leadership roles
														in Nebraska, Minnesota and Chicago. In her final role in small package she was an IE VP
														responsible for all aspects of IE, technology support and quality for the 25 states on the
														western half of the country.
														<br>
														Tandreia is currently a Director for the University of Central Florida (UCF) Foundation
														Board and also serves on their Dean’s Advisory Board for the College of Engineering and
														Computer Science. Previously Tandreia served on the Executive Advisory Board for Virginia
														Tech’s IE Department and the Association for Supply Chain Management. She served on the
														Board of Trustees for ChildServ (a Chicago child and family services non-profit) and also
														served on the Texas A&amp;M and Tuskegee Engineering Advisory Boards. In 2006 she was
														named Business Advisor of the Year by INROADS, in 2009 she was recognized as a Technology
														All-Star at the Women of Color in STEM conference and in 2019 she honored as a UCF
														Distinguished Aluma by the Department of Industrial Engineering and Management Systems.
													</p>
													<p>Tandreia holds a bachelor’s degree in Industrial Engineering from Stanford University and
														a master’s degree in Industrial Engineering and Management Systems from UCF. Her greatest
														accomplishment, however, is being the proud mother of two college students, Ruby (24) and
														Anthony (22).
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/tandreia-bellamy-56b49959/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/6880572439a36e0c42c2042f_Tandreia%20Bellamy.avif"
								loading="lazy" alt="Tandreia Bellamy"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Jake Barr</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">An acknowledged industry leader, Jake Barr
													now serves as CEO for BlueWorld Supply Chain Consulting, providing support t...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>An acknowledged industry leader, Jake Barr now serves as CEO for BlueWorld Supply Chain
														Consulting, providing support to a cross section of Fortune 500 companies such as Cargill,
														Caterpillar, Colgate, Dow/Dupont, Firmenich, 3M, Merck, Bayer/Monsanto, Newell Brands,
														Kimberly Clark, Nestle, PepsiCo, Pfizer, Sanofi, Estee Lauder and Coty among others. He's
														also devoted time to engagements in public health sector work with the Bill &amp; Melinda
														Gates Foundation. At P&amp;G, he managed the breakthrough delivery of an E2E (End to End)
														Planning Transformation effort, creating control towers which now manage the daily
														business globally. He is recognized as the architect for P&amp;G’s demand driven supply
														chain strategy – referenced as a “Consumer Driven Supply Chain” transformation. Jake began
														his career with P&amp;G in Finance in Risk Analysis and then moved into Operations. He has
														experience in building supply network capability globally through leadership assignments
														in Asia, Latin America, North America and the Middle East. He currently serves as a
														Research Associate for MIT; a member of Supply Chain Industry Advisory Council; Member of
														Gartner’s Supply Chain Think Tank; Consumer Goods “League of Leaders“; and a recipient of
														the 2015 - 2021 Supply Chain “Pro’s to Know” Award. He has been recognized as a University
														of Kentucky Fellow.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/jake-barr-3883501/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/6880572e1f61a6fc717427f0_Jake%20Barr.avif"
								loading="lazy" alt="Jake Barr"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Kim Reuter</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">From humble beginnings working the import
													docks, representing Fortune 500 giants, Ford, Michelin Tire, and Black &amp; Dec...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>From humble beginnings working the import docks, representing Fortune 500 giants, Ford,
														Michelin Tire, and Black &amp; Decker; to Amazon technology patent holder and Nordstrom
														Change Leader, Kimberly Reuter has designed, implemented, and optimized best-in-class,
														highly scalable global logistics and retail operations all over the world. Kimberly’s
														ability to set strategic vision supported by bomb-proof processes, built on decades of
														hands-on experience, has elevated her to legendary status. Sought after by her peers and
														executives for her intellectual capital and keen insights, Kimberly is a thought leader in
														the retail logistics industry.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/kimberly-reuter-csg/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/688057384c584280dcac07c5_Kim%20Reuter.avif"
								loading="lazy" alt="Kim Reuter"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Marty Parker</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Marty Parker serves as both the CEO &amp;
													Founder of Adæpt Advising and an award-winning Senior Lecturer (Teaching Prof...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Marty Parker serves as both the CEO &amp; Founder of Adæpt Advising and an award-winning
														Senior Lecturer (Teaching Professor) in Supply Chain and Operations Management at the
														University of Georgia. He has 30 years of experience as a COO, CMO, CSO (Chief Strategy
														Officer), VP of Operations, VP of Marketing and Process Engineer. He founded and leads
														UGA’s Supply Chain Advisory Board, serves as the Academic Director of UGA’s Leaders
														Academy, and serves on multiple company advisory boards including the Trucking
														Profitability Strategies Conference, Zion Solutions Group and Carlton Creative Company.
													</p>
													<p>Marty enjoys helping people and companies be successful. Through UGA, Marty is passionate
														about his students, helping them network and find internships and jobs. He does this
														through several hundred one-on-one zoom meetings each year with his students and former
														students. Through Adæpt Advising, Marty has organized an excellent team of affiliates that
														he works with to help companies grow and succeed. He does this by helping c-suite
														executives improve their skills, develop better leaders, engage their workforce, improve
														processes, and develop strategic plans with detailed action steps and financial targets.
														Marty believes that excellence in supply chain management comes from the understanding the
														intersection of leadership, culture, and technology, working across all parts of the
														organization to meet customer needs, maximize profit and minimize costs.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/martyparker/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/6880576e29beb6c93cfa0b8c_Marty%20Parker.avif"
								loading="lazy" alt="Marty Parker"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Tevon Taylor</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Tevon Taylor is a dynamic leader at
													Pegasus Logistics, where he has made significant contributions to the company’s...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Tevon Taylor is a dynamic leader at Pegasus Logistics, where he has made significant
														contributions to the company’s growth and innovation in the logistics industry. With a
														background in supply chain management and operations, Tevon combines strategic thinking
														with hands-on experience to streamline processes and enhance efficiency. &nbsp;Since
														joining Pegasus Logistics, Tevon has been instrumental in implementing cutting-edge
														technologies and sustainable practices, driving the company toward a more eco-friendly
														approach. His leadership style fosters collaboration and empowers teams to excel, making
														him a respected figure among colleagues and industry peers. &nbsp;Outside of work, Tevon
														is passionate about mentorship and actively engages in community initiatives, sharing his
														expertise to inspire the next generation of logistics professionals. His commitment to
														excellence and continuous improvement has positioned him as a key player in shaping the
														future of logistics at Pegasus.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/tevontaylor/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/6880577908b97e8b047b5c9b_Tevon%20Taylor.avif"
								loading="lazy" alt="Tevon Taylor"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Allison Giddens</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Allison Krache Giddens has been with
													Win-Tech, a veteran-owned small business and aerospace precision machine shop, for 15...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>
														<strong>Allison Krache Giddens</strong>
														has been with Win-Tech, a veteran-owned small
														business and aerospace precision machine shop, for 15 years, recently buying the company
														from her mentor and Win-Tech’s Founder, Dennis Winslow. She and her business partner, John
														Hudson now serve as Co-Presidents, leading the 33-year old company through the pandemic.
													</p>
													<p>She holds undergraduate degrees in psychology and criminal justice from the University of
														Georgia, a Masters in Conflict Management from Kennesaw State University, a Masters in
														Manufacturing from Georgia Institute of Technology, and a Certificate of Finance from the
														University of Georgia. She also holds certificates in Google Analytics, event planning,
														and Cybersecurity Risk Management from Harvard online. Allison founded the Georgia Chapter
														of Women in Manufacturing and currently serves as Treasurer. She serves on the
														Chattahoochee Technical College Foundation Board as its Secretary, the liveSAFE Resources
														Board of Directors as Resource Development Co-Chair, and on the Leadership Cobb Alumni
														Association Board as Membership Chair and is also a member of Cobb Executive Women. She is
														on the Board for the Cobb Chamber of Commerce’s Northwest Area Councils. Allison runs The
														Dave Krache Foundation, a non-profit that helps pay sports fees for local kids in need.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/allisongiddens/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/688057838855c8d2f5b4f369_Allison%20Giddens.avif"
								loading="lazy" alt="Allison Giddens"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Vin Vashishta</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Vin Vashishta is the author of ‘From Data
													To Profit’ (Wiley 2023). It’s the playbook for monetizing data and AI. Vin is t...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Vin Vashishta is the author of ‘From Data To Profit’ (Wiley 2023). It’s the playbook for
														monetizing data and AI. Vin is the Founder of V-Squared and built the business from client
														1 to one of the world’s oldest data and AI consulting firms. His background combines
														nearly 30 years in strategy, leadership, software engineering, and applied machine
														learning.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/vineetvashishta/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/688057f817832c4e5af331f0_Vin%20Vashishta.avif"
								loading="lazy" alt="Vin Vashishta"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Billy Ray Taylor</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Billy Taylor is a Proven Business
													Excellence Practitioner and Leadership Guru with over 25 years leading operations for a...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Billy Taylor is a Proven Business Excellence Practitioner and Leadership Guru with over
														25 years leading operations for a Fortune 500 company, Goodyear. He is also the CEO of
														<strong>LinkedXL</strong>
														<strong>(Excellence)</strong>
														, a Business Operating Systems
														Architecting Firm dedicated to implementing sustainable operating systems that drive
														sustainable results. Taylor’s achievements in the industry have made him a
														<strong><em>Next
																Generational Lean</em></strong>
														pacesetter with significant contributions.
													</p>
													<p>An American business executive, Taylor has made a name for himself as an innovative and
														energetic industry professional with an indispensable passion for his craft of operational
														excellence. His journey started many years ago and has worked with renowned corporations
														such as
														<strong>The Goodyear Tire &amp; Rubber Co. (GT)</strong>
														leading multi-site
														operations. With over 3 decades of service leading North America operations, he is
														experienced in a deeply rooted process driven approach in customer service, process
														integrity for sustainability.
													</p>
													<p>A disciple of continuous improvement, Taylor’s love for people inspires commitment to
														helping others achieve their full potential. He is a dynamic speaker and hosts
														<strong>"The
															Winning Link,"
														</strong>
														a popular podcast centered on business and leadership excellence
														with the
														<strong><em>#1 rated Supply Chain Now Network</em></strong>
														. As a leadership
														guru, Taylor has earned several invitations to universities, international conferences,
														global publications, and the U.S. Army to demonstrate how to achieve and sustain effective
														results through cultural acceptance and employee ownership. Leveraging the wisdom of his
														business acumen, strong influence as a speaker and podcaster Taylor is set to release
														<strong><em>"The Winning Link"</em></strong>
														book under McGraw Hill publishing in 2022.
														The book is a how-to manual to help readers understand the management of business
														interactions while teaching them how to Deine, Align, and Execute Winning in Business.
													</p>
													<p>A servant leader, Taylor, was named by The National Diversity Council as one of the Top
														100 Diversity Officers in the country in 2021. He features among Oklahoma's Most Admired
														CEOs and maintains key leadership roles with the Executive Advisory Board for
														<strong>The
															Shingo Institute "The Nobel Prize of Operations"
														</strong>
														and
														<strong>The Association of
															Manufacturing Excellence (AME)
														</strong>
														; two world-leading organizations for operational
														excellence, business development, and cultural learning. &nbsp;He is also an Independent
														Director for the
														<strong>M-D Building Products Board</strong>
														, a proud American
														manufacturer of quality products since 1920.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/billyrtaylor/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/68805801aed49f64c64d9696_Billy%20Ray%20Taylor.avif"
								loading="lazy" alt="Billy Ray Taylor"
								class="image aspect-square">
						</div>
					</div>
				</div>
				<div role="listitem" class="group w-dyn-item">
					<div class="overflow-hidden rounded-24 relative h-396">
						<div
							class="relative z-10 w-full h-full gradient8 md:bg-linear-[158deg,transparent_0%,transparent_0%]! translate-y-396 md:translate-y-0 group-hover:translate-y-0 transition-all duration-500">
							<div class="px-12 pt-40 pb-28 h-full">
								<div class="w-layout-blockcontainer max-w-312 h-full w-container">
									<div class="w-layout-vflex h-full flex justify-between">
										<div class="md:invisible">
											<div class="mb-4">
												<h3 from-fullname-wrapper="" class="text-2xl">Marcia Williams</h3>
											</div>
											<div class="mb-36">
												<div from-role-wrapper="" class="font-family-secondary text-primary">Host</div>
											</div>
											<div class="pr-20 md:pr-0">
												<div class="our-team-paragraph-truncate w-richtext">Marcia Williams, Managing Partner of USM
													Supply Chain, has 18 years of experience in Supply Chain, with expertise in...
												</div>
												<div from-bio-wrapper="" class="our-team-paragraph-truncate display-none w-richtext">
													<p>Marcia Williams, Managing Partner of USM Supply Chain, has 18 years of experience in
														Supply Chain, with expertise in optimizing Supply Chain-Finance Planning (S&amp;OP/ IBP)
														at Large Fast-Growing CPGs for greater profitability and improved cash flows. Marcia has
														helped mid-sized and large companies including Lindt Chocolates, Hershey, and Coty. She
														holds an MBA from Michigan State University and a degree in Accounting from Universidad de
														la Republica, Uruguay (South America). Marcia is also a Forbes Council Contributor based
														out of New York, and author of the book series Supply Chains with Maria in storytelling
														style. A recent speaker’s engagement is Marcia TEDx Talk: TEDxMSU - How Supply Chain
														Impacts You: A Transformational Journey.
													</p>
												</div>
											</div>
										</div>
										<div class="flex justify-between gap-12 items-center w-full">
											<div class="flex items-center gap-12 md:invisible">
												<div class="font-family-secondary text-xs uppercase tracking-[1.2px]">FOLLOW ME</div>
												<div from-linkedin-wrapper="" class="flex items-center">
													<a href="https://www.linkedin.com/in/marciadwilliams/" target="_blank"
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
								src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/688058102825ea4f63482196_Marcia%20Williams.avif"
								loading="lazy" alt="Marcia Williams"
								class="image aspect-square">
						</div>
					</div>
				</div>-->
      </div>
    </div>
		<?php
		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'our_team_and_hosts_meet_our_hosts', 'our_team_and_hosts_meet_our_hosts_shortcode' );
} );