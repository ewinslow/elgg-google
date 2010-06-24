<?php 

$code = get_plugin_setting('tracking_code', 'google');

if(empty($code)) {
	return;
}

?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{ 
var pageTracker = _gat._getTracker("<?php echo $code; ?>");
pageTracker._trackPageview();
} catch(err) {} 
</script>