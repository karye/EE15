<?php
/**
* Hemsidan
*
* PHP version 5
* @category   Webbtjänst
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
    <!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Resedagboken för dom ressugna</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>

    <body>
        <div class="kontainer">
            <header>
                <h1>Resedagboken</h1>
                <nav>
                    <ul>
                        <li><a href="#myModal" class="trigger-btn" data-toggle="modal">Logga in</a></li>
                        <li><a href="skapa_konto.php">Skapa konto</a></li>
                        <li><a href="#">Andras resor</a></li>
                        <li>
                            <form>
                                <input class="form-control" type="text" name="sok" placeholder="Sök">
                            </form>
                        </li>
                    </ul>
                </nav>
            </header>
            <main class="kolumner">
                <img src="images/resa.jpg" alt="Exempel på resa">
                <div>
                    <h2>På besök i ett tempel</h2>
                    <p>Lorem ipsum dolor amet literally flannel coloring book kickstarter 3 wolf moon pok pok. Polaroid iceland drinking vinegar salvia keytar heirloom gentrify health goth hell of adaptogen edison bulb pour-over echo park gluten-free master cleanse. Church-key prism irony authentic pitchfork kinfolk. Portland cardigan single-origin coffee keytar coloring book, listicle bicycle rights kogi. Forage jianbing photo booth everyday carry ugh, readymade bushwick bicycle rights selvage sriracha kinfolk hashtag slow-carb ennui. Direct trade chillwave vexillologist chicharrones gluten-free.</p>
                </div>
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

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="avatar">
                            <img src="images/avatar.png" alt="Avatar">
                        </div>
                        <h4 class="modal-title">Medlem</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="min_sida.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="anamn" placeholder="Användarnamn" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="losen" placeholder="Lösenord" required="required">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Logga in</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#">Glömt lösenordet?</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>

    </html>
