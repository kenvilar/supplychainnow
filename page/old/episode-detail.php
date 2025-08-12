<?php
/*
 * XXXXXXXTemplate Name: Episode Detailxxxxxxxxxx
 */

get_header();
$pageId = get_the_ID();
?>
	<!-- Custom code Start -->
	<div class="wrapper">
		<div class="wrapper_inner">
			<div class="content content_top_margin_none">
				<div class="content_inner">
					<div class="full_width">
						<div class="full_width_inner">
							<div class="vc_row wpb_row section vc_row-fluid grid_section"
							     style="background-color: #eeeff0; padding-top: 60px; padding-bottom: 60px; text-align: left;">
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
																				<?php
																				if (!empty(get_field('upload_cover_image', $pageId))) {
																					//$image = get_field('upload_cover_image',$pageId);
																					//echo $image;
																					?>
																					<img src="<?php
																					the_field('upload_cover_image', $pageId); ?>"/>
																					<?php
																				} ?>
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
																			<h4>
																				<?php
																				echo get_field("episode_title", $pageId); ?>
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
																	<div class="vc_empty_space" style="height: 20px;">
                                                                    <span class="vc_empty_space_inner">
                                                                        <span class="empty_space_image"></span>
                                                                    </span>
																	</div>
																	<?php
																	if (!empty(get_field('subscribe_to_podcast_link', $pageId))) { ?>
																		<a itemprop="url" href="<?php
																		echo get_field("subscribe_to_podcast_link", $pageId); ?>" target="_self"
																		   class="qbutton default" style="">Subscribe
																		</a>
																		<?php
																	} ?>
																	<div class="vc_empty_space" style="height: 20px;">
                                                                    <span class="vc_empty_space_inner">
                                                                        <span class="empty_space_image"></span>
                                                                    </span>
																	</div>
																	<?php
																	if (!empty(get_field('code_to_listen_apple_podcast', $pageId))) { ?>
																		<div class="wpb_wrapper">
																			<p>
																				<?php
																				if (!empty(get_field('code_to_listen_apple_podcast', $pageId))) { ?>
																					<?php
																					echo get_field("code_to_listen_apple_podcast");
																				}
																				?>
																			</p>
																		</div>
																		<?php
																	} ?>
																	<?php
																	if (!empty(get_field('listen_to_apple_podcast_link', $pageId))) { ?>
																		<a itemprop="url" href="<?php
																		echo get_field("listen_to_apple_podcast_link", $pageId); ?>" target="_self"
																		   class="qbutton default" style="">Listen on Apple Podcasts
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
							<div class="vc_row wpb_row section vc_row-fluid" style="background-color: #eeeff0; text-align: left;">
								<div class="full_section_inner clearfix">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_single_image wpb_content_element vc_align_right styleone-divider-bottom-line3x">
													<div class="wpb_wrapper">
														<div class="vc_single_image-wrapper vc_box_border_grey">
															<img
																width="2878"
																height="20"
																src="/wp-content/uploads/2021/01/orange-divider-line3x.png"
																class="vc_single_image-img attachment-full"
																alt=""
																loading="lazy"
																srcset="
                                                                /wp-content/uploads/2021/01/orange-divider-line3x.png         2878w,
                                                                /wp-content/uploads/2021/01/orange-divider-line3x-300x2.png    300w,
                                                                /wp-content/uploads/2021/01/orange-divider-line3x-1024x7.png  1024w,
                                                                /wp-content/uploads/2021/01/orange-divider-line3x-768x5.png    768w,
                                                                /wp-content/uploads/2021/01/orange-divider-line3x-1536x11.png 1536w,
                                                                /wp-content/uploads/2021/01/orange-divider-line3x-2048x14.png 2048w,
                                                                /wp-content/uploads/2021/01/orange-divider-line3x-700x5.png    700w
                                                            "
																sizes="(max-width: 2878px) 100vw, 2878px"
															/>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row section vc_row-fluid grid_section"
							     style="padding-top: 60px; padding-bottom: 60px; text-align: left;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner" style="text-align: left;">
														<div class="full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="wpb_text_column wpb_content_element">
																			<div class="wpb_wrapper">
																				<p class="captivate-curved">
																					<!--iframe
																							style="width: 100%; height: 170px;"
																							src="https://player.captivate.fm/show/b024578c-b62d-4a34-a70a-5dd7c020a623/latest/"
																							frameborder="no"
																							scrolling="no"
																							seamless=""
																					></iframe-->
																					<?php
																					if (!empty(get_field('episode_captivate_link', $pageId))) { ?>
																						<?php
																						echo get_field("episode_captivate_link");
																					}
																					?>
																				</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- quotes section start-->
													<?php
													if (!empty(get_field('episode_quote', $pageId))) { ?>
														<div class="vc_row wpb_row section vc_row-fluid vc_inner"
														     style="padding-top: 60px;padding-bottom: 40px; text-align: center;">
															<div class="full_section_inner clearfix">
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="wpb_text_column wpb_content_element">
																				<div class="wpb_wrapper">
																					<span data-type="normal" data-hover-icon-color="#ffffff"
																					      class="qode_icon_shortcode  q_font_awsome_icon fa-3x  "
																					      style="margin: 0px 0px 20px 0px; "><i
																							class="qode_icon_font_awesome fa fa-quote-left qode_icon_element"
																							style="font-size: 44px;color: #ff931e;"></i></span>
																					<h4><?php
																						echo get_field("episode_quote", $pageId); ?></h4>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<?php
													} ?>
													<!-- quotes section end-->
													<div class="vc_row wpb_row section vc_row-fluid vc_inner"
													     style="padding-top: 20px; text-align: left;">
														<?php
														if (!empty(get_field('episode_summary_espanol', $pageId))) { ?>
															<div class="full_section_inner clearfix">
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="qode-accordion-holder clearfix qode-toggle qode-initial">
																				<h5 class="clearfix qode-title-holder">
                                                                            <span class="qode-tab-title">
                                                                                <span class="qode-tab-title-inner"> Resumen del Episodio</span>
                                                                            </span>
																					<span class="qode-accordion-mark">
                                                                                <span class="qode-accordion-mark-icon">
                                                                                    <span class="icon_plus"></span>
                                                                                    <span class="icon_minus-06"></span>
                                                                                </span>
                                                                            </span>
																				</h5>
																				<div id="Episode" Summary class="qode-accordion-content">
																					<div class="qode-accordion-content-inner">
																						<div class="wpb_text_column wpb_content_element">
																							<div class="wpb_wrapper">
																								<p>
																									<?php
																									echo get_field("episode_summary_espanol", $pageId); ?>
																								</p>
																							</div>
																						</div>
																					</div>
																				</div>
																				<h5 class="clearfix qode-title-holder">
                                                                            <span class="qode-tab-title">
                                                                                <span class="qode-tab-title-inner"> Transcripción en Español </span>
                                                                            </span>
																					<span class="qode-accordion-mark">
                                                                                <span class="qode-accordion-mark-icon">
                                                                                    <span class="icon_plus"></span>
                                                                                    <span class="icon_minus-06"></span>
                                                                                </span>
                                                                            </span>
																				</h5>
																				<div id="Episode" Transcript class="qode-accordion-content">
																					<div class="qode-accordion-content-inner">
																						<div class="wpb_text_column wpb_content_element">
																							<div class="wpb_wrapper">
																								<p>
																									<?php
																									echo get_field("episode_transcript_espanol", $pageId); ?>
																								</p>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="separator normal"
																			     style="margin-top: 0px; margin-bottom: 0px; background-color: #b0b2b5; height: 0.5px;"></div>
																		</div>
																	</div>
																</div>
															</div>
															<?php
														} ?>
													</div>
													<!-- Spanish section end-->
													<div class="vc_row wpb_row section vc_row-fluid vc_inner"
													     style="padding-top: 20px; text-align: left;">
														<?php
														if (!empty(get_field('episode_summary', $pageId))) { ?>
															<div class="full_section_inner clearfix">
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="qode-accordion-holder clearfix qode-toggle qode-initial">
																				<h5 class="clearfix qode-title-holder">
                                                                            <span class="qode-tab-title">
                                                                                <span class="qode-tab-title-inner"> Episode Summary </span>
                                                                            </span>
																					<span class="qode-accordion-mark">
                                                                                <span class="qode-accordion-mark-icon">
                                                                                    <span class="icon_plus"></span>
                                                                                    <span class="icon_minus-06"></span>
                                                                                </span>
                                                                            </span>
																				</h5>
																				<div id="Episode" Summary class="qode-accordion-content">
																					<div class="qode-accordion-content-inner">
																						<div class="wpb_text_column wpb_content_element">
																							<div class="wpb_wrapper">
																								<p>
																									<?php
																									echo get_field("episode_summary", $pageId); ?>
																								</p>
																							</div>
																						</div>
																					</div>
																				</div>
																				<h5 class="clearfix qode-title-holder">
                                                                            <span class="qode-tab-title">
                                                                                <span class="qode-tab-title-inner"> Episode Transcript </span>
                                                                            </span>
																					<span class="qode-accordion-mark">
                                                                                <span class="qode-accordion-mark-icon">
                                                                                    <span class="icon_plus"></span>
                                                                                    <span class="icon_minus-06"></span>
                                                                                </span>
                                                                            </span>
																				</h5>
																				<div id="Episode" Transcript class="qode-accordion-content">
																					<div class="qode-accordion-content-inner">
																						<div class="wpb_text_column wpb_content_element">
																							<div class="wpb_wrapper">
																								<p>
																									<?php
																									echo get_field("episode_transcript", $pageId); ?>
																								</p>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="separator normal"
																			     style="margin-top: 0px; margin-bottom: 0px; background-color: #b0b2b5; height: 0.5px;"></div>
																		</div>
																	</div>
																</div>
															</div>
															<?php
														} elseif (!empty(get_field('transcript_pdf_link', $pageId))) { ?>
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="vc_row wpb_row section vc_row-fluid vc_inner"
																		     style="text-align: center;">
																			<a itemprop="url" href="<?php
																			echo get_field("transcript_pdf_link", $pageId); ?>" target="_self"
																			   class="qbutton default" style="">View Transcript and Summary
																			</a>
																		</div>
																	</div>
																</div>
															</div>
															<?php
														} ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
							if (!empty(get_field('youtube_embed_link', $pageId))) { ?>
								<div class="vc_row wpb_row section vc_row-fluid grid_section"
								     style="background-color: #eeeff0; padding-top: 60px; padding-bottom: 60px; text-align: left;">
									<div class="section_inner clearfix">
										<div class="section_inner_margin clearfix">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div
															class="q_elements_holder two_columns eh_two_columns_66_33 responsive_mode_from_1000 alignment_one_column_center">
															<div class="q_elements_item" data-animation="no"
															     data-item-class="q_elements_holder_custom_971283" style="text-align: center;">
																<div class="q_elements_item_inner">
																	<div class="q_elements_item_content q_elements_holder_custom_971283">
																		<div
																			class="pic-curved wpb_video_widget wpb_content_element vc_clearfix vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-left">
																			<div class="wpb_wrapper">
																				<div class="wpb_video_wrapper">
																					<?php
																					echo get_field("youtube_embed_link", $pageId); ?>
																					<!--iframe
																							title="Timelapse - Lighthouse (Oct 2012)"
																							src="https://player.vimeo.com/video/51589652?dnt=1&amp;app_id=122963"
																							width="1060"
																							height="596"
																							frameborder="0"
																							allow="autoplay; fullscreen; picture-in-picture"
																							allowfullscreen
																					></iframe-->
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
																data-item-class="q_elements_holder_custom_727491"
																style="vertical-align: middle; text-align: center;"
															>
																<div class="q_elements_item_inner">
																	<div class="q_elements_item_content q_elements_holder_custom_727491"
																	     style="padding: 0px 0px 0px 15px;">
																		<div class="wpb_text_column wpb_content_element">
																			<div class="wpb_wrapper">
																				<h4>Would you rather watch the show in action?</h4>
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
																		if (!empty(get_field('text_for_youtube_section', $pageId))) { ?>
																			<div class="wpb_text_column wpb_content_element bluetext">
																				<div class="wpb_wrapper">
																					<h5><?php
																						echo get_field("text_for_youtube_section", $pageId); ?></h5>
																				</div>
																			</div>
																			<?php
																		} ?>
																		<div class="vc_empty_space" style="height: 30px;">
                                                                    <span class="vc_empty_space_inner">
                                                                        <span class="empty_space_image"></span>
                                                                    </span>
																		</div>
																		<div class="image_hover" style="" data-transition-delay="">
																			<div class="images_holder">
																				<a itemprop="url"
																				   href="https://www.youtube.com/channel/UCuqKDp8uxinIM8ORIOLr0qw"
																				   onclick="javascript:window.open('https://www.youtube.com/channel/UCuqKDp8uxinIM8ORIOLr0qw'); return false;">
																					<img itemprop="image" class="active_image"
																					     src="https://supplychainnow.com/wp-content/uploads/2021/02/subscribe-youtube-btn.png"
																					     alt="" style=""/>
																					<img itemprop="image" class="hover_image"
																					     src="https://supplychainnow.com/wp-content/uploads/2021/02/subscribe-youtube-hoverbtn.png"
																					     alt="" style=""/>
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
									</div>
								</div>
								<?php
							} ?>
							<div class="vc_row wpb_row section vc_row-fluid grid_section"
							     style="padding-top: 0px; padding-bottom: 60px; text-align: left;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<?php
													if (!empty(get_field('add_featured_guest', $pageId))) :
														?>
														<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section"
														     style="padding-top: 60px;text-align: left;">
															<div class="section_inner clearfix">
																<div class="section_inner_margin clearfix">
																	<div class="wpb_column vc_column_container vc_col-sm-12">
																		<div class="vc_column-inner">
																			<div class="wpb_wrapper">
																				<div class="wpb_text_column wpb_content_element">
																					<div class="wpb_wrapper">
																						<h1 style="text-align: center;">Featured Guests</h1>
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
																				<div class="vc_empty_space" style="height: 50px;">
                                                                            <span class="vc_empty_space_inner">
                                                                                <span class="empty_space_image"></span>
                                                                            </span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<?php
														$featured_guests = get_field('add_featured_guest', $pageId);
														// print_r($featured_guests);

														$keys = array_keys($featured_guests);
														for ($i = 0; $i < count($featured_guests); $i++) {
															//echo $keys[$i] . "{<br>";
															foreach ($featured_guests[$keys[$i]] as $key => $value) {
																//echo $key . " : " . $value . "<br>";
																$guest_img = get_field('guest_image_upload', $value);
																$guest_descp = get_field('description', $value);

																?>
																<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section"
																     style="text-align: left;">
																	<div class="section_inner clearfix">
																		<div class="section_inner_margin clearfix">
																			<div class="wpb_column vc_column_container vc_col-sm-3">
																				<div class="vc_column-inner">
																					<div class="wpb_wrapper">
																						<div class="wpb_single_image wpb_content_element vc_align_center">
																							<div class="wpb_wrapper">
																								<div class="vc_single_image-wrapper pic-circle">
																									<img
																										width="180"
																										height="180"
																										src="<?php
																										echo $guest_img; ?>"
																										class="vc_single_image-img attachment-full"
																										alt=""
																									/>
																								</div>
																							</div>
																						</div>
																						<div class="vc_empty_space" style="height: 25px;">
                                                                            <span class="vc_empty_space_inner">
                                                                                <span class="empty_space_image"></span>
                                                                            </span>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="wpb_column vc_column_container vc_col-sm-9">
																				<div class="vc_column-inner">
																					<div class="wpb_wrapper">
																						<div class="wpb_text_column wpb_content_element">
																							<div class="wpb_wrapper">
																								<?php
																								echo $guest_descp; ?>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="vc_empty_space" style="height: 50px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
																</div>
																<?php
															}
														}

													endif;
													?>
													<?php
													if (!empty(get_field('select_host', $pageId))):
													?>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner"
													     style="padding-top: 60px; padding-bottom: 40px; text-align: left;">
														<div class="full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="wpb_text_column wpb_content_element">
																			<div class="wpb_wrapper">
																				<h1 style="text-align: center;">Hosts</h1>
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
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner" style="text-align: center;">
														<div class="full_section_inner clearfix">
															<!--div class="wpb_column vc_column_container vc_col-sm-3">
																	<div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
															</div-->
															<?php
															$featured_hosts = get_field('select_host', $pageId);
															// print_r($featured_guests);
															$count_host = count($featured_hosts);

															$keys = array_keys($featured_hosts);
															for ($i = 0; $i < count($featured_hosts); $i++) {
																//echo $keys[$i] . "{<br>";
																foreach ($featured_hosts[$keys[$i]] as $key => $value) {
																	$host_img = get_field('host_image_upload', $value);
																	$host_name = get_field('host_name', $value);
																	$host_designation = get_field('designation', $value);
																	$host_linkedIn = get_field('linkedin_profile_link', $value);
																	$host_twitter = get_field('twitter_profile_link', $value);
																	$host_descp = get_field('description', $value);
																	$host_popup_class = get_field('popup_builder_class_name', $value);


																	if ($count_host == 1) {
																		$col = "vc_col-sm-12";
																	} elseif ($count_host == 2) {
																		$col = "vc_col-sm-6";
																	} elseif ($count_host == 3) {
																		$col = "vc_col-sm-4";
																	} elseif ($count_host == 4) {
																		$col = "vc_col-sm-3";
																	}
																	?>
																	<div class="wpb_column vc_column_container <?php
																	echo $col; ?>">
																		<div class="vc_column-inner">
																			<div class="wpb_wrapper">
																				<div class="wpb_single_image wpb_content_element vc_align_center">
																					<div class="wpb_wrapper">
																						<div class="vc_single_image-wrapper pic-circle">
																							<img
																								width="180"
																								height="180"
																								src="<?php
																								echo $host_img; ?>"
																								class="vc_single_image-img attachment-full"
																								alt=""
																							/>
																						</div>
																					</div>
																				</div>
																				<div class="vc_empty_space" style="height: 20px;">
                                                                        <span class="vc_empty_space_inner">
                                                                            <span class="empty_space_image"></span>
                                                                        </span>
																				</div>
																				<div class="wpb_text_column wpb_content_element">
																					<div class="wpb_wrapper">
																						<h5><?php
																							echo $host_name; ?></h5>
																						<p><?php
																							echo $host_designation; ?></p>
																					</div>
																				</div>
																				<?php
																				if (!empty($host_linkedIn)) { ?>
																					<span
																						data-type="circle"
																						data-hover-bg-color="#ff931e"
																						class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-lg"
																						style="font-size: 16px; font-size: 14px; margin: 0px 5px 0px 0px;"
																					>
                                                                        <a itemprop="url" href="<?php
                                                                        echo $host_linkedIn; ?>" target="_blank">
                                                                            <i
	                                                                            class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                            style=""></i>
                                                                            <i
	                                                                            class="qode_icon_font_awesome fa fa-linkedin qode_icon_element fa-stack-1x"
	                                                                            style="font-size: 16px;"></i>
                                                                        </a>
                                                                    </span>
																					<?php
																				} ?>
																				<?php
																				if (!empty($host_twitter)) { ?>
																					<span
																						data-type="circle"
																						data-hover-bg-color="#ff931e"
																						class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-lg"
																						style="font-size: 14px; font-size: 14px; margin: 0px 0px 0px 5px;"
																					>
                                                                        <a itemprop="url" href="<?php
                                                                        echo $host_twitter; ?>" target="_blank">
                                                                            <i
	                                                                            class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                            style=""></i>
                                                                            <i
	                                                                            class="qode_icon_font_awesome fa fa-twitter qode_icon_element fa-stack-1x"
	                                                                            style="font-size: 14px;"></i>
                                                                        </a>
                                                                    </span>
																					<?php
																				} ?>
																				<div class="vc_empty_space" style="height: 20px;">
                                                                        <span class="vc_empty_space_inner">
                                                                            <span class="empty_space_image"></span>
                                                                        </span>
																				</div>
																				<a itemprop="url" href="" target="_self" class="qbutton small default <?php
																				echo $host_popup_class; ?>" style="">Read Bio
																				</a>
																				<!--a itemprop="url" href="" target="_self" class="qbutton  default sg-popup-id-342" style="" data-popup-id="342">Read Bio</a-->
																				<div class="vc_empty_space" style="height: 30px;">
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
															endif;
															?>
															<!--div class="wpb_column vc_column_container vc_col-sm-3">
																	<div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
															</div-->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
							if (!empty(get_field('related_episodes', $pageId))) { ?>
								<div class="vc_row wpb_row section vc_row-fluid"
								     style="background-color: #eeeff0; padding-top: 60px; padding-bottom: 0px; text-align: left;">
									<div class="full_section_inner clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<h1 style="text-align: center;">You May Also Like</h1>
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
													<div class="wpb_text_column wpb_content_element vc_custom_1611772566885">
														<div class="wpb_wrapper">
															<h3 style="text-align: center;">Click to view other episodes in this program</h3>
														</div>
													</div>
													<div class="vc_empty_space" style="height: 50px;">
                                                <span class="vc_empty_space_inner">
                                                    <span class="empty_space_image"></span>
                                                </span>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section"
													     style="text-align: left;">
														<div class="section_inner clearfix">
															<div class="section_inner_margin clearfix">
																<?php
																$other_episodes = get_field('related_episodes', $pageId);
																$keys = array_keys($other_episodes);
																for ($i = 0; $i < count($other_episodes); $i++) {
																	//echo $keys[$i] . "{<br>";
																	foreach ($other_episodes[$keys[$i]] as $key => $value) {
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
																							src="<?php
																							echo $episode_img; ?>"
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
																											echo $episode_url; ?>" target="_self" class="qbutton default"
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
															<div class="vc_empty_space" style="height: 50px;">
															<span class="vc_empty_space_inner">
																<span class="empty_space_image"></span>
															</span>
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
								<div class="vc_row wpb_row section vc_row-fluid"
								     style="background-color: #eeeff0; padding-top: 60px; padding-bottom: 0px; text-align: left;">
									<div class="full_section_inner clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<h1 style="text-align: center;">You May Also Like</h1>
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
													<div class="wpb_text_column wpb_content_element vc_custom_1611772566885">
														<div class="wpb_wrapper">
															<h3 style="text-align: center;">Click to view other episodes in this program</h3>
														</div>
													</div>
													<div class="vc_empty_space" style="height: 50px;">
                                                <span class="vc_empty_space_inner">
                                                    <span class="empty_space_image"></span>
                                                </span>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section"
													     style="text-align: left;">
														<div class="section_inner clearfix">
															<div class="section_inner_margin clearfix">
																<?php
																echo do_shortcode('[custom_related_post]'); ?>
															</div>
															<div class="vc_empty_space" style="height: 50px;">
															<span class="vc_empty_space_inner">
																<span class="empty_space_image"></span>
															</span>
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
							if (get_field('upcoming_events_espanol', $pageId)) :
							?>
							<div class="vc_row wpb_row section vc_row-fluid grid_section"
							     style="padding-top: 60px; text-align: left;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<h1 style="text-align: center;">Mostrar Notas</h1>
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
													<div class="vc_empty_space" style="height: 40px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
													</div>
													<?php
													while (the_repeater_field('upcoming_events_espanol')): ?>
														<div class="separator normal" style="background-color: #b0b2b5; height: 0.5px;"></div>
														<div class="q_elements_holder two_columns eh_two_columns_75_25 responsive_mode_from_never">
															<div class="q_elements_item" data-animation="no"
															     data-item-class="q_elements_holder_custom_557097"
															     style="vertical-align: middle; text-align: left;">
																<div class="q_elements_item_inner">
																	<div class="q_elements_item_content q_elements_holder_custom_557097"
																	     style="padding: 0px 0px 0px 20px;">
																		<div class="wpb_text_column wpb_content_element">
																			<div class="wpb_wrapper">
																				<p><?php
																					the_sub_field('event_name'); ?></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="q_elements_item" data-animation="no"
															     data-item-class="q_elements_holder_custom_719583"
															     style="vertical-align: middle; text-align: right;">
																<div class="q_elements_item_inner">
																	<div class="q_elements_item_content q_elements_holder_custom_719583"
																	     style="padding: 0px 20px 0px 0px;">
                                                                <span data-type="circle" data-hover-bg-color="#3485be"
                                                                      class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-2x"
                                                                      style="font-size: 24px;">
                                                                    <a itemprop="url" href="<?php
                                                                    the_sub_field('event_url'); ?>" target="_blank">
                                                                        <i
	                                                                        class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                        style="color: #ff931e;"></i>
                                                                        <i
	                                                                        class="qode_icon_font_awesome_5 fa5 fa fa-arrow-right qode_icon_element fa-stack-1x"
	                                                                        style=""></i>
                                                                    </a>
                                                                </span>
																	</div>
																</div>
															</div>
														</div>
													<?php
													endwhile; ?>
													<?php
													endif; ?>
													<!--div class="separator normal" style="background-color: #b0b2b5; height: 0.5px;"></div-->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
							if (get_field('upcoming_events', $pageId)) :
							?>
							<div class="vc_row wpb_row section vc_row-fluid grid_section"
							     style="padding-top: 60px; text-align: left;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<h1 style="text-align: center;">Additional Links & Resources</h1>
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
													<div class="vc_empty_space" style="height: 40px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
													</div>
													<?php
													while (the_repeater_field('upcoming_events')): ?>
														<div class="separator normal" style="background-color: #b0b2b5; height: 0.5px;"></div>
														<div class="q_elements_holder two_columns eh_two_columns_75_25 responsive_mode_from_never">
															<div class="q_elements_item" data-animation="no"
															     data-item-class="q_elements_holder_custom_557097"
															     style="vertical-align: middle; text-align: left;">
																<div class="q_elements_item_inner">
																	<div class="q_elements_item_content q_elements_holder_custom_557097"
																	     style="padding: 0px 0px 0px 20px;">
																		<div class="wpb_text_column wpb_content_element">
																			<div class="wpb_wrapper">
																				<p><?php
																					the_sub_field('event_name'); ?></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="q_elements_item" data-animation="no"
															     data-item-class="q_elements_holder_custom_719583"
															     style="vertical-align: middle; text-align: right;">
																<div class="q_elements_item_inner">
																	<div class="q_elements_item_content q_elements_holder_custom_719583"
																	     style="padding: 0px 20px 0px 0px;">
                                                                <span data-type="circle" data-hover-bg-color="#3485be"
                                                                      class="qode_icon_shortcode fa-stack q_font_awsome_icon_stack fa-2x"
                                                                      style="font-size: 24px;">
                                                                    <a itemprop="url" href="<?php
                                                                    the_sub_field('event_url'); ?>" target="_blank">
                                                                        <i
	                                                                        class="fa fa-circle fa-stack-base fa-stack-2x"
	                                                                        style="color: #ff931e;"></i>
                                                                        <i
	                                                                        class="qode_icon_font_awesome_5 fa5 fa fa-arrow-right qode_icon_element fa-stack-1x"
	                                                                        style=""></i>
                                                                    </a>
                                                                </span>
																	</div>
																</div>
															</div>
														</div>
													<?php
													endwhile; ?>
													<?php
													endif; ?>
													<div class="separator normal" style="background-color: #b0b2b5; height: 0.5px;"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row section vc_row-fluid grid_section"
							     style="padding-top: 60px; padding-bottom: 20px; text-align: left;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<h1 style="text-align: center;">Check Out Our Sponsors</h1>
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
													<div class="vc_row wpb_row section vc_row-fluid  grid_section" style=" text-align:center;">
														<div class=" section_inner clearfix">
															<div class="section_inner_margin clearfix">
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="wpb_text_column wpb_content_element ">
																				<div class="wpb_wrapper">
																					<?php
																					echo do_shortcode('[wonderplugin_carousel id="2"]'); ?>
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
							// rp4wp_children(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Custom code End -->
<?php
get_footer(); ?>