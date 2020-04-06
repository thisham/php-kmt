<?php

/**
 * 
 */
class beranda extends Kontroler
{
	
	function indeks()
	{
		$data = array(	'judul' => 'Beranda',
						'pages' => 'Beranda',
						'nama'  => $this->model('model_pengguna')->getPengguna());
		$this->tampilkan('templat/header', $data);
		$this->tampilkan('beranda/index', $data);
		$this->tampilkan('templat/footer');
	}
}