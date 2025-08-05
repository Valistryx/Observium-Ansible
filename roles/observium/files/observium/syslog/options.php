<?php

// RRD
$config['rrdcached'] = "<REMOTE RRD PATH>";
$config['rrd']['no_local'] = TRUE;

// Poller options
$config['poller-wrapper']['alerter'] = FALSE;

// Syslog
$config['enable_syslog'] = 1; // Enable Syslog
$config['syslog']['use_ip'] = TRUE;
$config['syslog']['unknown_hosts'] = FALSE;

$config['syslog']['filter'][] = 'Rogue AP detected';
$config['syslog']['filter'][] = 'last message repeated';
$config['syslog']['filter'][] = 'Connection from UDP: [';
$config['syslog']['filter'][] = 'ipSystemStatsTable node ipSystemStatsOutFragOKs not implemented';
$config['syslog']['filter'][] = 'diskio.c';
$config['syslog']['filter'][] = '/run/user/lightdm/gvfs: Permission denied';
$config['syslog']['filter'][] = 'Could not open output pipe \'/dev/xconsole\'';