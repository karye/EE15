<?php
/**
* Ändra bakgrundsfärg via formulär
*
* PHP version 5
* @category   Formuläret
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Ändra bakgrundsfärg</title>
</head>
<body>
    <form action="upg_2_3_b.php" method="post">
        <label>Välj bakgrundsfärg</label>
        <input type="radio" name="bg" value="red">Röd
        <input type="radio" name="bg" value="blue">Blå
        <input type="radio" name="bg" value="green">Grön
        <input type="radio" name="bg" value="yellow">Gul<br>
        <button>Måla bakgrund</button>
    </form>
</body>
</html>
