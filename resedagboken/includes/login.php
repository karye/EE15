<?php
/**
* Loginsida
*
* PHP version 5
* @category   Webbtjänst
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

include_once $_SERVER["DOCUMENT_ROOT"] . "/_databaser/konfig-db.php";

// Vi försöker öppna en anslutningen mot vår databas
$conn = new mysqli($hostname, $user, $password, $database);

// Gick det bra att ansluta eller blev det fel?
if ($conn->connect_error) {
    die("<p>Ett fel inträffade: " . $conn->connect_error . "</p>");
}

// Tar emot data från formulär och rensar bort oönskade taggar eller kod
$anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
$losen = filter_input(INPUT_POST, "losen", FILTER_SANITIZE_STRING);

// Om data finns
if ($anamn && $losen) {
    
    // Sök efter anvandare i tabellen
    $sql = "SELECT * FROM anvandare WHERE anamn = '$anamn'";
    
    // Nu kör vi vår SQL
    $result = $conn->query($sql);
    
    // Hämtar resultat från databassökningen
    $row = $result->fetch_assoc();
    
    // Kollar om lösenordet stämmer med password_verify()
    if (password_verify($losen, $row['hash'])) {
        echo "Ja";
        $_SESSION["loggedin"] = true;
        $_SESSION["anamn"] = $anamn;
    } else {
        echo "Nej";
    }
} else {
    echo "Nej";
}

// Stänger ned anslutningen
$conn->close();