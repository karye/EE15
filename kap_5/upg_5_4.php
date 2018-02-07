<?php
/**
* Programmet  tar två siffror, lägger ihop dem och presenterar resultatet i bokstavsform. (Ex: fyra plus tre blir sju.)
*
* PHP version 5
* @category   Jobbar med funktioner
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/

// Inkludera funktioner från filen "funktioner.php"
include 'upg_5_3.php';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Räkna på svenska</title>
</head>
<body>
    <h1>Räkna på svenska</h1>
    <?php

    // Kolla om post-variablerna finns
    if (isset($_POST["tal1"]) && isset($_POST["tal2"])) {

        // Plocka ut post-variablerna
        $tal1 = $_POST["tal1"];
        $tal2 = $_POST["tal2"];

        echo "<p>" . talTillText($tal1) . " plus " . talTillText($tal2) . " blir " . talTillText($tal1 + $tal2) . "</p>";
    }
    ?>
    <form method="post">
        <label>Tal 1</label><input type="number" name="tal1"><br>
        <label>Tal 2</label><input type="number" name="tal2"><br>
        <button>Summera</button>
    </form>
</body>
</html>
