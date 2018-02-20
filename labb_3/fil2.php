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
$fornamn = $_SESSION["fornamn"];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        echo "<p>Mitt namn är $fornamn</p>";
    ?>
    <a href="fil3.php">Till fil 3</a>
</body>
</html>
