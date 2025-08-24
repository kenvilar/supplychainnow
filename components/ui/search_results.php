<?php
// Read query params (component only; no header/footer)
$search_query = isset($_GET['s']) ? sanitize_text_field(wp_unslash($_GET['s'])) : '';
// Support custom param `search` when using in-page search (avoids WP search routing)
if ($search_query === '' && isset($_GET['search'])) {
    $search_query = sanitize_text_field(wp_unslash($_GET['search']));
}
$industries   = isset($_GET['industries']) ? sanitize_text_field(wp_unslash($_GET['industries'])) : '';

// Early return if no filters/search so this component can be included anywhere safely
if ($search_query === '' && $industries === '') {
    return;
}

// Determine current page for pagination
$paged = (int) get_query_var('paged');
if ($paged < 1) {
    $paged = isset($_GET['paged']) ? max(1, (int) $_GET['paged']) : 1;
}

// Build query only if there is something to search/filter
$results_query = null;
if ($search_query !== '' || $industries !== '') {
    $taxonomy = isset($_GET['taxonomy']) ? sanitize_key($_GET['taxonomy']) : 'post_tag';

    $args = [
        'post_type'       => 'page',            // try 'any' to test
        's'               => $search_query,     // from ?search=
        'post_status'     => 'publish',
        'posts_per_page'  => 10,
        'paged'           => $paged,
        'search_columns'  => ['post_title','post_content'],
        'suppress_filters'=> true               // critical: ignore posts_where/posts_search filters
      ];

    if ($industries !== '') {
        $args['tax_query'] = [
            [
                'taxonomy' => $taxonomy,
                'field'    => 'name',
                'terms'    => [$industries],
                'include_children' => false,
            ],
        ];
    }
    
    $results_query = new WP_Query($args);
}

?>
<section class="section">
    <div class="site-padding sm:py-60 pb-60">
        <div class="max-w-615 mx-auto">
            <?php if ($results_query instanceof WP_Query) : ?>
                <div class="mb-52">
                    <div class="mb-20">
                        <h2 class="text-center">Search Results</h2>
                    </div>
                    <?php
                    get_template_part(
                        'components/line-with-blinking-dot',
                        null,
                        [
                            'maxWidthClassnames' => ''
                        ]
                    );
                    ?>
                </div>
                <?php if ($results_query->have_posts()) : ?>
                    <ul class="list-unstyled grid gap-20">
                        <?php while ($results_query->have_posts()) : $results_query->the_post(); ?>
                            <li class="border border-secondary/30 rounded-10 p-20">
                                <a href="<?php the_permalink(); ?>" class="text-primary text-lg font-semibold"><?php the_title(); ?></a>
                                <p class="mt-8 text-sm text-textcolor/80"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 32, '…')); ?></p>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                    <?php
                    $big = 999999999; // unlikely integer
                    $add_args = [];
                    if (isset($_GET['search'])) {
                        $add_args['search'] = $search_query;
                    } elseif ($search_query !== '') {
                        $add_args['s'] = $search_query;
                    }
                    if ($industries !== '') {
                        $add_args['industries'] = $industries;
                    }
                    if (isset($_GET['taxonomy'])) {
                        $add_args['taxonomy'] = sanitize_key($_GET['taxonomy']);
                    }
                    $pagination = paginate_links(
                        [
                            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format'    => '?paged=%#%',
                            'current'   => $paged,
                            'total'     => (int) $results_query->max_num_pages,
                            'prev_text' => '« Prev',
                            'next_text' => 'Next »',
                            'add_args'  => !empty($add_args) ? $add_args : false,
                        ]
                    );
                    if ($pagination) {
                        echo '<nav class="pagination mt-24">' . $pagination . '</nav>';
                    }
                    wp_reset_postdata();
                    ?>
                <?php else : ?>
                    <p class="text-center">No results found.</p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>