<?php
/**
 * @name crimsonCreateCustomImageSize
 * Crea nuove dimensioni per le immagine caricate con l'upload di Wordpress
 * @param $sizes, l'array delle dimensioni già presenti e di default
 * @return $newsize, l'array delle dimensioni aggiornato
 * @see 
 */
function crimsonCreateCustomImageSize($sizes) {
        $addsizes = array(
                "offerte" => __( "offerte"),
                "interne" => __( "interne"),
                );
        $newsizes = array_merge($sizes, $addsizes);
        return $newsizes;
}

//aggiungo una nuova dimensione per le immagini
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'offerte', 280, 80, true ); //(cropped)
	add_image_size( 'interne', 570, 220, true );
}
add_filter('image_size_names_choose', 'crimsonCreateCustomImageSize');


?>