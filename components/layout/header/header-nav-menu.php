<?php

$nav_classnames = $args['nav_classnames'] ?? ''; // '' || 'nav-fixed'
?>
<div class="nav <?= esc_attr($nav_classnames); ?>">
	<div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="all"
	     role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
		<div class="nav-padding">
			<div class="nav-container w-container">
				<div class="nav-wrapper">
					<a href="/" aria-current="page" class="nav__brandlink w-nav-brand w--current" aria-label="home">
						<div>
							<img
								src="<?php
								echo get_stylesheet_directory_uri(); ?>/assets/img/logo/header-logo.svg"
								loading="lazy" alt="header logo" class="image h-auto!">
						</div>
					</a>
					<nav role="navigation" class="navmenu w-nav-menu">
						<div class="navlink__group">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'scn_primary_menu',
								'walker' => new SCN_Nav_Walker(),
								'container' => false,
								'items_wrap' => '%3$s',
								'fallback_cb' => false,
							));
							?>
						</div>
						<div class="navlink_cta__group">
							<a href="/contact" class="btn secondary w-inline-block">
								<div>Contact Us</div>
							</a>
							<a href="https://account.moxo.com/getstarted/#/freeLogin/EnterYourAccount" target="_blank"
							   class="btn primary-outline w-inline-block client-portal">
								<div>Client Portal</div>
							</a>
						</div>
					</nav>
					<div class="navmenu__btn w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button"
					     tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
						<div class="navmenu__icon">
							<div class="navmenu__icon-bar top"></div>
							<div class="navmenu__icon-bar middle"></div>
							<div class="navmenu__icon-bar bottom"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
	</div>
	<div class="display-none">
		<script>
			/* ======Fixed Navbar Scroll Animation====== */
			document.addEventListener("DOMContentLoaded", (event) => {
				function navWhileScrollAnimation() {
					const nav = document.querySelector(".nav");
					const offset = 100;
					const mq = window.matchMedia('(max-width: 991px)');

					window.addEventListener("scroll", () => {
						const scrollPos = window.scrollY;

						if (scrollPos > offset) {
							if (!nav.classList.contains("scroll-fixed")) {
								nav.classList.add("scroll-fixed");
								if (!mq.matches) {
									nav.classList.add("bg-cargogrey")
								}
							} else {
								if (!mq.matches) {
									nav.classList.add("bg-cargogrey")
								}
							}
						} else {
							if (nav.classList.contains("bg-cargogrey")) {
								nav.classList.add('opacity-0!');
								setTimeout(() => {
									nav.classList.remove("scroll-fixed", "bg-cargogrey");
									nav.classList.remove('opacity-0!');
								}, 100);
							} else {
								nav.classList.add('opacity-0!');
								setTimeout(() => {
									nav.classList.remove("scroll-fixed");
									nav.classList.remove('opacity-0!');
								}, 100);
							}
						}
					});
				}

				navWhileScrollAnimation();
			});
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', (event) => {
				function clickNavHamburgerBtn() {
					let navMenuBtn = document.querySelector('.navmenu__btn');
					let mainWrapper = document.querySelector('.main-wrapper');
					let wrapperInnerContent = document.querySelector('.wrapper_inner .content');
					let navMenu = document.querySelector('.navmenu');
					let footer = document.querySelector('footer');
					let wNavOverlay = document.querySelector('.w-nav-overlay');
					navMenuBtn.addEventListener('click', function (event) {
						navMenuBtn.classList.toggle('w--open');
						if (mainWrapper) {
							mainWrapper.classList.toggle('display-none');
						} else {
							if (wrapperInnerContent) {
								wrapperInnerContent.classList.toggle('display-none');
							}
						}
						footer.classList.toggle('display-none');
						['overflow-visible!', 'h-full!', 'block!'].forEach(c => wNavOverlay.classList.toggle(c));
						if (navMenu) {
							navMenu.classList.toggle('data-menu-open');
						}
					});
				}

				setTimeout(function () {
					clickNavHamburgerBtn();
				}, 500);
			});
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', () => {
				function navMenuMoveToOverlayWhenMobile() {
					const navMenu = document.querySelector('.navmenu.w-nav-menu');
					const navOverlay = document.querySelector('.w-nav-overlay');
					const brandLink = document.querySelector('a.nav__brandlink.w-nav-brand');

					if (!navMenu || !navOverlay || !brandLink) return;

					const mq = window.matchMedia('(max-width: 991px)');

					const placeNav = (m) => {
						if (m.matches) {
							// <= 991px: put nav inside overlay
							if (navMenu.parentElement !== navOverlay) {
								navOverlay.appendChild(navMenu);
							}
						} else {
							// > 991px: put nav right AFTER the brand link (same parent, as a sibling)
							if (brandLink.nextElementSibling !== navMenu) {
								brandLink.insertAdjacentElement('afterend', navMenu);
							}
						}
					};

					placeNav(mq); // on load
					mq.addEventListener('change', placeNav); // on resize breakpoint changes
				}

				navMenuMoveToOverlayWhenMobile();
			});
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', () => {
				function navMenuClickDuringMobile() {
					const dropdowns = document.querySelectorAll('.nav__dropdown.w-dropdown');

					// turn off Webflow hover to avoid fighting
					dropdowns.forEach((el) => el.setAttribute('data-hover', 'false'));

					const canHover = window.matchMedia(
						'(hover: hover) and (pointer: fine)'
					).matches;

					dropdowns.forEach((dd) => {
						const list = dd.querySelector('.nav-dropdown__list.w-dropdown-list');
						const toggle = dd.querySelector('.w-dropdown-toggle');
						if (!list || !toggle) return;

						const open = () => {
							dd.classList.add('w--open');
							list.classList.add('w--open');
							toggle.setAttribute('aria-expanded', 'true');
							list.style.display = 'block'; // override inline style from Webflow
						};

						const close = () => {
							dd.classList.remove('w--open');
							list.classList.remove('w--open');
							toggle.setAttribute('aria-expanded', 'false');
							list.style.display = '';
						};

						// desktop hover
						if (canHover) {
							dd.addEventListener('mouseenter', open);
							dd.addEventListener('mouseleave', close);
						}

						// mobile tap
						const onToggle = (e) => {
							e.preventDefault();
							e.stopPropagation();
							dd.classList.contains('w--open') ? close() : open();
						};
						toggle.addEventListener('click', onToggle);
						toggle.addEventListener('touchend', onToggle);

						// close when tapping outside
						document.addEventListener('click', (e) => {
							if (!dd.contains(e.target)) close();
						});
					});
				}

				navMenuClickDuringMobile();
			});
		</script>
	</div>
</div>