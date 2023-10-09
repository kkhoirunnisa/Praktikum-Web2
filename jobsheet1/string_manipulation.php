<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
    <?php
    $x = "Selamat belajar PHP!";
    echo $x;
    echo "<br></br>";
    echo "<br>";
    echo "MENGUBAH STRING DI ATAS";
    echo "<br>";
    echo "String menjadi huruf kapital = ";
    echo strtoupper($x); //huruf kapital
    echo "<br>";
    echo "String menjadi huruf kecil = ";
    echo strtolower($x); //huruf kecil
    echo "<br>";
    echo "Memotong string = ";
    echo substr($x, 0, 7); //memotong string dr indeks 0-7
    ?>
</body>

</html>