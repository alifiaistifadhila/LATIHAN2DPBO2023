<?php
include "Human.php";

class Mahasiswa extends Human{

	private $nim = '';
	private $prodi = '';
	private $fakultas = '';

	public function __construct($nim = '', $prodi = '', $fakultas = ''){
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
    }

	//getter dan setter
    public function setNim($nim)
	{
		$this->nim = $nim;
	}

	public function getNim()
	{
		return $this->nim;
	}

	public function setProdi($prodi)
	{
		$this->prodi = $prodi;
	}

	public function getProdi()
	{
		return $this->prodi;
	}

	public function setFakultas($fakultas)
	{
		$this->fakultas = $fakultas;
	}

	public function getFakultas()
	{
		return $this->fakultas;
	}

}

?>