<?php

$code = elgg_get_plugin_setting('tracking_code', 'google');

// Only want to emit tracking code when provided with a valid tracking ID
if (empty($code)) {
	return true;
}

$domain = elgg_get_plugin_setting('tracking_domain', 'google');

?>

<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $code; ?>']);
	<?php if (!empty($domain)) { ?>
		_gaq.push(['_setDomainName', '<?php echo $domain; ?>']);
	<?php } ?>
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>
