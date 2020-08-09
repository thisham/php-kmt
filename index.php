<?php
	if ( !session_id() ) {
		session_start();
	}
	define('DIREKTORI', __DIR__);
	require_once DIREKTORI . '/sistem/init.php';
	
	
	$app = new App();