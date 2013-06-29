<?php
/**
 * @name crimsonAddCSSAndJavascriptLibraries
 * Funzione che si occupa del corretto caricamento di fogli stile CSS, della libreria jQuery e delle altre librerie javascript. 
 * @param null
 * @return null
 * 
 */

function crimsonAddCSSAndJavascriptLibraries() {
    
    //CSS
    // wp_enqueue_style('jquery.fancybox', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css',false,'2.1','all');
    // wp_enqueue_style('jquery.fancybox-buttons', get_template_directory_uri() . '/css/fancybox/helpers/jquery.fancybox-buttons.css',false,'2.1','all');
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css',false,'2.3.2','all');
    
    
    
    //JAVASCRIPT
    wp_enqueue_script("jquery");
    wp_enqueue_script('bootstrap.min',get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),1,false);
    // wp_enqueue_script('jquery.fancybox',get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js',array('jquery'),1,false);
    // wp_enqueue_script('jquery.fancybox-buttons',get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-buttons.js',array('jquery'),1,false);
    wp_enqueue_script('myscript',get_template_directory_uri() . '/js/myscript.js',array('jquery'),1,false);
}


 
add_action('wp_enqueue_scripts', 'crimsonAddCSSAndJavascriptLibraries');
?>
