<?php
/**
 * @name crimsonSocialLikeScript
 * Scrive il codice javascript all'interno del tag head
 * @param 
 * @return html
 * @see 
 */
function crimsonSocialLikeScript() {
	global $crimson;
	if($crimson["showlike"]==1){
	    echo '
	    <script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "ur-e0f72a8-ce6d-abba-7f21-4cd7f3405e68"});</script>';
	}
}

// Add hook for front-end <head></head>
add_action('wp_head', 'crimsonSocialLikeScript');



/**
 * @name crimsonShowSocialLike
 * Scrive il codice per la visualizzazione dei pulsanti
 * @param 
 * @return html
 * @see 
 */
function crimsonShowSocialLike(){
	global $crimson;
	if($crimson["showlike"]==1){
	    echo "
	    <div class='crimsonSocialLike'>
	    <span class='st_fblike_hcount' displayText='Facebook Like'></span>
	    <span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_plusone_hcount' displayText='Google +1'></span>

		</div>";
	}
}
