<?php
/**
* Lista alla bilder i katalog. Visa som album.
*
* @category   scandir övning
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Album</h1>
    <?php
    $directory = "uploads";
    $fileList= scandir($directory);

    echo "<ul>";
    foreach ($fileList as $file) {
        if (!in_array($file ,array(".",".."))) {
            echo "<li><a href=\"uploads/$file\"><img src=\"uploads/$file\"></a></li>";
        }
    }
    echo "<ul>";
    ?>
</body>
</html>
