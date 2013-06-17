<?php
/**
 * @name crimsonCustomLoginLogo
 * Nella pagina di login, viene sostituito il classico logo wordpress con l'immagine del tema images/logo-login.png
 * @param null
 * @return null
 * 
 */
function crimsonCustomLoginLogo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_url').'/img/logo-login.png) !important; }
    </style>';
}
add_action('login_head', 'crimsonCustomLoginLogo');

//cambio l'attributo title del link cotenente il logo login
add_filter('login_headertitle', create_function(false,"return '".get_bloginfo("name")."';"));
//cambio l'url del link cotenente il logo login
add_filter('login_headerurl', create_function(false,"return '".get_bloginfo("url")."';"));


?>
