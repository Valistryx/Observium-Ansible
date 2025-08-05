<?php

// Enable alerter
$config['poller-wrapper']['alerter'] = TRUE;

// How frequently to re-send a notification for a continuing alert condition
$config['alerts']['critical']['interval'] = 604800;
$config['alerts']['warning']['interval']  = 604800;

$config['alerts']['disable']['all'] = FALSE;
$config['alerts']['suppress'] = FALSE;

//$config['web_show_disabled'] = FALSE;    // Show or not disabled devices on major pages.

// Set up a default alerter (email to a single address)
$config['email']['from']           = "Observium <observium@yourdomain.com>";
$config['email']['default_only']   = FALSE;
$config['email']['graphs']         = TRUE;

$config['email']['enable']          = TRUE;
$config['email']['backend']         = 'smtp';
$config['email']['smtp_host']       = 'smtp.yourdomain.com';
$config['email']['smtp_port']       = 25;
$config['email']['smtp_timeout']    = 10;
$config['email']['smtp_secure']     = NULL;
$config['email']['smtp_auth']       = FALSE;
$config['email']['smtp_username']   = NULL;
$config['email']['smtp_password']   = NULL;