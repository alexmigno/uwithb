<?php
/**
 * @name crimsonCreatePrivacy
 * Funzione che, all'attivazione del tema, crea una pagina "Privacy" standard
 * @param null
 * @return null
 */
add_action("after_setup_theme", "crimsonCreatePrivacy");
function crimsonCreatePrivacy() {
	if (isset($_GET['activated']) && is_admin()) {
		$new_page_title = 'Privacy';
		$new_page_content = "
		<div>

INFORMAZIONI RELATIVE AL TRATTAMENTO DI DATI PERSONALI

(<strong>decreto legislativo 30 giugno 2003 n. 196</strong>)

Ai sensi del <strong>decreto legislativo 30 giugno 2003 n. 196</strong>,<strong> " . get_bloginfo("name") . "</strong> La informa, nella Sua qualità di Interessato, che i Suoi dati personali (i \"Dati\") verranno trattati come segue:

<strong>FINALITÀ DEL TRATTAMENTO: </strong>

La raccolta ed il trattamento dei Dati sono effettuati dalla Società per finalità di:
<ul>
	<li>garanzia e assistenza tecnica pre e post vendita;</li>
	<li>marketing e pubblicità;</li>
	<li>invio di materiale informativo e promozionale;</li>
	<li>analisi statistica per finalità di marketing;</li>
	<li>rilevazione del grado di soddisfazione;</li>
	<li>inviti ad eventi informativi o promozionali.</li>
</ul>
<strong>MODALITÀ DEL TRATTAMENTO - INCARICATI: </strong>

Il trattamento dei Dati per le suddette finalità avrà luogo con modalità sia automatizzate che non automatizzate e nel rispetto delle regole di riservatezza e di sicurezza previste dalla legge. I Dati potranno essere trattati, per conto della Società, da dipendenti, professionisti o società, incaricati di svolgere specifici servizi elaborativi o attività complementari a quelle della Società, ovvero necessarie all'esecuzione delle operazioni e dei servizi della Società.

<strong>CONFERIMENTO DEI DATI: </strong>

Il conferimento dei Dati è assolutamente facoltativo. L'eventuale rifiuto di conferire i Dati o di rispondere ad interviste telefoniche non comporta alcuna conseguenza, salvo l'impossibilità di fruire dei servizi offerti dalla Società.

<strong>COMUNICAZIONE DEI DATI: </strong>

In considerazione dell'esistenza di collegamenti telematici, informatici o di corrispondenza,i Dati possono essere resi disponibili all'estero, anche al di fuori dei Paesi appartenenti all'Unione Europea e possono essere comunicati a:
<ul>
	<li>dipendenti della Società non specificamente incaricati;</li>
	<li>società o altri soggetti che svolgono attività in outsourcing per conto della Società.</li>
</ul>
<strong>DIRITTI DELL'INTERESSATO: </strong>

<strong>Il decreto legislativo 30 giugno 2003 n. 196 </strong>Le riconosce i seguenti diritti:
<ul>
	<li>di accedere ai registri del Garante;</li>
	<li>di ottenere informazioni circa i Dati che La riguardano;</li>
	<li>di ottenerne la cancellazione od il blocco, ovvero l'aggiornamento, la rettifica o l'integrazione, nonché l'attestazione che tali operazioni sono state portate a conoscenza di coloro ai quali i Dati sono stati comunicati;</li>
	<li>di opporsi, per motivi legittimi, al trattamento dei Dati;</li>
	<li>di opporsi ai trattamenti per finalità commerciali, pubblicitarie o di ricerca di mercato.</li>
</ul>
Per esercitare i suddetti diritti potrà scrivere a<strong> " . get_bloginfo("name") . "
</strong>

<strong>TITOLARE E RESPONSABILE DEL TRATTAMENTO: </strong>

Responsabile del trattamento dei Dati è l'Ufficio Commerciale, presso la sede del Titolare.

</div>
		
		";
		$new_page_template = '';
		//ex. template-custom.php. Leave blank if you don't want a custom page template.
		//don't change the code bellow, unless you know what you're doing
		$page_check = get_page_by_title($new_page_title);
		$new_page = array('post_type' => 'page', 'post_title' => $new_page_title, 'post_content' => $new_page_content, 'post_status' => 'publish', 'post_author' => 1, );
		if (!isset($page_check -> ID)) {
			$new_page_id = wp_insert_post($new_page);
			if (!empty($new_page_template)) {
				update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
			}
		}
	}
}
?>
