<?php

include ("includes/funkcije.inc.php");

$korisnik = provjeri_korisnika($konekcija);

if (!$korisnik) {
    header ("Location: ulogiran.php");
}

$id = intval($_GET["id"]);

pobrisi_obavijest($id, $konekcija);

header("Location: ulogiran.php");