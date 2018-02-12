<?php
/**
* Kontrollera att domän ser såhär: www.dn.se eller www.forsakringskassan.se eller www.ntig.com bara små bokstäver min 2, max 20 tecken mellan www och .se/.com
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

        if (preg_match("/^w{3}\.[a-z]{2,20}\.se|\.com$/", $doman)) {
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
