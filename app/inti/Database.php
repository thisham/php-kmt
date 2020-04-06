<?php

/**
 * 
 */
class pangkalan_data
{
	private $host = NAMA_NH;
	private $user = NAMA_UN;
	private $pass = NAMA_KS;
	private $pd   = NAMA_PD;

	private $dbh;
	private $stmt;

	public function __construct()
	{
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->pd;

		$opsi = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
		);

		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $opsi);
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public function kueri($kueri)
	{
		$this->stmt = $this->dbh->prepare($kueri);
	}

	public function bind($param, $val, $tipe = null)
	{
		if ( is_null($tipe) ) {
			switch (true) {
				case is_int($val):
					$tipe = PDO::PARAM_INT;
					break;

				case is_bool($val):
					$tipe = PDO::PARAM_BOOL;
					break;

				case is_null($val):
					$tipe = PDO::PARAM_NULL;
					break;
				
				default:
					$tipe = PDO::PARAM_STR;
					break;
			}
		}

		$this->stmt->bindValue($param, $val, $tipe);
	}

	public function eksekusi()
	{
		$this->stmt->execute();
	}

	// Fungsi-fungsi untuk menampilkan data

	public function hasil_set()
	{
		$this->eksekusi();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function single()
	{
		$this->eksekusi();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	// Fungsi-fungsi untuk menulis data

	public function rowCount()
	{
		return $this->stmt->rowCount();
	}
} 