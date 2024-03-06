<?php

    $add = false;
    // Connecting to the Db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "form";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die('Connection fail!!'.mysqli_connect_error());
    }
    else{
    //echo "Connection was successful";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name  = $_POST['name']; 
        $title = $_POST['title'];
        $desc  = $_POST['desc'];

        $sql = "INSERT INTO `nodes` (`name`, `title`, `desc`) VALUES ('$name', '$title', '$desc')";
        $result = mysqli_query($conn, $sql);

        if($result){
            $add = true;
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <title>Add Points/Tasks/Information</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">SabkaCode</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://htmlify.artizote.com">HTMLify</a>
          <!--<a class="dropdown-item" href="#"></a>-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Feedback</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/upraity">Github</a>
      </li>
      <li class="nav-item">
        <!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
    if($add){
        echo '
        <div class="alert alert-success alert-success fade show" role="alert">
        <strong>Success!!</strong> Your data have been inserted successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        ';
    }
    // else{
    //     echo '
    //     <div class="alert alert-warning alert-dismissible fade show" role="alert">
    //     <strong>Error!</strong> Your Node have not been  inserted .
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //       <span aria-hidden="true">&times;</span>
    //     </button>
    //   </div>
    //     ';
    // }
?>
<div class="container mt-3">

<form action="" method="POST">
  <h2>Add your Data</h2>
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "name" aria-describedby="emailHelp" placeholder="Enter your name" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "title" aria-describedby="emailHelp" placeholder="Enter your title" >
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Desc</label>
    <textarea rows="5" class="form-control" name = "desc" id="exampleInputPassword1" placeholder="Enter your desc" ></textarea>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Add</button>
</form>
<table class="table mt-5" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT * FROM `nodes` ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo '
                <tr>
                    <th scope="row">'.$row['sno'].'</th>
                    <td>'.$row['name'].'</td>
                    <td>'.$row["title"].'</td>
                    <td>'.$row["desc"].'</td>
                    <td>'.$row["data-time"].'</td>
                </tr>
            ';
        }
        ?>
  </tbody>
</table> 

</div>
<!-- <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous">
</script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script>
        // $(document).ready( function () {
        //     $('#myTable').DataTable();
        // })
        let table = new DataTable('#myTable');
    </script>
  </body>
</html>