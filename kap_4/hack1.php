<?php
/**
* Hur man skyddar mot hack
*
* PHP version 5
* @category   Säkerhet
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Lite om säkerhet</title>
</head>
<body>
    <h1>Min blogg</h1>
    <form action="hack2.php" method="post">
        <label>Texten</label>
        <textarea name="texten"></textarea><br>
        <button>Spara</button>
    </form>
</body>
</html>
