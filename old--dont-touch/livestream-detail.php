<?php
/*
 * Template Name: Livestream Detail
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
							     style="background-color: #eeeff0; padding-top: 40px; padding-bottom: 40px; text-align: center;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-2">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-8">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<h1 style="text-align: center;">LIVESTREAM: <?php
																echo get_field("livestream_title", $pageId); ?></h1>
														</div>
													</div>
													<div class="wpb_single_image wpb_content_element vc_align_center">
														<div class="wpb_wrapper">
															<div class="vc_single_image-wrapper vc_box_border_grey">
																<img
																	width="203"
																	height="10"
																	src="https://supplychainnow.com/wp-content/uploads/2021/01/orange-headingline-1x.png"
																	class="vc_single_image-img attachment-full"
																	alt=""
																	loading="lazy"
																/>
															</div>
														</div>
													</div>
													<div class="vc_empty_space" style="height: 30px;">
                                                    <span class="vc_empty_space_inner">
                                                        <span class="empty_space_image"></span>
                                                    </span>
													</div>
													<?php
													if (!empty(get_field('youtube_embed_link', $pageId))) { ?>
														<div
															class="wpb_video_widget wpb_content_element vc_clearfix vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-left">
															<div class="wpb_wrapper">
																<div class="wpb_video_wrapper">
																	<?php
																	echo the_field('youtube_embed_link', $pageId); ?>
																</div>
															</div>
														</div>
														<?php
													} ?>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-2">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
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
																src="https://supplychainnow.com/wp-content/uploads/2021/01/orange-divider-line3x.png"
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
							<?php
							if (!empty(get_field('livestream_description', $pageId))) { ?>
								<div class="vc_row wpb_row section vc_row-fluid grid_section"
								     style="padding-top: 50px; text-align: left;">
									<div class="section_inner clearfix">
										<div class="section_inner_margin clearfix">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_text_column wpb_content_element custom-font-one">
															<div class="wpb_wrapper">
																<p style="text-align: center;">
																	<?php
																	echo get_field("livestream_description", $pageId); ?>
																</p>
																<!--p style="text-align: center;">
																		Follow Supply Chain Now on LinkedIn, Facebook, Twitter, or YouTube to receive notifications when we go live. Check out our latest Livestreams right here:
																</p-->
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
							     style="padding-top: 60px; padding-bottom: 0px; text-align: left;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<?php
													if (!empty(get_field('add_featured_guest', $pageId))) :
														?>
														<div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section"
														     style="text-align: left;">
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
																								src="https://supplychainnow.com/wp-content/uploads/2021/01/orange-headingline-1x.png"
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
															foreach ($featured_guests[$keys[$i]] as $key => $value) {
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
																								<div class="vc_single_image-wrapper vc_box_border_grey pic-circle">
																									<img
																										width="180"
																										height="180"
																										src="<?php
																										echo $guest_img; ?>"
																										class="vc_single_image-img attachment-full"
																										alt=""
																										loading="lazy"
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
																								<p>
																									<?php
																									echo $guest_descp; ?>
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
															}
														}

													endif;
													?>
													<?php
													if (!empty(get_field('select_host', $pageId))):
													?>
													<!--div class="vc_empty_space" style="height: 50px;">
															<span class="vc_empty_space_inner">
																	<span class="empty_space_image"></span>
															</span>
													</div-->
													<div class="vc_row wpb_row section vc_row-fluid vc_inner"
													     style="padding-top: 40px; padding-bottom: 40px; text-align: left;">
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
																						src="https://supplychainnow.com/wp-content/uploads/2021/01/orange-headingline-1x.png"
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
																						<div class="vc_single_image-wrapper vc_box_border_grey pic-circle">
																							<img
																								width="180"
																								height="180"
																								src="<?php
																								echo $host_img; ?>"
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
							<div class="vc_row wpb_row section vc_row-fluid grid_section"
							     style="padding-top: 50px; padding-bottom: 20px; text-align: left;">
								<div class="section_inner clearfix">
									<div class="section_inner_margin clearfix">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element">
														<div class="wpb_wrapper">
															<h1 style="text-align: center;">Check Out News From Our Sponsors</h1>
														</div>
													</div>
													<div class="wpb_single_image wpb_content_element vc_align_center">
														<div class="wpb_wrapper">
															<div class="vc_single_image-wrapper vc_box_border_grey">
																<img
																	width="203"
																	height="10"
																	src="https://supplychainnow.com/wp-content/uploads/2021/01/orange-headingline-1x.png"
																	class="vc_single_image-img attachment-full"
																	alt=""
																	loading="lazy"
																/>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid grid_section" style="text-align: center;">
														<div class="section_inner clearfix">
															<div class="section_inner_margin clearfix">
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="wpb_text_column wpb_content_element">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Custom code End -->
<?php
get_footer(); ?>