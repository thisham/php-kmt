<?php

function basis_url($uri='')
{
	if (substr(BASIS_URL, -1) != '/') {
		$url	= BASIS_URL . '/';
	} else {
		$url 	= BASIS_URL;
	}

	$uri = explode("/", $uri);
	if ($uri[0] == '') {
		$uri	= array_shift($uri);
	}

	if ($uri != NULL) {
		$uri = implode("/", $uri);
	}
	

	return $url . $uri;
}