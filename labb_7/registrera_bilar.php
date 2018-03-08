<?php
/**
* Registrera ny bil i tabellen bilar i databasen labbar
*
* PHP version 5
* @category   msqli övning
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Lista alla bilar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include 'config_db.php';

    if () {


        // Vi försöker öppna en anslutningen mot vår databas
        $conn = new mysqli($hostname, $user, $pass, $database);

        // Gick det bra att ansluta eller blev det fel?
        if ($conn->connect_error) {
            die("<p>Ett fel inträffade: " . $conn->connect_error . "</p>");
        } else {
            echo "<p>Hurra! Anslutning till databasen upprättad!</p>";
        }

        // Vårt sql-kommando
        $sql = "INSERT INTO bilar
                ('reg', 'marke', 'modell') VALUES ($reg, $marke, $modell)";

        // Nu kör vi vår SQL
        $result = $conn->query($sql);

        // Gick det bra att köra SQL-kommandot?
        if (!$result) {
            die($result->error);
        } else {
            echo "<p>Bilen är registrerad!</p>";
        }

        // Stänger ned anslutningen
        $conn->close();
    }
    ?>

    <form action="" method="post">
        <label>Registreringsnr</label><input type="text" name="reg"><br>
        <label>Bilmärke</label><input type="text" name="marke"><br>
        <label>Bilmodell</label><input type="text" name="modell"><br>
        <button>Registrera</button>
    </form>
</body>
</html>
