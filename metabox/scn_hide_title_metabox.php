<?php

/**
 * Create a metabox here for all pages and post with these plans;
 * - name the metabox as "Hide the Title"
 *  - - the field is select, the options are:
 *  - - - yes
 *  - - - no
 *  - - - default is no
 * - when the field is yes, it will add `.hide-title` class to post_class
 * - when the field is no, it will remove the `.hide-title` class from post_class if there is existing
 * */
function add_hide_title_meta_box() {
	add_meta_box(
		'scn_hide_title_metabox',
		'Hide the Title',
		'render_hide_title_meta_box',
		[ 'page', 'post' ],
		'side',
		'default'
	);
}

add_action( 'add_meta_boxes', 'add_hide_title_meta_box' );

// Render Hide the Title metabox
function render_hide_title_meta_box( $post ) {
	wp_nonce_field( 'save_hide_title_meta', 'hide_title_nonce' );

	$hide_title = get_post_meta( $post->ID, '_scn_hide_title', true );
	$hide_title = $hide_title === 'yes' ? 'yes' : 'no';

	echo '<p><label for="scn_hide_title">Hide the title:</label></p>';
	echo '<select id="scn_hide_title" name="scn_hide_title" style="width:100%;">';
	echo '<option value="no"' . selected( $hide_title, 'no', false ) . '>No</option>';
	echo '<option value="yes"' . selected( $hide_title, 'yes', false ) . '>Yes</option>';
	echo '</select>';
}

// Save Hide the Title metabox data
function save_hide_title_meta( $post_id ) {
	if ( ! isset( $_POST['hide_title_nonce'] )
	     || ! wp_verify_nonce( $_POST['hide_title_nonce'],
			'save_hide_title_meta' )
	) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
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

	if ( isset( $_POST['scn_hide_title'] ) ) {
		$value = sanitize_text_field( $_POST['scn_hide_title'] );
		if ( in_array( $value, [ 'yes', 'no' ], true ) ) {
			update_post_meta( $post_id, '_scn_hide_title', $value );
		}
	}
}

add_action( 'save_post', 'save_hide_title_meta' );

// Add .hide-title class to post_class on frontend
function add_hide_title_class_to_post( $classes ) {
	if ( is_singular( [ 'page', 'post' ] ) ) {
		$hide_title = get_post_meta( get_the_ID(), '_scn_hide_title', true );
		if ( $hide_title === 'yes' ) {
			$classes[] = 'hide-title';
		}
	}

	return $classes;
}

add_filter( 'post_class', 'add_hide_title_class_to_post' );