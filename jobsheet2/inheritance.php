<?php

//super class
/*class manusia
{
    public $nama_saya;


    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
}

//class turunan atau sub class dari manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;
    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$informatika = new mahasiswa(); //yang dipanggil hanya mahasiswa tp bisa memanggil properti dari manusia

$informatika->panggil_nama("Kurnia Khoirun");
$informatika->panggil_mahasiswa("Nisa");

//tampilkan isi properti
echo "Nama depan saya : " . $informatika->nama_saya . "</br>";
echo "Nama belakang saya : " . $informatika->nama_mahasiswa;*/


//membuat class manusia


class manusia
{
    //membuat properti/atribut
    public $nama_saya;
    protected $nik; //bisa diakses dari kelas turunan

    //method public
    public function panggil_nama($nama)
    {
        $this->nama_saya = $nama; //yg belum ada inputannya tidak usah pake return
    }

    //method nik
    public function panggil_nik()
    {
        return "NIK saya : 33010384758694837";
    }
}

//sub class mahasiswa merupakan turunan dari class manusia
class mahasiswa extends manusia
{
    //atribut
    public $nama_mahasiswa;
    private $alamat = "Jalan Sawo";
    //method public
    public function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
    //method privat
    public function panggil_alamat()
    {
        return $this->alamat;
    }
}

//instansiasi objek dari class mahasiswa
$informatika = new mahasiswa();
$almt = new mahasiswa();

//isi public
$informatika->panggil_nama("Nisa");
$informatika->panggil_mahasiswa("Kurnia");
//tampilkan isi properti/atribut
echo "Nama depan saya : " . $informatika->nama_saya;
echo "<br>";
echo "Nama belakang saya : " . $informatika->nama_mahasiswa;
echo "<br>";
echo $informatika->panggil_nik();
echo "<br>";
echo "Alamat saya : " . $almt->panggil_alamat();
