<?php

require_once DIREKTORI . '/app/konfigurasi/autoload.php';
require_once DIREKTORI . '/app/konfigurasi/konstanta.php';
require_once DIREKTORI . '/sistem/helper/url_helper.php';


for ($i = 0; $i < count($pustaka); $i++) {
	$pustaka[$i] = ucfirst($pustaka[$i]);
	if (file_exists(DIREKTORI . '/sistem/pustaka/' . $pustaka[$i] . '.php')) {
		require_once DIREKTORI . '/sistem/pustaka/' . $pustaka[$i] . '.php';

	} else if (file_exists(DIREKTORI . '/app/pustaka/' . $pustaka[$i] . '.php')) {
		require_once DIREKTORI . '/app/pustaka/' . $pustaka[$i] . '.php';

	}

}

for ($i = 0; $i < count($helper); $i++) {
	$helper[$i] = ucfirst($helper[$i]);
	if (file_exists(DIREKTORI . '/sistem/helper/' . $helper[$i] . '.php')) {
		require_once DIREKTORI . '/sistem/helper/' . $helper[$i] . '.php';

	} else if (file_exists(DIREKTORI . '/app/helper/' . $helper[$i] . '.php')) {
		require_once DIREKTORI . '/app/helper/' . $helper[$i] . '.php';
	}
}

for ($i = 0; $i < count($inti); $i++) { 
	$inti[$i]	= ucfirst($inti[$i]);
	if (file_exists(DIREKTORI . '/app/inti/' . $inti[$i] . '.php')) {
		require_once DIREKTORI . '/app/inti/' . $inti[$i] . '.php';
	}
}