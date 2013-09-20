<?php
/**
 * @name crimsonCreatePagination
 * Crea un nuovo tipo di dato
 * @param null
 * @return null
 * @see loop.php
 */
function crimsonCreateCustomPostType() {
	register_post_type( 'homeslide',
		array(
			'labels' => array(
				'name' => __( 'Home Slide' ),
				'singular_name' => __( 'Home Slide' ),
				'add_new_item' => __( 'Aggiungi una nuova slide' )
			),
		'public' => true,
		'supports' => array( 'title','page-attributes'),
		'has_archive' => false,
		'publicly_queryable' => false
		)
	);
        
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