<?php
/**
* Filluppladdare
*
* PHP version 5
* @category   Användbar kod
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
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];

            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowedExt = ['jpg', 'jpeg', 'png'];

            if (in_array($fileActualExt, $allowedExt)) {
                if ($fileError === 0) {
                    if ($fileSize < 500000) {
                        $fileNameNew = uniqid('', true) . ".$fileActualExt";
                        $fileDestination = "uploads/$fileNameNew";
                        move_uploaded_file($fileTmpName, $fileDestination);
                        header('Location: form.php?uploadsuccess');
                    } else {
                        echo "<p>Filen är för stor!</p>";
                    }
                } else {
                    echo "<p>Det blev ett fel: $fileError</p>";
                }
            } else {
                echo "<p>Du kan inte ladda filer av typen $fileActualExt</p>";
            }
        }
    ?>
</body>
</html>
