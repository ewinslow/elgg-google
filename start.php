<?php

function google_init() {
	elgg_extend_view('page/elements/head', 'google/siteverification');
	elgg_extend_view('page/elements/head', 'scripts/google/analytics', 1000);

	elgg_register_js('google.jsapi', '//www.google.com/jsapi', 'footer');
	
	elgg_register_page_handler('google', 'google_page_handler');
	
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'google_owner_menu_block');
	
	add_group_tool_option('google_calendar', elgg_echo('google:settings:enable_google_calendar'), true);
	
	elgg_register_action('google/calendar/save', dirname(__FILE__) . '/actions/google/calendar/save.php');
}

function google_owner_menu_block($hook, $type, $items, $params) {
	$entity = $params['entity'];
	
	if ($entity instanceof ElggGroup && $entity->google_calendar_enable != 'no') {
		$items[] = ElggMenuItem::factory(array(
			'name' => 'calendar',
			'href' => "/google/calendar/$entity->guid",
			'text' => "Group calendar",
		));
	}
	
	return $items;
}

function google_page_handler($segments) {
	switch ($segments[0]) {
		case 'calendar':
			elgg_set_page_owner_guid($segments[1]);
			if (elgg_get_page_owner_entity()->google_calendar_enable != 'no') {
				require_once dirname(__FILE__) . '/pages/google/calendar.php';
			}
			return;
		default:
			break;
	}
}

elgg_register_event_handler('init', 'system', 'google_init');
