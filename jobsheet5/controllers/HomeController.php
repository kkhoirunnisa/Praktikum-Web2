<?php

//membuat class
class HomeController
{
    //fungsi untuk ke halaman home
    public function home()
    {
        header("location:http://localhost/jobsheet5/index.php");
    }
 //fungsi untuk ke halaman mahasiswa
    public function mahasiswa()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
    }
 //fungsi untuk ke halaman dosen
    public function dosen()
    {
        header("location:http://localhost/jobsheet5/views/dosen/dosen.php");
    }
}
