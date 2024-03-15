<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        header("location:login.php");
    }
    else{
    session_unset();
    session_destroy();
    echo "you are logged out";
    }
?>
