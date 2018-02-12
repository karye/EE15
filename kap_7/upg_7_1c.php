<?php
/**
* Kontrollera att epost är korrekt av typ: fornamn.efternamn@gmail.com/.se
*
* PHP version 5
* @category   Reguljära uttryck
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Reguljära uttryck</title>
</head>
<body>
    <h1>Reguljära uttryck</h1>
    <?php

    // Kolla om post-variablerna finns
    if (isset($_POST["epost"])) {

        // Plocka ut post-variablerna
        $epost = $_POST["epost"];

        if (preg_match("/^([a-z]+)\.([a-z]+)@([a-z]+\.(se|com))$/", $epost, $namn)) {
            echo "<p>Det matchar!</p>";

            foreach ($namn as $match) {
                echo "<p>$match</p>";
            }
        } else {
            echo "<p>Det matchar inte</p>";
        }

    }
    ?>
    <form method="post">
        <label>Domän</label><input type="text" name="epost"><br>
        <button>Kontrollera</button>
    </form>
</body>
</html>
