<?php
/**
* Beskrivning
*
* PHP version 5
* @category   Kategori
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<?php
session_start();

if (!isset($_SESSION["antal"]))
    $_SESSION["antal"] = 0;
else
    $_SESSION["antal"]++;

$antal = $_SESSION["antal"];
?>
<!DOCTYPE html>
<html $lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        echo "<h3>Antalet besökare på denna sida är $antal</h3>";
    ?>
</body>
</html>
