<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Inlägget registrerat</h1>
    <?php
/* Tar emot data */
$rubriken = $_POST["rubrik"];
$texten = $_POST["inlagg"];

/* Skriv ut innehållet */
echo "<p>$rubriken</p>\n";
echo "<p>$texten</p>\n";

/* Öppna textfilen för att skriva */
$handtag = fopen("slask.txt", "a");

/* Skriv data i textfilen */
fwrite($handtag, $rubriken);
fwrite($handtag, $texten);

/* Stäng textfilen */
fclose($handtag);
?>
</body>

</html>