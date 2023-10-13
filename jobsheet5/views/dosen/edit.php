<?php
//untuk database dan controller
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            //dipanggil
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            //dikirim ke update dosen
            $result = $dosenController->updateDosen($id, $nidn, $nama, $alamat);
            //berhasil
            if ($result) {
                header("location:/jobsheet5/dosen");
                //gagal
            } else {
                header("location:edit_dosen");
            }
        }
        //tidak ada
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>
<!-- form -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="px-5">
    <h3>Edit Data Dosen</h3>
    <a class="btn btn-success mb-2 mt-2" href="/jobsheet5/dosen">KEMBALI</a>
    <?php
    if ($dosenData) { 
    ?>
        <div class="px-3 border " style="width:40%; ">
            <form action="" method="post">
                <?php
                foreach ($dosenData as $d) {
                ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIDN</label>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input name="nidn" type="text" class="form-control" id="" placeholder="Masukkan NIDN" value="<?php echo $d['nidn'] ?>">
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
                    <!-- tombol simpan -->
                    <tr>
                        <td></td>
                        <td><input class="btn btn-primary" name="submit" type="submit" value="Simpan"></td>
                    </tr>
            <?php
                }
            }
            ?>
            </form>