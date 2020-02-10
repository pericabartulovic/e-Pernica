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
                    <div id="okoUpozorenja">
                        <button id="upozorenje" type="button" class="btn btn-danger" data-toggle="tooltip" title="Broj ispita u narednih 5 dana! ⚠️ = danas ispit!">
                            <?php
                            $datumDanas = date("Y-m-d");
                            $brojac = 0;
                            foreach ($testovi as $dt) {
                                $datumTesta = ($dt["datum"]);
                                $razlikaDana = ((strtotime($datumTesta) - strtotime($datumDanas)) / 60 / 60 / 24); //pretvara stringove u timestamp i onda računa dane (u ovom slučaju)
                                if ($razlikaDana == 0){
                                    echo "⚠️";  $brojac=""; ?> <script> $("#upozorenje").css({"font-size":"x-large","background-color":"transparent","padding-left":"3px", "border-color":"transparent","margin-top":"-10px","margin-left":"-5px"}); </script> <?php break; 
                                } elseif ($razlikaDana > 0 && $razlikaDana <= 5) {
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
                </div>
                <button type="button" class="btn btn-lg btn-warning" data-toggle="popover" title="Ne zaboravi..." data-content="https://phppot.com/php/php-calendar-event-management-using-fullcalendar-javascript-library/">Kontraturnus</button>
                <button type="button" class="btn btn-lg btn-info">Info učitelja</button>
            </div>
        </div>

        <div id="sredisnji" class="shadow-lg p-3 mb-5 bg-white rounded">
            <table id="tablica" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">
                            <div id="plus2"><button id="plusGumb" type="button" class="btn btn-outline-success open-button " data-toggle="tooltip2" title="Unesi raspored sati" onclick="openForm2()">+</button>
                                <div class="form-popup" id="raspored-forma">
                                    <form method="POST" action="ulogiran.php" class="form-container2">
                                        <table id="tablica" class="table table-bordered">
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
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="nultiuto">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="nultisri">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="nulticet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="nultipet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="1" value="1."></th>
                                                    <td><select class="izbor2" name="prvipon">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="prviuto">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="prvisri">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="prvicet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="prvipet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>

                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="2" value="2."></th>
                                                    <td><select class="izbor2" name="drugipon">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="drugiuto">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="drugisri">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="drugicet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="drugipet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>

                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="3" value="3."></th>
                                                    <td><select class="izbor2" name="trecipon">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="treciuto">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="trecisri">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="trecicet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="trecipet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>

                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="4" value="4."></th>
                                                    <td><select class="izbor2" name="cetvrtipon">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="cetvrtiuto">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="cetvrtisri">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="cetvrticet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="cetvrtipet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="5" value="5."></th>
                                                    <td><select class="izbor2" name="petipon">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="petiuto">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="petisri">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="peticet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="petipet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="6" value="6."></th>
                                                    <td><select class="izbor2" name="sestipon">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sestiuto">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sestisri">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sesticet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sestipet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th scope="row"><input id="redni_broj" type="text" name="7" value="7."></th>
                                                    <td><select class="izbor2" name="sedmipon">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sedmiuto">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sedmisri">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sedmicet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
                                                            <option value="Vjeronauk">Vjeronauk</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="izbor2" name="sedmipet">
                                                            <option selected>-</option>
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
                                                            <option value="Tjelesna i zdr.kul.">TZK.</option>
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
                                                    <th scope="row"><input id="redni_broj" type="text" name="a2" value="akt2" ></th>
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
                        <th scope="col">Ponedjeljak</th>
                        <th scope="col">Utorak</th>
                        <th scope="col">Srijeda</th>
                        <th scope="col">Četvrtak</th>
                        <th scope="col">Petak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0;
                    foreach ($raspored as $ras) { 
                    ?>
                        <tr id="retci_tablice">
                        <th scope="row"><?php echo $i.".";?></th>
                        <td><?php echo $ras["0"]; ?></td>
                        <td><?php echo $ras["1"]; ?></td>
                        <td><?php echo $ras["2"]; ?></td>
                        <td><?php echo $ras["3"]; ?></td>
                        <td><?php echo $ras["4"]; ?></td>
                        </tr>

                    <?php  $i++;           //if($i<=6){ $i++;} else $i=0;
                    }
                    ?>
                </tbody>
            </table> 
                <a id="upozorenje2" type="submit" class="btn btn-outline-danger open-button" data-toggle="tooltip2" title="Izbrisati raspored?" href="brisi_raspored.php?userId=<?php echo $id;?>" onclick="return confirm('Sigurno želite izbristati raspored?')">🗑️</a>
        </div>
        <div class="meniDesno">
            <div id="grupaDesno" role="group" aria-label="Group of buttons">
                <!-- izbrisana classa class="btn-group-vertical" -->
                <button type="button" class="btn btn-lg btn-primary">Prosjek ukupno</button>
                <button type="button" class="btn btn-lg btn-dark">Neriješeni izostanci</button>
                <button type="button" class="btn btn-lg btn-success">Za popravak...</button>
            </div>
        </div>
    </div>
</main>
<script src="js/jquery.js"></script>
<?php
require "footer.php";
?>