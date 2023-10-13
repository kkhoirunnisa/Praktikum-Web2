<?php
//untuk database dan controller
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
// Mendapatkan koneksi ke database
$database = new database();
$db = $database->getKoneksi();
// Mengecek apakah formulir telah disubmit (tombol "submit" ditekan)
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
//membuat objek
    $mahasiswaController = new MahasiswaController($db);
    // Memanggil metode createMahasiswa pada controller untuk menambahkan data mahasiswa
    $result = $mahasiswaController->createMahasiswa($nim, $nama, $alamat);
// Memeriksa apakah operasi penambahan data berhasil atau gagal
    if ($result) {
        header("location:mahasiswa"); //berhasil
    } else {
        header("location:tambah"); //gagal
    }
}
