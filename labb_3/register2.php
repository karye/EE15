<?php
/**
* Registrera användare och lagra i en textfil
*
* PHP version 5
* @category   Enkel skriptsida
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<?php
session_start();

if (!isset($_SESSION["loggedin"])) {
    $_SESSION["loggedin"] = false;
}

if ($_SESSION["loggedin"]) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Registrera användare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'menu.php';

    // Kolla att formulärdata finns annars visa formuläret med funktionen isset()
    if (isset($_POST["user"]) && isset($_POST["pass"])) {

        // Hämta ut formulärdata
        $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);

        // Rensa bort mellanslag i början och slutet
        $user = trim($user);
        $pass = trim($pass);

        // Omvandla till små bokstäver
        $user = strtolower($user);
        $pass = strtolower($pass);

        // Vi sparar ned användarnamn och lösenord i en textfil
        // Öppna textfilen "users.txt" för skrivning
        $fil = fopen("users.txt", 'a') or die("<p>Kunde inte öppna fil</p>");

        // Skapa hash av lösenordet med funktionen password_hash()
        $hash = password_hash($pass, PASSWORD_DEFAULT);

        // Spara en ny rad med användarnamn och lösenord i formatet "user:hash"
        fwrite($fil, "$user:$hash\n");

        // Stäng textfilen
        fclose($fil);
    }
    ?>
    <form method="post">
        <h2>Registrera användare</h2>
        <label>Username: </label><input type="text" name="user"><br>
        <label>Password: </label><input type="password" name="pass"><br>
        <input type="submit">
    </form>
</body>
</html>
