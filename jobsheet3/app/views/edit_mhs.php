<?php
//memanggil class database
include '../classes/database.php';
//intasisasi class database
$db = new database();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<!-- Container dengan padding horizontal -->
<div class="px-5">
    <h3>Edit Data Mahasiswa</h3>
    <a class="btn btn-success mb-2 mt-2" href="tampil_mhs.php">KEMBALI</a>
    <!-- Container dengan padding horizontal, border, dan lebar 40% -->
    <div class="px-3 border " style="width:40%; ">
        <!-- Form untuk mengupdate data mahasiswa, aksi dikirim sebagai parameter URL -->
        <form action="proses_mhs.php?aksi=update" method="post">
            <?php
            foreach ($db->edit($_GET['id']) as $d) {


            ?>
                <!-- Loop untuk mengisi form dengan data mahasiswa yang akan diedit -->
                <!-- mengedit nim -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NIM</label>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input name="nim" type="text" class="form-control" id="" placeholder="Masukkan NIM" value="<?php echo $d['nim'] ?>">
                </div>
                <!-- mengedit nama -->
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" id="" placeholder="Masukkan Nama" value="<?php echo $d['nama'] ?>">
                </div>
                <!-- mengedit alamat -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea class="form-control " id="" name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat"><?php echo $d['alamat'] ?></textarea>
                </div>
                <tr>
                    <!-- tombol simpan -->
                    <td></td>
                    <td><input class="btn btn-primary" type="submit" value="Simpan"></td>
                </tr>
                </table>
            <?php
            }
            ?>
        </form>