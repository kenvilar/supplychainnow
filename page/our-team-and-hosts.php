<?php
/*
 * Template Name: Our Team and Hosts v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/our-team-and-hosts');
		get_template_part('components/section/our-team-and-hosts/the-team-behind-the-voice-of-supply-chain');
		get_template_part('components/section/our-team-and-hosts/awards-and-recognitions');
		get_template_part('components/section/our-team-and-hosts/our-hosts-behind-the-microphone');
		get_template_part('components/section/our-team-and-hosts/meet-the-team');
		get_template_part('components/section/our-team-and-hosts/meet-our-hosts');
		?>
	</div>
</div>
<dialog data-lenis-prevent="" class="my-modal">
	<div class="relative">
		<div class="min-h-990 h-full flex justify-center pt-68 pb-80 px-20">
			<div class="w-layout-blockcontainer max-w-796 w-full md:max-w-full w-container">
				<div class="mb-36">
					<div class="flex justify-center">
						<div class="overflow-hidden rounded-12">
							<div to-image-wrapper="" class="max-w-228 w-full h-228"></div>
						</div>
					</div>
				</div>
				<div class="mb-8">
					<div class="text-center">
						<div to-fullname-wrapper="" class="text-3xl font-semibold">Mary Kate Love</div>
					</div>
				</div>
				<div class="mb-36">
					<div class="text-center text-md font-semibold text-secondary">
						<div class="flex items-center justify-center">
							<div to-role-wrapper="">VP, Operations &amp; Strategy</div>
							<div class="px-4">|</div>
							<div to-linkedin-wrapper="" class="flex items-center"></div>
						</div>
					</div>
				</div>
				<div to-bio-wrapper="" class="our-team-paragraph-modal w-richtext"></div>
			</div>
		</div>
		<div close-modal="" class="flex absolute absolute--tr p-12 mt-36 mr-36 cursor-pointer w-embed">
			<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
				<path d="M1 1L12.73 12.73" stroke="#313F4A" stroke-width="2" stroke-miterlimit="10"></path>
				<path d="M12.73 1L1 12.73" stroke="#313F4A" stroke-width="2" stroke-miterlimit="10"></path>
			</svg>
		</div>
	</div>
</dialog>
<div class="display-none w-embed w-script">
	<script>
		document.addEventListener('DOMContentLoaded', (event) => {
			function myModalFunc() {
				const openModalButton = document.querySelectorAll(
					'[meet-the-team-list] .group'
				);
				const myModal = document.querySelector('.my-modal');
				const closeModal = document.querySelector('[close-modal]');
				// modal
				let toImgWrapper = document.querySelector('[to-image-wrapper]');
				let toFullnameWrapper = document.querySelector('[to-fullname-wrapper]');
				let toRoleWrapper = document.querySelector('[to-role-wrapper]');
				let toLinkedinWrapper = document.querySelector('[to-linkedin-wrapper]');
				let toBioWrapper = document.querySelector('[to-bio-wrapper]');
				if (openModalButton.length > 0) {
					openModalButton.forEach((item, index) => {
						let openModal = item.querySelector('[open-modal]');
						let fromImgWrapper = item.querySelector('[from-image-wrapper]');
						let fromFullnameWrapper = item.querySelector('[from-fullname-wrapper]');
						let fromRoleWrapper = item.querySelector('[from-role-wrapper]');
						let fromLinkedinWrapper = item.querySelector('[from-linkedin-wrapper]');
						let fromBioWrapper = item.querySelector('[from-bio-wrapper]');
						if (openModal) {
							openModal.addEventListener('click', function () {
								toImgWrapper.appendChild(
									fromImgWrapper.querySelector('img').cloneNode(true)
								);
								toFullnameWrapper.textContent =
									fromFullnameWrapper.textContent.trim();
								toRoleWrapper.textContent = fromRoleWrapper.textContent.trim();
								toLinkedinWrapper.appendChild(
									fromLinkedinWrapper.querySelector('a').cloneNode(true)
								);
								toBioWrapper.innerHTML = fromBioWrapper.innerHTML;
								// open the modal
								setTimeout(function () {
									myModal.showModal();
								}, 200);
							});
						}
					});
				}
				if (closeModal) {
					closeModal.addEventListener('click', function () {
						closeModalExpressions();
						// close the modal
						myModal.close();
					});
					myModal.addEventListener('close', () => {
						closeModalExpressions();
					});
					myModal.addEventListener('click', (e) => {
						if (e.target === myModal) {
							myModal.close();
						}
					});
				}

				function closeModalExpressions() {
					toImgWrapper.querySelector('img').remove();
					toLinkedinWrapper.querySelector('a').remove();
					toBioWrapper.innerHTML = null;
				}
			}

			myModalFunc();
		});
	</script>
</div>
<?php
get_footer(); ?>
