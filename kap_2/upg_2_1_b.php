<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
   <?php
    /* Kontrollerar att vi data finns */
    if (isset($_POST["tal1"]) && isset($_POST["tal2"])) {
        /* Ta emot data */
        $tal1 = $_POST["tal1"];
        $tal2 = $_POST["tal2"];

        /* Räkna ut */
        $produkt = $tal1 * $tal2;

        /* Skriva ut resultatet */
        echo "<p>Produkten av tal1 och tal2 är $produkt</p>";
    } else {
        echo "<p>Börja med formuläret!</p>";
    }
    ?>
</body>
</html>
