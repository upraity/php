<?php
    // if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] = true){
    //     header("location:welcome.php");
    // }

$pass = false;
$insert = false; 
$login = false;
$error = false;
// $duplicate = false;
    include 'dbconn.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username  = $_POST['username'];
        $password  = $_POST['password'];

       $sql = "SELECT * FROM `signin` WHERE `username` = '$username' AND `password` = '$password'";
       $result = mysqli_query($conn, $sql);
       $num = mysqli_num_rows($result);
       if($num == 1){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
           header("location:welcome.php");
       }
       else{
        $error = " Invalid Credentials";
       }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php
        include 'nav.php';
        if($login){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!!</strong> Your are login successfuly
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }

        if($pass){
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!!</strong>Password does not match.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    
        if($error){
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!!</strong>'.$error.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 
            ';
        }
    ?>
    <div class="container mt-5">
        <h1 class="text-center">Login</h1>
        <form method="POST" action="">
            <div class="form-group mt-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary col-md-6">Sign Up</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
