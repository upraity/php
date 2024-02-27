<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){//if (isset($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo  "welcome" .$name ."". $email;
    }
?>

<form action="" method="POST">
    Name:<input type="text" name="name" placeholder="enter your name"><br>
    Email:<input type="email" name="email"  placeholder="enter your  mail"><br>
    <input type="submit">
</form>