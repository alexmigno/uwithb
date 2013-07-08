<?php
/**
 * @name uwbGetYoutubeVideoIdFromURL
 * Funzione che estrapola da un url di youtube l'ID del video. 
 * @param url youtube
 * @return id youtube
 * 
 */

function uwbGetYoutubeVideoIdFromURL($url){
 	 $res = explode("v=",$url);
	 if(isset($res[1])) {
	 	$res1 = explode('&',$res[1]);
		if(isset($res1[1])){
			$res[1] = $res1[0];
		}
		$res1 = explode('#',$res[1]);
		if(isset($res1[1])){
			$res[1] = $res1[0];
		}
	 }
	 return substr($res[1],0,12);
  	 return false;
 }
 
 
?>
