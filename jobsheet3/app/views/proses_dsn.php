<?php
//memanggil class database
include '../classes/database.php';
//intasisasi class database
$db = new database();

// Mengambil nilai aksi dari parameter URL
$aksi = $_GET['aksi'];
// Jika aksi adalah "tambah", maka tambahkan data dosen ke database
if ($aksi == "tambah") {
    $db->tambah_dsn($_POST['nidn'], $_POST['nama'], $_POST['alamat']); //array asosiatif ''
    header("location:tampil_dsn.php");// Redirect ke halaman tampil_dsn.php setelah aksi
    // Jika aksi adalah "update", maka perubahan data dosen ke database
} elseif ($aksi == "update") {    // Memanggil method update dengan data dari form
    $db->update_dsn($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_dsn.php");// Redirect ke halaman tampil_dsn.php setelah aksi
    // Jika aksi adalah "hapus", maka hapus data dosen ke database
} elseif ($aksi == "hapus") {
    // Memanggil method hapus dengan data dari form
    $db->hapus_dsn($_GET['id']);
    header("location:tampil_dsn.php");// Redirect ke halaman tampil_dsn.php setelah aksi
}
