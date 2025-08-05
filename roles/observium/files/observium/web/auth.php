<?php

// Sessions
$config['web_session_lifetime'] = 0;
$config['web_session_ip'] = FALSE;

// Authentication Model
$config['auth_mechanism'] = "ldap";    // default, other options: ldap, http-auth, please see documentation for config help
$config['web_debug_unprivileged'] = FALSE;

$config['auth_ldap_binddn'] = "";
$config['auth_ldap_bindpw'] = "";

$config['auth_ldap_attr']['uid'] = "sAMAccountName";
$config['auth_ldap_attr']['uidNumber'] = "objectSid";
$config['auth_ldap_attr']['cn'] = "name";
$config['auth_ldap_attr']['dn'] = "distinguishedname";
$config['auth_ldap_objectclass'] = "person";

$config['auth_ldap_version'] = 3;
$config['auth_ldap_server'] = array("");
$config['auth_ldap_port']   = 389;
$config['auth_ldap_starttls'] = FALSE;

$config['auth_ldap_prefix'] = "CN=";
$config['auth_ldap_suffix'] = "";
$config['auth_ldap_group']  = array("");

$config['auth_ldap_groupbase'] = "";

$config['auth_ldap_groupmembertype'] = "fulldn";
$config['auth_ldap_groupmemberattr'] = "member";

unset($config['auth_ldap_groups']);