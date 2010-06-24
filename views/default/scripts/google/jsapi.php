<?php 
global $google_jsapi;

if(isset($google_jsapi) && $google_jsapi == TRUE) {
	return;
}

$google_jsapi = TRUE;

?>
<script type="text/javascript" src="//www.google.com/jsapi"></script>