<?php
    require 'connect.inc.php';
    session_start();

    $teacher_uid = $_SESSION['userId'];

    $klasa = $_POST['class'];
    $uid = $_POST['username'];
    $mark = $_POST['mark'];
    $subject = $_POST['przedmiot'];

    $select_student_uid = "select * from users where uidUsers like '$uid'";
    $query = mysqli_query($conn, $select_student_uid);

    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_array($query)){
            $student_id = $row['idUsers'];
            $quest = "insert into oceny values(null, '$teacher_uid', '$student_id' , '$klasa', '$subject', $mark)";
            $query_add = mysqli_query($conn, $quest);
       

            if($query_add) {
                header("Location: ../mark_add.php?success=true");
            }
        }
    } else {
        header("Location: ../mark_add.php?error=nouser");
        exit();
    }
    
        
  
        

   

