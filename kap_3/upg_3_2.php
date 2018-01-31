<?php
/**
* Ett skript som frågar efter användarnamn och lösenord via ett formulär.
*
* PHP version 5
* @category   Inloggning
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
    <!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="utf-8">
        <title>Inloggning</title>
    </head>

    <body>
    <?php
    /* Flagga för att komma ihåg om vi är inloggade */
    $login = "nej";

    /* Kontrollerar att data finns */
    if (isset($_POST["anamn"]) && isset($_POST["losen"])) {

        /* Ta emot data */
        $anamn = $_POST["anamn"];
        $losen = $_POST["losen"];

        /* Kollar om användarnamn och lösenord stämmer */
        if ($anamn == "karim" && $losen == "12345") {
            echo "<p>Du är inloggad!</p>";
            $login = "ja";
        } else {
            echo "<p>Användarnamn eller lösenordet stämmer inte. Försök igen!</p>";
        }
    }

    if ($login == "nej") {
        ?>
        <h1>Fyll i inloggningsuppgifter</h1>
        <form action="upg_3_2.php" method="post">
            <label>Användarnamn</label>
            <input type="text" name="anamn"><br>
            <label>Lösenord</label>
            <input type="password" name="losen"><br>
            <button>Logga in</button>
        </form>
        <?php
    }
?>
    </body>
    </html>
