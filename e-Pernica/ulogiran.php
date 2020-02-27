<?php
setlocale(LC_ALL, 'croatian');
require "header.php";
require("includes/funkcije.inc.php");
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
    $testovi = dohvati_testove($id, $konekcija); ?>
    <?php
    if ((isset($_POST["nultipon"])) || (isset($_POST["nultiuto"])) || (isset($_POST["nultisri"])) || (isset($_POST["nulticet"])) || (isset($_POST["nultipet"])) ||
        (isset($_POST["prvipon"])) || (isset($_POST["prviuto"])) || (isset($_POST["prvisri"])) || (isset($_POST["prvicet"])) || (isset($_POST["prvipet"])) ||
        (isset($_POST["drugipon"])) || (isset($_POST["drugiuto"])) || (isset($_POST["drugisri"])) || (isset($_POST["drugicet"])) || (isset($_POST["drugipet"]))
    ) {
        $korisnik = $_SESSION["userId"];
        $sat0 = $_POST["0"];
        $sat1 = $_POST["1"];
        $sat2 = $_POST["2"];
        $sat3 = $_POST["3"];
        $sat4 = $_POST["4"];
        $sat5 = $_POST["5"];
        $sat6 = $_POST["6"];
        $sat7 = $_POST["7"];
        $sata1 = $_POST["a1"];
        $sata2 = $_POST["a2"];
        $nultipon = $_POST["nultipon"];
        $prvipon = $_POST["prvipon"];
        $drugipon = $_POST["drugipon"];
        $trecipon = $_POST["trecipon"];
        $cetvrtipon = $_POST["cetvrtipon"];
        $petipon = $_POST["petipon"];
        $sestipon = $_POST["sestipon"];
        $sedmipon = $_POST["sedmipon"];
        $aktivnosti1pon = $_POST["aktivnosti1pon"];
        $aktivnosti2pon = $_POST["aktivnosti2pon"];
        $nultiuto = $_POST["nultiuto"];
        $prviuto = $_POST["prviuto"];
        $drugiuto = $_POST["drugiuto"];
        $treciuto = $_POST["treciuto"];
        $cetvrtiuto = $_POST["cetvrtiuto"];
        $petiuto = $_POST["petiuto"];
        $sestiuto = $_POST["sestiuto"];
        $sedmiuto = $_POST["sedmiuto"];
        $aktivnosti1uto = $_POST["aktivnosti1uto"];
        $aktivnosti2uto = $_POST["aktivnosti2uto"];
        $nultisri = $_POST["nultisri"];
        $prvisri = $_POST["prvisri"];
        $drugisri = $_POST["drugisri"];
        $trecisri = $_POST["trecisri"];
        $cetvrtisri = $_POST["cetvrtisri"];
        $petisri = $_POST["petisri"];
        $sestisri = $_POST["sestisri"];
        $sedmisri = $_POST["sedmisri"];
        $aktivnosti1sri = $_POST["aktivnosti1sri"];
        $aktivnosti2sri = $_POST["aktivnosti2sri"];
        $nulticet = $_POST["nulticet"];
        $prvicet = $_POST["prvicet"];
        $drugicet = $_POST["drugicet"];
        $trecicet = $_POST["trecicet"];
        $cetvrticet = $_POST["cetvrticet"];
        $peticet = $_POST["peticet"];
        $sesticet = $_POST["sesticet"];
        $sedmicet = $_POST["sedmicet"];
        $aktivnosti1cet = $_POST["aktivnosti1cet"];
        $aktivnosti2cet = $_POST["aktivnosti2cet"];
        $nultipet = $_POST["nultipet"];
        $prvipet = $_POST["prvipet"];
        $drugipet = $_POST["drugipet"];
        $trecipet = $_POST["trecipet"];
        $cetvrtipet = $_POST["cetvrtipet"];
        $petipet = $_POST["petipet"];
        $sestipet = $_POST["sestipet"];
        $sedmipet = $_POST["sedmipet"];
        $aktivnosti1pet = $_POST["aktivnosti1pet"];
        $aktivnosti2pet = $_POST["aktivnosti2pet"];

        dodaj_raspored($sat0, $nultipon, $nultiuto, $nultisri, $nulticet, $nultipet, $korisnik, $konekcija);
        dodaj_raspored($sat1, $prvipon, $prviuto, $prvisri, $prvicet, $prvipet, $korisnik, $konekcija);
        dodaj_raspored($sat2, $drugipon, $drugiuto, $drugisri, $drugicet, $drugipet, $korisnik, $konekcija);
        dodaj_raspored($sat3, $trecipon, $treciuto, $trecisri, $trecicet, $trecipet, $korisnik, $konekcija);
        dodaj_raspored($sat4, $cetvrtipon, $cetvrtiuto, $cetvrtisri, $cetvrticet, $cetvrtipet, $korisnik, $konekcija);
        dodaj_raspored($sat5, $petipon, $petiuto, $petisri, $peticet, $petipet, $korisnik, $konekcija);
        dodaj_raspored($sat6, $sestipon, $sestiuto, $sestisri, $sesticet, $sestipet, $korisnik, $konekcija);
        dodaj_raspored($sat7, $sedmipon, $sedmiuto, $sedmisri, $sedmicet, $sedmipet, $korisnik, $konekcija);
        dodaj_raspored($sata1, $aktivnosti1pon, $aktivnosti1uto, $aktivnosti1sri, $aktivnosti1cet, $aktivnosti1pet, $korisnik, $konekcija);
        dodaj_raspored($sata2, $aktivnosti2pon, $aktivnosti2uto, $aktivnosti2sri, $aktivnosti2cet, $aktivnosti2pet, $korisnik, $konekcija);
        header("Location: ulogiran.php");
        exit();
    }
    $id = $_SESSION["userId"];
    $raspored = dohvati_raspored($id, $konekcija);
    $nultiSat = dohvati_nultiSat($id, $konekcija);
    ?>
    <?php
    if (isset($_POST["obavijest"])) {
        $datumob = $_POST["datumob"];
        $obavijest = $_POST["obavijest"];
        $korisnik = $_SESSION["userId"];
        dodaj_obavijest($datumob, $obavijest, $korisnik, $konekcija);
        header("Location: ulogiran.php");
        exit();
    }
    $id = $_SESSION["userId"];
    $obavijest = dohvati_obavijesti($id, $konekcija);
    ?>
    <?php
    if ((isset($_POST["ucitelj1"])) || (isset($_POST["ucitelj2"])) || (isset($_POST["sat1"])) || (isset($_POST["sat2"]))) {
        $korisnik = $_SESSION["userId"];
        $ucitelj1 = $_POST["ucitelj1"];
        $ucitelj2 = $_POST["ucitelj2"];
        $ucitelj3 = $_POST["ucitelj3"];
        $ucitelj4 = $_POST["ucitelj4"];
        $ucitelj5 = $_POST["ucitelj5"];
        $ucitelj6 = $_POST["ucitelj6"];
        $ucitelj7 = $_POST["ucitelj7"];
        $ucitelj8 = $_POST["ucitelj8"];
        $ucitelj9 = $_POST["ucitelj9"];
        $ucitelj10 = $_POST["ucitelj10"];

        $dan1 = $_POST["dan1"];
        $dan2 = $_POST["dan2"];
        $dan3 = $_POST["dan3"];
        $dan4 = $_POST["dan4"];
        $dan5 = $_POST["dan5"];
        $dan6 = $_POST["dan6"];
        $dan7 = $_POST["dan7"];
        $dan8 = $_POST["dan8"];
        $dan9 = $_POST["dan9"];
        $dan10 = $_POST["dan10"];

        $sat1 = $_POST["sat1"];
        $sat2 = $_POST["sat2"];
        $sat3 = $_POST["sat3"];
        $sat4 = $_POST["sat4"];
        $sat5 = $_POST["sat5"];
        $sat6 = $_POST["sat6"];
        $sat7 = $_POST["sat7"];
        $sat8 = $_POST["sat8"];
        $sat9 = $_POST["sat9"];
        $sat10 = $_POST["sat10"];

        dodaj_info($ucitelj1, $dan1, $sat1, $korisnik, $konekcija);
        dodaj_info($ucitelj2, $dan2, $sat2, $korisnik, $konekcija);
        dodaj_info($ucitelj3, $dan3, $sat3, $korisnik, $konekcija);
        dodaj_info($ucitelj4, $dan4, $sat4, $korisnik, $konekcija);
        dodaj_info($ucitelj5, $dan5, $sat5, $korisnik, $konekcija);
        dodaj_info($ucitelj6, $dan6, $sat6, $korisnik, $konekcija);
        dodaj_info($ucitelj7, $dan7, $sat7, $korisnik, $konekcija);
        dodaj_info($ucitelj8, $dan8, $sat8, $korisnik, $konekcija);
        dodaj_info($ucitelj9, $dan9, $sat9, $korisnik, $konekcija);
        dodaj_info($ucitelj10, $dan10, $sat10, $korisnik, $konekcija);
        header("Location: ulogiran.php");
        exit();
    }
    $id = $_SESSION["userId"];
    $info = dohvati_info($id, $konekcija);
    ?>
    <?php
    if ((isset($_POST["predmetOcj"]))){
        $korisnik = $_SESSION["userId"];
        $predmetOcj = $_POST["predmetOcj"];
        $ocjena = $_POST["ocjena"];

        dodaj_ocjenu($predmetOcj, $ocjena, $korisnik, $konekcija);
        header("Location: ulogiran.php");
        exit();
    }
    $id = $_SESSION["userId"];
    $ocjene = dohvati_ocjene($id, $konekcija);
    $prosjek = dohvati_prosjek($id, $konekcija);
    $zapopr = dohvati_ocjOdDna($id, $konekcija);
    ?>


    <div class="wrapper-main2">
        <div class="meniLijevo">
            <div role="group" aria-label="Group of buttons">
                <!-- izbrisana classa class="btn-group-vertical" -->
                <div id="sveOkoUpozorenja"> <button class="btn btn-lg desno btn-danger" type="button" data-toggle="collapse" data-target="#testoviPadajuci" aria-expanded="false" aria-controls="collapseExample">
                        Pozor testovi</button>
                    <div id="okoUpozorenja">
                        <button id="upozorenje" type="button" class="btn btn-danger" data-toggle="tooltip" title="Broj ispita u narednih 5 dana! *⚠️ = danas ili sutra ispit!">
                            <?php
                            $datumDanas = date("Y-m-d");
                            $brojac = 0;
                            foreach ($testovi as $dt) {
                                $datumTesta = ($dt["datum"]);
                                $razlikaDana = ((strtotime($datumTesta) - strtotime($datumDanas)) / 60 / 60 / 24); //pretvara stringove u timestamp i onda računa dane (u ovom slučaju)
                                if ($razlikaDana == 0 || $razlikaDana == 1) {
                                    echo "⚠️";
                                    $brojac = ""; ?> <script>
                                        $("#upozorenje").css({
                                            "font-size": "x-large",
                                            "background-color": "transparent",
                                            "padding-left": "3px",
                                            "border-color": "transparent",
                                            "margin-top": "-10px",
                                            "margin-left": "-5px"
                                        });
                                    </script> <?php break;
                                            } elseif ($razlikaDana > 1 && $razlikaDana <= 5) {
                                                $brojac += 1;
                                            }
                                        }
                                        echo $brojac;
                                                ?>

                        </button>
                        <div id="plus"><button id="plusGumb" type="button" class="btn btn-outline-danger open-button " data-toggle="tooltip" title="Unesi novi test" onclick="openForm()">+</button>
                            <div class="form-popup" id="test">
                                <form method="POST" action="ulogiran.php" class="form-container">
                                    <!-- skinuto s w3.schools.com pop-up form -->
                                    <label for="datum"><b>Datum</b></label>
                                    <input type="date" placeholder="Datum" name="datum" required>

                                    <label for="predmet"><b>Predmet</b></label>
                                    <select class="izbor" name="predmet" required>
                                        <option selected>Predmet...</option>
                                        <option value="Sat razrednika">Sat raredn.</option>
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
                    <div class="collapse" id="testoviPadajuci">
                        <div id="padajuciTest" class="card card-body">
                            <?php
                            foreach ($testovi as $test) {
                                $date = date_create($test["datum"]);
                            ?>
                                <h5 class="bezDonje"><?php echo ($test["predmet"]) ?></h5>
                                <h6 class="bezDonje"><?php echo date_format($date, "d.m.Y."); ?></h6>
                                <p class="bezDonje"><?php echo ($test["vrsta"]) ?></p>
                                <a id="maliG" href="brisi_test.php?id=<?php echo ($test["id"]) ?>" class="btn btn-outline-danger btn-sm">Izbriši</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>

                <div id="sveOkoUpozorenja"> <button type="button" id="infoPodsjGumb" class="btn btn-lg desno btn-warning" data-toggle="collapse" data-target="#podsjetnikPadajuci" aria-expanded="false" aria-controls="collapseExample">Podsjetnici</button>
                    <div id="okoUpozorenja">
                        <button id="upozorenjeOb" type="button" class="btn btn-warning" data-toggle="tooltip" title="Broj obveza u narednih 5 dana! *⏰⏱️=>obveza sutra ili extra sati!">
                            <?php
                            $datumDanas = date("Y-m-d"); // $danDanas = date('l');
                            $datumSutra = new DateTime('tomorrow');
                            $danSutra = $datumSutra->format('l');
                            $brojac2 = 0;
                            foreach ($obavijest as $vj) {
                                $datumObavijesti = ($vj["datumob"]);
                                $razlikaDana = ((strtotime($datumObavijesti) - strtotime($datumDanas)) / 60 / 60 / 24); //pretvara stringove u timestamp i onda računa dane (u ovom slučaju)
                                if ($razlikaDana == 1) {
                                    echo "⏱️";
                                    $brojac2 = ""; ?> <script>
                                        $("#upozorenjeOb").css({
                                            "font-size": "large",
                                            "background-color": "transparent",
                                            "padding-left": "3px",
                                            "border-color": "transparent",
                                            "margin-top": "-10px",
                                            "margin-left": "-5px"
                                        });
                                    </script> <?php break;
                                            } elseif ($razlikaDana > 1 && $razlikaDana <= 5) {
                                                $brojac2 += 1;
                                            }
                                        }
                                        foreach ($nultiSat as $nul) {
                                            $dan1 = ($nul["ponedjeljak"]);
                                            $dan2 = ($nul["utorak"]);
                                            $dan3 = ($nul["srijeda"]);
                                            $dan4 = ($nul["cetvrtak"]);
                                            $dan5 = ($nul["petak"]);
                                            if (($danSutra == "Monday" || $danSutra == "Ponedjeljak" || $danSutra == "ponedjeljak") && ($dan1 != "")) {
                                                echo "⏰";
                                                $brojac2 = ""; ?> <script>
                                        $("#upozorenjeOb").css({
                                            "font-size": "large",
                                            "background-color": "transparent",
                                            "padding-left": "3px",
                                            "border-color": "transparent",
                                            "margin-top": "-10px",
                                            "margin-left": "-5px"
                                        });
                                    </script> <?php break;
                                            } elseif (($danSutra == "Tuesday" || $danSutra == "Utorak" || $danSutra == "utorak") && ($dan2 != "")) {
                                                echo "⏰";
                                                $brojac2 = ""; ?> <script>
                                        $("#upozorenjeOb").css({
                                            "font-size": "large",
                                            "background-color": "transparent",
                                            "padding-left": "3px",
                                            "border-color": "transparent",
                                            "margin-top": "-10px",
                                            "margin-left": "-5px"
                                        });
                                    </script> <?php break;
                                            } elseif (($danSutra == "Wednesday" || $danSutra == "Srijeda" || $danSutra == "srijeda") && ($dan3 != "")) {
                                                echo "⏰";
                                                $brojac2 = ""; ?> <script>
                                        $("#upozorenjeOb").css({
                                            "font-size": "large",
                                            "background-color": "transparent",
                                            "padding-left": "3px",
                                            "border-color": "transparent",
                                            "margin-top": "-10px",
                                            "margin-left": "-5px"
                                        });
                                    </script> <?php break;
                                            } elseif (($danSutra == "Thursday" || $danSutra == "Četvrtak" || $danSutra == "četvrtak" || $danSutra == "Cetvrtak" || $danSutra == "cetvrtak") && ($dan4 != "")) {
                                                echo "⏰";
                                                $brojac2 = ""; ?> <script>
                                        $("#upozorenjeOb").css({
                                            "font-size": "large",
                                            "background-color": "transparent",
                                            "padding-left": "3px",
                                            "border-color": "transparent",
                                            "margin-top": "-10px",
                                            "margin-left": "-5px"
                                        });
                                    </script> <?php break;
                                            } elseif (($danSutra == "Friday" || $danSutra == "Petak" || $danSutra == "petak") && ($dan5 != "")) {
                                                echo "⏰";
                                                $brojac2 = ""; ?> <script>
                                        $("#upozorenjeOb").css({
                                            "font-size": "large",
                                            "background-color": "transparent",
                                            "padding-left": "3px",
                                            "border-color": "transparent",
                                            "margin-top": "-10px",
                                            "margin-left": "-5px"
                                        });
                                    </script> <?php break;
                                            }
                                        }
                                        echo $brojac2;
                                                ?>

                        </button>
                        <div id="plus"><button id="plusGumb" type="button" class="btn btn-outline-warning open-button " data-toggle="tooltip" title="Unesi novu obavijest" onclick="openFormObavijest()">+</button>
                            <div class="form-popup" id="obavijest">
                                <form method="POST" action="ulogiran.php" class="form-container">
                                    <!-- skinuto s w3.schools.com pop-up form -->
                                    <label for="datumob"><b>Datum</b></label>
                                    <input type="date" placeholder="Datum" name="datumob" required>

                                    <label for="obavijest"><b>Obavijest</b></label>
                                    <input type="tekst" placeholder="Unesi novu obavijest" name="obavijest">

                                    <button type="submit" class="btn">Spremi</button>
                                    <button type="submit" class="btn cancel" onclick="closeFormObavijest()">Odustani</button>
                                </form>
                            </div>
                            <script>
                                function openFormObavijest() {
                                    document.getElementById("obavijest").style.display = "block";
                                }

                                function closeFormObavijest() {
                                    document.getElementById("obavijest").style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="collapse" id="podsjetnikPadajuci">
                        <div id="podsjPadajuci" class="card card-body">
                            <?php
                            foreach ($obavijest as $vijest) {
                                $date = date_create($vijest["datumob"]);
                            ?>
                                <h5 class="bezDonje"><?php echo ($vijest["obavijest"]) ?></h5>
                                <h6 class="bezDonje"><?php echo date_format($date, "d.m.Y."); ?></h6>
                                <a id="maliG" href="brisi_obavijest.php?id=<?php echo ($vijest["id"]) ?>" class="btn btn-outline-danger btn-sm">Izbriši</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>

                <!-- <button type="button" class="btn btn-lg btn-warning" data-toggle="popover" title="Ne zaboravi..." data-content="">Kontraturnus</button> -->

                <div id="sveOkoUpozorenja"> <button type="button" id="infoProfGumb" class="btn btn-lg desno btn-info" data-toggle="collapse" data-target="#infoUcitPada" aria-expanded="false" aria-controls="collapseExample">Info učitelja</button>
                    <div id="okoUpozorenja">
                        <div id="plus3"><button id="plusGumb" type="button" class="btn btn-outline-info open-button " data-toggle="tooltip" title="Unesi informacije učitelja" onclick="openFormInfo()">+</button>
                            <div class="form-popup shadow-lg p-3 mb-5 bg-white rounded" id="info">
                                <form method="POST" action="ulogiran.php" class="form-container2">
                                    <table id="tablica" class="table table-bordered">
                                        <thead>
                                            <tr class="bg-dark text-white">
                                                <th scope="col">Učitelj</th>
                                                <th scope="col">Dan</th>
                                                <th scope="col">Sat</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a1" value="akt1"></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj1" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan1" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat1" placeholder="Vrijeme održavanja" placeholder="Vrijeme odražavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj2" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan2" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat2" placeholder="Vrijeme održavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj3" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan3" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat3" placeholder="Vrijeme održavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj4" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan4" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat4" placeholder="Vrijeme održavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj5" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan5" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat5" placeholder="Vrijeme održavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj6" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan6" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat6" placeholder="Vrijeme održavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj7" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan7" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat7" placeholder="Vrijeme održavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj8" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan8" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat8" placeholder="Vrijeme održavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj9" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan9" required>
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat9" placeholder="Vrijeme održavanja"></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th> -->
                                                <td><input type="tekst" id="slobunos2" name="ucitelj10" required placeholder="Ime/prezime učitelja" oninvalid="this.setCustomValidity('Za prazno polje unesi barem neki znak: - ili * i sl.')" oninput="this.setCustomValidity('')"></td>
                                                <td><select class="izbor2" name="dan10">
                                                        <option selected>-</option>
                                                        <option value="ponedjeljak">Ponedjeljak</option>
                                                        <option value="utorak">Utorak</option>
                                                        <option value="srijeda">Srijeda</option>
                                                        <option value="četvrtak">Četvrtak</option>
                                                        <option value="petak">Petak</option>
                                                    </select></td>
                                                <td><input type="tekst" id="slobunos2" name="sat10" placeholder="Vrijeme održavanja"></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                    <button id="gumbInfo" type="submit" class="btn">Spremi</button>
                                    <button id="gumbInfo" class="btn cancel" onclick="closeFormInfo()">Zatvori</button>
                                    <p id="obavijest2"><small>*za nove informacije ili novu tablicu informacija najprije izbrišite staru<small></p>

                                </form>
                            </div>
                            <script>
                                function openFormInfo() {
                                    document.getElementById("info").style.display = "block";
                                }

                                function closeFormInfo() {
                                    document.getElementById("info").style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="collapse" id="infoUcitPada">
                        <div id="infoTablicaIzgled" class="shadow-lg p-3 mb-5 bg-white rounded">
                            <table id="tablica" class="table table-bordered">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th scope="col">Učitelj</th>
                                        <th scope="col">Dan</th>
                                        <th scope="col">Sat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($info as $inf) {
                                    ?>
                                        <tr id="retci_tablice" class="bg-info text-dark">
                                            <td><?php echo $inf["1"]; ?></td>
                                            <td><?php echo $inf["2"]; ?></td>
                                            <td><?php echo $inf["3"]; ?></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <a id="upozorenje2" type="submit" class="btn btn-outline-danger open-button" data-toggle="tooltip2" title="Izbrisati tablicu informacija?" href="brisi_info.php?userId=<?php echo $id; ?>" onclick="return confirm('Sigurno želite izbristati tablicu informacija?')">🗑️</a>
                        </div>
                    </div>

                </div>

                <!-- <button type="button" class="btn btn-lg btn-info">Info učitelja</button> -->
            </div>
        </div>

        <div id="sredisnji" class="shadow-lg p-3 mb-5 bg-white rounded">
            <table id="tablica" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="table-warning">
                            <div id="plus2"><button id="plusGumb" type="button" class="btn btn-outline-success open-button " data-toggle="tooltip2" title="Unesi raspored sati" onclick="openForm2()">+</button>
                                <div class="form-popup" id="raspored-forma">
                                    <form method="POST" action="ulogiran.php" class="form-container2">
                                        <table id="tablica" class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th id="redni_broj" scope="col">Sat|Dan</th>
                                                    <th scope="col"><select class="izbor2" name="Ponedjeljak" required>
                                                            <option selected></option>
                                                            <option value="ponedjeljak">Ponedjeljak</option>
                                                            <option value="utorak">Utorak</option>
                                                            <option value="srijeda">Srijeda</option>
                                                            <option value="cetvrtak">Četvrtak</option>
                                                            <option value="petak">Petak</option>
                                                        </select></th>
                                                    <th scope="col"><select class="izbor2" name="Utorak" required>
                                                            <option selected>Utorak</option>
                                                            <option value="ponedjeljak">Ponedjeljak</option>
                                                            <option value="utorak">Utorak</option>
                                                            <option value="srijeda">Srijeda</option>
                                                            <option value="cetvrtak">Četvrtak</option>
                                                            <option value="petak">Petak</option>
                                                        </select></th>
                                                    <th scope="col"><select class="izbor2" name="Srijeda" required>
                                                            <option selected>Srijeda</option>
                                                            <option value="ponedjeljak">Ponedjeljak</option>
                                                            <option value="utorak">Utorak</option>
                                                            <option value="srijeda">Srijeda</option>
                                                            <option value="cetvrtak">Četvrtak</option>
                                                            <option value="petak">Petak</option>
                                                        </select></th>
                                                    <th scope="col"><select class="izbor2" name="Četvrtak" required>
                                                            <option selected>Četvrtak</option>
                                                            <option value="ponedjeljak">Ponedjeljak</option>
                                                            <option value="utorak">Utorak</option>
                                                            <option value="srijeda">Srijeda</option>
                                                            <option value="cetvrtak">Četvrtak</option>
                                                            <option value="petak">Petak</option>
                                                        </select></th>
                                                    <th scope="col"><select class="izbor2" name="Petak" required>
                                                            <option selected></option>
                                                            <option value="ponedjeljak">Ponedjeljak</option>
                                                            <option value="utorak">Utorak</option>
                                                            <option value="srijeda">Srijeda</option>
                                                            <option value="cetvrtak">Četvrtak</option>
                                                            <option value="petak">Petak</option>
                                                        </select></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="0" value="0."></th>
                                                    <td><select class="izbor2" name="nultipon">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="nultiuto">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="nultisri">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="nulticet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="nultipet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="1" value="1."></th>
                                                    <td><select class="izbor2" name="prvipon">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="prviuto">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="prvisri">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="prvicet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="prvipet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>

                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="2" value="2."></th>
                                                    <td><select class="izbor2" name="drugipon">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="drugiuto">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="drugisri">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="drugicet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="drugipet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>

                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="3" value="3."></th>
                                                    <td><select class="izbor2" name="trecipon">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="treciuto">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="trecisri">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="trecicet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="trecipet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>

                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="4" value="4."></th>
                                                    <td><select class="izbor2" name="cetvrtipon">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="cetvrtiuto">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="cetvrtisri">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="cetvrticet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="cetvrtipet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="5" value="5."></th>
                                                    <td><select class="izbor2" name="petipon">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="petiuto">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="petisri">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="peticet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="petipet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="6" value="6."></th>
                                                    <td><select class="izbor2" name="sestipon">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sestiuto">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sestisri">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sesticet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sestipet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="7" value="7."></th>
                                                    <td><select class="izbor2" name="sedmipon">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sedmiuto">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sedmisri">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sedmicet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sedmipet">
                                                            <option selected></option>
                                                            <option value="Sat razrednika">Sat raredn.</option>
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
                                                            <option value="TZK">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="a1" value="akt1"></th>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti1pon"></td>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti1uto"></td>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti1sri"></td>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti1cet"></td>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti1pet"></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2"></th>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti2pon"></td>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti2uto"></td>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti2sri"></td>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti2cet"></td>
                                                    <td><input type="tekst" id="slobunos2" name="aktivnosti2pet"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <button type="submit" class="btn">Spremi</button>
                                        <button class="btn cancel" onclick="closeForm2()">Zatvori</button>
                                        <p id="obavijest"><small>*za nove sate ili novi raspored najprije izbrišite stari<small></p>
                                    </form>
                                </div>
                                <script>
                                    function openForm2() {
                                        document.getElementById("raspored-forma").style.display = "block";
                                    }

                                    function closeForm2() {
                                        document.getElementById("raspored-forma").style.display = "none";
                                    }
                                </script>
                            </div>
                        </th>
                        <th id="c1" scope="col" class="table-info">Ponedjeljak</th>
                        <th id="c2" scope="col" class="table-danger">Utorak</th>
                        <th id="c3" scope="col" class="table-warning">Srijeda</th>
                        <th id="c4" scope="col" class="table-danger">Četvrtak</th>
                        <th id="c5" scope="col"class="table-success">Petak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0;
                    foreach ($raspored as $ras) {
                    ?>
                        <tr id="retci_tablice">
                            <th scope="row"><?php echo $i . "."; ?></th>
                            <td class="table-info"><?php echo $ras["0"]; ?></td>
                            <td class="table-danger"><?php echo $ras["1"]; ?></td>
                            <td class="table-warning"><?php echo $ras["2"]; ?></td>
                            <td class="table-danger"><?php echo $ras["3"]; ?></td>
                            <td class="table-success"><?php echo $ras["4"]; ?></td>
                        </tr>

                    <?php $i++;           //if($i<=6){ $i++;} else $i=0;
                    }
                    ?>
                </tbody>
            </table>
            <a id="upozorenje2" type="submit" class="btn btn-outline-danger open-button" data-toggle="tooltip2" title="Izbrisati raspored?" href="brisi_raspored.php?userId=<?php echo $id; ?>" onclick="return confirm('Sigurno želite izbristati raspored?')">🗑️</a>
        </div>
        <div class="meniDesno">
            <div id="grupaDesno" role="group" aria-label="Group of buttons">
                <!-- izbrisana classa class="btn-group-vertical" -->
                <div id="sveOkoUpozorenja"> <button type="button" class="btn btn-lg lijevo btn-primary"  data-toggle="collapse" data-target="#prosjekPadajuci" aria-expanded="false" aria-controls="collapseExample" title="Ovo je tvoj ukupni prosjek. Za detaljnije klikni!"><?php foreach ($prosjek as $pro){echo "Prosjek: ".$pro["0"];};?></button>
                    <div id="okoUpozorenja">
                        <div id="plus4"><button id="plusGumb" type="button" class="btn btn-outline-primary open-button " data-toggle="tooltip" title="Unesi novu ocjenu" onclick="openFormOcjena()">+</button>
                            <div class="form-popup shadow-lg p-3 mb-5 bg-white rounded" id="ocjena">
                                <form method="POST" action="ulogiran.php" class="form-container2">
                                    <table id="tablica" class="table table-bordered">
                                        <thead class="bg-dark text-white">
                                            <tr>
                                                <th scope="col">Predmet</th>
                                                <th scope="col">Ocjena</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><select class="izbor" name="predmetOcj" required>
                                                        <option selected>Predmet</option>
                                                        <option value="Hrvatski jez.">Hrvatski jez.</option>
                                                        <option value="Glazbena kul.">Glazbena kul.</option>
                                                        <option value="Likovna kul.">Likovna kul.</option>
                                                        <option value="Engleski jez.">Engleski jez.</option>
                                                        <option value="Njemački jez.">Njemački jez.</option>
                                                        <option value="Matematika">Matematika</option>
                                                        <option value="Priroda i društvo">Priroda i društvo</option>
                                                        <option value="Priroda">Priroda</option>
                                                        <option value="Biologija">Biologija</option>
                                                        <option value="Fizika">Fizika</option>
                                                        <option value="Kemija">Kemija</option>
                                                        <option value="Povijest">Povijest</option>
                                                        <option value="Geografija">Geografija</option>
                                                        <option value="Informatika">Informatika</option>
                                                        <option value="Tehnička kul">Tehnička kul.</option>
                                                        <option value="TZK">TZK</option>
                                                        <option value="Vjeronauk">Vjeronauk</option>
                                                    </select></td>
                                                <td><select class="izbor2" name="ocjena" required>
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <button id="gumbInfo" type="submit" class="btn">Spremi</button>
                                    <button id="gumbInfo" class="btn cancel" onclick="closeFormOcjena()">Zatvori</button>
                                    <a id="upozorenje3" type="submit" class="btn btn-outline-danger open-button" data-toggle="tooltip2" title="Briše zadnju unesenu ocjenu, pa predzadnju, itd. Brisati?" href="brisi_ocjenu.php?userId=<?php echo $id; ?>" onclick="return confirm('Sigurno želite izbristati zadnje unesenu ocjenu?')">🗑️</a>

                                </form>
                            </div>
                            <script>
                                function openFormOcjena() {
                                    document.getElementById("ocjena").style.display = "block";
                                }

                                function closeFormOcjena() {
                                    document.getElementById("ocjena").style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="collapse" id="prosjekPadajuci">
                        <div id="prosjekTablica" class="shadow-lg p-3 mb-5 bg-white rounded">
                            <table id="tablica" class="table table-bordered">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th scope="col">Predmet</th>
                                        <th scope="col">Prosjek</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($ocjene as $ocjena) {
                                    ?>
                                        <tr id="retci_tablice" class="table-info">
                                            <td><?php echo $ocjena["0"]; ?></td>
                                            <td><?php echo $ocjena["1"]; ?></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <button type="button" class="btn btn-lg lijevo btn-secondary" disabled>Izostanci</button>
                <button id="zaPop" type="button" class="btn btn-lg lijevo btn-success">Za popravak...</button>
                <?php foreach ($zapopr as $popr){?><button id="maliProsjek" type="button" class="btn btn-sm lijevo btn-success"><?php echo $popr["0"].": ".$popr["1"];};?></button>
            </div>
        </div>
    </div>
</main>
<script src="js/jquery.js"></script>
<?php
require "footer.php";
?>