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
    <h1>Dagens horoskop</h1>
    <form action="visa_horoskop.php" method="post">
        <label>Ange stjärntecken</label>
        <?php
        $stjarntecken = ["Väduren", "Oxen", "Tvillingarna", "Kräftan", "Lejonet", "Jungfrun", "Vågen", "Skorpionen", "Skytten", "Stenbocken", "Vattumanen", "Fiskarna"];
        echo "<select name=\"tecken\">";
        foreach ($stjarntecken as $tecken) {
            echo "<option value=\"$tecken\">$tecken</option>";
        }
        echo "</select>";
        ?>
        <br>
        <button>Sök</button>
    </form>
</body>
</html>
