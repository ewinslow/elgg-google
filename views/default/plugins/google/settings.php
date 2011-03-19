<?php

$google = $vars['entity'];

?>
<div>
	<label>Google Analytics tracking code</label>
	<?php
		echo elgg_view('input/text', array(
			'value' => $google->tracking_code,
			'name' => 'params[tracking_code]',
			'placeholder' => 'UA-XXXXXX-XX',
		));
	?>
</div>

<div>
	<label>Google Webmaster Tools site verification code</label>
	<?php
		echo elgg_view('input/text', array(
			'value' => $google->site_verification_code,
			'name' => 'params[site_verification_code]',
			'placeholder' => 'Site verification code',
		));
	?>
</div>