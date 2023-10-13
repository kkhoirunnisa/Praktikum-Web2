<?php
class database
{

    //public
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi; //mendeklrasikan koneksi gar bisa terpanggil

    function getKoneksi() /*tidak perlu membuat function maka file lain ketika include 
    database.php maka function/method ini sudah akan ikut tanpa memanggil functionnya*/
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db); //memanggil atribut
        //alerts untuk apakah database ada/ditemukan?
        if (!$this->koneksi) {
            //jika tidak ada database
            die("Koneksi database gagal : " . mysqli_connect_error());
        }

        return $this->koneksi; //jika ada database akan mengeksekusi $this->koneksi....
    }
}
