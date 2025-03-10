<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$makul_1 = new MataKuliah();

$mahasiswa_1->setData("A11.2023.14997", "Aditia Eka Ramadhan");
$makul_1->setData("A11.4407", "Pemrograman Web Lanjut");

var_dump($mahasiswa_1->getData());
echo "<br>";
var_dump($makul_1->getData());