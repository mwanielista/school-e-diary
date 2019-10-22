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