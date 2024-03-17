<?php
// session_start();
//     if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true){
//         header('location:welcome.php');
//         exit;
//     }
$url = false;
$pass = false;
$insert = false;
$exists = false;
$duplicate = false;
$uduplicate = false;
$eduplicate = false;

    include 'dbconn.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username  = $_POST['username'] ;
        $email     = $_POST['email'];
        $password  = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        //for checking the username already exits or not 
            $sql1 = "SELECT * FROM `signin` WHERE `username` = '$username' ";
            $result1 = mysqli_query($conn, $sql1);
            $num1 = mysqli_num_rows($result1);
            if($num1 > 0){
                $duplicate = true;
                $uduplicate = true;
            }
        
        //for checking the email already exits or not 
            $sql2 = "SELECT * FROM `signin` WHERE `email` = '$email' ";
            $result2 = mysqli_query($conn, $sql2);
            $num2 = mysqli_num_rows($result2);
            if($num2 > 0){
                $duplicate = true;
                $eduplicate = true;
            }

            //checking the password are equal to the confirm password or not  
            if($password == $cpassword){
                if(!$duplicate){ // if username / email are not exits so insert the data in the table 
                    $sql = "INSERT INTO `signin` (`username`, `email`, `password`, `datetime`) VALUES('$username', '$email', '$password', current_timestamp() )";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        $insert = true;                }
                }
            }
            else{
               $pass = true;
            }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <?php
        include 'nav.php';
        if($insert){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!!</strong> Your account is created, You can Login In.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
            $url = true;
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
    
        if($uduplicate){
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Username already exists</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 
            ';
        }

        if($eduplicate){
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Email already exists</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> 
            ';
        }
        
    ?>
    <div class="container mt-5">
        <h1 class="text-center">Registration</h1>
        <form method="POST" action="">
            <div class="form-group mt-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your mail" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm your Password" required>
                <small id="emailHelp" class="form-text text-muted">Make sure type the same password.</small>
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
