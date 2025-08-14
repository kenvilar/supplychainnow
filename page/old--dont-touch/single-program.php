<?php

extract(bridge_qode_get_blog_single_params()); ?>
<?php
get_header(); ?>
<?php
if (have_posts()) : ?>
	<?php
	while (have_posts()) : the_post();
		$pageId = get_the_ID(); ?>
		<!-- Custom code Start -->


		<div class="full_width">
			<div class="full_width_inner">


				<div class="vc_row wpb_row section vc_row-fluid post-headerspace" style="background-image:url(<?php
				wp_kses_post(the_field('program_hero_image_upload', $pageId)); ?>); padding-bottom:60px; text-align:center;">
					<div class="full_section_inner clearfix">
						<div class="pic-curved wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div class="wpb_single_image wpb_content_element vc_align_center">
										<div class="wpb_wrapper">
											<div class="thum-shadow vc_single_image-wrapper vc_box_border_grey">
												<?php
												if (!empty(get_field('program_thumbnail_image_upload', $pageId))) { ?>
													<img width="400" height="400" src="<?php
													wp_kses_post(the_field('program_thumbnail_image_upload', $pageId)); ?>"
													     class="vc_single_image-img lazyload"/>
													<?php
												} ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="vc_row wpb_row section vc_row-fluid" style="text-align: right;">
					<div class="full_section_inner clearfix">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div class="wpb_single_image wpb_content_element vc_align_right styleone-divider-bottom-line4x">
										<div class="wpb_wrapper">
											<div class="vc_single_image-wrapper vc_box_border_grey">
												<img
													width="1920"
													height="13"
													src="https://supplychainnow.com/wp-content/uploads/2021/02/orange-divider-line4x.png"
													class="vc_single_image-img attachment-full"
													alt=""
													loading="lazy"
												/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="vc_row wpb_row section vc_row-fluid grid_section" style="padding-top: 60px; text-align: center;">
					<div class="section_inner clearfix">
						<div class="section_inner_margin clearfix">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<?php
										if (!empty(get_field('program_description', $pageId))) { ?>
											<div class="wpb_text_column wpb_content_element custom-font-one">
												<div class="wpb_wrapper">
													<p>
														<?php
														echo get_field('program_description', $pageId);
														?>
													</p>
												</div>
											</div>
											<?php
										} ?>
										<div class="vc_empty_space" style="height: 40px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
										</div>

										<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section" style="text-align: center;">
											<div class="section_inner clearfix">
												<div class="section_inner_margin clearfix">
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">

																<div class="image_hover" style="" data-transition-delay="">
																	<div class="images_holder">

																		<a itemprop="url" href="/search-results/?_search_programs=<?php
																		echo $pageId; ?>" target="_blank">
																			<img
																				itemprop="image"
																				alt=""
																				style=""
																				src="/wp-content/uploads/2021/04/search-episode-btn.png"
																				class="active_image lazyload"
																			/>

																			<img
																				itemprop="image"
																				alt=""
																				style=""
																				src="/wp-content/uploads/2021/04/search-episode-hover-btn.png"
																				class="hover_image lazyload"
																			/>

																		</a>
																	</div>
																</div>
																<div class="vc_empty_space" style="height: 15px;">
                                                                            <span class="vc_empty_space_inner">
                                                                                <span class="empty_space_image"></span>
                                                                            </span>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="image_hover" style="" data-transition-delay="">
																	<div class="images_holder">
																		<?php
																		if (!empty(get_field('program_subscribe_link', $pageId))) { ?>
																			<a itemprop="url" href="<?php
																			echo get_field('program_subscribe_link', $pageId); ?>" target="_blank">
																				<img
																					itemprop="image"
																					alt=""
																					style=""
																					src="/wp-content/uploads/2021/02/subscribe-program-btn.png"
																					class="active_image lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																				/>
																				<noscript>
																					<img itemprop="image" class="active_image"
																					     src="/wp-content/uploads/2021/02/subscribe-program-btn.png" alt=""
																					     style=""/>
																				</noscript>
																				<img
																					itemprop="image"
																					alt=""
																					style=""
																					src="/wp-content/uploads/2021/02/subscribe-program-hover-btn.png"
																					class="hover_image lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																				/>
																				<noscript>
																					<img itemprop="image" class="hover_image"
																					     src="/wp-content/uploads/2021/02/subscribe-program-hover-btn.png" alt=""
																					     style=""/>
																				</noscript>
																			</a>
																			<?php
																		} ?>
																	</div>
																</div>
																<div class="vc_empty_space" style="height: 15px;">
                                                                            <span class="vc_empty_space_inner">
                                                                                <span class="empty_space_image"></span>
                                                                            </span>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="image_hover" style="" data-transition-delay="">
																	<div class="images_holder">
																		<?php
																		if (!empty(get_field('program_youtube_link', $pageId))) { ?>
																			<a itemprop="url" href="<?php
																			echo get_field('program_youtube_link', $pageId); ?>" target="_blank">
																				<img
																					itemprop="image"
																					alt=""
																					style=""
																					src="/wp-content/uploads/2021/02/youtube-program.png"
																					class="active_image lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																				/>
																				<noscript>
																					<img itemprop="image" class="active_image"
																					     src="/wp-content/uploads/2021/02/youtube-program.png" alt="" style=""/>
																				</noscript>
																				<img
																					itemprop="image"
																					alt=""
																					style=""
																					src="/wp-content/uploads/2021/02/youtube-program-hover.png"
																					class="hover_image lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																				/>
																				<noscript>
																					<img itemprop="image" class="hover_image"
																					     src="/wp-content/uploads/2021/02/youtube-program-hover.png" alt=""
																					     style=""/>
																				</noscript>
																			</a>
																			<?php
																		} ?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<?php
				if (!empty(get_field('recent_episode_title', $pageId))
				    && !empty(
					get_field(
						'recent_episode_thumbnail_upload',
						$pageId
					)
					)) {
					?>
					<div class="full_width">
						<div class="full_width_inner">
							<div class="vc_row wpb_row section vc_row-fluid grid_section"
							     style="background-color: #eeeff0; margin-top: 60px; padding-top: 60px; padding-bottom: 60px; text-align: left;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div
														class="q_elements_holder two_columns eh_two_columns_66_33 responsive_mode_from_1000 alignment_one_column_center">
														<div class="q_elements_item" data-animation="no"
														     data-item-class="q_elements_holder_custom_307107" style="text-align: center;">
															<div class="q_elements_item_inner">
																<div class="q_elements_item_content q_elements_holder_custom_307107">
																	<div class="wpb_single_image wpb_content_element vc_align_center">
																		<div class="wpb_wrapper">
																			<div class="vc_single_image-wrapper pic-curved">
																				<img src="<?php
																				echo get_field('recent_episode_thumbnail_upload', $pageId);
																				?>"/>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div
															class="q_elements_item"
															data-600-768="30px 0px 0px 0px"
															data-480-600="30px 0px 0px 0px"
															data-480="30px 0px 0px 0px"
															data-animation="no"
															data-item-class="q_elements_holder_custom_453563"
															style="vertical-align: middle; text-align: center;"
														>
															<div class="q_elements_item_inner">
																<div class="q_elements_item_content q_elements_holder_custom_453563"
																     style="padding: 0px 0px 0px 15px;">
																	<div class="wpb_text_column wpb_content_element">
																		<div class="wpb_wrapper">
																			<h4><?php
																				echo get_field('recent_episode_title', $pageId); ?>
																			</h4>
																		</div>
																	</div>
																	<div class="wpb_single_image wpb_content_element vc_align_center">
																		<div class="wpb_wrapper">
																			<div class="vc_single_image-wrapper vc_box_border_grey">
																				<img
																					width="203"
																					height="10"
																					src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																					class="vc_single_image-img attachment-full"
																					alt=""
																					loading="lazy"
																				/>
																			</div>
																		</div>
																	</div>
																	<?php
																	if (!empty(get_field('recent_episode_subtitle', $pageId))) { ?>
																		<div class="wpb_text_column wpb_content_element bluetext">
																			<div class="wpb_wrapper">
																				<h5><?php
																					echo get_field('recent_episode_subtitle', $pageId); ?></h5>
																			</div>
																		</div>
																		<?php
																	} ?>
																	<div class="vc_empty_space" style="height: 20px;">
                                                                    <span class="vc_empty_space_inner">
                                                                        <span class="empty_space_image"></span>
                                                                    </span>
																	</div>

																	<?php
																	if (!empty(get_field('recent_episode_apple_podcast_link', $pageId))) { ?>
																		<a itemprop="url" href="<?php
																		echo get_field('recent_episode_apple_podcast_link', $pageId); ?>" target="_self"
																		   class="qbutton default" style="">Listen Now
																		</a>
																		<?php
																	} ?>


																	<div class="vc_empty_space" style="height: 20px;">
                                                                    <span class="vc_empty_space_inner">
                                                                        <span class="empty_space_image"></span>
                                                                    </span>
																	</div>

																	<?php
																	if (!empty(get_field('recent_episode_episode_detail_link', $pageId))) { ?>
																		<a itemprop="url" href="<?php
																		echo get_field('recent_episode_episode_detail_link', $pageId); ?>" target="_self"
																		   class="qbutton default" style="">View Episode Details
																		</a>
																		<?php
																	} ?>

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php
				} ?>








				<?php
				if (!empty(get_field('program_featured_episodes', $pageId))) { ?>
					<div class="vc_row wpb_row section vc_row-fluid grid_section"
					     style="padding-top: 60px; padding-bottom: 45px; text-align: left;">
						<div class="section_inner clearfix">
							<div class="section_inner_margin clearfix">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element text-sm-center">
												<div class="wpb_wrapper">
													<h1>Featured Episodes</h1>
												</div>
											</div>
											<div class="wpb_single_image wpb_content_element vc_align_left text-sm-center">
												<div class="wpb_wrapper">
													<div class="vc_single_image-wrapper vc_box_border_grey">
														<img
															width="203"
															height="10"
															alt=""
															loading="lazy"
															src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
															class="vc_single_image-img attachment-full lazyload"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
														/>
														<noscript>
															<img
																width="203"
																height="10"
																alt=""
																loading="lazy"
																src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																class="vc_single_image-img attachment-full lazyload"
																src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															/>
															<noscript>
																<img
																	width="203"
																	height="10"
																	alt=""
																	loading="lazy"
																	src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																	class="vc_single_image-img attachment-full lazyload"
																	src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																/>
																<noscript>
																	<img
																		width="203"
																		height="10"
																		alt=""
																		loading="lazy"
																		src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																		class="vc_single_image-img attachment-full lazyload"
																		src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																	/>
																	<noscript>
																		<img width="203" height="10"
																		     src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																		     class="vc_single_image-img attachment-full" alt="" loading="lazy"/>
																	</noscript>
																</noscript>
															</noscript>
														</noscript>
													</div>
												</div>
											</div>
											<div class="vc_empty_space" style="height: 25px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
											</div>

											<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section" style="text-align: left;">
												<div class="section_inner clearfix">
													<div class="section_inner_margin clearfix">
														<?php
														$featured_episodes = get_field('program_featured_episodes', $pageId);
														//echo '<pre>';
														//print_r($featured_episodes);

														$keys = array_keys($featured_episodes);
														for ($i = 0; $i < count($featured_episodes); $i++) {
															//echo $keys[$i] . "{<br>";
															foreach ($featured_episodes[$keys[$i]] as $key => $value) {
																//echo $key . " : " . $value . "<br>";
																$episode_img = get_field('thumbnail_upload', $value);
																$episode_url = get_permalink($value);

																?>

																<div class="pic-curved wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="q_image_with_text_over q_iwto_hover">
																				<div class="shader" style="background-color: rgba(0, 0, 0, 0.01);"></div>
																				<div class="shader_hover"
																				     style="background-color: rgba(39, 47, 55, 0.8);"></div>
																				<img
																					itemprop="image"
																					alt=""
																					src='<?php
																					echo $episode_img; ?>'
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																				/>

																				<div class="text">
																					<table>
																						<tr>
																							<td>
																								<h3 class="caption no_icon" style=""></h3>
																							</td>
																						</tr>
																					</table>
																					<table>
																						<tr>
																							<td>
																								<div class="desc">
																									<a itemprop="url" href="<?php
																									echo $episode_url; ?>" target="_self" class="qbutton default"
																									   style="">Learn More
																									</a>
																								</div>
																							</td>
																						</tr>
																					</table>
																				</div>
																			</div>
																			<div class="vc_empty_space" style="height: 15px;">
                                                                            <span class="vc_empty_space_inner">
                                                                                <span class="empty_space_image"></span>
                                                                            </span>
																			</div>
																		</div>
																	</div>
																</div>
																<?php
															}
														}
														?>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				} ?>
				<?php
				if (!empty(get_field('captivate_code', $pageId))) { ?>
					<div class="vc_row wpb_row section vc_row-fluid grid_section"
					     style="padding-top: 60px; padding-bottom: 45px; text-align: left;">
						<div class="section_inner clearfix">
							<div class="section_inner_margin clearfix">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element text-sm-center">
												<div class="wpb_wrapper">
													<h1>Most Recent Episodes</h1>
												</div>
											</div>
											<div class="wpb_single_image wpb_content_element vc_align_left text-sm-center">
												<div class="wpb_wrapper">
													<div class="vc_single_image-wrapper vc_box_border_grey">
														<img
															width="203"
															height="10"
															alt=""
															loading="lazy"
															src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
															class="vc_single_image-img attachment-full lazyload"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
														/>
														<noscript>
															<img
																width="203"
																height="10"
																alt=""
																loading="lazy"
																src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																class="vc_single_image-img attachment-full lazyload"
																src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															/>
															<noscript>
																<img
																	width="203"
																	height="10"
																	alt=""
																	loading="lazy"
																	src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																	class="vc_single_image-img attachment-full lazyload"
																	src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																/>
																<noscript>
																	<img
																		width="203"
																		height="10"
																		alt=""
																		loading="lazy"
																		src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																		class="vc_single_image-img attachment-full lazyload"
																		src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																	/>
																	<noscript>
																		<img width="203" height="10"
																		     src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																		     class="vc_single_image-img attachment-full" alt="" loading="lazy"/>
																	</noscript>
																</noscript>
															</noscript>
														</noscript>
													</div>
												</div>
											</div>
											<div class="vc_empty_space" style="height: 25px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
											</div>

											<div class="wpb_text_column wpb_content_element">
												<div class="wpb_wrapper">
													<p>
														<?php
														echo get_field('captivate_code', $pageId); ?>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				} ?>
				<?php
				if (!empty(get_field('you_may_also_like_programs', $pageId))) { ?>
					<div class="vc_row wpb_row section vc_row-fluid grid_section"
					     style="padding-top: 60px; padding-bottom: 45px; text-align: left;">
						<div class="section_inner clearfix">
							<div class="section_inner_margin clearfix">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element text-sm-center">
												<div class="wpb_wrapper">
													<h1>You May Also Like</h1>
												</div>
											</div>
											<div class="wpb_single_image wpb_content_element vc_align_left text-sm-center">
												<div class="wpb_wrapper">
													<div class="vc_single_image-wrapper vc_box_border_grey">
														<img
															width="203"
															height="10"
															alt=""
															loading="lazy"
															src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
															class="vc_single_image-img attachment-full lazyload"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
														/>

													</div>
												</div>
											</div>
											<div class="vc_empty_space" style="height: 25px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
											</div>

											<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section" style="text-align: left;">

												<div class="section_inner clearfix">
													<div class="section_inner_margin clearfix">
														<?php
														$other_programs = get_field('you_may_also_like_programs', $pageId);
														// print_r($featured_episodes); 

														$keys = array_keys($other_programs);
														for ($i = 0; $i < count($other_programs); $i++) {
															foreach ($other_programs[$keys[$i]] as $key => $value) {
																$program_img = get_field('program_thumbnail_image_upload', $value);
																$program_url = get_permalink($value);

																?>
																<div class="pic-curved wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="q_image_with_text_over q_iwto_hover">
																				<div class="shader" style="background-color: rgba(0, 0, 0, 0.01);"></div>
																				<div class="shader_hover"
																				     style="background-color: rgba(39, 47, 55, 0.8);"></div>
																				<img
																					itemprop="image"
																					alt=""
																					src="<?php
																					echo $program_img; ?>"
																					class="lazyload"

																				/>

																				<div class="text">
																					<table>
																						<tr>
																							<td>
																								<h3 class="caption no_icon" style=""></h3>
																							</td>
																						</tr>
																					</table>
																					<table>
																						<tr>
																							<td>
																								<div class="desc">
																									<a itemprop="url" href="<?php
																									echo $program_url; ?>" target="_self" class="qbutton default"
																									   style="">Listen Now
																									</a>
																								</div>
																							</td>
																						</tr>
																					</table>
																				</div>
																			</div>
																			<div class="vc_empty_space" style="height: 15px;">
                                                                            <span class="vc_empty_space_inner">
                                                                                <span class="empty_space_image"></span>
                                                                            </span>
																			</div>
																		</div>
																	</div>
																</div>
																<?php
															}
														}
														?>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				} else { ?>
					<div class="vc_row wpb_row section vc_row-fluid grid_section"
					     style="padding-top: 60px; padding-bottom: 45px; text-align: left;">
						<div class="section_inner clearfix">
							<div class="section_inner_margin clearfix">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element text-sm-center">
												<div class="wpb_wrapper">
													<h1>You May Also Like</h1>
												</div>
											</div>
											<div class="wpb_single_image wpb_content_element vc_align_left text-sm-center">
												<div class="wpb_wrapper">
													<div class="vc_single_image-wrapper vc_box_border_grey">
														<img
															width="203"
															height="10"
															alt=""
															loading="lazy"
															src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
															class="vc_single_image-img attachment-full lazyload"

														/>

													</div>
												</div>
											</div>
											<div class="vc_empty_space" style="height: 25px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
											</div>

											<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section" style="text-align: left;">

												<div class="section_inner clearfix">
													<div class="section_inner_margin clearfix">
														<?php
														echo do_shortcode('[custom_related_post]'); ?>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				} ?>
				<div class="vc_row wpb_row section vc_row-fluid grid_section"
				     style="padding-top: 60px; padding-bottom: 60px; text-align: left;">
					<?php
					if (!empty(get_field('facebook', $pageId)) || !empty(get_field('instagram', $pageId))
					    || !empty(
						get_field(
							'linkedin',
							$pageId
						)
						)
					    || !empty(get_field('twitter', $pageId))
					    || !empty(get_field('youtube', $pageId))) { ?>
						<div class="section_inner clearfix">
							<div class="section_inner_margin clearfix">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element text-sm-center">
												<div class="wpb_wrapper">
													<?php
													$program_name = get_field('program_title', $pageId); ?>
													<h1>Follow <?php
														echo $program_name; ?></h1>
												</div>
											</div>
											<div class="wpb_single_image wpb_content_element vc_align_left text-sm-center">
												<div class="wpb_wrapper">
													<div class="vc_single_image-wrapper vc_box_border_grey">
														<img
															width="203"
															height="10"
															alt=""
															loading="lazy"
															src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
															class="vc_single_image-img attachment-full lazyload"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
														/>
														<noscript>
															<img
																width="203"
																height="10"
																alt=""
																loading="lazy"
																src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																class="vc_single_image-img attachment-full lazyload"
																src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															/>
															<noscript>
																<img
																	width="203"
																	height="10"
																	alt=""
																	loading="lazy"
																	src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																	class="vc_single_image-img attachment-full lazyload"
																	src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																/>
																<noscript>
																	<img
																		width="203"
																		height="10"
																		alt=""
																		loading="lazy"
																		src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																		class="vc_single_image-img attachment-full lazyload"
																		src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																	/>
																	<noscript>
																		<img width="203" height="10"
																		     src="/wp-content/uploads/2021/01/orange-headingline-1x.png"
																		     class="vc_single_image-img attachment-full" alt="" loading="lazy"/>
																	</noscript>
																</noscript>
															</noscript>
														</noscript>
													</div>
												</div>
											</div>
											<div class="vc_empty_space" style="height: 25px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
											</div>

											<div class="vc_row wpb_row section vc_row-fluid vc_inner text-sm-center"
											     style="text-align: left;">
												<div class="full_section_inner clearfix">
													<div class="wpb_column vc_column_container vc_col-sm-12">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<?php
																if (!empty(get_field('facebook', $pageId))) { ?>
																	<span
																		data-type="circle"
																		data-hover-bg-color="#3485be"
																		data-hover-icon-color="#ffffff"
																		class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-lg"
																		style="font-size: 30px; margin: 0px 10px 0px 0px;"
																	>
                                                                        <a itemprop="url" href="<?php
                                                                        echo get_field("facebook", $pageId); ?>"
                                                                           target="_blank">
                                                                            <i
	                                                                            class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                            style="color: #5e6170;"></i>
                                                                            <i
	                                                                            class="qode_icon_font_awesome fa fa-facebook-square qode_icon_element fa-stack-1x"
	                                                                            style="color: #ffffff;"></i>
                                                                        </a>
                                                                    </span>
																	<?php
																} ?>
																<?php
																if (!empty(get_field('instagram', $pageId))) { ?>
																	<span
																		data-type="circle"
																		data-hover-bg-color="#3485be"
																		data-hover-icon-color="#ffffff"
																		class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-lg"
																		style="font-size: 30px; margin: 0px 10px 0px 0px;"
																	>
                                                                        <a itemprop="url" href="<?php
                                                                        echo get_field("instagram", $pageId); ?>"
                                                                           target="_blank">
                                                                            <i
	                                                                            class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                            style="color: #5e6170;"></i>
                                                                            <i
	                                                                            class="qode_icon_font_awesome fa fa-instagram qode_icon_element fa-stack-1x"
	                                                                            style="color: #ffffff;"></i>
                                                                        </a>
                                                                    </span>
																	<?php
																} ?>
																<?php
																if (!empty(get_field('linkedin', $pageId))) { ?>
																	<span
																		data-type="circle"
																		data-hover-bg-color="#3485be"
																		data-hover-icon-color="#ffffff"
																		class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-lg"
																		style="font-size: 30px; margin: 0px 10px 0px 0px;"
																	>
                                                                        <a itemprop="url" href="<?php
                                                                        echo get_field("linkedin", $pageId); ?>"
                                                                           target="_blank">
                                                                            <i
	                                                                            class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                            style="color: #5e6170;"></i>
                                                                            <i
	                                                                            class="qode_icon_font_awesome fa fa-linkedin qode_icon_element fa-stack-1x"
	                                                                            style="color: #ffffff;"></i>
                                                                        </a>
                                                                    </span>
																	<?php
																} ?>
																<?php
																if (!empty(get_field('twitter', $pageId))) { ?>
																	<span
																		data-type="circle"
																		data-hover-bg-color="#3485be"
																		data-hover-icon-color="#ffffff"
																		class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-lg"
																		style="font-size: 30px; margin: 0px 10px 0px 0px;"
																	>
                                                                        <a itemprop="url" href="<?php
                                                                        echo get_field("twitter", $pageId); ?>"
                                                                           target="_blank">
                                                                            <i
	                                                                            class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                            style="color: #5e6170;"></i>
                                                                            <i
	                                                                            class="qode_icon_font_awesome fa fa-twitter qode_icon_element fa-stack-1x"
	                                                                            style="color: #ffffff;"></i>
                                                                        </a>
                                                                    </span>
																	<?php
																} ?>
																<?php
																if (!empty(get_field('youtube', $pageId))) { ?>
																	<span
																		data-type="circle"
																		data-hover-bg-color="#3485be"
																		data-hover-icon-color="#ffffff"
																		class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-lg"
																		style="font-size: 30px; margin: 0px 10px 0px 0px;"
																	>
                                                                        <a itemprop="url" href="<?php
                                                                        echo get_field("youtube", $pageId); ?>"
                                                                           target="_blank">
                                                                            <i
	                                                                            class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                            style="color: #5e6170;"></i>
                                                                            <i
	                                                                            class="qode_icon_font_awesome fa fa-youtube-play qode_icon_element fa-stack-1x"
	                                                                            style="color: #ffffff;"></i>
                                                                        </a>
                                                                    </span>
																	<?php
																} ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					} ?>
				</div>

				<div class="vc_row wpb_row section vc_row-fluid" style="background-color: #4c94c5; text-align: left;">
					<div class="full_section_inner clearfix">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div class="wpb_single_image wpb_content_element vc_align_center styleone-divider-top">
										<div class="wpb_wrapper">
											<div class="vc_single_image-wrapper vc_box_border_grey">
												<img
													width="2880"
													height="50"
													src="https://supplychainnow.com/wp-content/uploads/2021/01/blue-divider1x.png"
													class="vc_single_image-img attachment-full"
													alt=""
													loading="lazy"
												/>
											</div>
										</div>
									</div>
									<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section"
									     style="padding-top: 30px; padding-bottom: 30px; text-align: left;">
										<div class="section_inner clearfix">
											<div class="section_inner_margin clearfix">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div
																class="q_elements_holder two_columns eh_two_columns_66_33 responsive_mode_from_1000 alignment_one_column_center">
																<div
																	class="q_elements_item"
																	data-768-1024="0px 20px 20px 20px"
																	data-600-768="0px 20px 20px 20px"
																	data-480-600="0px 20px 20px 20px"
																	data-480="0px 20px 20px 20px"
																	data-animation="no"
																	data-item-class="q_elements_holder_custom_814542"
																	style="vertical-align: middle; text-align: left;"
																>
																	<div class="q_elements_item_inner">
																		<div class="q_elements_item_content q_elements_holder_custom_814542">
																			<div class="wpb_text_column wpb_content_element white">
																				<div class="wpb_wrapper">
																					<h2 class="text-sm-center">Connect Your Brand to an
																						<br>
																						Active Global Audience of Millions
																					</h2>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="q_elements_item" data-animation="no"
																     data-item-class="q_elements_holder_custom_707128"
																     style="vertical-align: middle; text-align: center;">
																	<div class="q_elements_item_inner">
																		<div class="q_elements_item_content q_elements_holder_custom_707128"
																		     style="padding: 0px 0px 0px 0px;">
																			<a itemprop="url" href="/sponsor" target="_self" class="qbutton default" style="">
																				Explore Sponsorship
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_single_image wpb_content_element vc_align_center styleone-divider-bottom">
										<div class="wpb_wrapper">
											<div class="vc_single_image-wrapper vc_box_border_grey">
												<img
													width="2880"
													height="50"
													src="https://supplychainnow.com/wp-content/uploads/2021/01/blue-divider2x.png"
													class="vc_single_image-img attachment-full"
													alt=""
													loading="lazy"
												/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<?php
	endwhile; ?>
<?php
endif; ?>


<?php
get_footer(); ?>