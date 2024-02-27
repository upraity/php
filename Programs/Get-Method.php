<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){//if (isset($_GET)){
        $name = $_GET['name'];
        $email = $_GET['email'];

        echo  "welcome" .$name ."". $email;
    }
?>

<form action="" method="GET">
    Name:<input type="text" name="name" placeholder="enter your name"><br>
    Email:<input type="email" name="email"  placeholder="enter your  mail"><br>
    <input type="submit">
</form>