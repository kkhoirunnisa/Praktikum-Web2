<?php
//menghubungkan file yg dibutuhkan
//memanggil class model database
include_once '../../config.php';
//controller
include_once '../../controllers/MahasiswaController.php';

require '../../index.php';

//instasiasi class database yaitu yg ada di file config
$database = new database;
$db = $database->getKoneksi(); //untuk mengkoneksikan file index menampilkan no,nim,alamat dll

//memanggil controller
$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

navbar -->
<!-- <div class="px-3 py-3"> padding samping kiri dan kanan
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
    </nav>  -->


<h1><br>Data Mahasiswa</h1>

<a class="btn btn-primary mb-2 mt-2" href="tambah">+ TAMBAH MAHASISWA</a>
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
        foreach ($mahasiswa as $x) {
        ?>
            <tr>
                <td><?php echo $no++ ?> </td>
                <td><?php echo $x['nim'] ?> </td>
                <td><?php echo $x['nama'] ?> </td>
                <td><?php echo $x['alamat'] ?> </td>
                <!--tombol edit dan hapus -->
                <td>
                    <a class="btn btn-warning" href="edit/<?php echo $x['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus/<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menhgapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>
</div>
</div>