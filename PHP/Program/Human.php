<?php

class Human{

	private $nama = '';
	private $nik = '';
	private $gender = '';

	public function __construct($nama = '', $nik = '', $gender = ''){
        $this->nama = $nama;
        $this->nik = $nik;
        $this->gender = $gender;
    }

	//getter dan setter
    public function setNama($nama)
	{
		$this->nama = $nama;
	}

	public function getNama()
	{
		return $this->nama;
	}

	public function setNik($nik)
	{
		$this->nik = $nik;
	}

	public function getNik()
	{
		return $this->nik;
	}

	public function setGender($gender)
	{
		$this->gender = $gender;
	}

	public function getGender()
	{
		return $this->gender;
	}

}

?>