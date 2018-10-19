<?php
/**
 * Medlemssidan
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
} elseif (!$_SESSION["loggedin"]) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Resedagboken för dom ressugna</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<?php
include '../../config_db/konfig_db_resedagboken.php';

/* Ta emot data och lagra i databasen */

// Vi försöker öppna en anslutningen mot vår databas
$conn = new mysqli($hostname, $user, $password, $database);

// Gick det bra att ansluta eller blev det fel?
if ($conn->connect_error) {
    die("<p>Ett fel inträffade: " . $conn->connect_error . "</p>");
}

if (isset($_POST["publicera"])) {
    
    // Tar emot data från formulär och rensar bort oönskade taggar eller kod
    $rnamn = filter_input(INPUT_POST, "rnamn", FILTER_SANITIZE_STRING);
    $rbeskrivning = filter_input(INPUT_POST, "rbeskrivning", FILTER_SANITIZE_STRING);
    $rlat = filter_input(INPUT_POST, "rlat", FILTER_SANITIZE_STRING);
    $rlng = filter_input(INPUT_POST, "rlng", FILTER_SANITIZE_STRING);
    $rprivat = filter_input(INPUT_POST, "rprivat", FILTER_SANITIZE_STRING);
    
    // Översätt kryssrutans värde till true/false för att kunna lagras i tabellen
    $rkryss = ($rprivat) ? true : false;
    
    // Om data finns skjut i databasen
    if ($rnamn && $rbeskrivning) {
        
        // Registrera en ny resa
        $sql = "INSERT INTO resa
        (namn, beskrivning, lat, lng, privat) VALUES
        ('$rnamn', '$rbeskrivning', '$rlat', '$rlng', '$rkryss')";
        
        // Nu kör vi vår SQL
        $result = $conn->query($sql);
        
        // Gick det bra att köra SQL-kommandot?
        if (!$result) {
            die("<p>Det blev något fel i databasfrågan</p>");
        } else {
            echo "<p>Resan är registrerad!</p>";
            $_SESSION["rnamn"] = $rnamn;
        }
        
        // Stänger ned anslutningen
        $conn->close();
    }
}
?>

<body>
    <div class="kontainer">
        <header>
            <h1><a href="index.php">Resedagboken</a></h1>
            <nav>
                <ul>
                    <li><a class="aktuell" href="#">Min sida</a></li>
                    <li><a href="index.php?loggaut=1">Logga ut</a></li>
                    <li><a href="andras_resor.php">Andras resor</a></li>
                    <li>
                        <form>
                            <input class="form-control" type="text" name="sok" placeholder="Sök">
                        </form>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="kolumner_minsida">
            <nav>
                <h3>
                    <?php echo $_SESSION["anamn"] ?>
                </h3>
                <ul>
                    <li><a href="min_sida_mina_resor.php">Mina resor</a></li>
                    <li><a class="aktuell" href="min_sida_skapa_resa.php">Skapa resa</a></li>
                    <li><a href="">Mina inlägg</a></li>
                    <li><a href="">Fotoalbum</a></li>
                    <li><a href="">Ladda upp</a></li>
                </ul>
            </nav>
            <form action="#" method="post">
                <label>Namn</label>
                <input class="form-control" type="text" name="rnamn" required><br>
                <label>Beskrivning</label>
                <textarea class="form-control" name="rbeskrivning" rows="6"></textarea><br>
                <label>Position lat,long</label>
                <input class="form-control" type="text" name="rlat" required>
                <input class="form-control" type="text" name="rlng" required><br>
                <label>Privat</label><input class="form-control" type="checkbox" name="rprivat"><br>
                <label></label><button class="btn btn-primary login-btn" name="publicera">Publicera</button>
            </form>
        </main>
        <footer class="kolumner">
            <div>
                <h4>Info</h4>
                <p>...</p>
            </div>
            <div>
                <h4>Kontakt</h4>
                <p>...</p>
            </div>
        </footer>
    </div>
    </script>
</body>

</html>