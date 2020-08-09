<?php

/**
 * 
 */
class beranda extends Kontroler
{

	function __construct()
	{
		$this->session = new Session();
	}
	
	function indeks()
	{
		$data = array(
			'judul' => 'Beranda',
			'pages' => 'Beranda',
			'nama'  => $this->model('model_pengguna')->getPengguna()
		);
		$this->tampilkan('pesan_masuk', $data);
	}
}