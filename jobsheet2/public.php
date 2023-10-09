<!-- encapsulation : metode u/ mengatur struktur sebuah class (properti dan method) bertujuan u/ hak akses-->
<?php

//membuat class mahasiswa
class mahasiswa
{
    //properti public
    //tidak menulis public otomatis menjadi public
    public $nama;

    //protected tidak bisa dipanggil di luar class harus dipanggil di warisannya inheritance(extend)
    //protected $nim;
    private $nim = "220302038";

    //public method --bisa ditulis public bisa tidak otomatis public
    public function tampilkan_nama()
    {
        //nilai kembalian
        return "Nama saya Nisa </br>";
    }

    //membuat method protected
    /*protected function tampilkan_nim()
    {
        return "NIM saya 220302038";
    }*/

    //private hanya bisa dipanggil di class itu saja
    function tampilkan_nim()
    {
        return "NIM saya " . $this->nim;
    }
}

//public bisa dipanggil di luar class
//instansiasi objek mahasiswa ke dalam variabel $mahasiswa
$mahasiswa = new mahasiswa;
$nim = new mahasiswa;

//memanggil method tampilkan nama
echo $mahasiswa->tampilkan_nama();
echo $mahasiswa->tampilkan_nim();
?>