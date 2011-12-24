<?php

function google_init() {
	elgg_extend_view('page/elements/head', 'google/siteverification');
	elgg_extend_view('page/elements/head', 'google/analytics', 1000);
	elgg_extend_view('page/elements/foot', 'google/gapi.plus');

	elgg_register_js('google.load', '//www.google.com/jsapi', 'footer');
	elgg_register_js('google.maps', '//maps.googleapis.com/maps/api/js', 'footer');
	elgg_register_js('gapi.client', '//apis.google.com/js/client.js', 'footer');
}

elgg_register_event_handler('init', 'system', 'google_init');
