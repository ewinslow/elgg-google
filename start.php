<?php

function google_init()
{
	elgg_extend_view('footer/analytics', 'scripts/google/analytics');
	elgg_extend_view('metatags', 'google/siteverification');
}

register_elgg_event_handler('init', 'system', 'google_init');
