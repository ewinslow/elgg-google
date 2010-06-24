<?php

$docid = addslashes($vars['docid']);

$height = addslashes($vars['height']);
$width = addslashes($vars['width']);

$allowFullScreen = $vars['fullscreen'] ? 'allowFullScreen="true"' : '';
$fs = $vars['fullscreen'] ? '&amp;fs=true' : '';

$lang = '&amp;hl='.get_language();

echo <<<EMBED
<embed style="height:{$height}px; width:{$width}px" src="http://video.google.com/googleplayer.swf?docid=$docid{$lang}{$fs}" type="application/x-shockwave-flash" {$allowFullScreen}></embed>		
EMBED;
?>