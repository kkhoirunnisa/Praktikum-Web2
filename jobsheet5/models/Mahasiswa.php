<?php
class Mahasiswa
{
    private $koneksi;

    //method public
    //konstrak ada kembalian db yg akan dipanggil di controller
    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    //menampilkan data (read)
    //MODELS
    //method public karena models yg akan dipanggil di controllernya / views
    public function getAllMahasiswa()
    {
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    //CREATE DI MODELS
    //nilai return sesuai apa yg diinputkan
    public function createMahasiswa($nim, $nama, $alamat)
    {
        $query = "INSERT INTO mahasiswa(nim,nama,alamat) VALUES('$nim','$nama', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    //EDIT DI MODELS
    public function getMahasiswaById($id)
    {
        $query = "SELECT * FROM mahasiswa where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function updateMahasiswa($id, $nim, $nama, $alamat)
    {
        $query = "UPDATE mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //HAPUS
    public function deleteMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
