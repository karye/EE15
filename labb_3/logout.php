<?php
/**
* Loggar ut och avslutar sessionen
*
* PHP version 5
* @category   Sessionshantering
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<?php
session_start();
$_SESSION = Null;

session_destroy();
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
    <p>Tack för besöket, välkommen åter!</p>
</body>
</html>
