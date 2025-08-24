<?php
$site_padding = $args["site_padding"] ?? "";
$selected_type = isset($_GET['type']) ? sanitize_text_field(wp_unslash($_GET['type'])) : '';
$current_industries = isset($_GET['industries']) ? sanitize_text_field(wp_unslash($_GET['industries'])) : '';
?>
<section class="section overflow-visible!">
	<div class="site-padding sm:py-60 <?php echo esc_attr($site_padding); ?>">
		<div class="max-w-615 mx-auto">
			<form class="form"
				method="get" action="<?php echo esc_url(get_permalink()); ?>" onsubmit="if(!this.industries.value){this.industries.disabled=true}">
				<div class="flex gap-11 justify-between items-stretch">
					<div class="max-w-423 w-full md:max-w-full">

						<div class="relative overflow-hidden rounded-100 border border-secondary/50 bg-[#EBF6FF]">
							<label>
								<input
									type="search"
									name="search"
									value="<?php echo isset($_GET['search']) ? esc_attr(sanitize_text_field(wp_unslash($_GET['search']))) : ''; ?>"
									placeholder="Search by episode, topic, name, etc..."
									class="overflow-hidden rounded-100 w-full h-43 py-14 pl-48 pr-12 text-sm font-light placeholder:text-secondary" />
							</label>
							<div class="absolute absolute--l flex items-center justify-center pl-22">
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
									<path
										d="M6.31756 11.6351C9.25436 11.6351 11.6351 9.25436 11.6351 6.31756C11.6351 3.38075 9.25436 1 6.31756 1C3.38075 1 1 3.38075 1 6.31756C1 9.25436 3.38075 11.6351 6.31756 11.6351Z"
										stroke="#4E88B6" stroke-miterlimit="10" />
									<path d="M14 13.9997L10.4529 10.4526" stroke="#4E88B6" stroke-miterlimit="10" />
								</svg>
							</div>
						</div>


					</div>
					<div class="max-w-181 w-full md:max-w-full">
						<label class="sr-only" for="search-industries">Filter type</label>
						<div class="form-select-control">
							<select id="search-industries" name="industries" class="select">
								<option value="" <?php echo $current_industries === '' ? 'selected' : ''; ?>>Sort by Industries</option>
								<option value="manufacturing" <?php echo $current_industries === 'manufacturing' ? 'selected' : ''; ?>>Manufacturing</option>
								<option value="transportation" <?php echo $current_industries === 'transportation' ? 'selected' : ''; ?>>Transportation</option>
								<option value="supply chain" <?php echo $current_industries === 'supply chain' ? 'selected' : ''; ?>>Supply Chain</option>
								<option value="retail" <?php echo $current_industries === 'retail' ? 'selected' : ''; ?>>Retail</option>
								<option value="it & services" <?php echo $current_industries === 'it & services' ? 'selected' : ''; ?>>IT & Services</option>
								<option value="saas" <?php echo $current_industries === 'saas' ? 'selected' : ''; ?>>SaaS</option>
								<option value="distribution" <?php echo $current_industries === 'distribution' ? 'selected' : ''; ?>>Distribution</option>
								<option value="warehousing" <?php echo $current_industries === 'warehousing' ? 'selected' : ''; ?>>Warehousing</option>
								<option value="supply chain tech" <?php echo $current_industries === 'supply chain tech' ? 'selected' : ''; ?>>Supply Chain Tech</option>
								<option value="logistics/3pls" <?php echo $current_industries === 'logistics/3pls' ? 'selected' : ''; ?>>Logistics/3PLs</option>
								<option value="shipping" <?php echo $current_industries === 'shipping' ? 'selected' : ''; ?>>Shipping</option>
							</select>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>