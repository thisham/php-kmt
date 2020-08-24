<?php

/**
 * 
 */
class Database
{
	private $host = NAMA_NH;
	private $user = NAMA_UN;
	private $pass = NAMA_KS;
	private $pd   = NAMA_PD;

	private $dbh;
	private $stmt;
	private $result;

	public function __construct($stmt = '')
	{
		$this->dbh = new mysqli();
		
		$this->dbh->connect($this->host, $this->user, $this->pass, $this->pd);

		if ($this->dbh->connect_error) {
			echo "Koneksi Eror: " . $this->dbh->connect_errno . " - " . $this->dbh->connect_error;
		}

		$this->stmt = $stmt;

	}

	public function kueri($kueri)
	{
		$this->stmt = $this->dbh->prepare($kueri);
		return $this;
	}

	public function ikat(...$val)
	{
		$tipe = null;
		if ( is_null($tipe) ) {
			for ($i=0; $i < count($val); $i++) { 
				switch (true) {
					case is_int($val):
						$tipe[$i] = "i";
						break;

					case is_double($val):
						$tipe[$i] = "d";
						break;

					case is_bool($val):
						$tipe[$i] = "b";
						break;
						
					default:
						$tipe[$i] = "s";
						break;
				}
			}
		}
		
		$tipe = implode("", $tipe);
		$this->stmt->bind_param($tipe, ...$val);
		return $this;
	}

	public function eksekusi()
	{
		$this->stmt->execute();
		return $this;
	}

	// Fungsi-fungsi untuk menampilkan baris data

		public function hasil_jamak()
		{
			$this->eksekusi();
			$this->result = $this->stmt->get_result();
			return $this->result->fetch_all(MYSQLI_ASSOC);
		}

		public function hasil_tunggal()
		{
			$this->eksekusi();
			$this->result = $this->stmt->get_result();
			return $this->result->fetch_assoc();
		}

	// Fungsi-fungsi untuk menghitung perubahan baris data

		public function baris_terefek()
		{
			if ( $this->stmt->affected_rows < 0 ) {
				$hasil = $this->stmt->affected_rows + 1;
			} else {
				$hasil = $this->stmt->affected_rows;
			}
			return $hasil;
		}

	public function tutup()
	{
		$this->dbh->close();
	}
}