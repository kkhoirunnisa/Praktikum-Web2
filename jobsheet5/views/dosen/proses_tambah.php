<?php
//untuk database dan controller
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
// Mendapatkan koneksi ke database
$database = new database();
$db = $database->getKoneksi();
// Mengecek apakah formulir telah disubmit (tombol "submit" ditekan)
if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    //membuat objek
    $dosenController = new DosenController($db);
    // Memanggil metode createDosen pada controller untuk menambahkan data dosen
    $result = $dosenController->createDosen($nidn, $nama, $alamat);
// Memeriksa apakah operasi penambahan data berhasil atau gagal
    if ($result) {
        header("location:dosen"); //berhasil
    } else {
        header("location:tambah_dosen"); //gagal
    }
}
