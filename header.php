<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>edziennik</title>
        <meta charset="utf-8">
        <meta name="description" content="content of website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    </head>
    <body>
        <header>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a style="float: right" class="action-btn modal-trigger" href="#logout">Logout</a>
            <a style="float: right" class="action-btn modal-trigger" id="signup" href="signup.php">signup</a>
            <a style="float: right" class="action-btn modal-trigger" id="login" href="#loginBox">Login</a>
        </div>
        </header>

        
       <!--login box -->
        <div id="loginBox" class="modal">
            <h5 class="modal-close">&#10005;</h5>
            <div class="modal-content center">
                <h4>Login</h4>
                <br>
                <form action="includes/login.inc.php" method="POST">
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="mailuid" id="name">
                        <label for="name">Username</label>
                    </div>
                    <br>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="pwd" id="pass">
                        <label for="pass">Password</label>
                    </div><br>
                    <button type="submit" name="login-submit" class="btn btn-large">Login</button>
                </form>
            </div>
        </div>

      

        <!--logout box -->
        <div id="logout" class="modal">
            <h5 class="modal-close">&#10005;</h5>
            <?php
                if(isset($_SESSION['userId'])) {
                        echo '
                        <div class="modal-content center">
                            <h4>Na pewno chcesz się wylogować?</h4>
                            <br>
                            <form action="includes/logout.inc.php" method="POST">   
                                <button type="submit" name="logout-submit" class="btn btn-large">logout</button>
                            </form>
                        </div>
                        ';
                    } else{
                        echo '
                        <div class="modal-content center">
                            <h4>Nie jesteś zalogowany, nie możesz się wylogować</h4>
                            <br>
                        </div>
                        ';
                    }
             ?>
        </div>


        <script>
            $(document).ready(function(){
            $('.modal').modal();
        });
        </script>
            
    
