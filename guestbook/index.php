<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Min koola gästbok</h1>
    <h3>
        <?php
            echo date("l");
        ?>
    </h3>
    <form action="spara.php" method="post">
        <label>Rubrik</label><input type="text" name="rubrik"><br>
        <label>Inlägg</label><textarea name="inlagg"></textarea><br>
        <button>Lägg upp</button>
    </form>
</body>
</html>
