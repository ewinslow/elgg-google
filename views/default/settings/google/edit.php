<?php

$google = $vars['entity'];

?>
<div>
	<label>Google Analytics tracking code</label>
	<?php 
		echo elgg_view('input/text', array(
			'value' => $google->tracking_code,
			'internalname' => 'params[tracking_code]',
			'placeholder' => 'UA-XXXXXX-XX',
		));
	?>
</div>

<div>
	<label>Google Webmaster Tools site verification code</label>
	<?php 
		echo elgg_view('input/text', array(
			'value' => $google->site_verification_code,
			'internalname' => 'params[site_verification_code]',
			'placeholder' => 'Site verification code',
		));
	?>
</div>