<?php

include("dbh.inc.php");

function dodaj_test($datum, $predmet, $vrsta, $korisnik, $konekcija)
{
    $sql = "INSERT INTO testovi VALUES (null, ?, ?, ?, ?)";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$datum, $predmet, $vrsta, $korisnik]);
}

function dohvati_testove($id, $konekcija)
{
    $sql = "SELECT * FROM testovi WHERE $id = fk_uid ORDER BY datum";
    return $konekcija->query($sql)->fetchAll();
}

function test_datumi($id, $konekcija)
{
    $sql = "SELECT datum FROM testovi WHERE $id = fk_uid";
    return $konekcija->query($sql)->fetchAll();
}

function provjeri_korisnika($konekcija)
{
    $sql = "SELECT * FROM users WHERE idUsers=? AND pwd=?";
    $upit = $konekcija->prepare($sql);
    if (!isset($_SESSION["idUsers"])) return false;
    $upit->execute([$_SESSION["idUsers"], $_SESSION["pwd"]]);
    $korisnik = $upit->fetch();
    if (!isset($korisnik["idUsers"])) return false;
    return $korisnik;
}

function pobrisi_test($id, $konekcija)
{
    $sql = "DELETE FROM testovi WHERE id=?";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$id]);
}

/* function uredi_test($id, $datum, $predmet, $vrsta, $konekcija){
    $sql = "UPDATE testovi SET datum=?, predmet=?, vrsta=?, WHERE id=?";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$datum, $predmet, $vrsta, $datum, $id]);
} */



/* function dohvati_objavu($id, $konekcija){
    $sql = "SELECT * FROM post WHERE id=?";
    $upit = $konekcija->prepare($sql);
    $upit->execute([$id]);
    return $upit->fetch();
} */

/* 
foreach ($datumTesta as $dt) { ?>
    <p> <?php echo $dt["datum"] = date_format($dt, "Ymd"); ?></p>
    $brojac = 0;
    $datumDanas = date("Ymd");
    echo $razlikaDana = ($dt - $datumDanas);
    if ($razlikaDana <= 3) { $brojac ++; echo $brojac; } else { echo '0' ; } <?php }
                                                                                ?>  */


?>