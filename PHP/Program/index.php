<?php

include "SivitasAkademik.php";

$data = new SivitasAkademik();
$data->setNik("32043782676718");
$data->setNama("Alifia Isti Fadhila");
$data->setGender("Perempuan");
$data->setNim("1908463");
$data->setProdi("Ilmu Komputer");
$data->setFakultas("FPMIPA");
$data->setUniv("Universitas Pendidikan Indonesia");
$data->setEmail("alifia@upi.edu");

echo "<b><u>DATA MAHASISWA</u></b>"."<br/>";
echo "<br/>";
echo "NIK               : ".$data->getNik()."<br/>";
echo "Nama Lengkap      : ".$data->getNama()."<br/>";
echo "Jenis Kelamin     : ".$data->getGender()."<br/>";
echo "NIM               : ".$data->getNim()."<br/>";
echo "Program Studi     : ".$data->getProdi()."<br/>";
echo "Fakultas          : ".$data->getFakultas()."<br/>";
echo "Asal Universitas  : ".$data->getUniv()."<br/>";
echo "Email Edu         : ".$data->getEmail()."<br/>";

?>