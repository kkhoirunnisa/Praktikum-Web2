<?php
//memanggil class database
include '../classes/database.php';
//intasisasi class database
$db = new database();

// Mengambil nilai aksi dari parameter URL
$aksi = $_GET['aksi'];
// Jika aksi adalah "tambah", maka tambahkan data mahasiswa ke database
if ($aksi == "tambah") {
    // Memanggil method tambah_mhs dengan data dari form
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']); //array asosiatif ''
    header("location:tampil_mhs.php?pesan=success"); // Redirect ke halaman tampil_mhs.php setelah aksi
    // Jika aksi adalah "update", maka perubahan data mahasiswa ke database


} elseif ($aksi == "update") {
    // Memanggil method update dengan data dari form
    $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?pesan=sukses&id=" . $_POST['id']); // Redirect ke halaman tampil_mhs.php setelah aksi
    // Jika aksi adalah "hapus", maka hapus data mahasiswa ke database

} elseif ($aksi == "hapus") {
     // Memanggil method hapus dengan data dari form
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php?pesan=berhasil&id=" . $_POST['id']); // Redirect ke halaman tampil_mhs.php setelah aksi
}
