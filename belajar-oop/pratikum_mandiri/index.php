<?php

include "Mahasiswa.php";

// object fulan
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

// object junior
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');

// Menampilkan data mhs
echo "Data Mahasiswa:\n\n";
$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();

?>
