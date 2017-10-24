<?php
class identitas{

public $a, $b, $c, $d;
	public function __construct($nama, $tempat_lahir, $kelas, $status)
	{
		$this->a = $nama;
		$this->b = $tempat_lahir;
		$this->c = $kelas;
		$this->d = $status;
	}

	public function get_nama()
	{
		return $this->a;
	}

	public function get_tl()
	{
		return $this->b;
	}

	public function get_kelas()
	{
		return $this->c;
	}

	public function get_status()
	{
		return $this->d;
	}
}
?>
