<?php

$google = $vars['entity'];

?>
<div>
	<label><?php echo elgg_echo('google:analytics:code'); ?></label>
	<?php
		echo elgg_view('input/text', array(
			'value' => $google->tracking_code,
			'name' => 'params[tracking_code]',
			'placeholder' => 'UA-XXXXXX-XX',
		));
	?>
</div>

<div>
	<label><?php echo elgg_echo('google:webmastertools:code'); ?></label>
	<?php
		echo elgg_view('input/text', array(
			'value' => $google->site_verification_code,
			'name' => 'params[site_verification_code]',
			'placeholder' => 'Site verification code',
		));
	?>
</div>