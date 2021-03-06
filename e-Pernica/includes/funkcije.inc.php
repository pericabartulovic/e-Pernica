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

function provjeri_profesora($konekcija)
{
    $sql = "SELECT * FROM profesori WHERE pid=? AND pwd=?";
    $upit = $konekcija->prepare($sql);
    if (!isset($_SESSION["pid"])) return false;
    $upit->execute([$_SESSION["pid"], $_SESSION["pwd"]]);
    $profesor = $upit->fetch();
    if (!isset($profesor["pid"])) return false;
    return $profesor;
}

function pobrisi_test($id, $konekcija)
{
    $sql = "DELETE FROM testovi WHERE id=?";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$id]);
}

function dodaj_raspored($sat, $pon, $uto, $sri, $cet, $pet, $korisnik, $konekcija){
    $sql = "INSERT INTO raspored VALUES (null, ?, ?, ?, ?, ?, ?, ?)";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$sat, $pon, $uto, $sri, $cet, $pet, $korisnik]);
}

function dohvati_raspored($id, $konekcija){
    $sql = "SELECT ponedjeljak,utorak,srijeda, cetvrtak, petak FROM raspored WHERE $id = fk_uid";
    return $konekcija->query($sql)->fetchALL();
}

function dohvati_nultiSat($id, $konekcija){
    $sql = "SELECT ponedjeljak, utorak, srijeda, cetvrtak, petak FROM raspored WHERE $id = fk_uid AND (sat = '0.' OR sat = 'akt1' OR sat = 'akt2')";
    return $konekcija->query($sql)->fetchAll();
}

function brisi_raspored($id, $konekcija)
{
    $sql = "DELETE FROM raspored WHERE  fk_uid=?";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$id]);
}

function dodaj_obavijest($datumob, $obavijest, $korisnik, $konekcija)
{
    $sql = "INSERT INTO obavijesti VALUES (null, ?, ?, ?)";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$datumob, $obavijest, $korisnik]);
}
function dohvati_obavijesti($id, $konekcija)
{
    $sql = "SELECT * FROM obavijesti WHERE $id = fk_uid ORDER BY datumob";
    return $konekcija->query($sql)->fetchAll();
}
function pobrisi_obavijest($id, $konekcija)
{
    $sql = "DELETE FROM obavijesti WHERE id=?";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$id]);
}

function dodaj_info($ucitelj, $dan, $sat, $korisnik, $konekcija)
{
    $sql = "INSERT INTO informacije VALUES (null, ?, ?, ?, ?)";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$ucitelj, $dan, $sat, $korisnik]);
}
function dohvati_info($id, $konekcija)
{
    $sql = "SELECT * FROM informacije WHERE $id = fk_uid";
    return $konekcija->query($sql)->fetchAll();
}
function pobrisi_info($id, $konekcija)
{
    $sql = "DELETE FROM informacije WHERE fk_uid=?";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$id]);
}

function dodaj_ocjenu($predmetOcj, $ocjena, $korisnik, $konekcija)
{
    $sql = "INSERT INTO ocjene VALUES (null, ?, ?, ?)";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$predmetOcj, $ocjena, $korisnik]);
}
function dohvati_ocjene($id, $konekcija)
{
    $sql = "SELECT predmet, ROUND(AVG(ocjena),2) FROM ocjene WHERE $id = fk_uid GROUP BY predmet"; //AND $predmetOcj = predmet
    return $konekcija->query($sql)->fetchAll();
}
//za zadnju i predzadnju ocjenu po prosjeku
function dohvati_ocjOdDna($id, $konekcija)
{
    $sql = "SELECT predmet, ROUND(AVG(ocjena),2) FROM ocjene WHERE $id = fk_uid GROUP BY predmet ORDER BY ROUND(AVG(ocjena),2) ASC LIMIT 1"; //AND $predmetOcj = predmet
    return $konekcija->query($sql)->fetchAll();
}
function dohvati_ocjOdDnaPredz($id, $konekcija)
{
    $sql = "SELECT predmet, ROUND(AVG(ocjena),2) FROM ocjene WHERE $id = fk_uid GROUP BY predmet ORDER BY ROUND(AVG(ocjena),2) ASC LIMIT 1, 1"; //AND $predmetOcj = predmet
    return $konekcija->query($sql)->fetchAll();
}
function dohvati_prosjek($id, $konekcija)
{
    $sql = "SELECT ROUND(AVG(ocjena),2) FROM ocjene WHERE $id = fk_uid"; //AND $predmetOcj = predmet
    return $konekcija->query($sql)->fetchAll();
}

function pobrisi_ocjenu($id, $konekcija)
{
    $sql = "DELETE FROM ocjene WHERE fk_uid=? ORDER BY oid DESC LIMIT 1";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$id]);
}









/* function dodaj_raspored($dan, $nulti, $prvi, $drugi, $treci, $cetvrti, $peti, $sesti, $sedmi, $aktivnosti1, $aktivnosti2, $korisnik, $konekcija){
    $sql = "INSERT INTO raspored VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $upit = $konekcija->prepare($sql);
    return $upit->execute([$dan, $nulti, $prvi, $drugi, $treci, $cetvrti, $peti, $sesti, $sedmi, $aktivnosti1, $aktivnosti2, $korisnik]);
} */

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