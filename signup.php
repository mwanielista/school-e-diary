<?php
    require "header.php";
    echo '
            <style type="text/css">
                #login {
                    visibility: hidden;   
                }
                #signup {
                    visibility: hidden;   
                }
                #logout {
                    visibility: hidden;   
                }
            </style>
        ';
?>
    <div class="signup-page">
        <section class="signup">
            <div class="bg-blur"></div>
                <div class="signup-dark" id="signup-sect">
                    <form method="post" action="includes/signup.inc.php">
                        <h2>Zarejestruj się</h2>
                        <div class="illustration"><i class="fas fa-user"></i></div>
                        <div class="form-group"><input class="form-control" type="text" name="uid" placeholder="username"></div>
                        <div class="form-group"><input class="form-control" type="text" name="mail" placeholder="Email"></div>
                        <div class="form-group"><input class="form-control" type="password" name="pwd" placeholder="Password"></div>
                        <div class="form-group"><input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat password"></div>
                        <div class="form-group"><input class="form-control" type="text" name="check_sum" placeholder="Auth code"></div>
                        <div class="form-group"><button class="btn btn-primary btn-block" name="signup-submit" type="submit">Sign up</button></div>
                    </form>
                </div>
            </section>
         </div>
<?php
    require "footer.php";
?>