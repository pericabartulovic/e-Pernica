<?php
setlocale(LC_ALL,'croatian');
require "header.php";
require ("includes/funkcije.inc.php");
$korisnik = provjeri_korisnika($konekcija);
?>

<div>
    <?php
    if (isset($_SESSION['userId'])) {
        echo '<form id="logOutGumb" class="form-inline" action="includes/logout.inc.php" method="post">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
                        </form>';
    } /* else {
            echo '<form class="form-inline" action="includes/login.inc.php" method="post">
                        <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="korisničko ime...">
                        <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="lozinka...">
                        <button class="btn btn-outline-info" type="submit" name="login-submit">Login</button>
                        </form>
                        <a id="signupbutton" href="signup.php">Registracija</a>';
        } */
    ?>
</div>
</nav>
</header>

<main>
    <?php
    if (isset($_POST["datum"])) {
        $datum = $_POST["datum"];
        $predmet = $_POST["predmet"];
        $vrsta = $_POST["vrsta"];
        $korisnik = $_SESSION["userId"];
        dodaj_test($datum, $predmet, $vrsta, $korisnik, $konekcija);
        header("Location: ulogiran.php");
        exit();
    }
    $id = $_SESSION["userId"];
    $testovi = dohvati_testove($id, $konekcija);

    ?>

    <div class="wrapper-main2">
        <div class="meniLijevo">
            <div role="group" aria-label="Group of buttons">
                <!-- izbrisana classa class="btn-group-vertical" -->
                <div id="sveOkoUpozorenja"> <button class="btn btn-lg btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Pozor testovi</button>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <?php

                            foreach ($testovi as $test) {
                            $date=date_create($test["datum"]);
                            ?>
                                <h5 class="bezDonje"><?php echo ($test["predmet"]) ?></h5>
                                <h6 class="bezDonje"><?php echo date_format($date,"d.m.Y."); ?></h6>
                                <p class="bezDonje">
                                    <small class="bezDonje"><?php echo ($test["vrsta"]) ?></small>
                                </p>
                                <a id="maliG" href="brisi.php?id=<?php echo ($test["id"]) ?>" class="btn btn-outline-danger btn-sm">Izbriši</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div id="okoUpozorenja"><button id="upozorenje" type="button" class="btn btn-danger">!</button>
                        <div id="plus"><button id="plusGumb" type="button" class="btn btn-outline-danger open-button " data-toggle="tooltip" title="Unesi novi test" onclick="openForm()">+</button>
                            <div class="form-popup" id="test">
                                <form method="POST" action="ulogiran.php" class="form-container">
                                    <label for="datum"><b>Datum</b></label>
                                    <input type="date" placeholder="Datum" name="datum" required>

                                    <label for="predmet"><b>Predmet</b></label>
                                    <select class="izbor" name="predmet" required>
                                        <option selected>Izaberi predmet...</option>
                                        <option value="Hrvatski jez.">Hrvatski jez.</option>
                                        <option value="Engleski jez.">Engleski jez.</option>
                                        <option value="Njemački jez.">Njemački jez.</option>
                                        <option value="Matematika">Matematika</option>
                                        <option value="Fizika">Fizika</option>
                                        <option value="Kemija">Kemija</option>
                                        <option value="Priroda">Priroda</option>
                                        <option value="Biologija">Biologija</option>
                                        <option value="Povijest">Povijest</option>
                                        <option value="Geografija">Geografija</option>
                                        <option value="Informatika">Informatika</option>
                                        <option value="Tehnička kul">Tehnička kul.</option>
                                        <option value="Glazbena kul.">Glazbena kul.</option>
                                        <option value="Likovna kul.">Likovna kul.</option>
                                        <option value="Vjeronauk">Vjeronauk</option>
                                    </select>

                                    <label for="vrsta"><b>Vrsta</b></label>
                                    <input type="tekst" placeholder="Usmeni/pismeni/lektira/esej..." name="vrsta">

                                    <button type="submit" class="btn">Spremi</button>
                                    <button type="submit" class="btn cancel" onclick="closeForm()">Odustani</button>
                                </form>
                            </div>
                            <script>
                                function openForm() {
                                    document.getElementById("test").style.display = "block";
                                }

                                function closeForm() {
                                    document.getElementById("test").style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-lg btn-warning" data-toggle="popover" title="Ne zaboravi..." data-content="And here's some amazing content. It's very engaging. Right?">Kontratrunus</button>
                <button type="button" class="btn btn-lg btn-info">Info učitelja</button>
            </div>
        </div>

        <div class="sredisnji">
            <h1>Raspored sati:</h1>
            <p>Ovdje će doći tjedni raspored sati...</p>
            <p></p>
        </div>
        <div class="meniDesno">
            <div id="grupaDesno" role="group" aria-label="Group of buttons">
                <!-- izbrisana classa class="btn-group-vertical" -->
                <button type="button" class="btn btn-lg btn-primary">Prosjek ukupno</button>
                <button type="button" class="btn btn-lg btn-secondary">Neriješeni izostanci</button>
                <button type="button" class="btn btn-lg btn-success">Za popravak...</button>
            </div>
        </div>
    </div>
</main>
<script src="js/jquery.js"></script>
<?php
require "footer.php";
?>