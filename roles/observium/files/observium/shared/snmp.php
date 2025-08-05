<?php

$config['snmp']['version'] = 'v3';
$config['snmp']['max-rep'] = TRUE;
$config['snmp']['hide_auth'] = TRUE;

$config['snmp']['timeout']    = 30;

// Default community list to use when adding/discovering
$config['snmp']['community'] = array("public","private");

$config['snmp']['v3'][0]['authlevel'] = "authPriv";  // noAuthNoPriv | authNoPriv | authPriv
$config['snmp']['v3'][0]['authname'] = "<snmp user 1>";      // User Name (required even for noAuthNoPriv)
$config['snmp']['v3'][0]['authpass'] = "<snmp auth pass 1>";     // Auth Passphrase
$config['snmp']['v3'][0]['authalgo'] = "SHA";            // MD5 | SHA
$config['snmp']['v3'][0]['cryptopass'] = "<snmp priv pass 2>";   // Privacy (Encryption) Passphrase
$config['snmp']['v3'][0]['cryptoalgo'] = "AES";          // AES | DES

$config['snmp']['v3'][1]['authlevel'] = "authPriv";  // noAuthNoPriv | authNoPriv | authPriv
$config['snmp']['v3'][1]['authname'] = "<snmp user 2>";      // User Name (required even for noAuthNoPriv)
$config['snmp']['v3'][1]['authpass'] = "<snmp auth pass 2>";               // Auth Passphrase
$config['snmp']['v3'][1]['authalgo'] = "SHA";            // MD5 | SHA
$config['snmp']['v3'][1]['cryptopass'] = "<snmp priv pass 2>";             // Privacy (Encryption) Passphrase
$config['snmp']['v3'][1]['cryptoalgo'] = "AES";          // AES | DES