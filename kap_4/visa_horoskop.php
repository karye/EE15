<?php
/**
* Visa dagens horoskop
*
* PHP version 5
* @category   webbscrapping
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Dagens horoskop</title>
</head>
<body>
    <?php
    if (isset($_POST["tecken"])) {
        $tecken = $_POST["tecken"];

        /* Skydd */
        $tecken = htmlspecialchars($tecken);

        $manader = ["januari", "februari", "mars", "april", "maj", "juni", "juli", "augusti", "september", "oktober", "november","december"];

        $manad_index = date("n") - 1;
        $dag_index = date("j");

        /* Sidan med alla horoskop */
        $url = "https://www.metro.se/artikel/dagens-horoskop-$dag_index-$manader[$manad_index]";

        echo $url;

        /* Hämta sidans innehåll */
        $sidan = file_get_contents($url);

        /* Sök efter förekomsten av teckentexten */
        $pos = strpos($sidan, $tecken);

        /* Leta efter slutet på paragrafen */
        $slut = strpos($sidan, "</p>", $pos);

        /* Plocka ut horoskoptexten */
        $horoskopet = "<strong>" . substr($sidan, $pos, $slut - $pos);

        echo "<p>$horoskopet</p>";

    } else {
        header("Location: horoskop.php");
    }
    ?>
</body>
</html>
