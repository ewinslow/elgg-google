<?php

function google_init() {
	elgg_extend_view('page/elements/head', 'google/siteverification');
	elgg_extend_view('page/elements/head', 'scripts/google/analytics', 1000);

	elgg_register_js('google.jsapi', '//www.google.com/jsapi', 'footer');
}

elgg_register_event_handler('init', 'system', 'google_init');
