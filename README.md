# Google Tools for Elgg
Provides Elgg support for various Google products:
* Plus one buttons
* Plus badges
* Analytics
* Webmaster Tools verification
* Google Maps JS API
* Google JS API client (gapi.client)
* Google JS loader (goog.load)


## Plus one button
To emit a plus one button with the default settings:

```php
<?php echo elgg_view('google/plusone', array('href' => 'http://...'));
```

To specify other settings, just pass them into $vars. For example:

```php
<?php echo elgg_view('google/plusone', array('size' => 'small', ...));
```

See <https://developers.google.com/+/plugins/+1button/> for more details.

## Plus badges
To emit a plus badge:

```php
<?php echo elgg_view('google/plusbadge', array('href' => 'http://...'));
```

The href option should be the address of your plus page.

See <https://developers.google.com/+/plugins/badge/> for more details.

## JS API clients

The following javascripts are registered by this plugin:
* KEY - SCRIPT
* 'google.load' - '//www.google.com/jsapi'
* 'google.maps' - '//maps.googleapis.com/maps/api/js'
* 'gapi.client' - '//apis.google.com/js/client.js'
