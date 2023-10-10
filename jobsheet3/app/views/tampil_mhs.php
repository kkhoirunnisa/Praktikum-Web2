<?php
//memanggil class database
include '../classes/database.php'; //untuk mengcopy yg ada di database.php

//intasisasi class database
$db = new database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-3 py-3">
    <h1><br>Data Mahasiswa</h1>

    <a class="btn btn-primary mb-2 mt-2" href="input_mhs.php">+ TAMBAH MAHASISWA</a>
    <!--menampilkan tabel-->
    <table class="table table-striped table-bordered" style="text-align: center;">
        <thead class="table-dark"> <!--bagian latar belakang header tabel -->
            <tr>
                <!-- kolom -->
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 1; // Inisialisasi nomor urutan (dalam tabel)
            //menampilkan hasil perulangan hasil dari fungsi tampil mahasiswa
            // loop foreach yang digunakan untuk menampilkan data mahasiswa dari hasil pemanggilan metode $db->tampil_mahasiswa() 
            foreach ($db->tampil_mahasiswa() as $x) {
            ?>
                <tr>
                
                    <td><?php echo $no++ ?> </td> 
                    <td><?php echo $x['nim'] ?> </td>
                    <td><?php echo $x['nama'] ?> </td>
                    <td><?php echo $x['alamat'] ?> </td>
                    <td>
                        <!-- tombol edit dan hapus -->
                        <a class="btn btn-warning" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                        <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>