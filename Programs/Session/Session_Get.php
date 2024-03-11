<?php
    session_start();
    if(isset($_SESSION['username'])){
    echo "Welcome ". $_SESSION['username']. "\n";
    }
    else{
        echo "please login <a href='http://localhost:3000/Session.php'>login</a>";
    }
?>