<?php
/**
 * @name crimsonRemoveAttachmentImageLinkFromContent
 * Al caricamento di una immagine nel corpo di un articolo, questa funzione rimuove il collegamento ipertestuale generato da Wordpress
 * @param $content - il contenuto dell'articolo
 * @return null
 *
 */

function crimsonRemoveAttachmentImageLinkFromContent($content) {
	$content = preg_replace(array('{<a(.*?)(wp-att|wp-content\/uploads)[^>]*><img}', '{ wp-image-[0-9]*" /></a>}'), array('<img', '" />'), $content);
	return $content;
}

add_filter('the_content', 'crimsonRemoveAttachmentImageLinkFromContent');
?>
