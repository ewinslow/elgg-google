<?php
/**
 * Display a G+ badge for a +Page
 */
elgg_load_js('gapi.plus');

$attrs = array(
	'class' => 'g-plus',
	
	// Needs to be a +page url
	'data-href' => elgg_extract('href', $vars, FALSE),
	
	// 'smallbadge', 'badge'
	'data-size' => elgg_extract('size', $vars, FALSE),
);

?>
<div <?php echo elgg_format_attributes($attrs); ?>></div>