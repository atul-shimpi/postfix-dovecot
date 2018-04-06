<?php

/* Local configuration for Roundcube Webmail */

// ----------------------------------
// SQL DATABASE
// ----------------------------------
// Database connection string (DSN) for read+write operations
// Format (compatible with PEAR MDB2): db_provider://user:password@host/database
// Currently supported db_providers: mysql, pgsql, sqlite, mssql, sqlsrv, oracle
// For examples see http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php
// NOTE: for SQLite use absolute path (Linux): 'sqlite:////full/path/to/sqlite.db?mode=0646'
//       or (Windows): 'sqlite:///C:/full/path/to/sqlite.db'
$config['db_dsnw'] = 'mysql://roundcube:password@localhost/roundcubemail';

// ----------------------------------
// IMAP
// ----------------------------------
// The IMAP host chosen to perform the log-in.
// Leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// To use SSL/TLS connection, enter hostname with prefix ssl:// or tls://
// Supported replacement variables:
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %s - domain name after the '@' from e-mail address provided at login screen
// For example %n = mail.domain.tld, %t = domain.tld
// WARNING: After hostname change update of mail_host column in users table is
//          required to match old user data records with the new host.
$config['default_host'] = 'localhost';

// ----------------------------------
// SMTP
// ----------------------------------
// SMTP server host (for sending mails).
// Enter hostname with prefix tls:// to use STARTTLS, or use
// prefix ssl:// to use the deprecated SSL over SMTP (aka SMTPS)
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %t = domain.tld
$config['smtp_server'] = 'localhost';

// SMTP username (if required) if you use %u as the username Roundcube
// will use the current username for login
$config['smtp_user'] = '';

// SMTP password (if required) if you use %p as the password Roundcube
// will use the current user's password for login
$config['smtp_pass'] = '';

// provide an URL where a user can get support for this Roundcube installation
// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!
$config['support_url'] = '';

// replace Roundcube logo with this image
// specify an URL relative to the document root of this Roundcube installation
// an array can be used to specify different logos for specific template files, '*' for default logo
// for example array("*" => "/images/roundcube_logo.png", "messageprint" => "/images/roundcube_logo_print.png")
$config['skin_logo'] = 'https://i.pinimg.com/474x/fc/9d/75/fc9d7564ab46e7a783980b216d35d8c9--minions--minions-love.jpg';

// This key is used for encrypting purposes, like storing of imap password
// in the session. For historical reasons it's called DES_key, but it's used
// with any configured cipher_method (see below).
$config['des_key'] = 'CecF9YE0ghPYkw34P8lESfmH';

// Automatically add this domain to user names for login
// Only for IMAP servers that require full e-mail addresses for login
// Specify an array with 'host' => 'domain' values to support multiple hosts
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %t = domain.tld
$config['username_domain'] = 'admin@ccbizon.com';

// Name your service. This is displayed on the login screen and in the window title
$config['product_name'] = 'CCBizon Email Service';

$config['plugins'] = array('virtuser_query');
$config['virtuser_query'] = "SELECT Email FROM EmailServer_db.Users_tbl WHERE Email = '%u'";



// ----------------------------------
// PLUGINS
// ----------------------------------
// List of active plugins (in plugins/ directory)
$config['plugins'] = array('archive', 'emoticons', 'filesystem_attachments', 'help', 'newmail_notifier', 'userinfo', 'vcard_attachments', 'virtuser_file', 'virtuser_query');

