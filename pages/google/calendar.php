<?php

$page_owner = elgg_get_page_owner_entity();

elgg_unregister_menu_item('title', 'add');

$title = "$page_owner->name's Calendar";

$content = '';
if ($page_owner->canEdit()) {
	elgg_register_menu_item('title', array(
		'name' => 'editsettings',
		'href' => "#google-calendar-settings-$page_owner->guid", 
		'rel' => 'toggle',
		'link_class' => 'elgg-toggler', 
		'text' => 'Edit Settings',
	));
	
	$settings_form = elgg_view_form('google/calendar/save', array(), array('entity' => $page_owner));
	
	$content .= elgg_view_module('info', 'Settings', $settings_form, array(
		'id' => "google-calendar-settings-$page_owner->guid",
		'class' => 'hidden',
	));
}

$url = get_private_setting($page_owner->guid, 'plugin:user_setting:google:calendar_url');
if ($url) {
	$content .= elgg_view('output/iframe', array(
		'value' => elgg_http_add_url_query_elements($url, array('title' => '')),
		'style' => 'width:100%;border:0;',
		'height' => 600,
		'scrolling' => 'no',
		'frameborder' => '0',
	));
} else {
	$content .= elgg_view('output/longtext', array(
		'value' => elgg_echo('google:calendar:notsetup'),
	));
}

$body = elgg_view_layout('content', array(
	'title' => $title,
	'content' => $content,
	'filter' => '',
	'buttons' => elgg_view_menu('title', array('class' => 'elgg-menu-hz')),
));

echo elgg_view_page($title, $body);
