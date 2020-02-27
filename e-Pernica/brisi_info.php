<?php

include ("includes/funkcije.inc.php");

$korisnik = provjeri_korisnika($konekcija);

if (!$korisnik) {
    header ("Location: ulogiran.php");
}

$id = intval($_GET["userId"]);

pobrisi_ocjenu($id, $konekcija);
header("Location: ulogiran.php");