<?php 

$code = get_plugin_setting('site_verification_code', 'google');

if(empty($code)) {
	return;
}
?>
<meta name="google-site-verification" content="<?php echo addslashes($code); ?>" />