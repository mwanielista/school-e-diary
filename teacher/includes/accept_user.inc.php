<?php
    require 'connect.inc.php';
    $id = $_POST['accept_btn'];

    $update = "update projekty_uczestnicy set status='checked' where id_uczestnika = $id";
    $query = mysqli_query($conn, $update);
    if($query){
        header("location: ../management_projects.php?addstudent_success=true");
        exit();
    }
?>