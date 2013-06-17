<?php
/**
 * @name crimsonSocialShareScript
 * Scrive il codice javascript all'interno del tag head
 * @param 
 * @return html
 * @see 
 */
function crimsonSocialShareScript() {
	global $crimson;
	//se showlike è uguale ad 1 allora il codice js è stato già sritto!
	if($crimson["showlike"]!=1 && $crimson["showshare"]==1){
	    echo '
	    <script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "ur-e0f72a8-ce6d-abba-7f21-4cd7f3405e68"});</script>';
	}
}

// Add hook for front-end <head></head>
add_action('wp_head', 'crimsonSocialShareScript');



/**
 * @name crimsonShowSocialLike
 * Scrive il codice per la visualizzazione dei pulsanti
 * @param 
 * @return html
 * @see 
 */
function crimsonShowSocialShare(){
	global $crimson;
	if($crimson["showshare"]==1){
	    echo "<div class='crimsonSocialShare'>
	    <span class='st_facebook_large' displayText='Facebook'></span>
		<span class='st_twitter_large' displayText='Tweet'></span>
		<span class='st_googleplus_large' displayText='Google +'></span>
		<span class='st_linkedin_large' displayText='LinkedIn'></span>
		<span class='st_email_large' displayText='Email'></span>
		</div>";
	}
}
