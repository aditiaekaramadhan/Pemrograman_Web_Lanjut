<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $programStudi;

    // Methode mengatur data mhs
    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }
    
    // Methode mengambil data mhs dalam bentuk array
    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi,
        ];
    }

    // Methode menampilkan data mhs
    function tampilkanData()
    {
        echo "NIM : {$this->nim}\n";
        echo "Nama : {$this->nama}\n";
        echo "Program Studi : {$this->programStudi}\n";
        echo "\n"; 
    }
}
?>
