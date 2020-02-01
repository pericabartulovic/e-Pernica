<?php
if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordPonovi = $_POST['pwd-ponovi'];

    if (/* empty */!($username) || (!$email) || (!$password) || (!$passwordPonovi)) {
        header("Location: ../signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmailuid");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=" . $username);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=" . $email);
        exit();
    } elseif ($password !== $passwordPonovi) {
        header("Location: ../signup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $upit = $konekcija->prepare($sql);                   // mysqli_stmt_init($konekcija);
        if (!$upit/* mysqli_stmt_prepare($upit, $sql) */) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            /*mysqli_stmt_bind_param($upit, "s", $username);
            mysqli_stmt_execute($upit);
            mysqli_stmt_store_result($upit);*/
            $resultCheck = $upit->fetch();
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $upit = $konekcija->prepare($sql);
                if (!$upit/*mysqli_stmt_prepare($upit, $sql)*/) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    $upit->execute([$username, $email, $hashedPwd]);
                    /* mysqli_stmt_bind_param($upit, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($upit);  */
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    /*     mysqli_stmt_close($upit);
    mysqli_close($konekcija); */
} else {
    header("Location: ../signup.php");
    exit();
}
