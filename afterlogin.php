<?php
    require 'header.php';
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
    <div class="site-wrapper afterlogin">
        
                <p class="heading-text">Zostałeś zalogowany na konto: </p>
                <?php
                require 'includes/db.inc.php';
                $user = $_SESSION['userId'];

                $select = "select * from users where idUsers = $user";
                $query = mysqli_query($conn, $select);
                while($row = mysqli_fetch_array($query)){
                    if($row['userLevel'] == 'teacher'){
                        echo '<p class="heading-text">uprawnienia: teacher</p>';
                        $user = $row['uidUsers'];
                        echo '<p class="heading-text"> UID: '. $row['uidUsers'].'</p>';
                        echo '<a href="teacher/teacher.php">go forward!</a>';
                    } else if($row['userLevel'] == 'student'){
                        echo '<p class="heading-text">uprawnienia: student</p>';
                        echo '<p class="heading-text">UID '. $row['uidUsers'].'</p>';
                    }
                }
                ?>
        
         </div>
<?php
    require 'footer.php';
?>