<?php
    if(isset($_POST['signup-submit'])){
        require 'db.inc.php';

        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $passwordRepeat = $_POST['pwd-repeat'];
        $checksum = $_POST['check_sum'];

        $auth_code = "ZS3.is.the.best";

        if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
            header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$mail);
            exit();
        }   else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invalidmailuid");
            exit();
        }   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../signup.php?error=invalidemail&uid=".$username);
            exit();
        }    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invaliduid&mail=".$email);
            exit();
        }    else if($password != $passwordRepeat) {
            header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$mail);
            exit();
        }   else {
            
            $sql = "SELECT uidUsers FROM users WHERE uidUsers=? OR emailUsers=?";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $username, $email); //s - string, b- boolean, double - d ile parametrów tyle liter
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
               
                if($resultCheck > 0) {
                    header("Location: ../signup.php?error=usertaken&mail=".$email);
                    exit();
                } else if($checksum != $auth_code) {
                    header("Location: ../signup.php?error=invalidauthcode&mail=".$email);
                    exit();
                } else {
                    $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES(?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    } else {
                        //create account success; can send email with values from form
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd); 
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signup.php?signup=success");   
                        exit();
                    }
                }
            }

        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }   else {
        header("Location: ../signup.php");
        exit();
    }
