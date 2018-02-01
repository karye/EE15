<?php
/**
* Gör ett skript som är en lånekalkylator. M.h.a. radioknappar ska användaren kunna välja mellan 1, 3 och 5 års lånetid. I en ruta ska användaren skriva i lånebeloppet och i nästa räntan i hela procent. Programmet ska sedan räkna ut den totala lånekostnaden (Räknas ut genom ränta på ränta-principen, årsvis). Så för ett treårigt lån på 5000 med räntan 4% skulle alltså lånekostnaden bli 5000*1,04*1,04*1,04 - 5000. Observera att lånet är "amorteringsfritt".
*
* PHP version 5
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Lånekalkylator</title>
</head>
<body>
<?php
/* Kontrollerar att data finns */
if (isset($_POST["lbelopp"]) &&
    isset($_POST["lranta"]) &&
    isset($_POST["ltid"])) {

    /* Ta emot data */
    $lbelopp = $_POST["lbelopp"];
    $lranta = $_POST["lranta"];
    $ltid = $_POST["ltid"];

    /* Räkna ut totala lånekostnad */
    $lkostnad = $lbelopp * (1 + $lranta / 100) ** $ltid - $lbelopp;
    echo "<p>Den totala lånekostnaden blir $lkostnad.</p>";
}
?>
    <form action="upg_3_5.php" method="post">
        <label>Lånebelopp</label>
        <input type="number" name="lbelopp" value="0"><br>
        <label>Ränta</label>
        <input type="number" name="lranta" value="0"><br>
        <label>Lånetid</label>
        <input type="radio" name="ltid" value="1">1 år
        <input type="radio" name="ltid" value="3">3 år
        <input type="radio" name="ltid" value="5">5 år<br>
        <button>Räkna ut lånekostnaden</button>
    </form>
</body>
</html>
