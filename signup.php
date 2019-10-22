<?php
    require "header.php";
?>
<div class="site-wrapper">
    <main>
          <div class="section">
             <!--signup box -->
            <div class="form">
                <h4>Signup:</h4>
                <br>
                <form action="includes/signup.inc.php" method="POST">
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="uid" id="uid">
                        <label for="uid">Username</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="text" name="mail" id="mail">
                        <label for="mail">email</label>
                    </div>
                    
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="pwd" id="pwd">
                        <label for="pwd">Password</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="pwd-repeat" id="pwd-repeat">
                        <label for="pwd-repeat">Repeat password</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">checksum</i>
                        <input type="text" name="check_sum" id="check_sum">
                        <label for="checksum">Authorize code</label>
                    </div>
                    <button type="submit" name="signup-submit" class="btn btn-large">Signup</button>
                </form>
            </div>
         </div>
    </main>
<?php
    require "footer.php";
?>