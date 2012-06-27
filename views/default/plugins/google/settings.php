<?php

$google = $vars['entity'];

?>
<div class="elgg-input-wrapper">
	<label><?php echo elgg_echo('object:plugin:google:tracking_code:label'); ?></label>
	<?php
		echo elgg_view('input/text', array(
			'value' => $google->tracking_code,
			'name' => 'params[tracking_code]',
			'placeholder' => 'UA-XXXXXX-XX',
		));
	?>
</div>
<div class="elgg-input-wrapper">
	<label><?php echo elgg_echo('object:plugin:google:tracking_domain:label'); ?></label>
	<?php
		echo elgg_view('input/text', array(
			'value' => $google->tracking_domain,
			'name' => 'params[tracking_domain]',
			'placeholder' => 'example.org',
		));
	?>
</div>
<div class="elgg-input-wrapper">
	<label><?php echo elgg_echo('object:plugin:google:site_verification_code:label'); ?></label>
	<?php
		echo elgg_view('input/text', array(
			'value' => $google->site_verification_code,
			'name' => 'params[site_verification_code]',
			'placeholder' => '1234567890aBcDeFgHiJkLmNoPqRsTuVwXyZ',
		));
	?>
</div>
