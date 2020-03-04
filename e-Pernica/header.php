<?php
session_start();
?>
<!DOCTYPE html lang="hr">
<html>

<head>
    <meta charset="utf-8">
    <meta name="moj projekt" content="Projektni zadatak iz kolegija Programiranje za internet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Moj projekt</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
</head>

<body class= "prvaPoz">
    <header class="sticky-top">
        <nav id="navigacija" class="navbar navbar-dark bg-dark">
            <ul class="nav">
                <li><img src="img/avatar2.png" alt="logo" height="48" width="60"></li>
                <li class="nav-item"><a class="nav-link active" href="ulogiran.php">e-Pernica</a></li>

            </ul>
            <div id="login_out_upozorenje2">
                <h3>
                    <?php
                    if (isset($_SESSION['userId'])) {
                        echo $_SESSION['userUid'];
                    }
                    ?>
                </h3>
            </div>