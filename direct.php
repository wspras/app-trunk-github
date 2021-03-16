<?php
# $Id: direct.php,v 1.12.2.3 2021/01/15 11:48:23 wspras Exp $
//----------------------------------------------------------------------
// runaslogika.com
//----------------------------------------------------------------------
// Copyright (c) 2021 WSPRAS
//----------------------------------------------------------------------
// This program is under the terms of the GENERAL PUBLIC LICENSE (GPL)
// as published by the SOFTWARE FOUNDATION. The GPL is available
// through the world-wide-web at http://www.wspras.com
//----------------------------------------------------------------------
// Authors: wspras@runaslogika.com
/** Define ABSPATH as this files directory */
if ( !defined('_IN_SITE_WEB') )
	define('_IN_SITE_WEB', TRUE);
	
define( 'ABSPATH', dirname(__FILE__) . '/' );

if ( defined('E_RECOVERABLE_ERROR') )
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR);
else
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING);

if ( file_exists( ABSPATH . '/bases/config.app.php') ) {

	/** The config file resides in ABSPATH */
	require_once( ABSPATH . '/bases/config.app.php' );

} elseif ( file_exists( dirname(ABSPATH) . '/bases/config.app.php' ) && ! file_exists( dirname(ABSPATH) . '/bases/config.app.php' ) ) {

	/** The config file resides one level above ABSPATH but is not part of another install*/
	require_once( dirname(ABSPATH) . '/bases/config.app.php' );

} else {

	// A config file doesn't exist
	// Die with an error message
	die("There doesn't seem to be a <code>config.app.php</code> file. I need this before we can get started. Need more help? <a href='http://wspras.com/Editing_config-app.php'>We got it</a>. You can create a <code>config.app.php</code> file through a web interface, but this doesn't work for all server setups. The safest way is to manually create the file.</p>");

}