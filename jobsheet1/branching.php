<!-- statis : tanpa menginput , dinamis : dgn input-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>
    <!-- untuk memasukkan input nilai x -->
    <form method="post" action="">
        Masukkan Nilai X: <input type="number" name="x">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    /*$x = 2;
    echo "Nilai X = $x </br></br>";
    if ($x > 0) {
        echo "$x Bilangan positif";
    } else if ($x < 0) {
        echo "$x Bilangan negatif";
    } else {
        echo "$x Bilangan nol";
    }*/

    if (isset($_POST['submit'])) { //jika tombol submit sudah di klik
        // Mengambil nilai X dari inputan
        $x = $_POST["x"];

        echo "Nilai X = $x <br><br>";

        if ($x > 0) {
            echo "$x adalah Bilangan positif";
        } else if ($x < 0) {
            echo "$x adalah Bilangan negatif";
        } else {
            echo "$x adalah Bilangan nol";
        }
    }
    ?>
</body>

</html>