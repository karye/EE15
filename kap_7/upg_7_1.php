<?php
/**
 * Gör ett formulär där användaren ska fylla i ett domännamn. Kontrollera sedan att domännamnet slutar på .com, .net eller .org. Du ska också kontrollera att de övriga tecknen endast består av bokstäver a-z, siffror 0-9 eller bindestreck (-). Första tecknet måste vara en bokstav. Domännamnet ska vara minst sex tecken och högst 200 tecken långt.
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
if (isset($_POST["doman"])) {

    // Plocka ut post-variablerna
    $doman = $_POST["doman"];

    if (preg_match("/^[a-z][a-z0-9\-]{1,195}\.com|\.net|\.org$/", $doman)) {
        echo "<p>Det matchar!</p>";
    } else {
        echo "<p>Det matchar inte</p>";
    }
}
?>
    <form method="post">
        <label>Domän</label><input type="text" name="doman"><br>
        <button>Kontrollera</button>
    </form>
</body>

</html>