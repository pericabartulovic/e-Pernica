<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$baza = "e-pernica";

try {
    $konekcija = new PDO("mysql:host=$servername;dbname=$baza", $dBUsername, $dBPassword);
} catch (PDOException $ex) {
    echo ("Nismo se uspjeli spojiti na bazu.");
    die();
}



/* $konekcija = mysqli_connect($servername, $dBUsername, $dBPassword, $baza);

if (!$konekcija) {
    die("Nismo se uspjeli povezati: ".mysqli_connect_error());
} */