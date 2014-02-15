<?php

function cpw_add_meta_box() {
	add_meta_box(
		'cpw_sectionid',
		__( 'Content Block Information', 'custom-post-widget' ),
		'cpw_meta_box',
		'content_block',
		'side'
	);
}
add_action( 'add_meta_boxes', 'cpw_add_meta_box' );

function cpw_meta_box( $post ) {
	wp_nonce_field( 'cpw_meta_box', 'cpw_meta_box_nonce' );
	$value = get_post_meta( $post->ID, '_content_block_information', true );
	echo '<textarea id="cpw_content_block_information" cols="40" rows="4" name="cpw_content_block_information" style="height: 8em; width: 100%;">' . esc_attr( $value ) . '</textarea>';
}

function cpw_save_postdata( $post_id ) {
	if ( ! isset( $_POST['cpw_meta_box_nonce'] ) )
		return $post_id;

	$nonce = $_POST['cpw_meta_box_nonce'];

	if ( ! wp_verify_nonce( $nonce, 'cpw_meta_box' ) )
		return $post_id;

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
		return $post_id;

	if ( 'content_block' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
	}

	$content_block_information = sanitize_text_field( $_POST['cpw_content_block_information'] );
	update_post_meta( $post_id, '_content_block_information', $content_block_information );
}
add_action( 'save_post', 'cpw_save_postdata' );