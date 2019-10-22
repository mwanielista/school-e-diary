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

<div class="site-wrapper">
    <main>
          
    </main>

<?php
    require "footer.php";
?>