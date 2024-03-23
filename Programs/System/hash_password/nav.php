<?php
  session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">SabkaCode</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Course</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">C</a>
                    <a class="dropdown-item" href="#">DE</a>
                    <a class="dropdown-item" href="#">Php</a>
                    <a class="dropdown-item" href="#">AI</a>
                    <a class="dropdown-item" href="#">DSA</a>
                    <a class="dropdown-item" href="#">C++</a>
                    <a class="dropdown-item" href="#">Java</a>
                    <a class="dropdown-item" href="#">HTML</a>
                    <a class="dropdown-item" href="#">Maths</a>
                </div>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown2" aria-haspopup="true" aria-expanded="false">Projects</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- <a class="dropdown-item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Course</a> -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">qUizZY lOoP</a>
                        <a class="dropdown-item" href="#">Add Data</a>
                    </div>
                </div>
                <a class="dropdown-item" href="#">FontPage</a>
                <a class="dropdown-item" href="#">AdmitCard</a>
            </div>
      </li>
      <?php
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
          echo '
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="signin.php">Register <span class="sr-only">(current)</span></a>
            </li>
          ';
        }

        if(isset($_SESSION['loggedin'])){
          echo'
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
            </li>
          ';
        }
      ?>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>
