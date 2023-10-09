<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <!-- for ada 3 parameter, (1 : inisialisasi nilai awal, 2 : batas, 3 : interfalnya (menambahkan nilai inisialisasi awalnya))-->
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x </br>";

    //perulangan while ada inisialisasi awalnya
    echo "<br>Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y = 1;
    while ($y <= 10) {
        echo "$y </br>";
        $y += 2;
    }
    echo "<br>Perulangan DO - WHILE bilangan prima kurang dari 20 </br>";
    $angka = 2; // Mulai dari angka 2, bilangan prima paling kecil
    do {
        $bilanganprima = true; //angka 2 merupakan bilangan prima
        //looping for yg dimulai dr 2 dan dibagi terus meningkat hingga pembagi kurang dari angka itu sendiri
        for ($pembagi = 2; $pembagi < $angka; $pembagi++) {
            if ($angka % $pembagi == 0) { //apakah angka dibagi dgn pembagi tanpa sisa?
                //jika sisa bagi = 0 bukan bilangan prima
                $bilanganprima = false; // Bukan bilangan prima
                break;
            }
        }

        if ($bilanganprima) {
            echo "$angka </br>"; //menampilkan angka yg bilangan prima
        }
        $angka++; //angka di + 1 untuk memeriksa berikutnya
    } while ($angka < 20); //perulangan sampe kurang dr 20

    ?>
</body>

</html>