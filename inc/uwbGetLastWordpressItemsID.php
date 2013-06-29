<?php

function uwbGetLastWordpressItemsID($args){
    $elencoId = array();
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ) : $the_query->the_post();
        array_push($elencoId, get_the_ID());
    endwhile;
    
    return $elencoId;
}


?>


