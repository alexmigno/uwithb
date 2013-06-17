<?php
/**
 * @name crimsonCreateCustomTaxonomies
 * Crea una nuova tassonomia
 * @param null
 * @return null
 */
 function crimsonCreateCustomTaxonomies() {
	register_taxonomy(
		'Nazione',
		'gruppi-in-visita',
		array(
			'label' => __( 'Nazione' ),
			'sort' => true,
			'show_ui' => true,
			'hierarchical' => false,
			'args' => array( 'orderby' => 'term_order' ),
			'rewrite' => array( 'slug' => 'nazione' )
		)
	);
}
add_action( 'init', 'nazione_init' );


?>