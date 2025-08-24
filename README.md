# Bridge Child Theme (Supply Chain Now)

A WordPress child theme for the Bridge parent theme tailored for Supply Chain Now. It adds custom layouts, search UX, Tailwind CSS styles, and small JS enhancements.

## Requirements
- WordPress 6.x
- Bridge parent theme installed and active (this is a child theme)
- PHP 8.1+
- Node.js 16+ and npm (for Tailwind builds)

Optional (IDE/linting):
- Composer (to install WordPress PHP stubs): `composer require --dev php-stubs/wordpress-stubs`

## Installation
1. Ensure the Bridge parent theme is installed under `wp-content/themes/bridge`.
2. Place this folder `bridge-child/` into `wp-content/themes/`.
3. In WP Admin → Appearance → Themes, activate “Bridge Child”.
4. Flush permalinks (WP Admin → Settings → Permalinks → Save Changes).

## File Structure (high-level)
- `functions.php` – Enqueues styles/scripts, registers CPT `program`, helpers
- `page/` – Page templates (e.g., `upcoming-live-programming.php`)
- `components/` – Reusable PHP view components
  - `ui/searchbar.php` – Search + industry filter form
  - `ui/search_results.php` – Paginated search results component
  - `section/*` – Page sections
- `assets/css/` – Tailwind input, compiled output, custom CSS
- `assets/js/custom.js` – Small UX helpers (custom select, auto-submit)
- `tailwind.config.js` – Tailwind configuration

## Styling with Tailwind CSS
- Source: `assets/css/tailwind-input.css`
- Output: `assets/css/tailwind-output.css` (enqueued by the theme)
- Config: `tailwind.config.js`

Build (one-time or watch):
```bash
# From theme directory: bridge-child
npm install
npm run watch
# one-off build
npm run build
```

Editor tips:
- If your editor flags `@apply` as unknown, either configure Stylelint for Tailwind or set VS Code setting:
```json
{
  "css.lint.unknownAtRules": "ignore"
}
```

## Scripts and Assets
- Core styles loaded in `functions.php`:
  - `assets/css/bridge-stylesheet.css` (copy of parent for overrides order)
  - `assets/css/tailwind-output.css`
  - Optional: Splide carousel assets on specific pages (via `scn_is_splide_page()`)
- JS: `assets/js/custom.js` (initializes custom select UI and auto-submits on selection)

## Key Components

### Search Bar – `components/ui/searchbar.php`
Props via third argument (associative array):
- `site_padding` – utility classes for section spacing, e.g. `pt-60 pb-52`.

Behavior:
- GET form posting to the current page (keeps you on the same template).
- Fields:
  - `s` (text): WordPress search query.
  - `industries` (select): Industry filter values are lowercased labels (e.g., `retail`, `supply chain`).
- Selecting a dropdown option auto-submits the form (handled in `assets/js/custom.js`).

### Search Results – `components/ui/search_results.php`
- Reusable component; include from any template:
```php
get_template_part('components/ui/search_results');
```
- Renders only when at least one of `s` or `industries` has a non-empty value.
- Performs a paginated `WP_Query` by combining `s` + `industries` into the search term for broad matching.
- Pagination preserves both `s` and `industries` query params.

### Upcoming Live Programming Page – `page/upcoming-live-programming.php`
- Includes:
  - Hero: `components/hero/upcoming-live-programming.php`
  - Search bar: `components/ui/searchbar.php`
  - Section: `components/section/upcoming-live-programming/upcoming-livestreams.php` (shown only when both `s` and `industries` are empty)
  - Results: `components/ui/search_results.php` (included always; renders only when there’s an active search/filter)

## Custom Post Type
- `program` CPT is registered in `functions.php`.
- Template support for single Program pages provided by `single-program.php`.

## Splide Carousel
- Conditionally enqueued via `scn_is_splide_page()` in `functions.php`.
- Styles: `assets/css/splide.min.css`
- Scripts: `assets/js/splide.min.js`, `assets/js/splide-extension-auto-scroll.min.js`

## Development Notes
- This is a child theme; do not remove parent Bridge assets unless you’ve moved necessary styles into the child (`bridge-stylesheet.css` is loaded before Tailwind output to allow Tailwind/util classes to take precedence where desired).
- Editor/linter warnings about undefined WP functions (e.g., `add_action`) are typical when not running in WP context. You can install WP stubs for better IntelliSense:
```bash
composer require --dev php-stubs/wordpress-stubs
```

## Troubleshooting
- 404 on CPT pages: Flush permalinks.
- Memory errors locally: increase `WP_MEMORY_LIMIT` in `wp-config.php` and your PHP `memory_limit`.
- `@apply` unknown at-rule: configure your editor/Stylelint as noted above.
- Search not submitting: ensure `assets/js/custom.js` is loaded and no other scripts call `preventDefault()` on the search form submit.

## Reuse Patterns
- Include the search bar on any page:
```php
get_template_part('components/ui/searchbar', null, [
  'site_padding' => 'pt-60 pb-52',
]);
```
- Include search results anywhere; it will render only when relevant params are present:
```php
get_template_part('components/ui/search_results');
```

## License
Proprietary to Supply Chain Now (or per your organization’s policy). Not for redistribution without permission.
