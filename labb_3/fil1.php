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
$_SESSION["fornamn"] = "Karim";
$_SESSION["efternamn"] = "Ryde";
$namn = "Karim";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <a href="fil2.php">Till fil 2</a>
</body>
</html>
