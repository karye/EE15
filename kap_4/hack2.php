<?php
/**
* Enkelt skydd
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
    <?php
    if (isset($_POST["texten"])) {
        $texten = $_POST["texten"];

        /* Skydd 1 */
        $sanerat = htmlspecialchars($texten);

        echo $sanerat;
    } else {
        header("Location: hack1.php");
    }
    ?>
</body>
</html>
