<?php
/**
 * @name crimsonAddOpenGraphForPosts
 * Funzione che genera i meta tag open graph per la condivisione dei post sui social network
 * @param null
 * @return null, ma stampa all'interno di <head> gli open graph generati
 * @see 
 */
function crimsonAddOpenGraphForPosts() {
	 if ( is_singular() ) {
        global $post;
        setup_postdata( $post );
        $og_type = '<meta property="og:type" content="article" />' . "\n";
        $og_title = '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '" />' . "\n";
        $og_url = '<meta property="og:url" content="' . get_permalink() . '" />' . "\n";
        $og_description = '<meta property="og:description" content="' . esc_attr( get_the_excerpt() ) . '" />' . "\n";
        if ( has_post_thumbnail() ) {
            $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
            $og_image = '<meta property="og:image" content="' . $imgsrc[0] . '" />' . "\n";
        }
        echo $og_type . $og_title . $og_url . $og_description . $og_image;
    }
}

add_action( 'wp_head', 'crimsonAddOpenGraphForPosts');


?>