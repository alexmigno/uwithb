<?php
/**
 * @name crimsonCreateOptionsPage
 * Crea la pagina delle opzioni del Tema
 * @param 
 * @return 
 * @see 
 */
 
function crimsonCreateOptionsPage() {
      add_theme_page( __( 'Opzioni tema', 'crimsontheme' ), __( 'Opzioni tema', 'crimsontheme' ), 'edit_theme_options', 'theme_options', 'crimsonContentOptionsPage' );
}

function crimsonCreateOptionsPageInit(){
	register_setting( 'crimson_options', 'crimson_theme_options');
}


function crimsonContentOptionsPage() {
	global $select_options;
	if ( ! isset( $_REQUEST['settings-updated'] ) ){
		$_REQUEST['settings-updated'] = false;
	}
	
	/*
	 ELENCO OPZIONI 
	 * ragionecliente -> ragione sociale del cliente
	 * telefonocliente -> telefono del cliente
	 * indirizzocliente -> indirizzo del cliente
	 * mailcliente -> indirizzo email del cliente
	 * showlike -> visualizzare o meno i pulsanti "mi piace" di twitter, google e facebook
	 * showshare -> visualizzare o meno i pulsanti di condivisione
	 * twurl -> url profilo twitter
	 * fburl -> url profilo facebook
	 * gourl -> url profilo google+
	 * liurl -> url profilo linkedIn
	 * showcomments -> visualizzare i commenti
	 * copyright -> copyright nel footer
	
	*/
	
	?>
	
	<div>
	<?php screen_icon(); echo "<h2>". __( 'Opzioni tema', 'crimsontheme' ) . "</h2>"; ?>
	<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
	<div>
	<p><strong><?php _e( 'Opzioni salvate', 'crimsontheme' ); ?></strong></p></div>
	<?php endif; ?> 
	
	<form method="post" action="options.php">
	<?php settings_fields( 'crimson_options' ); ?>  
	
	<?php $options = get_option( 'crimson_theme_options' ); ?> 
        
        <input class="button-primary" type="submit" value="<?php _e( 'Salva Opzioni', 'crimsontheme' ); ?>" />
	<table class="form-table">
	<!-- iframe da un altro sito. Es informazioni sul tema, lo sviluppatore,... -->
	<tr valign="top"><td>
	<?php @readfile("http://www.themedeveloperpage.com/news.htm"); ?>
	</td>
	</tr>
	
        <tr valign="top"><td><h3><?php _e( 'Note area riservata', 'crimsontheme' ); ?></h3></td></tr>
        <tr valign="top">
		<th scope="row"><?php _e( 'Note area riservata', 'crimsontheme' ); ?></th>
		<td>
                    
                    <?php 
                    $editorSettings = array('wpautop'=>false,'media_buttons'=>false);
                    wp_editor( $options['note'], 'crimson_theme_options[note]',$editorSettings );?>

		</td>
	</tr>
        
	<!-- CLIENTE -->
	<tr valign="top"><td><h3><?php _e( 'Anagrafica cliente', 'crimsontheme' ); ?></h3></td></tr>
	<tr valign="top"><th scope="row">
	<?php _e( 'Ragione Sociale', 'crimsontheme' ); ?></th>
	<td>
	<input size="100" id="crimson_theme_options[ragionecliente]" type="text" name="crimson_theme_options[ragionecliente]" value="<?php esc_attr_e( $options['ragionecliente'] ); ?>" />
	</td>
	</tr>
	
	<tr valign="top"><th scope="row">
	<?php _e( 'Telefono', 'crimsontheme' ); ?></th>
	<td>
	<input size="100" id="crimson_theme_options[telefonocliente]" type="text" name="crimson_theme_options[telefonocliente]" value="<?php esc_attr_e( $options['telefonocliente'] ); ?>" />
	</td>
	</tr>
	
	<tr valign="top"><th scope="row">
	<?php _e( 'Indirizzo', 'crimsontheme' ); ?></th>
	<td>
	<input size="100" id="crimson_theme_options[indirizzocliente]" type="text" name="crimson_theme_options[indirizzocliente]" value="<?php esc_attr_e( $options['indirizzocliente'] ); ?>" />
	</td>
	</tr>
	
	<tr valign="top"><th scope="row">
	<?php _e( 'Mail', 'crimsontheme' ); ?></th>
	<td>
	<input size="100" id="crimson_theme_options[mailcliente]" type="text" name="crimson_theme_options[mailcliente]" value="<?php esc_attr_e( $options['mailcliente'] ); ?>" />
	</td>
	</tr>
	
	
	<!-- SOCIAL -->
	<tr valign="top"><td><h3><?php _e( 'Social', 'crimsontheme' ); ?></h3></td></tr>
	<tr valign="top"><th scope="row">
	<?php _e( 'Facebook URL', 'crimsontheme' ); ?></th>
	<td>
	<input size="100" id="crimson_theme_options[fburl]" type="text" name="crimson_theme_options[fburl]" value="<?php esc_attr_e( $options['fburl'] ); ?>" />
	</td>
	</tr>
	<!-- twitter -->
	<tr valign="top"><th scope="row">
	<?php _e( 'Twitter URL', 'crimsontheme' ); ?></th>
	<td>
	<input size="100" id="crimson_theme_options[twurl]" type="text" name="crimson_theme_options[twurl]" value="<?php esc_attr_e( $options['twurl'] ); ?>" />
	</td>
	</tr>
	
	<!-- google -->
	<tr valign="top">
		<th scope="row">
		<?php _e( 'Google+ URL', 'crimsontheme' ); ?></th>
		<td>
		<input size="100" id="crimson_theme_options[gourl]" type="text" name="crimson_theme_options[gourl]" value="<?php esc_attr_e( $options['gourl'] ); ?>" />
		</td>
	</tr>
	
	<!-- linkedIn -->
	<tr valign="top">
		<th scope="row">
		<?php _e( 'LinkedIn URL', 'crimsontheme' ); ?></th>
		<td>
		<input size="100" id="crimson_theme_options[liurl]" type="text" name="crimson_theme_options[liurl]" value="<?php esc_attr_e( $options['liurl'] ); ?>" />
		</td>
	</tr>
	
	<!-- youtube -->
	<tr valign="top"><th scope="row">
	<?php _e( 'Youtube URL', 'crimsontheme' ); ?></th>
	<td>
	<input size="100" id="crimson_theme_options[yourl]" type="text" name="crimson_theme_options[yourl]" value="<?php esc_attr_e( $options['yuurl'] ); ?>" />
	</td>
	</tr>
	
	<!-- STRUTTURA DI BASE -->
	<tr valign="top"><td><h3><?php _e( 'Struttura di base', 'crimsontheme' ); ?></h3></td></tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Visualizza box commenti', 'crimsontheme' ); ?></th>
		<td>
		<input id="crimson_theme_options[showcomments]" name="crimson_theme_options[showcomments]" type="checkbox" value="1"
		<?php checked( '1', $options['showcomments'] ); ?>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row">
		<?php _e( 'Visualizza pulsanti social (mi piace) al di sotto dei titoli di pagine e articoli', 'crimsontheme' ); ?></th>
		<td>
		<input id="crimson_theme_options[showlike]" name="crimson_theme_options[showlike]" type="checkbox" value="1"
		<?php checked( '1', $options['showlike'] ); ?>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row">
		<?php _e( 'Visualizza pulsanti social (condivisione) al di sotto del contenuto di pagine e articoli', 'crimsontheme' ); ?></th>
		<td>
		<input id="crimson_theme_options[showshare]" name="crimson_theme_options[showshare]" type="checkbox" value="1"
		<?php checked( '1', $options['showshare'] ); ?>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Copyright pi&egrave; pagina', 'crimsontheme' ); ?></th>
		<td>
		<textarea id="crimson_theme_options[copyright]"
		class="large-text" cols="50" rows="10" name="crimson_theme_options[copyright]"><?php echo esc_textarea( $options['copyright'] ); ?></textarea>
		</td>
	</tr>
	</table> 
	
	<p>
	<input class="button-primary" type="submit" value="<?php _e( 'Salva Opzioni', 'crimsontheme' ); ?>" />
	</p>
	</form>
	</div>
			



	<?php
} //crimsonContentOptionsPage





add_action( 'admin_init', 'crimsonCreateOptionsPageInit' );
add_action( 'admin_menu', 'crimsonCreateOptionsPage' ); 


?>