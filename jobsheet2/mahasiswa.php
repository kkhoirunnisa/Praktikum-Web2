<?php
//membuat class
/*class mahasiswa
{
    //menuliskan properti (pd database kolom kolomnya)
    var $nim;
    var $nama;
    var $alamat;

    //method : return = prosedur
    function tampil_nama()
    {
        //isi method
        return "Nama saya adalah Nisa";
    }

    function tampil_alamat()
    {
        //isi method
return "Alamat Jalan Sawo";
    }
}

//membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_alamat();*/

//membuat class dosen
class dosen
{
    //properti
    var $nidn;
    var $nama;
    var $prodi;
    //method
    function tampil_nama()
    {

        //nilai kembalian
        return "Nama saya adalah Nisa";
    }
}
//membuat objek
$nama_dosen = new dosen();
//tampilan objek ke layar
echo $nama_dosen->tampil_nama();
