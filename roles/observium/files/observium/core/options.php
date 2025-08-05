<?php

$config['rrdcached'] = "unix:/var/run/rrdcached.sock";

// Housekeeping
$config['housekeeping']['eventlog']['age'] = 1209600;
$config['housekeeping']['syslog']['age'] = 604800;
$config['housekeeping']['alertlog']['age'] = 1209600;
$config['housekeeping']['authlog']['age'] = 1209600;
$config['housekeeping']['deleted_ports']['age'] = 1209600;

$config['housekeeping']['rrd']['notmodified'] = TRUE;
$config['housekeeping']['rrd']['invalid'] = TRUE;
$config['housekeeping']['rrd']['deleted'] = TRUE;
$config['housekeeping']['rrd']['deleted'] = FALSE;

// Poller options
$config['poller-wrapper']['alerter'] = TRUE;