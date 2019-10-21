<?php
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "edziennik";

    $conn = mysqli_connect($dbserver, $dbuser, $dbpwd, $dbname);

    if(!$conn) {
        die("Connection failed! ;/ " . mysqli_connect_error());
    }