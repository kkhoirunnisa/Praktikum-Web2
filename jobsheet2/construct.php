<?php
//membuat class
class mahasiswa
{
    //menuliskan properti (pd database kolom kolomnya)
    var $nim;
    var $nama;
    var $alamat;

    //construct merupakan metode/fungsi yang pertama di baca walaupun letaknya di bawah
    function __construct()
    {
        echo "Saya mahasiswa Teknik Informatika";
        echo "<br>";
    }

    //destruct akan dipanggil terakhir sendiri
    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }

    //method : return = prosedur
    function tampil_nama()
    {
        //isi method
        return "Nama saya adalah Nisa";
    }

    //method tampil mahasiswa
    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
    }

    function tampil_alamat()
    {
        //isi method
        //return "Alamat Jalan Sawo";
    }
}

//membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo "<br>";
//echo $nama_mahasiswa->tampil_alamat();
//echo "<br>";
echo $nama_mahasiswa->tampil_mahasiswa();
