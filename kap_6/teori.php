<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
$adress = "Follingbogatan 6   ";
echo "$adress.";
$adress = trim($adress);
echo "$adress.";
echo $adress . ".";

echo strtolower($adress);
echo strtoupper($adress);

echo strlen($adress);

echo substr($adress, 0, 3);
echo substr($adress, -3);

$email = "karim.ryde@sthlm.ntig.se";
$domain = strstr($email, '@');
echo $domain;
?>
</body>

</html>