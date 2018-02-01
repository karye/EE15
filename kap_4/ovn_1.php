<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        $radie1 = 10;
        $area1 = $radie1 ** 2 * pi();
        echo "En cirkel med radie 10 har ytan $area1";

        $radie1 = 25;
        $area2 = $radie2 ** 2 * pi();
        echo "En cirkel med radie 25 har ytan $area2";

        function area($radie) {
            return $radie ** 2 * pi();
        }

        echo "En cirkel med radie 10 har ytan " . area(10);
        echo "En cirkel med radie 25 har ytan " . area(25);
    ?>
</body>
</html>
