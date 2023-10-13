<?php

//menghubungkan dengan models
include_once '../../models/Mahasiswa.php';

class MahasiswaController
{
    // property untuk mereturn di constract
    private $model;

    public function __construct($db)
    {
        //instasiasi mahasiswa yang ada di model maka bisa memanggil getAllMahasiswa
        $this->model = new Mahasiswa($db);
    }

    //method
    public function getAllMahasiswa()
    {
        //menarik file/field yang ada di mahasiswa
        return $this->model->getAllMahasiswa();
    }

    //controller/handling create
    public function createMahasiswa($nim, $nama, $alamat)
    {
        return $this->model->createMahasiswa($nim, $nama, $alamat);
    }

    //EDIT
    public function getMahasiswaById($id)
    {
        return $this->model->getMahasiswaById($id);
    }

    public function updateMahasiswa($id, $nim, $nama, $alamat)
    {
        return $this->model->updateMahasiswa($id, $nim, $nama, $alamat);
    }

    //HAPUS
    public function deleteMahasiswa($id)
    {
        return $this->model->deleteMahasiswa($id);
    }
}
