<?php

// Meta fields to select from already-selected tags.
// - Pages use taxonomy "tags"
// - Posts use taxonomy "post_tag"
add_action( 'add_meta_boxes', function () {
	// Pages: taxonomy "tags"
	add_meta_box(
		'scn_page_selected_tags_meta',
		'Primary Tag (from selected tags)',
		'scn_render_selected_tags_meta_box_pages',
		'page',
		'side',
		'default'
	);

	// Posts: taxonomy "post_tag"
	add_meta_box(
		'scn_post_selected_post_tags_meta',
		'Related Post Tag (from selected post_tags)',
		'scn_render_selected_tags_meta_box_posts',
		'post',
		'side',
		'default'
	);
} );

/**
 * Render meta box for Pages (taxonomy = tags)
 */
function scn_render_selected_tags_meta_box_pages( $post ) {
	$taxonomy = 'tags'; // taxonomy used on pages per request
	wp_nonce_field( 'scn_save_selected_tag_meta', 'scn_selected_tag_nonce' );

	$options = array();
	if ( taxonomy_exists( $taxonomy ) ) {
		$assigned_terms = get_the_terms( $post->ID, $taxonomy );
		if ( ! is_wp_error( $assigned_terms ) && ! empty( $assigned_terms ) ) {
			foreach ( $assigned_terms as $term ) {
				$options[ $term->term_id ] = $term->name;
			}
			// Sort options by name for better UX.
			asort( $options, SORT_NATURAL | SORT_FLAG_CASE );
		}
	}

	$current = get_post_meta( $post->ID, '_scn_selected_page_tag', true );

	echo '<p><label for="scn_selected_page_tag">Choose one of the selected tags:</label></p>';
	echo '<select id="scn_selected_page_tag" name="scn_selected_page_tag" style="width:100%;">';
	echo '<option value="">— None —</option>';
	foreach ( $options as $term_id => $label ) {
		printf(
			'<option value="%d"%s>%s</option>',
			(int) $term_id,
			selected( (int) $current, (int) $term_id, false ),
			esc_html( $label )
		);
	}
	echo '</select>';

	if ( empty( $options ) ) {
		echo '<p style="margin-top:8px;color:#666;">No tags are selected on this page. Assign some tags in the Tags box first.</p>';
	}
}

/**
 * Render meta box for Posts (taxonomy = post_tag)
 */
function scn_render_selected_tags_meta_box_posts( $post ) {
	$taxonomy = 'post_tag';
	wp_nonce_field( 'scn_save_selected_tag_meta', 'scn_selected_tag_nonce' );

	$options = array();
	if ( taxonomy_exists( $taxonomy ) ) {
		$assigned_terms = get_the_terms( $post->ID, $taxonomy );
		if ( ! is_wp_error( $assigned_terms ) && ! empty( $assigned_terms ) ) {
			foreach ( $assigned_terms as $term ) {
				$options[ $term->term_id ] = $term->name;
			}
			asort( $options, SORT_NATURAL | SORT_FLAG_CASE );
		}
	}

	$current = get_post_meta( $post->ID, '_scn_selected_post_tag', true );

	echo '<p><label for="scn_selected_post_tag">Choose one of the selected post tags:</label></p>';
	echo '<select id="scn_selected_post_tag" name="scn_selected_post_tag" style="width:100%;">';
	echo '<option value="">— None —</option>';
	foreach ( $options as $term_id => $label ) {
		printf(
			'<option value="%d"%s>%s</option>',
			(int) $term_id,
			selected( (int) $current, (int) $term_id, false ),
			esc_html( $label )
		);
	}
	echo '</select>';

	if ( empty( $options ) ) {
		echo '<p style="margin-top:8px;color:#666;">No post tags are selected on this post. Assign some tags in the Tags panel first.</p>';
	}
}

/**
 * Save meta box selections safely and only if chosen term is among assigned terms
 */
// Run after taxonomies are saved to avoid wiping the selected primary tag when terms
// haven’t been persisted yet (Gutenberg/REST timing).
add_action( 'save_post', function ( $post_id ) {
	// Basic checks
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! isset( $_POST['scn_selected_tag_nonce'] )
	     || ! wp_verify_nonce( $_POST['scn_selected_tag_nonce'],
			'scn_save_selected_tag_meta' )
	) {
		return;
	}

	// Capability checks
	if ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	// Helper to validate selection against assigned terms and store readable name
	$validate_and_save = function ( $meta_key, $maybe_id, $taxonomy ) use ( $post_id ) {
		$maybe_id      = is_string( $maybe_id ) ? sanitize_text_field( wp_unslash( $maybe_id ) ) : $maybe_id;
		$name_meta_key = $meta_key . '_name';

		if ( $maybe_id === '' ) {
			delete_post_meta( $post_id, $meta_key );
			delete_post_meta( $post_id, $name_meta_key );

			return;
		}

		$maybe_id = (int) $maybe_id;

		if ( ! taxonomy_exists( $taxonomy ) ) {
			// Taxonomy missing -> don't save stray values
			delete_post_meta( $post_id, $meta_key );
			delete_post_meta( $post_id, $name_meta_key );

			return;
		}

		$assigned_terms = get_the_terms( $post_id, $taxonomy );
		if ( is_wp_error( $assigned_terms ) ) {
			// If terms can't be fetched right now, do not modify existing selection.
			return;
		}
		if ( empty( $assigned_terms ) ) {
			// Terms may not be persisted yet (editor timing). Avoid clearing previous selection.
			return;
		}

		$assigned_ids = wp_list_pluck( $assigned_terms, 'term_id' );
		if ( in_array( $maybe_id, $assigned_ids, true ) ) {
			update_post_meta( $post_id, $meta_key, $maybe_id );

			// Save readable name alongside the ID for easy display.
			$term_obj = get_term( $maybe_id, $taxonomy );
			if ( $term_obj && ! is_wp_error( $term_obj ) ) {
				update_post_meta( $post_id, $name_meta_key, sanitize_text_field( $term_obj->name ) );
			} else {
				delete_post_meta( $post_id, $name_meta_key );
			}
		} else {
			// The selected term isn’t among the post's assigned terms at this moment.
			// This can occur due to timing; avoid clearing previous value.
			return;
		}
	};

	// Save for Page (taxonomy=tags)
	if ( isset( $_POST['scn_selected_page_tag'] ) && ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) ) {
		$validate_and_save( '_scn_selected_page_tag', $_POST['scn_selected_page_tag'], 'tags' );
	}

	// Save for Post (taxonomy=post_tag)
	if ( isset( $_POST['scn_selected_post_tag'] ) && ( ! isset( $_POST['post_type'] ) || 'post' === $_POST['post_type'] ) ) {
		$validate_and_save( '_scn_selected_post_tag', $_POST['scn_selected_post_tag'], 'post_tag' );
	}
}, 100 );

/**
 * Get the readable selected tag name for a post.
 *
 * Checks the pre-saved name meta first, then falls back to resolving via the stored ID.
 *
 * @param int $post_id
 *
 * @return string Readable term name or empty string if none.
 */
if ( ! function_exists( 'scn_get_selected_tag_name' ) ) {
	function scn_get_selected_tag_name( $post_id ) {
		// Prefer stored readable names if available.
		$name = get_post_meta( $post_id, '_scn_selected_page_tag_name', true );
		if ( is_string( $name ) && $name !== '' ) {
			return $name;
		}

		$name = get_post_meta( $post_id, '_scn_selected_post_tag_name', true );
		if ( is_string( $name ) && $name !== '' ) {
			return $name;
		}

		// Fallback: compute name from stored IDs.
		$id = (int) get_post_meta( $post_id, '_scn_selected_page_tag', true );
		if ( $id > 0 ) {
			$term = get_term( $id, 'tags' );
			if ( $term && ! is_wp_error( $term ) ) {
				return $term->name;
			}
		}

		$id = (int) get_post_meta( $post_id, '_scn_selected_post_tag', true );
		if ( $id > 0 ) {
			$term = get_term( $id, 'post_tag' );
			if ( $term && ! is_wp_error( $term ) ) {
				return $term->name;
			}
		}

		return '';
	}
}