<?php
    require "header.php";

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
    } else{
        echo '
        <style type="text/css">
                #login {
                    visibility: visible;   
                }
                #signup {
                    visibility: visible;   
                }
            </style>
        ';
    }
?>
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
            
    




</div>
<!-- /.container -->
<?php
    require "footer.php";
?>