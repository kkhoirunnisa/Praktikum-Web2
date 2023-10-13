<?php

//menghubungkan dengan models
include_once '../../models/Dosen.php';

class DosenController
{
    // property untuk mereturn di constract
    private $model;

    public function __construct($db)
    {
        //instasiasi dosen yang ada di model maka bisa memanggil getAllDosen
        $this->model = new Dosen($db);
    }

    //method
    public function getAllDosen()
    {
        //menarik file/field yang ada di dosen
        return $this->model->getAllDosen();
    }

    //controller/handling create
    public function createDosen($nidn, $nama, $alamat)
    {
        return $this->model->createDosen($nidn, $nama, $alamat);
    }

    //EDIT
    public function getDosenById($id)
    {
        return $this->model->getDosenById($id);
    }

    public function updateDosen($id, $nidn, $nama, $alamat)
    {
        return $this->model->updateDosen($id, $nidn, $nama, $alamat);
    }

    //HAPUS
    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }
}
