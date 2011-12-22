<?php 

$code = elgg_get_plugin_setting('site_verification_code', 'google');

if(empty($code)) {
	return;
}
?>
<meta name="google-site-verification" content="<?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?>" />