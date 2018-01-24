<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        /* Öppna textfilen för att läsa */
        $handtag = fopen("slask.txt", "r");

        /* Läser textfilen rad för rad */
        //$rader = fread($handtag, filesize("slask.txt"));
        $rader = file("slask.txt");
        foreach($rader as $rad) {
            echo "<p>$rad</p>";
        }

        /* Stäng textfilen */
        fclose($handtag);
    ?>
</body>
</html>
