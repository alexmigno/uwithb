<?php
/**
 * @name crimsonAddACFNoteIntoAdminArea
 * Funzione che aggiunge note nell'area riservata attraverso Opzioni Tema di Advanced Custom Fields
 * @param null
 * @return null
 * @see 
 */
function crimsonAddACFNoteIntoAdminArea() {
    echo '<div class="updated">';
	if(function_exists("get_field")){
		echo get_field("note_del_sito","options");
	}
    echo '</div>';
}

add_action( 'admin_notices', 'crimsonAddACFNoteIntoAdminArea');


?>