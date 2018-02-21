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

if (!isset($_SESSION["loggedin"])) {
    $_SESSION["loggedin"] = false;
}

if (!$_SESSION["loggedin"]) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'menu.php';
    ?>
    <h1>Välkommen</h1>
    <p>Till min snygga sida</p>
</body>
</html>
