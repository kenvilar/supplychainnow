<?php

$pageID     = get_the_ID();
$section    = get_field( 'Our_Clients’_Recent_Successes_Section', $pageID );
$topTitle   = esc_html( ! empty( $section['Top_Title'] ) ? $section['Top_Title'] : 'Turn One Webinar into a Year’s Worth of Leads' );
$title      = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Our Clients’ Recent Successes' );
$buttonText = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Read More' );
$buttonLink = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/success-stories' );
?>
<div class="overflow-hidden relative rounded-t-100 sm:rounded-t-none">
	<section class="section relative z-10">
		<div class="site-padding sm:py-60 pt-64 pb-100">
			<div class="w-layout-blockcontainer max-w-1252 w-container">
				<div class="mb-12 text-center">
					<div class="font-family-alternate text-lg font-semibold">
						<?= $topTitle; ?>
					</div>
				</div>
				<div class="mb-52 text-center">
					<h2><?= $title; ?></h2>
				</div>
				<div class="mb-36">
					<div class="grid grid-cols-2 gap-44 sm:grid-cols-1">
						<?php
						if ( ! empty( $section['Card_Repeater'] ) ):
							foreach ( $section['Card_Repeater'] as $key => $value ):
								$title = $value['Title'];
								$description = $value['Description'];
								$testimonial_content = $value['Testimonial_Content'];
								?>
								<div class="card v3">
									<div class="relative z-10 py-52 px-20 text-white">
										<div class="w-layout-blockcontainer max-w-492 w-full md:max-w-full w-container">
											<div class="mb-24">
												<div class="font-semibold text-xl"><?= $title; ?></div>
											</div>
											<div class="tracking-[1.6px]">
												<?= $description; ?>
											</div>
											<div class="mb-64 sm:mb-20"></div>
											<div class="h-1 w-full bg-white/25"></div>
											<div class="mb-52 sm:mb-20"></div>
											<div class="relative px-28">
												<div class="font-family-alternate font-medium text-lg max-w-368 w-full md:max-w-full mx-auto">We
													<?= $testimonial_content; ?>
												</div>
												<div class="absolute absolute--tl flex w-embed">
													<svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19"
													     fill="none">
														<path
															d="M11.3154 2.94824C10.2886 3.45925 9.32048 4.02927 8.41211 4.6582C7.5039 5.28705 6.71429 5.97495 6.04297 6.72168C5.37168 7.4291 4.83828 8.23478 4.44336 9.13867C4.20337 9.72255 4.03639 10.3698 3.94043 11.0791C4.36377 11.0041 4.76862 10.9668 5.1543 10.9668C6.49698 10.9668 7.56368 11.3015 8.35352 11.9697C9.1431 12.5987 9.53809 13.5422 9.53809 14.7998C9.53802 15.9396 9.12326 16.8831 8.29395 17.6299C7.50411 18.3767 6.39822 18.75 4.97656 18.75C3.43648 18.75 2.21205 18.3177 1.30371 17.4531C0.434902 16.5491 6.91557e-05 15.1339 0 13.208C0 11.6357 0.177755 10.2005 0.533203 8.90332C0.888653 7.56684 1.38274 6.36796 2.01465 5.30664C2.68603 4.24539 3.45539 3.28173 4.32422 2.41699C5.23259 1.51291 6.22077 0.707543 7.28711 0L11.3154 2.94824ZM25 2.94824C23.9337 3.45924 22.9464 4.02929 22.0381 4.6582C21.1297 5.28714 20.3394 5.97482 19.668 6.72168C18.9967 7.42913 18.4633 8.23475 18.0684 9.13867C17.8288 9.72148 17.6719 10.3674 17.5938 11.0752C18.007 11.0035 18.4021 10.9668 18.7793 10.9668C20.1221 10.9668 21.1886 11.3015 21.9785 11.9697C22.7683 12.5987 23.1631 13.542 23.1631 14.7998C23.163 15.9396 22.7483 16.8831 21.9189 17.6299C21.1291 18.3765 20.0232 18.75 18.6016 18.75C17.0616 18.7499 15.8571 18.3177 14.9883 17.4531C14.1195 16.5491 13.6846 15.1339 13.6846 13.208C13.6846 11.6357 13.8623 10.2005 14.2178 8.90332C14.5732 7.56684 15.0673 6.36796 15.6992 5.30664C16.3311 4.24534 17.1014 3.28176 18.0098 2.41699C18.918 1.51306 19.9055 0.70745 20.9717 0L25 2.94824Z"
															fill="white"></path>
													</svg>
												</div>
												<div class="flex absolute absolute--br w-embed">
													<svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19"
													     fill="none">
														<path
															d="M13.6846 15.8018C14.7114 15.2908 15.6795 14.7207 16.5879 14.0918C17.4961 13.463 18.2857 12.775 18.957 12.0283C19.6283 11.3209 20.1617 10.5152 20.5566 9.61133C20.7966 9.02745 20.9636 8.38021 21.0596 7.6709C20.6362 7.74587 20.2314 7.7832 19.8457 7.7832C18.503 7.78316 17.4363 7.44847 16.6465 6.78027C15.8569 6.15134 15.4619 5.20782 15.4619 3.9502C15.462 2.81038 15.8767 1.86691 16.7061 1.12012C17.4959 0.373323 18.6018 4.57764e-05 20.0234 0C21.5635 0 22.788 0.43232 23.6963 1.29688C24.5651 2.20089 24.9999 3.61613 25 5.54199C25 7.11432 24.8222 8.54951 24.4668 9.84668C24.1113 11.1832 23.6173 12.382 22.9854 13.4434C22.314 14.5046 21.5446 15.4683 20.6758 16.333C19.7674 17.2371 18.7792 18.0425 17.7129 18.75L13.6846 15.8018ZM0 15.8018C1.06632 15.2908 2.05356 14.7207 2.96191 14.0918C3.87029 13.4629 4.66063 12.7752 5.33203 12.0283C6.00331 11.3209 6.53673 10.5153 6.93164 9.61133C7.17119 9.02852 7.32814 8.38258 7.40625 7.6748C6.99302 7.74653 6.59791 7.78318 6.2207 7.7832C4.87789 7.7832 3.81137 7.44851 3.02148 6.78027C2.23166 6.15134 1.83691 5.20801 1.83691 3.9502C1.83698 2.81038 2.25174 1.86691 3.08105 1.12012C3.87092 0.373474 4.97684 0 6.39844 0C7.93844 6.29425e-05 9.14292 0.432299 10.0117 1.29688C10.8805 2.20089 11.3154 3.61613 11.3154 5.54199C11.3154 7.11429 11.1377 8.54953 10.7822 9.84668C10.4268 11.1832 9.93269 12.382 9.30078 13.4434C8.66887 14.5047 7.89859 15.4682 6.99023 16.333C6.08196 17.2369 5.09452 18.0426 4.02832 18.75L0 15.8018Z"
															fill="white"></path>
													</svg>
												</div>
											</div>
										</div>
									</div>
									<div class="absolute absolute--full w-full h-full gradient1"></div>
								</div>
							<?php
							endforeach;
						else:
							?>
							<div class="card v3">
								<div class="relative z-10 py-52 px-20 text-white">
									<div class="w-layout-blockcontainer max-w-492 w-full md:max-w-full w-container">
										<div class="mb-24">
											<div class="font-semibold text-xl">191 Qualified Leads from One Webinar</div>
										</div>
										<p class="tracking-[1.6px]">For just one webinar, a F100 supply chain solution provider received
											394
											total registrations. 207 individuals attended (52% attendee conversion rate), of which 191 were
											net new qualified leads given to the sales team.
										</p>
										<div class="mb-64 sm:mb-20"></div>
										<div class="h-1 w-full bg-white/25"></div>
										<div class="mb-52 sm:mb-20"></div>
										<div class="relative px-28">
											<p class="font-family-alternate font-medium text-lg max-w-368 w-full md:max-w-full mx-auto">We
												don’t just work with the Supply Chain Now team once and are done. We view the partnership as
												an extension to our marketing and sales teams, and continue to repurpose content and follow-up
												with the warm leads from each show. The content we create with Supply Chain Now is a lead
												magnet for our ideal customers.
											</p>
											<div class="absolute absolute--tl flex w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19"
												     fill="none">
													<path
														d="M11.3154 2.94824C10.2886 3.45925 9.32048 4.02927 8.41211 4.6582C7.5039 5.28705 6.71429 5.97495 6.04297 6.72168C5.37168 7.4291 4.83828 8.23478 4.44336 9.13867C4.20337 9.72255 4.03639 10.3698 3.94043 11.0791C4.36377 11.0041 4.76862 10.9668 5.1543 10.9668C6.49698 10.9668 7.56368 11.3015 8.35352 11.9697C9.1431 12.5987 9.53809 13.5422 9.53809 14.7998C9.53802 15.9396 9.12326 16.8831 8.29395 17.6299C7.50411 18.3767 6.39822 18.75 4.97656 18.75C3.43648 18.75 2.21205 18.3177 1.30371 17.4531C0.434902 16.5491 6.91557e-05 15.1339 0 13.208C0 11.6357 0.177755 10.2005 0.533203 8.90332C0.888653 7.56684 1.38274 6.36796 2.01465 5.30664C2.68603 4.24539 3.45539 3.28173 4.32422 2.41699C5.23259 1.51291 6.22077 0.707543 7.28711 0L11.3154 2.94824ZM25 2.94824C23.9337 3.45924 22.9464 4.02929 22.0381 4.6582C21.1297 5.28714 20.3394 5.97482 19.668 6.72168C18.9967 7.42913 18.4633 8.23475 18.0684 9.13867C17.8288 9.72148 17.6719 10.3674 17.5938 11.0752C18.007 11.0035 18.4021 10.9668 18.7793 10.9668C20.1221 10.9668 21.1886 11.3015 21.9785 11.9697C22.7683 12.5987 23.1631 13.542 23.1631 14.7998C23.163 15.9396 22.7483 16.8831 21.9189 17.6299C21.1291 18.3765 20.0232 18.75 18.6016 18.75C17.0616 18.7499 15.8571 18.3177 14.9883 17.4531C14.1195 16.5491 13.6846 15.1339 13.6846 13.208C13.6846 11.6357 13.8623 10.2005 14.2178 8.90332C14.5732 7.56684 15.0673 6.36796 15.6992 5.30664C16.3311 4.24534 17.1014 3.28176 18.0098 2.41699C18.918 1.51306 19.9055 0.70745 20.9717 0L25 2.94824Z"
														fill="white"></path>
												</svg>
											</div>
											<div class="flex absolute absolute--br w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19"
												     fill="none">
													<path
														d="M13.6846 15.8018C14.7114 15.2908 15.6795 14.7207 16.5879 14.0918C17.4961 13.463 18.2857 12.775 18.957 12.0283C19.6283 11.3209 20.1617 10.5152 20.5566 9.61133C20.7966 9.02745 20.9636 8.38021 21.0596 7.6709C20.6362 7.74587 20.2314 7.7832 19.8457 7.7832C18.503 7.78316 17.4363 7.44847 16.6465 6.78027C15.8569 6.15134 15.4619 5.20782 15.4619 3.9502C15.462 2.81038 15.8767 1.86691 16.7061 1.12012C17.4959 0.373323 18.6018 4.57764e-05 20.0234 0C21.5635 0 22.788 0.43232 23.6963 1.29688C24.5651 2.20089 24.9999 3.61613 25 5.54199C25 7.11432 24.8222 8.54951 24.4668 9.84668C24.1113 11.1832 23.6173 12.382 22.9854 13.4434C22.314 14.5046 21.5446 15.4683 20.6758 16.333C19.7674 17.2371 18.7792 18.0425 17.7129 18.75L13.6846 15.8018ZM0 15.8018C1.06632 15.2908 2.05356 14.7207 2.96191 14.0918C3.87029 13.4629 4.66063 12.7752 5.33203 12.0283C6.00331 11.3209 6.53673 10.5153 6.93164 9.61133C7.17119 9.02852 7.32814 8.38258 7.40625 7.6748C6.99302 7.74653 6.59791 7.78318 6.2207 7.7832C4.87789 7.7832 3.81137 7.44851 3.02148 6.78027C2.23166 6.15134 1.83691 5.20801 1.83691 3.9502C1.83698 2.81038 2.25174 1.86691 3.08105 1.12012C3.87092 0.373474 4.97684 0 6.39844 0C7.93844 6.29425e-05 9.14292 0.432299 10.0117 1.29688C10.8805 2.20089 11.3154 3.61613 11.3154 5.54199C11.3154 7.11429 11.1377 8.54953 10.7822 9.84668C10.4268 11.1832 9.93269 12.382 9.30078 13.4434C8.66887 14.5047 7.89859 15.4682 6.99023 16.333C6.08196 17.2369 5.09452 18.0426 4.02832 18.75L0 15.8018Z"
														fill="white"></path>
												</svg>
											</div>
										</div>
									</div>
								</div>
								<div class="absolute absolute--full w-full h-full gradient1"></div>
							</div>
							<div class="card v3">
								<div class="relative z-10 px-12 py-52 text-white">
									<div class="w-layout-blockcontainer max-w-492 w-full md:max-w-full w-container">
										<div class="mb-24">
											<div class="font-semibold text-xl">Attendee Conversion Rate Doubled</div>
										</div>
										<p class="tracking-[1.6px]">A F500 supply chain solution provider increased their webinar
											registrations by 180% with Supply Chain Now and more than doubled their attendee conversion
											rate, from 20% when hosting webinars internally or with other parties, to 49% with Supply Chain
											Now.
										</p>
										<div class="mb-64 sm:mb-20"></div>
										<div class="h-1 w-full bg-white/25"></div>
										<div class="mb-52 sm:mb-20"></div>
										<div class="relative px-28">
											<p class="font-family-alternate font-medium text-lg max-w-368 w-full md:max-w-full mx-auto">In
												addition to outperforming any other webinar we have done internally or externally (by 180%),
												we had people reaching out directly on LinkedIn after to connect with our presenter and learn
												more about what we do. We continue to use the lead list from our Supply Chain Now shows for
												ABM marketing.
											</p>
											<div class="absolute absolute--tl flex w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19"
												     fill="none">
													<path
														d="M11.3154 2.94824C10.2886 3.45925 9.32048 4.02927 8.41211 4.6582C7.5039 5.28705 6.71429 5.97495 6.04297 6.72168C5.37168 7.4291 4.83828 8.23478 4.44336 9.13867C4.20337 9.72255 4.03639 10.3698 3.94043 11.0791C4.36377 11.0041 4.76862 10.9668 5.1543 10.9668C6.49698 10.9668 7.56368 11.3015 8.35352 11.9697C9.1431 12.5987 9.53809 13.5422 9.53809 14.7998C9.53802 15.9396 9.12326 16.8831 8.29395 17.6299C7.50411 18.3767 6.39822 18.75 4.97656 18.75C3.43648 18.75 2.21205 18.3177 1.30371 17.4531C0.434902 16.5491 6.91557e-05 15.1339 0 13.208C0 11.6357 0.177755 10.2005 0.533203 8.90332C0.888653 7.56684 1.38274 6.36796 2.01465 5.30664C2.68603 4.24539 3.45539 3.28173 4.32422 2.41699C5.23259 1.51291 6.22077 0.707543 7.28711 0L11.3154 2.94824ZM25 2.94824C23.9337 3.45924 22.9464 4.02929 22.0381 4.6582C21.1297 5.28714 20.3394 5.97482 19.668 6.72168C18.9967 7.42913 18.4633 8.23475 18.0684 9.13867C17.8288 9.72148 17.6719 10.3674 17.5938 11.0752C18.007 11.0035 18.4021 10.9668 18.7793 10.9668C20.1221 10.9668 21.1886 11.3015 21.9785 11.9697C22.7683 12.5987 23.1631 13.542 23.1631 14.7998C23.163 15.9396 22.7483 16.8831 21.9189 17.6299C21.1291 18.3765 20.0232 18.75 18.6016 18.75C17.0616 18.7499 15.8571 18.3177 14.9883 17.4531C14.1195 16.5491 13.6846 15.1339 13.6846 13.208C13.6846 11.6357 13.8623 10.2005 14.2178 8.90332C14.5732 7.56684 15.0673 6.36796 15.6992 5.30664C16.3311 4.24534 17.1014 3.28176 18.0098 2.41699C18.918 1.51306 19.9055 0.70745 20.9717 0L25 2.94824Z"
														fill="white"></path>
												</svg>
											</div>
											<div class="flex absolute absolute--br w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19"
												     fill="none">
													<path
														d="M13.6846 15.8018C14.7114 15.2908 15.6795 14.7207 16.5879 14.0918C17.4961 13.463 18.2857 12.775 18.957 12.0283C19.6283 11.3209 20.1617 10.5152 20.5566 9.61133C20.7966 9.02745 20.9636 8.38021 21.0596 7.6709C20.6362 7.74587 20.2314 7.7832 19.8457 7.7832C18.503 7.78316 17.4363 7.44847 16.6465 6.78027C15.8569 6.15134 15.4619 5.20782 15.4619 3.9502C15.462 2.81038 15.8767 1.86691 16.7061 1.12012C17.4959 0.373323 18.6018 4.57764e-05 20.0234 0C21.5635 0 22.788 0.43232 23.6963 1.29688C24.5651 2.20089 24.9999 3.61613 25 5.54199C25 7.11432 24.8222 8.54951 24.4668 9.84668C24.1113 11.1832 23.6173 12.382 22.9854 13.4434C22.314 14.5046 21.5446 15.4683 20.6758 16.333C19.7674 17.2371 18.7792 18.0425 17.7129 18.75L13.6846 15.8018ZM0 15.8018C1.06632 15.2908 2.05356 14.7207 2.96191 14.0918C3.87029 13.4629 4.66063 12.7752 5.33203 12.0283C6.00331 11.3209 6.53673 10.5153 6.93164 9.61133C7.17119 9.02852 7.32814 8.38258 7.40625 7.6748C6.99302 7.74653 6.59791 7.78318 6.2207 7.7832C4.87789 7.7832 3.81137 7.44851 3.02148 6.78027C2.23166 6.15134 1.83691 5.20801 1.83691 3.9502C1.83698 2.81038 2.25174 1.86691 3.08105 1.12012C3.87092 0.373474 4.97684 0 6.39844 0C7.93844 6.29425e-05 9.14292 0.432299 10.0117 1.29688C10.8805 2.20089 11.3154 3.61613 11.3154 5.54199C11.3154 7.11429 11.1377 8.54953 10.7822 9.84668C10.4268 11.1832 9.93269 12.382 9.30078 13.4434C8.66887 14.5047 7.89859 15.4682 6.99023 16.333C6.08196 17.2369 5.09452 18.0426 4.02832 18.75L0 15.8018Z"
														fill="white"></path>
												</svg>
											</div>
										</div>
									</div>
								</div>
								<div class="absolute absolute--full w-full h-full gradient1 rotate-y-180"></div>
							</div>
						<?php
						endif;
						?>
					</div>
				</div>
				<div class="flex justify-center">
					<?php
					echo get_template_part( 'components/ui/btn', null, [
						'text'  => $buttonText,
						'link'  => $buttonLink,
						'style' => 'primary',
						'class' => '',
						/*'attributes' => [
							'target' => '_blank',
							'rel'    => 'noopener noreferrer',
						],*/
					] );
					?>
				</div>
			</div>
		</div>
	</section>
	<div class="absolute inset-0 gradient2 opacity-25 -z-1"></div>
	<div class="absolute absolute--b z--1 flex justify-center">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/misc/double-ring.avif'; ?>"
		     loading="lazy" alt="double ring" class="max-w-396 w-full">
	</div>
</div>
