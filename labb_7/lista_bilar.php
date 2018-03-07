<?php
/**
* Lista alla bilar i tabellen bilar i databasen labbar
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
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    // Inloggningsuppgifter
    $hostname = "localhost";
    $user = "labb_id";
    $pass = "RQJa7saX9vPGdYOU";
    $database = "labbar";

    // Vi försöker öppna en anslutningen mot vår databas
    $conn = new mysqli($hostname, $user, $pass, $database);

    // Gick det bra att ansluta eller blev det fel?
    if ($conn->connect_error) {
        die("<p>Ett fel inträffade: " . $conn->connect_error . "</p>");
    } else {
        echo "<p>Hurra! Anslutning till databasen upprättad!</p>";
    }

    // Vårt sql-kommando
    $sql = "SELECT * FROM bilar";

    // Nu kör vi vår SQL
    $result = $conn->query($sql);

    // Gick det bra att köra SQL-kommandot?
    if (!$result) {
        die($result->error);
    } else {
        echo "<p>Kommandot var felfritt!</p>";
    }

    // Skriver ut innehållet av arrayen
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['reg']}</td>
            <td>{$row['marke']}</td>
            <td>{$row['modell']}</td>
            </tr>";
    }
    echo "</table>";

    // Stänger ned anslutningen
    $conn->close();
    ?>
</body>
</html>
