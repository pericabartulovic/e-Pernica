<?php

if(isset($_POST['login-submit'])){
    require 'dbh.inc.php';

    $mailuid = $_POST["mailuid"];
    $password = $_POST["pwd"];

    if ((!$mailuid) || (!$password)) {
        header("Location: ../loginProf.php?error=emptyfields");
        exit(); 
    } else {
        $sql = "SELECT * FROM profesori WHERE imeprez =? OR emailprof = ?";
        $upit = $konekcija->prepare($sql);   //mysqli_stmt_init($konekcija);
        if (!$upit) {                        //!mysqli_stmt_prepare($stmt, $sql) u zagrade
            header("Location: ../loginProf.php?error=sqlerror");
            exit();
        } else {
                                            //mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            $upit ->execute([$mailuid, $mailuid]);                                //mysqli_stmt_execute($stmt);
                                            //$result = mysqli_stmt_get_result($stmt);
            if ($row = $upit->fetch()/* $row = mysqli_fetch_assoc($result) */) {
                $pwdCheck = password_verify($password, $row['pwdProf']);
                if ($pwdCheck == false){
                    header("Location: ../loginProf.php?error=neispravna_lozinka");
                    exit();
                } elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['pid'];
                    $_SESSION['userUid'] = $row['imeprez'];
                    
                    header("Location: ../ulogiranProf.php?loginProf=success");
                    exit();
                }
            } else {
                header("Location: ../loginProf.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../loginProf.php");
    exit(); 
}