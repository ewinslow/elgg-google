<?php

$entity = get_entity(get_input('guid'));

if (!$entity) {
	register_error(elgg_echo('notfound'));
	forward(REFERER);
}

if (!$entity->canEdit()) {
	register_error(elgg_echo('nopermission'));
	forward(REFERER);
}

$calendar_url = get_input('calendar_url');

if (set_private_setting($entity->guid, 'plugin:user_setting:google:calendar_url', $calendar_url)) {
	system_message(elgg_echo('action:google:calendar:save:success'));
} else {
	register_error(elgg_echo('action:google:calendar:save:failute'));
}

forward(REFERER);
