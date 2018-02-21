<ul>
    <li><a href="register.php">Register user</a></li>
    <?php
        if ($_SESSION["loggedin"]) {
            echo '<li><a href="logout.php">Logout</a></li>';
            echo '<li><a href="index.php">Välkommen</a></li>';
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        }
    ?>
</ul>
