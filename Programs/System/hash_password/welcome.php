<?php
session_start();
    if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true){
        echo "welcome ".$_SESSION['username'];
    }
?>
