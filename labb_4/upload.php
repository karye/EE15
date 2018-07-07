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
    <title>Enkel Filuppladdning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        // Plocka ut filens namn
        $fileName = $file['name'];

        // Plocka ut filens temporära namn
        $fileTmpName = $file['tmp_name'];

        // Plocka ut filens storlek
        $fileSize = $file['size'];

        // Blev det något fel? Vilket felnr?
        $fileError = $file['error'];

        // Plocka ut filtypen
        $fileType = $file['type'];
<<<<<<< HEAD
        
=======

        // Räkna fram filändelsen
>>>>>>> f888f0da531f0f331316e77631632f9658e22b7a
        $fileExt = explode('.', $fileName);

        // .. och omvandla den till små bokstäver
        $fileActualExt = strtolower(end($fileExt));

        // Skapa en lista på tillåtna filändelser
        $allowedExt = ['jpg', 'jpeg', 'png'];

        // Skapa en lista av felen och vad de betyder
        $error_messages = array(
            UPLOAD_ERR_OK         => 'There is no error, the file uploaded with success',
            UPLOAD_ERR_INI_SIZE   => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            UPLOAD_ERR_FORM_SIZE  => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            UPLOAD_ERR_PARTIAL    => 'The uploaded file was only partially uploaded',
            UPLOAD_ERR_NO_FILE    => 'No file was uploaded',
            UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
            UPLOAD_ERR_EXTENSION  => 'A PHP extension stopped the file upload',
        );

        // Kontrollerar filtypen är med i godkända listan
        if (in_array($fileActualExt, $allowedExt)) {

            // Blev det något fel?
            if ($fileError === 0) {

                // Om filstorleken mindre än 500Kb så är det ok
                if ($fileSize < 500000) {

                    // Slumpa fram ett unikt namn på filen,
                    // annars kan filer med samma namn skrivas över
                    $fileNameNew = uniqid('', true) . ".$fileActualExt";

                    // Var skall filerna laddas upp?
                    $fileDestination = "uploads/$fileNameNew";

                    // Flytta den uppladade filen från sin temporära plats till
                    // vart  den skall ligga
                    move_uploaded_file($fileTmpName, $fileDestination);

                    // Allt är klart! Hoppa tillbaka till uppladningssidan
                    header('Location: form.php?uploadsuccess');
                } else {
                    echo "<p>Filen är för stor!</p>";
                }
            } else {
                echo "<p>Det blev fel $fileError: $error_messages[$fileError]</p>";
            }
        } else {
            echo "<p>Du kan inte ladda filer av typen $fileActualExt</p>";
        }
    }
    ?>
</body>
</html>
