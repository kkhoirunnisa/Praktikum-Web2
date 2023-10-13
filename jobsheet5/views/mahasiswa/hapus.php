<?php
//untuk database dan controller
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
//mendapatkan koneksi ke database
$database = new database();
$db = $database->getKoneksi();
//mengecek parameter id apakah ada
if (isset($_GET['id'])){
    $id=$_GET['id'];
//membuat objek
    $mahasiswaController=new MahasiswaController($db);
    // Memanggil metode deleteMahasiswa pada controller untuk menghapus data dosen berdasarkan ID
    $result=$mahasiswaController->deleteMahasiswa($id);
// Memeriksa apakah operasi penghapusan berhasil atau gagal
    if($result){
        header("location:/jobsheet5/mahasiswa"); //berhasil
    }else{
        echo "Gagal Menghapus Data"; //gagal
    }
}