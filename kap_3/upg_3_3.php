<?php
/**
* Ett skript som frågar efter två heltal via ett formulär.
*
* PHP version 5
* @category   Beräkningar
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Lista tal</title>
</head>
<body>
<?php
/* Kontrollerar att data finns */
if (isset($_POST["tal1"]) && isset($_POST["tal2"])) {

    /* Ta emot data */
    $tal1 = $_POST["tal1"];
    $tal2 = $_POST["tal2"];

    /* Kontrollera att tal1 < tal2 */
    if ($tal1 < $tal2) {
        $svar = "";
        for ($i = $tal1 + 1; $i < $tal2; $i++) {
            $svar = "$svar $i";
        }
        echo $svar;
    }
}
?>
    <form action="upg_3_3.php" method="post">
        <label>Ange tal 1</label>
        <input type="number" name="tal1" value="1"><br>
        <label>Ange tal 2</label>
        <input type="number" name="tal2" value="10"><br>
        <button>Lista alla tal</button>
    </form>
</body>
</html>
