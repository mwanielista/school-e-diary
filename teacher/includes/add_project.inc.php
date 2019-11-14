<?php
    require 'connect.inc.php';
    session_start();

    $teacher_uid = $_SESSION['userUid'];

    $nazwa = $_POST['name'];
    $ilosc = $_POST['max_users'];

    $insert_project = "insert into projekty values(null, '$nazwa', $ilosc, '$teacher_uid')";
    $query = mysqli_query($conn, $insert_project);

    if(!query){
        echo "CRITICAL ERROR";
    } else {
        header ("Location: ../management_projects.php?success=true");
    }
    
        
  
        

   

