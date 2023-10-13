<?php
class Dosen
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
    public function getAllDosen()
    {
        $query = "SELECT * FROM dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    //CREATE DI MODELS
    //nilai return sesuai apa yg diinputkan
    public function createDosen($nidn, $nama, $alamat)
    {
        $query = "INSERT INTO dosen(nidn,nama,alamat) VALUES('$nidn','$nama', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    //EDIT DI MODELS
    public function getDosenById($id)
    {
        $query = "SELECT * FROM dosen where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function updateDosen($id, $nidn, $nama, $alamat)
    {
        $query = "UPDATE dosen set nidn='$nidn', nama='$nama', alamat='$alamat' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //HAPUS
    public function deleteDosen($id)
    {
        $query = "DELETE FROM dosen where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
