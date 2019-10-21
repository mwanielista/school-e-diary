<?php
    require "header.php";
?>
<div class="site-wrapper">
    <main>
          <div class="login_notification">

          <?php
            if(isset($_SESSION['userId'])) {
                echo "<p>You are loggged in</p>";
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
                echo "<p>You are logged out</p>";
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
            
            
         </div>
    </main>

<?php
    require "footer.php";
?>