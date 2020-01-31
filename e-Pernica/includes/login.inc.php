<?php

if(isset($_POST['login-submit'])){
    require 'dbh.inc.php';

    $mailuid = $_POST["mailuid"];
    $password = $_POST["pwd"];

    if ((!$mailuid) || (!$password)) {
        header("Location: ../login.php?error=emptyfields");
        exit(); 
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers =? OR emailUsers = ?";
        $upit = $konekcija->prepare($sql);   //mysqli_stmt_init($konekcija);
        if (!$upit) {                        //!mysqli_stmt_prepare($stmt, $sql) u zagrade
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
                                            //mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            $upit ->execute([$mailuid, $mailuid]);                                //mysqli_stmt_execute($stmt);
                                            //$result = mysqli_stmt_get_result($stmt);
            if ($row = $upit->fetch()/* $row = mysqli_fetch_assoc($result) */) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false){
                    header("Location: ../login.php?error=neispravna_lozinka");
                    exit();
                } elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    
                    header("Location: ../index.php?login=success");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit(); 
}