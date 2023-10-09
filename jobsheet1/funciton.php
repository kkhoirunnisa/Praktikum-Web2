<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>

<body>
    <!-- dinamis : memasukkan input -->
    <form method="post">
        <!-- form untuk memasukkan inputan -->
        MENGHITUNG LUAS PERSEGI PANJANG<br>
        Masukkan Panjang: <input type="number" name="p"><br>
        Masukkan Lebar: <input type="number" name="l"><br></br>
        MENGHITUNG LUAS LINGKARAN<br>
        Masukkan Jari-Jari : <input type="number" name="r"><br></br>
        <input type="submit" name="submit" value="Hitung"><br>
    </form>
    <?php
    //eksekusi rumus
    function persegi_panjang($p, $l)
    {
        $luas = $p * $l;
        return $luas;
    }
    function lingkaran($r)
    {
        $luas = 3.14 * $r * $r;
        return $luas;
    }

    if (isset($_POST['submit'])) {
        //mengambil nilai dari inputan
        $p = $_POST['p'];
        $l = $_POST['l'];
        $r = $_POST['r'];
        echo "HASIL PERHITUNGAN </br>";
        echo "Luas Persegi Panjang = " . persegi_panjang($p, $l) . "</br>"; //memanggil fungsi eksekusi rumus
        echo "Luas Lingkaran = " . lingkaran($r) . "</br>";
    }
    /*
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }
    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }

    //statis = tanpa inputan
    echo "Luas Persegi Panjang = " . persegi_panjang(5, 2) . "</br>";
    echo "Luas Lingkaran = " . lingkaran(7) . "</br>";*/

    ?>
</body>

</html>