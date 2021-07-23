<?php
    if($_COOKIE['login-type'] != 'funcionario'){
        header("Location: ../");
    }
    
    $host="localhost";
    $username="root";
    $password="root";
    $db_name="biblioteca";

    $MySQLi = new MySQLi($host, $username, $password, $db_name);
?>