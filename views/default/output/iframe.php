<?php

$vars['src'] = $vars['value'];
unset($vars['value']);

$attributes = elgg_format_attributes($vars);

?>

<iframe <?php echo $attributes; ?>></iframe>
