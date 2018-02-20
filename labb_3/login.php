<?php
/**
* Loginsida som kollar upp användare i en textfil.
*
* PHP version 7
* @category   Enkel skriptsida
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Logga in</title>
</head>
<body>
    <?php
    // Flagga som registrerar om inloggad eller ej
    $inloggad = false;

    // Kontrollera först om det finns formulärdata annars visa inloggningsformuläret
    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        // Rensa bort mellanslag i början och slutet
        $user = trim($user);
        $pass = trim($pass);

        // Omvandla till små bokstäver
        $user = strtolower($user);
        $pass = strtolower($pass);

        // Läser in hela filen "users.txt" i en array med funktionen file()
        $rader = file("users.txt", FILE_IGNORE_NEW_LINES);

        // Loopa igenom arrayen
        foreach ($rader as $rad) {

            // Dela upp raden i användarnamn och hash med funktionen explode()
            $ord = explode(':', $rad); // ord[0]=user och ord[1]=hash
            $namn = $ord[0];
            $hash = $ord[1];

            // Kollar om inmatat användarnamn finns
            // och lösenordet stämmer med password_verify()
            if ($user == $namn && password_verify($pass, $hash)) {
                $inloggad = true;
            }
        }
    }

    // Om användaren inte är inloggad
    if (!$inloggad) {

        // Om obefintligt formulärdata
        if (isset($_POST["user"]) && isset($_POST["pass"])) {
            echo "<h2>Fel användarnamn eller lösenord! Försök igen.</h2>";
        }
        ?>
        <form method="post">
            <h2>Logga in användare</h2>
            <label>Username: </label><input type="text" name="user"><br>
            <label>Password: </label><input type="password" name="pass"><br>
            <input type="submit">
        </form>
        <?php
    } else {
        echo "<h1>$user, du är nu inloggad!</h1>";
    }
    ?>
</body>
</html>
