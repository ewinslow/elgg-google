<?php

function google_init() {
	elgg_extend_view('page/elements/head', 'google/siteverification');
	elgg_extend_view('page/elements/head', 'scripts/google/analytics', 1000);

	elgg_register_js('google.jsapi', '//www.google.com/jsapi', 'footer');
	
	elgg_register_page_handler('calendar', 'google_calendar_page_handler');
	
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'google_owner_menu_block');
}

function google_owner_menu_block($hook, $type, $items, $params) {
	$entity = $params['entity'];
	
	if ($entity instanceof ElggGroup || $entity instanceof ElggUser) {
		$items[] = ElggMenuItem::factory(array(
			'name' => 'calendar',
			'href' => "/calendar/view/$entity->guid",
			'text' => "Calendar",
		));
	}
	
	return $items;
}

function google_calendar_page_handler($segments) {
	switch ($segments[0]) {
		case 'view':
			set_input('guid', $segments[1]);
			require_once dirname(__FILE__) . '/pages/calendar/view.php';
			return;
		default:
			break;
	}
}

elgg_register_event_handler('init', 'system', 'google_init');
