<?php
/**
 * @name crimsonGetCleanCurrentURL
 * Questa funzione prende l'url della pagina corrente ed elimina tutti i parametri get restituendo il semplice indirizzo nella forma http://www.miosito.it/pagina.html
 * @param null
 * @return stringa con url corrente
 *
 */

function crimsonGetCleanCurrentURL(){
	$urlCorrente = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$array = explode("?", $urlCorrente);
	return "http://".$array[0];
	
}
?>
