<?php

function google_init() {
	elgg_extend_view('page/elements/head', 'google/siteverification');
	elgg_extend_view('page/elements/head', 'google/analytics', 1000);

	elgg_register_js('google.load', '//www.google.com/jsapi', 'footer');
	elgg_register_js('gapi.client', 'https://apis.google.com/js/client.js', 'footer');
	elgg_register_js('gapi.plus', 'https://apis.google.com/js/plusone.js', 'footer');
}

elgg_register_event_handler('init', 'system', 'google_init');
