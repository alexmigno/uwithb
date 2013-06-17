<?php
/**
 * @name crimsonAddCrimsonNoteIntoAdminArea
 * Funzione che aggiunge note nell'area riservata attraverso Opzioni Tema
 * @param null
 * @return null
 * @see 
 */
function crimsonAddCrimsonNoteIntoAdminArea() {
    echo '<div class="updated">';
    global $crimson;
    echo $crimson['note'];
    echo '</div>';
}



add_action( 'admin_notices', 'crimsonAddCrimsonNoteIntoAdminArea');


?>