<?php

/**
 * @name uwbGetThumbnailByIDPost
 * Funzione che, in base all'id del post/page/customposttype restituisce la thumbnail 
 * @param id del post, grandezza della thumbnail, boolean su immagine di default di riserva
 * @return id youtube
 * 
 */
//funzione che restituisce l'url della thumbnail in base al post id
function uwbGetThumbnailByIDPost($idPost, $size = "thumbnail", $default = true) {

    $thumbnail = wp_get_attachment_image_src(get_field("testata", $idPost), $size);
    //se il thumbnail non c'è, carico una immagine in evidenza

    if (empty($thumbnail[0]))
        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($idPost), $size);

    if (empty($thumbnail[0])) {
        if ($default)
            return $thumbnail[0] = IMAGESPATH . "/default-" . $size . ".jpg";
        else
            return null;
    }


    return $thumbnail[0];
}

?>