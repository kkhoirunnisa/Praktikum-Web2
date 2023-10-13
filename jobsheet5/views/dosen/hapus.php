<?php
//untuk database dan controller
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

//mendapatkan koneksi ke database
$database = new database();
$db = $database->getKoneksi();

//mengecek parameter id apakah ada
if (isset($_GET['id'])){
    $id=$_GET['id'];
// Membuat instance DosenController dengan menyediakan koneksi database
//membuat objek
    $dosenController=new DosenController($db);
    // Memanggil metode deleteDosen pada controller untuk menghapus data dosen berdasarkan ID
    $result=$dosenController->deleteDosen($id);
 // Memeriksa apakah operasi penghapusan berhasil atau gagal
    if($result){
        header("location:/jobsheet5/dosen"); //berhasil
    }else{
        echo "Gagal Menghapus Data"; //gagal
    }
}