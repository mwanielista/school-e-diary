<?php
    session_start();

    if(isset($_SESSION['userId'])) {
        echo '
            <style type="text/css">
                #login {
                    visibility: hidden;   
                }
                #signup {
                    visibility: hidden;   
                }
            </style>
        ';
    } else if(!isset($_SESSION['userId'])){
        echo '
            <style type="text/css">
                #logout {
                    visibility: hidden;   
                }
            </style>
        ';
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>e-diary</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="styles/style.css" type="text/css"rel="stylesheet">
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <script src="https://kit.fontawesome.com/ff1f4b4be3.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        
    </head>
    <body>
        <header>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php">E-Diary</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" id="login" href="#login-sect">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="signup" href="signup.php">Signup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="logout" href="includes/logout.inc.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        