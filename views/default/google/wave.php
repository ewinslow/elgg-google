<?php
/**
 * Embed a Wave from Google Wave
 * @uses $vars['waveid'] The ID of the wave to embed (e.g. googlewave.com!w...)
 */

$waveid = $vars['waveid'];

echo elgg_view('scripts/google/jsapi');
echo elgg_view('scripts/google/wave');

?>
<div data-waveid="<?php echo addslashes($waveid); ?>"></div>