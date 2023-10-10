
<?php

//mysqli connection ada 4 atribut = host, username, password, database
// mysql connection 3 atribut = host, username, password

//membuat class database
class database
{
    //public
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi; //mendeklrasikan koneksi gar bisa terpanggil

    //konstruktor class database
    function __construct() /*tidak perlu membuat function maka file lain ketika include 
    database.php maka function/method ini sudah akan ikut tanpa memanggil functionnya*/
    {
        //membuat koneksi database
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db); //memanggil atribut
    }
    //menampilkan data
    function tampil_mahasiswa()
    {
        // Menjalankan query untuk mengambil data mahasiswa
        $data = mysqli_query($this->koneksi, "select * from mahasiswa"); //menetapkan konstanta yg tetap (string query)
        while ($d = mysqli_fetch_array($data)) { //perulangan untuk memanggil seluruh data di tabel mahasiswa
            $hasil[] = $d; //menyimpan hasil data di dalam array
        }
        return $hasil; //mengembalikan hasil data
    }
    //tambah
    function tambah_mhs($nim, $nama, $alamat)
    {
        //menjalankan query untuk menambahkan data
        mysqli_query($this->koneksi, "insert into mahasiswa (nim,nama,alamat) values ('$nim', '$nama', '$alamat')");
    }
    //edit
    function edit($id)
    {
        // Menjalankan query untuk mengambil data mahasiswa berdasarkan ID
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d; // Menyimpan hasil data dalam bentuk array
        }
        return $hasil; //mengembalikan hasil data
    }
    //update
    function update($id, $nim, $nama, $alamat)
    {
        // Menjalankan query untuk mengupdate data mahasiswa
        mysqli_query($this->koneksi, "update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id='$id' ");
    }

    //hapus
    function hapus($id)
    {
        // Menjalankan query untuk menghapus data mahasiswa
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }

    //DOSEN
    //tampilan
    function tampil_dsn()
    {
        $data = mysqli_query($this->koneksi, "select * from dosen"); //menetapkan konstanta yg tetap (string query)
        while ($d = mysqli_fetch_array($data)) { //perulangan untuk memanggil seluruh data di tabel mahasiswa
            $hasil[] = $d; //hasil data di dalam array
        }
        return $hasil;
    }
    //tambah
    function tambah_dsn($nidn, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "insert into dosen (nidn,nama,alamat) values ('$nidn', '$nama', '$alamat')");
    }
    //edit
    function edit_dsn($id)
    {
        $data = mysqli_query($this->koneksi, "select * from dosen where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    //update
    function update_dsn($id, $nidn, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', alamat='$alamat' where id='$id' ");
    }

    //hapus
    function hapus_dsn($id)
    {
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }
}
