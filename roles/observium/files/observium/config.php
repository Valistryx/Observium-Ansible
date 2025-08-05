<?php

## Check http://www.observium.org/docs/config_options/ for documentation of possible settings

## It's recommended that settings are edited in the web interface at /settings/ on your observium installation.
## Authentication and Database settings must be hardcoded here because they need to work before you can reach the web-based configuration interface

## shared
include '/opt/observium/conf/db.php';
include '/opt/observium/conf/snmp.php';

# web
include '/opt/observium/conf/auth.php';

## core
include '/opt/observium/conf/alert.php';

## per role
include '/opt/observium/conf/options.php';

// Base directory
$config['install_dir'] = "/opt/observium";

// General
$config['own_hostname'] = '<hostname>';
$config['require_hostname'] = TRUE;

// Discovery settings
$config['mydomain'] = "<your domain>";

$config['autodiscovery']['require_hostname'] = TRUE;

$config['autodiscovery']['xdp'] = TRUE;
$config['autodiscovery']['bgp'] = TRUE;
$config['autodiscovery']['bgp_as_private'] = TRUE;
$config['autodiscovery']['ospf'] = TRUE;
$config['autodiscovery']['vmware'] = TRUE;
$config['autodiscovery']['proxmox'] = TRUE;

// Debug settings
$config['snmp']['errors'] = TRUE;
$config['db']['debug'] = TRUE;
$config['profile_sql'] = TRUE;
$config['ping']['debug'] = FALSE;
$config['rrd']['debug'] = FALSE;

// Poller modules
$config['poller_modules']['unix-agent'] = 1;
$config['unix-agent']['port'] = 36602;

// End config.php