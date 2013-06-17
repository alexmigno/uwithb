<?php
/**
 * @name crimsonCreatePagination
 * Crea un nuovo tipo di dato
 * @param null
 * @return null
 * @see loop.php
 */
function crimsonCreateCustomPostType() {
	register_post_type( 'produzioni',
		array(
			'labels' => array(
				'name' => __( 'Produzioni' ),
				'singular_name' => __( 'Produzione' )
			),
		'public' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'has_archive' => true
		)
	);
}
add_action( 'init', 'crimsonCreateCustomPostType' );


?>