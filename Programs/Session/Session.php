<?php
    //session
    //session use for the verification of the user
    session_start();
    $_SESSION['username'] = 'SabkaCode';
    $_SESSION['details']  = 'coding';
    echo 'We have save your data (session)';
?>
