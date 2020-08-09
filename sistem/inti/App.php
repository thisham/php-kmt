<?php

/**
 * 
 */
class App
{
	protected $kontroler = "beranda";
	protected $metode    = "indeks";
	protected $parameter = [];

	function __construct()
	{
		$url = $this->singkatURL();
		// var_dump($url);

		if (file_exists(DIREKTORI . '/app/kontroler/' . $url[0] . '.php')) {
			
			// KONTROLER
			$this->kontroler = $url[0];
			unset($url[0]);
		}

		include_once DIREKTORI . '/app/kontroler/' . $this->kontroler . '.php';
		$this->kontroler = new $this->kontroler;

		// METODE
		if (isset($url[1])) {
			if (method_exists($this->kontroler, $url[1])) {
				$this->metode = $url[1];
				unset($url[1]);
			}
		}

		//PARAMETER
		if (!empty($url)) {
			$this->parameter = array_values($url);
		}

		// Jalankan kontroler dan metode. Kirimkan parameter jika ada.
		call_user_func_array([$this->kontroler, $this->metode], $this->parameter);
	}

	function singkatURL()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/'); // fn rtrim() berfungsi menghapus tanda setelah string
			
			$url = filter_var($url, FILTER_SANITIZE_URL); // filter karakter aneh di url
			$url = explode('/', $url);
			return $url;
		}
	}
}