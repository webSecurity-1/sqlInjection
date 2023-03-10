<?php
define( 'SQL_INJECTION_IN_PHP', true );

require 'vendor/autoload.php';

use SqlInjection\SQLiteConnection;

$pdo = ( new SQLiteConnection() )->connect();
if ( $pdo === null ) {
	echo 'Whoops, could not connect to the SQLite database!';
} else {

	define( 'SAFE_VERSION', true );

	require( 'includes/header.php' );

	$action = $_GET['action'] ?? '';

	if ( $action === 'delete' && isset( $_GET['id'] ) && (int) $_GET['id'] > 0 ) {
		require( 'includes/deleteSafe.php' );
	} else {
		require( 'includes/searchSafe.php' );
	}

	require( 'includes/footer.php' );
}