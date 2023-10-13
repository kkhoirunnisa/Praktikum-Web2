<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-5">
    <h3>Tambah Data Dosen</h3>
    <a class="btn btn-success mb-2 mt-2" href="dosen">KEMBALI</a>


    <div class="px-3 border " style="width:40%; ">
        <form action="proses_dosen" method="post">
            <!-- input nidn -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIDN</label>
                <input name="nidn" type="text" class="form-control" id="" placeholder="Masukkan NIDN">
            </div>
            <!-- input nama -->
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="" placeholder="Masukkan Nama">
            </div>
            <!-- input alamat -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control " id="" name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat"></textarea>
            </div>
            <!-- tombol simpan -->
            <tr>
                <td></td>
                <td><input class="btn btn-primary" name="submit" type="submit" value="Simpan"></td>
            </tr>
        </form>
    </div>
</div>