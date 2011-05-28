<?php

$entity = $vars['entity'];

echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $entity->guid));
?>

<div>
	<label>Embed URL</label>
	<?php 
		echo elgg_view('input/url', array(
			'name' => 'calendar_url',
			'value' => get_private_setting($entity->guid, 'plugin:user_setting:google:calendar_url'),
		));
	?>
</div>

<div>
	<?php 
		echo elgg_view('input/submit');
	?>
</div>