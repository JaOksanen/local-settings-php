<?php

/**
 * @file
 * This is a local development configuration file.
 */

global $conf;

// Turn off Secure Pages. Secure Pages Module.
$conf['securepages_enable'] = FALSE;
$conf['https'] = FALSE;

// Stage File Proxy Configuration
$conf['stage_file_proxy_origin'] = 'http://pharmacademy.org';
// Stage file optional with securepages
// $conf['stage_file_proxy_origin'] = 'http://username:password@mysite.com';
$conf["stage_file_proxy_use_imagecache_root"] = FALSE;
$conf['stage_file_proxy_hotlink'] = TRUE;

// Turn off Caching.
$conf['cache'] = 0;
// Block caching - disabled.
$conf['block_cache'] = 0;
// Expiration of cached pages - none.
$conf['page_cache_maximum_age'] = 0;
// Aggregate and compress CSS files in Drupal - off.
$conf['preprocess_css'] = 0;
// Aggregate JavaScript files in Drupal - off.
$conf['preprocess_js'] = 0;
// Minimum cache lifetime - always none.
$conf['cache_lifetime'] = 0;
// Cached page compression - always off.
$conf['page_compression'] = 0;

// Turn off other caching.
$conf['css_gzip'] = FALSE;
$conf['javascript_aggregator_gzip'] = FALSE;

// Turn on all error reporting for local development.
error_reporting(-1);
$conf['error_level'] = 2;
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
