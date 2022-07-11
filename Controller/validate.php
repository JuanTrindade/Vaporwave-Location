<?php
    session_start();
    
    $db_UserLogin = $_POST['userLogin'];
    $db_UserPass = $_POST['passLogin'];

    if($db_UserLogin == null || $db_UserPass == null){
        header('Location: ../View/Login.php');
    }

    $query = "SELECT * FROM USERS";
?>