<?php
require "header.php";
?>
<div>
    <?php
    if (isset($_SESSION['userId'])) {
        echo '<form class="form-inline" action="includes/logout.inc.php" method="post">
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
    <div class="wrapper-main2">
        <div class="meniLijevo">
            <div role="group" aria-label="Group of buttons">
                <!-- izbrisana classa class="btn-group-vertical" -->
                <div id="sveOkoUpozorenja"><button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Testovi koji se bliže:" data-content="Trenutno nema posebnih upozorenja...">Test upozorenja</button>
                    <div id="okoUpozorenja"><button id="upozorenje" type="button" class="btn btn-danger">!</button>
                        <div id="plus"><button id="plusGumb" type="button" class="btn btn-outline-danger" data-toggle="tooltip" title="Unesi datum novog testa">+</button></div>
                    </div>
                </div>
                <button type="button" class="btn btn-lg btn-warning" data-toggle="popover" title="Ne zaboravi..." data-content="And here's some amazing content. It's very engaging. Right?">Iznenađenja u rasporedu</button>
                <button type="button" class="btn btn-lg btn-info">Informacije profesora</button>
            </div>
        </div>

        <div class="sredisnji">
            <h1>Raspored sati:</h1>
            <p>Ovdje će doći tjedni raspored sati...</p>
            <p>Može li se ugraditi alterirajući?</p>
        </div>
        <div class="meniDesno">
            <div id="grupaDesno" role="group" aria-label="Group of buttons">
                <!-- izbrisana classa class="btn-group-vertical" -->
                <button type="button" class="btn btn-lg btn-primary">Prosjek ukupno:</button>
                <button type="button" class="btn btn-lg btn-secondary">Neopravdani sati: </button>
                <button type="button" class="btn btn-lg btn-success">Što bi se dalo poboljšati</button>
            </div>
        </div>
    </div>


</main>
<script src="js/jquery.js"></script>
<?php
require "footer.php";
?>