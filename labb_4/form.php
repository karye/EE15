<?php
/**
* Program som laddar upp filer
*
* PHP version 5
* @category   Användbart
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Filuppladdning</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        if (isset($_GET['uploadsuccess'])) {
            echo "<p>Uppladdningen lyckades</p>";
        }
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">Ladda upp!</button>
    </form>
</body>
</html>
