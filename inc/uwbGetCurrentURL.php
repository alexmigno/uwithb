<?php
function uwbGetCurrentURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 
 $attributi = explode("/?",$_SERVER["REQUEST_URI"]);
 
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$attributi[0];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$attributi[0];
 }
 return $pageURL;
}