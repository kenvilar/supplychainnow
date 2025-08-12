<?php

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<section class="section bg-cargogrey text-white rounded-b-100">
			<div class="site-padding sm:py-60 pt-200 pb-84 md:py-60">
				<div class="w-layout-blockcontainer max-w-1248 w-container">
					<div class="flex gap-20 items-center justify-between md:flex-col">
						<div class="max-w-368 w-full md:max-w-full">
							<div class="overflow-hidden rounded-24 h-368 w-full sm:h-200">
								<img
									src="<?php
									if (get_field('program_thumbnail_image_upload', $pageId)) {
										echo get_field('program_thumbnail_image_upload', $pageId);
									} else {
										if (get_field('recent_episode_thumbnail_upload', $pageId)) {
											echo get_field('recent_episode_thumbnail_upload', $pageId);
										}
									}
									?>"
									loading="lazy" alt="" class="image">
							</div>
						</div>
						<div class="max-w-816 w-full md:max-w-full">
							<div class="mb-12">
								<h1 class="text-3xl"><?php
									if (get_field('program_title', $pageId)) {
										the_field('program_title', $pageId);
									} ?></h1>
							</div>
							<div class="mb-32 w-condition-invisible">
								<h2 class="font-family-alternate font-medium text-lg tracking-[2px] uppercase w-dyn-bind-empty"></h2>
							</div>
							<div class="mb-32">
								<div class="rt--default tracking-[1.6px] w-richtext">
									<?php
									if (get_field('program_description', $pageId)) {
										the_field('program_description', $pageId);
									}
									?>
								</div>
							</div>
							<ul role="list" class="m-0 p-0 flex items-center gap-32 sm:flex-col sm:gap-20 w-list-unstyled">
								<li class="flex">
									<a href="<?php
									if (get_field('program_subscribe_link', $pageId)) {
										the_field('program_subscribe_link', $pageId);
									} ?>" target="_blank"
									   class="btn secondary w-inline-block" rel="noopener noreferrer">
										<div class="flex items-center gap-8">
											<div>Subscribe</div>
											<div class="flex w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
													<path
														d="M10 19C14.9706 19 19 14.9706 19 10C19 5.02944 14.9706 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9706 5.02944 19 10 19Z"
														stroke="white" stroke-width="1.5" stroke-miterlimit="10"></path>
													<path d="M5 10H14.8229" stroke="white" stroke-width="1.5" stroke-miterlimit="10"></path>
													<path d="M9.91138 5.08862V14.9115" stroke="white" stroke-width="1.5"
													      stroke-miterlimit="10"></path>
												</svg>
											</div>
										</div>
									</a>
								</li>
								<li class="flex items-center gap-16 sm:flex-wrap sm:justify-center">
									<div class="font-semibold text-sm">LISTEN ON</div>
									<div class="flex gap-8 items-center">
										<a href="<?php
										if (get_field('program_youtube_link', $pageId)) {
											the_field('program_youtube_link', $pageId);
										} else {
											echo '#';
										} ?>" class="text-primary hover:text-secondary w-inline-block">
											<div class="flex w-embed">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="12" cy="12" r="9" fill="white"></circle>
													<path d="M13.7924 11.8644L10.678 10.0847V13.6441L13.7924 11.8644Z" fill="currentColor"></path>
													<path fill-rule="evenodd" clip-rule="evenodd"
													      d="M0 11.8644C0 5.31188 5.31188 0 11.8644 0C18.4169 0 23.7288 5.31188 23.7288 11.8644C23.7288 18.4169 18.4169 23.7288 11.8644 23.7288C5.31188 23.7288 0 18.4169 0 11.8644ZM16.4619 7.93432C16.9809 8.08263 17.3517 8.45339 17.5 8.97246C17.7966 9.93644 17.7966 11.8644 17.7966 11.8644C17.7966 11.8644 17.7966 13.7924 17.5742 14.7564C17.4259 15.2754 17.0551 15.6462 16.536 15.7945C15.572 16.0169 11.8644 16.017 11.8644 16.017C11.8644 16.017 8.08262 16.0169 7.19279 15.7945C6.67373 15.6462 6.30297 15.2754 6.15466 14.7564C5.93221 13.7924 5.9322 11.8644 5.9322 11.8644C5.9322 11.8644 5.9322 9.93644 6.08051 8.97246C6.22881 8.45339 6.59958 8.08263 7.11865 7.93432C8.08263 7.71187 11.7902 7.71187 11.7902 7.71187C11.7902 7.71187 15.572 7.71187 16.4619 7.93432Z"
													      fill="currentColor"></path>
												</svg>
											</div>
										</a>
										<a href="<?php
										if (get_field('listen_to_spotify', $pageId)) {
											the_field('listen_to_spotify', $pageId);
										} else {
											echo '#';
										} ?>" class="text-primary hover:text-secondary w-inline-block">
											<div class="flex w-embed">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="12" cy="12" r="12" fill="currentColor"></circle>
													<path
														d="M12 6C8.68618 6 6 8.68618 6 12C6 15.3138 8.68618 18 12 18C15.3138 18 18 15.3138 18 12C18 8.68659 15.3138 6.00041 12 6ZM14.7517 14.6534C14.644 14.8303 14.4135 14.8856 14.2375 14.7779C12.8287 13.9169 11.0551 13.7224 8.96663 14.1994C8.7652 14.2456 8.56459 14.1195 8.51873 13.9181C8.47247 13.7167 8.59816 13.5161 8.8 13.4702C11.0854 12.9482 13.0461 13.173 14.6276 14.1392C14.8037 14.2477 14.8598 14.4774 14.7517 14.6534ZM15.4858 13.0203C15.3503 13.2405 15.062 13.3093 14.8422 13.1742C13.2299 12.183 10.7709 11.896 8.86346 12.4749C8.61617 12.5498 8.35496 12.4102 8.27963 12.1634C8.20512 11.9161 8.34473 11.6553 8.59161 11.5799C10.7705 10.9187 13.4796 11.2389 15.3314 12.3771C15.5517 12.5126 15.6213 12.8004 15.4858 13.0203ZM15.5488 11.3187C13.6147 10.1703 10.4246 10.0647 8.5781 10.6248C8.28168 10.7148 7.96807 10.5474 7.8784 10.251C7.78874 9.95455 7.95578 9.64094 8.25261 9.55087C10.3722 8.90768 13.8952 9.03173 16.1216 10.3533C16.3881 10.5118 16.4757 10.8561 16.3177 11.1222C16.1601 11.3892 15.8149 11.4772 15.5488 11.3187Z"
														fill="white"></path>
												</svg>
											</div>
										</a>
										<a href="<?php
										if (get_field('listen_to_amazon_music', $pageId)) {
											the_field('listen_to_amazon_music', $pageId);
										} else {
											echo '#';
										} ?>" class="text-primary hover:text-secondary w-inline-block">
											<div class="flex w-embed">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="12" cy="12" r="12" fill="currentColor"></circle>
													<path
														d="M18.4655 12.6233C16.7147 13.9164 14.171 14.6029 11.9839 14.6029C8.91874 14.6029 6.1569 13.4694 4.07088 11.5856C3.90592 11.4366 4.05492 11.2344 4.25181 11.3515C6.50812 12.6606 9.29125 13.4535 12.1702 13.4535C14.1125 13.4535 16.2464 13.049 18.21 12.2189C18.5027 12.0859 18.7528 12.4105 18.4655 12.6233Z"
														fill="white"></path>
													<path
														d="M19.1946 11.7933C18.9711 11.506 17.7153 11.655 17.1459 11.7241C16.9756 11.7454 16.949 11.5964 17.1033 11.4847C18.1037 10.7822 19.7481 10.9844 19.9396 11.2186C20.1312 11.4581 19.8864 13.1024 18.9498 13.89C18.8062 14.0124 18.6678 13.9485 18.7317 13.7889C18.9445 13.262 19.4181 12.0754 19.1946 11.7933Z"
														fill="white"></path>
												</svg>
											</div>
										</a>
										<a href="<?php
										if (get_field('listen_to_apple_podcast', $pageId)) {
											the_field('listen_to_apple_podcast', $pageId);
										} else {
											echo '#';
										} ?>" class="text-primary hover:text-secondary w-inline-block">
											<div class="flex w-embed">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="12" cy="12" r="12" fill="currentColor"></circle>
													<path
														d="M13.1167 17.0727C12.9553 18.2331 12.8649 18.526 12.641 18.7236C12.4354 18.905 12.1745 19 11.9006 19C11.7621 19 11.62 18.9756 11.4802 18.9258H11.4781C10.9771 18.745 10.8699 18.5012 10.6618 17.0723C10.4242 15.4109 10.3717 14.384 10.5121 14.0581C10.695 13.6257 11.1932 13.3829 11.8911 13.3798L11.8905 13.3802C12.5838 13.3777 13.0841 13.6236 13.2702 14.0588C13.4094 14.3846 13.3578 15.4109 13.1167 17.0727Z"
														fill="white"></path>
													<path
														d="M11.3107 12.6517H11.3027C10.8019 12.4188 10.5335 11.9811 10.5276 11.4114C10.5276 10.8968 10.8118 10.4507 11.3075 10.1879C11.4635 10.106 11.68 10.0643 11.8986 10.0643L11.8965 10.065C12.1158 10.065 12.3317 10.1091 12.4911 10.1911C12.8301 10.3692 13.1129 10.711 13.219 11.0723C13.5449 12.1783 12.3733 13.1472 11.3107 12.6517Z"
														fill="white"></path>
													<path
														d="M15.829 12.3698C15.7224 13.1522 15.4543 13.7934 14.9782 14.39C14.7428 14.691 14.1703 15.1949 14.0694 15.1949C14.0526 15.1949 14.0364 15.0032 14.0364 14.773V14.3484L14.3265 14.0011C15.4264 12.6845 15.3476 10.845 14.1482 9.64111C13.683 9.17021 13.1434 8.89314 12.448 8.76806C11.9998 8.68355 11.9062 8.68355 11.4353 8.76239C10.7185 8.87738 10.165 9.1534 9.67201 9.64111C8.46808 10.8345 8.38819 12.6845 9.48933 14.0011L9.77943 14.3484V14.7755C9.77943 15.011 9.75988 15.1998 9.73529 15.1998C9.71637 15.1998 9.55177 15.0877 9.37623 14.9479L9.35163 14.9395C8.76869 14.4745 8.25428 13.6504 8.04028 12.84C7.91204 12.3502 7.91204 11.4225 8.04616 10.9348C8.39933 9.61841 9.37098 8.59715 10.7153 8.11848C11.0029 8.01694 11.5085 7.96229 11.9851 7.97069L11.9893 7.97133C12.2737 7.97406 12.5506 7.99865 12.7633 8.0449C14.7158 8.48006 16.0974 10.4324 15.829 12.3698Z"
														fill="white"></path>
													<path
														d="M17.729 12.8978C17.4663 14.3781 16.6563 15.7038 15.4601 16.6096C15.0334 16.933 13.9903 17.4943 13.8231 17.4943C13.7601 17.4943 13.7552 17.4312 13.7826 17.1711C13.8347 16.7549 13.8835 16.6702 14.1189 16.5714C14.4937 16.4158 15.1343 15.958 15.5259 15.5669C16.2096 14.8823 16.6973 14.0262 16.9327 13.087C17.0805 12.5089 17.061 11.2248 16.8997 10.6316C16.3904 8.74212 14.8463 7.27583 12.9581 6.88125C12.4109 6.76941 11.4113 6.76941 10.8559 6.88125C8.94496 7.27583 7.36241 8.81696 6.88101 10.755C6.75235 11.2826 6.75235 12.5671 6.88101 13.0926C7.20117 14.3767 8.03092 15.5529 9.11734 16.2539C9.33113 16.3963 9.58823 16.5415 9.69545 16.5855C9.93026 16.6864 9.98282 16.7721 10.0259 17.1846C10.0532 17.4396 10.0476 17.5104 9.98807 17.5104C9.94981 17.5104 9.66223 17.387 9.35804 17.242L9.33071 17.2203C7.59786 16.3689 6.48895 14.9268 6.08427 13.0077C5.9861 12.512 5.96655 11.3327 6.06535 10.8782C6.3172 9.65721 6.79902 8.70491 7.60059 7.86193C8.75597 6.64349 10.2418 6 11.8944 6C13.5309 6 15.0111 6.63276 16.1391 7.81463C16.9964 8.70449 17.4778 9.64817 17.7242 10.8918C17.8087 11.3053 17.8087 12.4328 17.729 12.8978Z"
														fill="white"></path>
												</svg>
											</div>
										</a>
									</div>
								</li>
								<li class="flex items-center gap-16 sm:flex-wrap sm:justify-center">
									<div class="font-semibold text-sm">FOLLOW US</div>
									<div class="flex gap-8 items-center">
										<?php
										$facebookLink = get_field('facebook', $pageId);
										?>
										<a href="<?php
										if ($facebookLink) {
											echo $facebookLink;
										} else {
											echo '#';
										} ?>" target="<?php
										if ($facebookLink) {
											echo '_blank';
										} else {
											echo '_self';
										} ?>" rel="noopener noreferrer" class="hover:text-primary w-inline-block">
											<div class="flex w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path fill-rule="evenodd" clip-rule="evenodd"
													      d="M0 11.8644C0 5.31188 5.31188 0 11.8644 0C18.4169 0 23.7288 5.31188 23.7288 11.8644C23.7288 18.4169 18.4169 23.7288 11.8644 23.7288C5.31188 23.7288 0 18.4169 0 11.8644ZM11.8644 5.9322C15.1271 5.9322 17.7966 8.6017 17.7966 11.8644C17.7966 14.8305 15.6462 17.3517 12.6801 17.7966V13.5699H14.089L14.3856 11.8644H12.7542V10.7521C12.7542 10.3072 12.9767 9.86229 13.7182 9.86229H14.4597V8.37924C14.4597 8.37924 13.7924 8.23093 13.125 8.23093C11.7903 8.23093 10.9004 9.04661 10.9004 10.5297V11.8644H9.41737V13.5699H10.9004V17.7225C8.08263 17.2775 5.9322 14.8305 5.9322 11.8644C5.9322 8.6017 8.6017 5.9322 11.8644 5.9322Z"
													      fill="currentColor"></path>
												</svg>
											</div>
										</a>
										<?php
										$instagramLink = get_field('instagram', $pageId);
										?>
										<a href="<?php
										if ($instagramLink) {
											echo $instagramLink;
										} else {
											echo '#';
										}
										?>" target="<?php
										if ($instagramLink) {
											echo '_blank';
										} else {
											echo '_self';
										}
										?>" rel="noopener noreferrer" class="hover:text-primary w-inline-block">
											<div class="flex w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
													<path
														d="M12.5932 13.9407C11.4809 13.9407 10.5169 13.0508 10.5169 11.8644C10.5169 10.7521 11.4067 9.78813 12.5932 9.78813C13.7055 9.78813 14.6694 10.678 14.6694 11.8644C14.6694 12.9767 13.7055 13.9407 12.5932 13.9407Z"
														fill="currentColor"></path>
													<path fill-rule="evenodd" clip-rule="evenodd"
													      d="M15.1144 6.82203H10.072C9.47876 6.89618 9.18215 6.97034 8.95969 7.04449C8.66308 7.11864 8.44062 7.26695 8.21817 7.4894C8.04214 7.66543 7.95897 7.84146 7.85844 8.05423C7.83195 8.1103 7.80418 8.16908 7.77325 8.23093C7.76178 8.26534 7.74853 8.30153 7.73434 8.34032C7.65676 8.55226 7.55079 8.84177 7.55079 9.34322V14.3856C7.62495 14.9788 7.6991 15.2754 7.77325 15.4979C7.8474 15.7945 7.99571 16.0169 8.21817 16.2394C8.3942 16.4154 8.57022 16.4986 8.78299 16.5991C8.83911 16.6256 8.89779 16.6534 8.95969 16.6843C8.99411 16.6958 9.03029 16.709 9.06908 16.7232C9.28102 16.8008 9.57053 16.9068 10.072 16.9068H15.1144C15.7076 16.8326 16.0042 16.7585 16.2266 16.6843C16.5233 16.6102 16.7457 16.4619 16.9682 16.2394C17.1442 16.0634 17.2274 15.8874 17.3279 15.6746C17.3544 15.6185 17.3821 15.5598 17.4131 15.4979C17.4246 15.4635 17.4378 15.4273 17.452 15.3885C17.5296 15.1766 17.6355 14.887 17.6355 14.3856V9.34322C17.5614 8.75 17.4872 8.45339 17.4131 8.23093C17.3389 7.93432 17.1906 7.71186 16.9682 7.4894C16.7921 7.31338 16.6161 7.23021 16.4033 7.12968C16.3473 7.10321 16.2884 7.07539 16.2266 7.04449C16.1922 7.03302 16.156 7.01977 16.1173 7.00558C15.9053 6.928 15.6158 6.82203 15.1144 6.82203ZM12.5932 8.67585C10.8135 8.67585 9.40461 10.0847 9.40461 11.8644C9.40461 13.6441 10.8135 15.053 12.5932 15.053C14.3728 15.053 15.7817 13.6441 15.7817 11.8644C15.7817 10.0847 14.3728 8.67585 12.5932 8.67585ZM16.5974 8.60169C16.5974 9.01123 16.2654 9.34322 15.8559 9.34322C15.4463 9.34322 15.1144 9.01123 15.1144 8.60169C15.1144 8.19216 15.4463 7.86017 15.8559 7.86017C16.2654 7.86017 16.5974 8.19216 16.5974 8.60169Z"
													      fill="currentColor"></path>
													<path fill-rule="evenodd" clip-rule="evenodd"
													      d="M0.72876 11.8644C0.72876 5.31188 6.04064 0 12.5932 0C19.1457 0 24.4576 5.31188 24.4576 11.8644C24.4576 18.4169 19.1457 23.7288 12.5932 23.7288C6.04064 23.7288 0.72876 18.4169 0.72876 11.8644ZM10.072 5.70974H15.1144C15.7817 5.7839 16.2266 5.85805 16.5974 6.00635C17.0423 6.22881 17.3389 6.37712 17.7097 6.74788C18.0805 7.11864 18.3029 7.4894 18.4512 7.86017C18.5995 8.23093 18.7478 8.67585 18.7478 9.34322V14.3856C18.6737 15.053 18.5995 15.4979 18.4512 15.8686C18.2288 16.3136 18.0805 16.6102 17.7097 16.9809C17.3389 17.3517 16.9682 17.5742 16.5974 17.7225C16.2266 17.8708 15.7817 18.0191 15.1144 18.0191H10.072C9.40461 17.9449 8.95969 17.8708 8.58893 17.7225C8.14401 17.5 7.8474 17.3517 7.47664 16.9809C7.10588 16.6102 6.88342 16.2394 6.73512 15.8686C6.58681 15.4979 6.43851 15.053 6.43851 14.3856V9.34322C6.51266 8.67585 6.58681 8.23093 6.73512 7.86017C6.95757 7.41525 7.10588 7.11864 7.47664 6.74788C7.8474 6.37712 8.21817 6.15466 8.58893 6.00635C8.95969 5.85805 9.40461 5.70974 10.072 5.70974Z"
													      fill="currentColor"></path>
												</svg>
											</div>
										</a>
										<?php
										$linkedinLink = get_field('linkedin', $pageId);
										?>
										<a href="<?php
										if ($linkedinLink) {
											echo $linkedinLink;
										} else {
											echo '#';
										}
										?>" target="<?php
										if ($linkedinLink) {
											echo '_blank';
										} else {
											echo '_self';
										} ?>" rel="noopener noreferrer" class="hover:text-primary w-inline-block">
											<div class="flex w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
													<path fill-rule="evenodd" clip-rule="evenodd"
													      d="M0.45752 11.8644C0.45752 5.31188 5.7694 0 12.3219 0C18.8745 0 24.1863 5.31188 24.1863 11.8644C24.1863 18.4169 18.8745 23.7288 12.3219 23.7288C5.7694 23.7288 0.45752 18.4169 0.45752 11.8644ZM6.53803 9.86229V17.7966H9.05922V9.86229H6.53803ZM6.38972 7.3411C6.38972 8.15678 6.98295 8.75 7.79862 8.75C8.6143 8.75 9.20752 8.15678 9.20752 7.3411C9.20752 6.52543 8.6143 5.9322 7.79862 5.9322C7.0571 5.9322 6.38972 6.52543 6.38972 7.3411ZM15.7329 17.7966H18.1058V12.9025C18.1058 10.4555 16.6228 9.63983 15.2139 9.63983C13.9533 9.63983 13.0635 10.4555 12.841 10.9746V9.86229H10.4681V17.7966H12.9893V13.5699C12.9893 12.4576 13.7308 11.8644 14.4723 11.8644C15.2139 11.8644 15.7329 12.2352 15.7329 13.4958V17.7966Z"
													      fill="currentColor"></path>
												</svg>
											</div>
										</a>
										<?php
										$twitter = get_field('twitter', $pageId);
										?>
										<a href="<?php
										if ($twitter) {
											echo $twitter;
										} else {
											echo '#';
										}
										?>" target="<?php
										if ($twitter) {
											echo '_blank';
										} else {
											echo '_self';
										}
										?>" rel="noopener noreferrer" class="hover:text-primary w-inline-block">
											<div class="flex w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.9424 17.0607H16.5501L9.14998 6.7032H7.54231L14.9424 17.0607Z"
													      fill="currentColor"></path>
													<path fill-rule="evenodd" clip-rule="evenodd"
													      d="M12.0507 23.7288C5.49816 23.7288 0.186279 18.4169 0.186279 11.8644C0.186279 5.31188 5.49816 0 12.0507 0C18.6032 0 23.9151 5.31188 23.9151 11.8644C23.9151 18.4169 18.6032 23.7288 12.0507 23.7288ZM17.5962 5.9322L13.1792 10.956L17.9829 17.7966H14.45L11.2151 13.1901L7.16519 17.7966H6.11848L10.7505 12.5284L6.11848 5.9322H9.65139L12.7145 10.2943L16.5496 5.9322H17.5962Z"
													      fill="currentColor"></path>
												</svg>
											</div>
										</a>
										<?php
										$youtube = get_field('youtube', $pageId);
										?>
										<a href="<?php
										if ($youtube) {
											echo $youtube;
										} else {
											echo '#';
										}
										?>" target="<?php
										if ($youtube) {
											echo '_blank';
										} else {
											echo '_self';
										}
										?>" rel="noopener noreferrer" class="hover:text-primary w-inline-block">
											<div class="flex w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
													<path d="M14.7074 11.8644L11.593 10.0847V13.6441L14.7074 11.8644Z" fill="currentColor"></path>
													<path fill-rule="evenodd" clip-rule="evenodd"
													      d="M0.915039 11.8644C0.915039 5.31188 6.22692 0 12.7794 0C19.332 0 24.6439 5.31188 24.6439 11.8644C24.6439 18.4169 19.332 23.7288 12.7794 23.7288C6.22692 23.7288 0.915039 18.4169 0.915039 11.8644ZM17.3769 7.93432C17.896 8.08263 18.2667 8.45339 18.415 8.97246C18.7117 9.93644 18.7116 11.8644 18.7116 11.8644C18.7116 11.8644 18.7117 13.7924 18.4892 14.7564C18.3409 15.2754 17.9701 15.6462 17.451 15.7945C16.4871 16.0169 12.7794 16.017 12.7794 16.017C12.7794 16.017 8.99766 16.0169 8.10783 15.7945C7.58877 15.6462 7.21801 15.2754 7.0697 14.7564C6.84724 13.7924 6.84724 11.8644 6.84724 11.8644C6.84724 11.8644 6.84724 9.93644 6.99555 8.97246C7.14385 8.45339 7.51462 8.08263 8.03369 7.93432C8.99767 7.71187 12.7053 7.71187 12.7053 7.71187C12.7053 7.71187 16.4871 7.71187 17.3769 7.93432Z"
													      fill="currentColor"></path>
												</svg>
											</div>
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="site-padding sm:py-60 py-56">
				<div class="w-layout-blockcontainer max-w-1252 w-container">
					<?php
					if (get_field('program_featured_episodes', $pageId)):
						?>
						<div class="mb-44">
							<div class="mb-20">
								<h2 class="text-center">Featured Episodes</h2>
							</div>
							<?php
							get_template_part('components/line-with-blinking-dot');
							?>
						</div>
						<div class="mb-100">
							<div class="w-dyn-list">
								<div role="list" class="grid grid-cols-2 gap-28 sm:grid-cols-1 w-dyn-items">
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
											<a href="<?php
											echo esc_url($episode_url); ?>" class="relative w-full group">
												<div class="relative flex flex-col justify-between gap-20 h-full">
													<div class="w-full">
														<div class="mb-28">
															<div class="overflow-hidden rounded-12 relative h-344 bg-cargogrey">
																<img
																	src="<?php
																	echo get_the_post_thumbnail($value)
																		? get_the_post_thumbnail($value)
																		: get_stylesheet_directory_uri(
																		) . '/assets/img/misc/default-card-img-thumbnail.avif' ?>"
																	loading="lazy" alt="" class="image relative opacity-40">
																<?php
																$terms = get_the_terms($value, 'tags');
																if (!is_wp_error($terms) && !empty($terms)) {
																	$first = array_values($terms)[0];
																	?>
																	<div class="absolute absolute--tl p-24 flex items-center justify-center">
																		<div class="relative rounded-full overflow-hidden py-4 px-8">
																			<div class="relative font-semibold uppercase text-2xs text--white lh-normal z-10">
																				<?php
																				echo $first->name; ?>
																			</div>
																			<?php
																			echo get_field(
																				'select_media_type',
																				$value
																			) == 'livestream'
																				? '<div class="absolute absolute--full bg-primary"></div>'
																				: '';
																			?>
																			<?php
																			echo get_field(
																				'select_media_type',
																				$value
																			) == 'podcast'
																				? '<div class="absolute absolute--full bg-secondary"></div>'
																				: '';
																			?>
																			<?php
																			echo get_field(
																				'select_media_type',
																				$value
																			) == 'webinar'
																				? '<div class="absolute absolute--full bg-tertiary"></div>'
																				: '';
																			?>
																		</div>
																	</div>
																	<?php
																}
																?>
																<div
																	class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
																	<?php
																	if (get_field('select_media_type', $value) == 'livestream') {
																		?>
																		<img
																			src="<?php
																			echo get_stylesheet_directory_uri(
																				) . '/assets/img/icons/play-button-livestream.avif'; ?>"
																			loading="lazy" alt="play-button-livestream">
																		<?php
																	}
																	?>
																	<?php
																	if (get_field('select_media_type', $value) == 'podcast') {
																		?>
																		<img
																			src="<?php
																			echo get_stylesheet_directory_uri(
																				) . '/assets/img/icons/play-button-podcast.avif'; ?>"
																			loading="lazy" alt="play-button-podcast">
																		<?php
																	}
																	?>
																	<?php
																	if (get_field('select_media_type', $value) == 'webinar') {
																		?>
																		<img
																			src="<?php
																			echo get_stylesheet_directory_uri(
																				) . '/assets/img/icons/play-button-webinar.avif'; ?>"
																			loading="lazy" alt="play-button-webinar">
																		<?php
																	}
																	?>
																</div>
															</div>
														</div>
														<div class="mb-12">
															<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
																<div class="flex items-center gap-8">
																	<div class="flex items-center">
																		<?php
																		if (get_field('select_media_type', $value) == 'livestream') {
																			?>
																			<img
																				src="<?php
																				echo get_stylesheet_directory_uri(
																					) . '/assets/img/icons/livestream-card-icon.svg'; ?>"
																				loading="lazy" alt="livestream-music">
																			<?php
																		}
																		?>
																		<?php
																		if (get_field('select_media_type', $value) == 'podcast') {
																			?>
																			<img
																				class="size-24"
																				src="<?php
																				echo get_stylesheet_directory_uri(
																					) . '/assets/img/icons/podcast-card-icon.png'; ?>"
																				loading="lazy" alt="podcast-blue-microphone">
																			<?php
																		}
																		?>
																		<?php
																		if (get_field('select_media_type', $value) == 'webinar') {
																			?>
																			<img
																				class="size-24"
																				src="<?php
																				echo get_stylesheet_directory_uri(
																					) . '/assets/img/icons/webinar-card-icon.png'; ?>"
																				loading="lazy" alt="webinar-person">
																			<?php
																		}
																		?>
																	</div>
																	<?php
																	if (get_field('select_media_type', $value)) {
																		?>
																		<div class="font-family-secondary text-sm capitalize">
																			<?php
																			the_field('select_media_type', $value); ?>
																		</div>
																		<?php
																	}
																	?>
																</div>
																<div class="flex items-center gap-8 text-sm font-light font-family-secondary">
																	<div><?php
																		echo get_the_date('F j, Y', $value); ?></div>
																	<!--<div>•</div>
																	<div>6 min 25 sec</div>-->
																</div>
															</div>
														</div>
														<h3 class="font-semibold" scn-text-limit="3"><?php
															echo get_the_title($value); ?></h3>
													</div>
													<div class="w-full tracking-[1.6px]" scn-text-limit="2">
														<?php
														if (get_the_excerpt($value)) {
															echo get_the_excerpt($value);
														} else {
															if (get_field('livestream_description', $value)) {
																the_field('livestream_description', $value);
															} else {
																if (get_field('episode_summary', $value)) {
																	the_field('episode_summary', $value);
																} else {
																	if (get_field('webinar_description', $value)) {
																		the_field('webinar_description', $value);
																	} else {
																		echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
								tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero
								vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
								tristique posuere.';
																	}
																}
															}
														}
														?>
													</div>
												</div>
											</a>
											<?php
										}
									}
									?>
								</div>
							</div>
						</div>
					<?php
					endif; ?>
					<div class="h-600">
						<div data-lenis-prevent="" class="w-richtext">
							<?php
							$captivate_code = get_field('captivate_code', $pageId);
							if ($captivate_code) {
								echo $captivate_code;
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="site-padding sm:py-60 py-88">
				<div class="w-layout-blockcontainer max-w-1372 relative w-container">
					<div class="mb-44">
						<div class="mb-20">
							<h2 class="text-center">Suggested Podcasts</h2>
						</div>
						<?php
						get_template_part('components/line-with-blinking-dot');
						?>
					</div>
					<div class="mb-44 relative">
						<div class="max-w-1248 mx-auto">
							<div slider-1="" class="splide">
								<div class="splide__track">
									<div class="splide__list">
										<?php
										$q = new WP_Query([
											'post_type' => 'program',
											'post_status' => 'publish',
											'posts_per_page' => -1,
											'offset' => 0,
											'orderby' => 'rand', // random order
										]);

										if ($q->have_posts()): ?>
											<?php
											while ($q->have_posts()): $q->the_post(); ?>
												<div class="splide__slide">
													<a href="<?php
													the_permalink(); ?>" class="w-full h-full overflow-hidden rounded-24 w-inline-block"
													   tabindex="-1">
														<img
															src="<?php
															if (get_field('program_thumbnail_image_upload')) {
																echo get_field('program_thumbnail_image_upload');
															} else {
																if (has_post_thumbnail()) {
																	echo the_post_thumbnail_url();
																} else {
																	echo get_stylesheet_directory_uri(
																		) . '/assets/img/misc/default-card-img-thumbnail.avif';
																}
															}
															?>"
															loading="lazy" alt="" class="image">
													</a>
												</div>
											<?php
											endwhile;
											wp_reset_postdata(); ?>
										<?php
										endif; ?>
									</div>
								</div>
								<?php
								get_template_part('components/splide-arrows');
								?>
								<div class="display-none w-embed w-script">
									<script>
										document.addEventListener('DOMContentLoaded', function () {
											function slider1() {
												let splideTarget = '[slider-1]';
												let splideTargetEl = document.querySelector(`${splideTarget}`);
												if (!splideTargetEl) return;
												var options = {
													/*suggested options*/
													type: 'loop', //'fade', //"slide", //"loop",
													arrows: true,
													pagination: false,
													/*custom options*/
													//rewind: true,
													//fixedWidth: 394,
													perMove: 1,
													perPage: 4,
													gap: 22,
													autoplay: true,
													pauseOnHover: true,
													updateOnMove: true,
													autoScroll: {
														speed: 1,
													},
													intersection: {
														inView: {
															autoplay: true,
														},
														outView: {
															autoplay: false,
														},
													},
													breakpoints: {
														991: {
															// 		type: 'slide',
															perPage: 2,
															padding: {left: 42, right: 42},
															// 		perMove: 1,
															// 		fixedWidth: '100%',
															// 		padding: { left: 0, right: 0 },
														},
														767: {
															perPage: 1,
															gap: '4rem',
															fixedWidth: '100%',
															padding: {left: 42, right: 42},
														},
													},
												};
												var splide = new Splide(`${splideTarget}`, options);
												splide.mount();
											}

											setTimeout(function () {
												slider1();
											}, 500);
										});
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
