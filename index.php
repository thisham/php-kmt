<?php
	if ( !session_id() ) {
		session_start();
	}
	require_once __DIR__ . '/app/init.php';
	define('DIREKTORI', __DIR__);
	
	$app = new App();