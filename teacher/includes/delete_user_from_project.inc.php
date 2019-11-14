<?php
    require 'connect.inc.php';
    $id = $_POST['accept'];

    $update = "update projekty_uczestnicy set status='checked' where id_uczestnika = $id";
?>