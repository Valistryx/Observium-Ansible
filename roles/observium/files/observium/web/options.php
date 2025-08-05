<?php

// Web UI
$config['web']['logo'] = 'logo.png';
$config['web_url'] = 'https://observium.yourdomain.com/';
$config['cache']['enable'] = true;
$config['cache']['ttl'] = 900;

$config['rrdgraph_real_95th'] = TRUE;

$config['location']['menu']['type'] = 'nested';
$config['location']['menu']['nested_reversed'] = FALSE;
$config['location']['menu']['nested_max_depth'] = 6;
$config['location']['menu']['nested_split_char'] = ',';

// RRD
$config['rrdcached'] = "<REMOTE RRD PATH>";
$config['rrd']['no_local'] = TRUE;

// API
$config['api']['enable'] = TRUE;

// Poller options
$config['poller-wrapper']['alerter'] = FALSE;

// PHP settings
$config['php_memory_limit_min'] = '2048M';