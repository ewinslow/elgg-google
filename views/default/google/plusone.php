<?php
/**
 * Display a plus one button
 */
elgg_load_js('gapi.plus');

$attrs = array(
	'class' => 'g-plusone',
	
	// 'bubble', 'inline', 'none'
	'data-annotation' => elgg_extract('annotation', $vars, FALSE),
	
	// anything -- defaults to current page url
	'data-href' => elgg_extract('href', $vars, FALSE),
	
	// 'small', 'standard', 'medium', 'tall'
	'data-size' => elgg_extract('size', $vars, FALSE),
	
	// Any integer (in px) >= 120
	'data-width' => max(120, (int)elgg_extract('width', $vars, 450)),
);

?>
<div <?php echo elgg_format_attributes($attrs); ?>></div>