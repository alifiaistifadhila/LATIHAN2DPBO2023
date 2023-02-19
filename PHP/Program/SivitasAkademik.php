<?php
include "Mahasiswa.php";

class SivitasAkademik extends Mahasiswa{

	private $univ = '';
	private $email= '';

	public function __construct($univ = '', $email= ''){
        $this->univ = $univ;
        $this->email= $email;
    }

	//getter dan setter
    public function setUniv($univ)
	{
		$this->univ = $univ;
	}

	public function getUniv()
	{
		return $this->univ;
	}

	public function setEmail($email)
	{
		$this->email= $email;
	}

	public function getEmail()
	{
		return $this->email;
	}
}

?>