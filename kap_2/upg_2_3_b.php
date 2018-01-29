<?php
/**
* Ändra bakgrundsfärg via formulär
*
* PHP version 5
* @category   Tar emot data och utför
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
<?php
/* Ta emot data */
$bg = $_POST["bg"];

/* Ändra bakgrundsfärgen */
echo "<body style=\"background: $bg\">";
?>
<a href="upg_2_3_a.php">Välj en annan färg</a>
</body>
</html>
