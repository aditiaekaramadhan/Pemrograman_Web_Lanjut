<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$makul_1 = new MataKuliah();

$mahasiswa_1->setData("A11.2023.14997", "Aditia Eka Ramadhan", "2004-10-27");

var_dump($mahasiswa_1->getData());