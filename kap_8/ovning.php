<?php
/**
* Skicka epost
*
* PHP version 5
* @category   Övning
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Skicka epost</title>
</head>
<body>
    <?php
        $amne = "Testar epost";
        $mottagare = "karye.webb@gmail.com";
        $avsandare = "FROM: karye.webb@gmail.com\n";
        $meddelande = "Hej!\nJag testar att skicka mejl från PHP.\n/Karim";
        mail($mottagare, $amne, $meddelande, $avsandare);
    ?>
</body>
</html>
