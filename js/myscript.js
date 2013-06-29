/* 
 * Inserisci qui gli script personalizzati
 * NB: per evitare conflitti, scrivere tutti i codici con "jQuery" al posto di "$"
 */

jQuery("document").ready(function($){
    
    //pulisce il modulo di ricerca dal testo "cerca"
    jQuery("#searchform input#s").focus(function(){
        jQuery("#searchform input#s").val(" ");
    });
    
    
    /*
// Initialize the Lightbox and add rel="gallery" to all gallery images when the gallery is set up using  so that a Lightbox Gallery exists
//  $(".gallery a[href$='.jpg'], .gallery a[href$='.png'], .gallery a[href$='.jpeg'], .gallery a[href$='.gif']").attr('rel','gallery').fancybox();
    $(document).ready(function() {
	$(" .gallery a[href$='.jpg'], .gallery a[href$='.png'], .gallery a[href$='.jpeg'], .gallery a[href$='.gif']").addClass('fancybox').attr('rel', 'fancybox').attr('data-fancybox-group','button');
                    
                    $("#content a").has("img").addClass('fancybox').attr('rel', 'fancybox').attr('data-fancybox-group','button');
                    
                    $(".fancybox").fancybox({
                                        padding : 0,
                                        prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
                                        maxHeight: 700,
		helpers		: {
		title	: null,
		buttons	: {}
		}
	});        
});
    */
    
}); // jQuery(document).ready();




