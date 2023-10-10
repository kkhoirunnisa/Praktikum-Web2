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

<!-- navbar -->
<div class="px-3 py-3"> <!--padding samping kiri dan kanan -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Siakad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dosen</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!--alerts -->
    <?php
    //ditambah
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'success') { ?>
        <div class="alert alert-success mx-auto text-center" style="width:18%" role="alert">
            Data berhasil<a href="#" class="alert-link"> DITAMBAH</a>
        </div>
    <?php
        header("refresh:2,url=tampil_mhs.php");
        //diedit
    } elseif (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') { ?>



        <div class="alert alert-warning mx-auto text-center" style="width:15%" role="alert">
            Data berhasil<a href="#" class="alert-link"> DIEDIT</a>
        </div>
    <?php
        header("refresh:2,url=tampil_mhs.php");
        //dihapus
    } elseif (isset($_GET['pesan']) && $_GET['pesan'] == 'berhasil') { ?>



        <div class="alert alert-danger mx-auto text-center" style="width:15%" role="alert">
            Data berhasil <a href="#" class="alert-link"> DIHAPUS</a>
        </div>
    <?php
        header("refresh:2,url=tampil_mhs.php");
    }
    ?>

    <h1><br>Data Mahasiswa</h1>

    <a class="btn btn-primary mb-2 mt-2" href="input_mhs.php">+ TAMBAH MAHASISWA</a>
    <!--menampilkan tabel-->
    <table class="table table-striped table-bordered" style="text-align: center;">
        <thead class="table-primary"> <!--bagian latar belakang header tabel -->
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
                    <!--tombol edit dan hapus -->
                    <td>
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
</div>