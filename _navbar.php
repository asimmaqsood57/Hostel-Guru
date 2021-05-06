<?php

session_start();

echo '

<nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HG | HOSTEL GURU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>';

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){  

        echo '
        <li class="nav-item">
          <a class="nav-link" href="_dashboard.php">Dashboard</a>
        </li>';

        }else {
        
          echo '
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>';


        }

        echo '
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search"  placeholder="Search Hostels" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
   
      </form>';


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
    
  echo    '
  <i  class="mx-3 text-light"> welcome '.$_SESSION['username'].' </i>
  <a href="_logout.php" class="btn btn-outline-success mx-2 "  >Log out</a>
  
  
  ';
  
  
  
}else {
  


echo '
      <div class="d-flex">
        <button class="btn btn-outline-success mx-2 " data-bs-toggle="modal" data-bs-target="#loginmodal"  >Log in</button>
        <button class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#signupmodal"  >Sign up</button>
   
        </div>';

}
echo '  
    </div>
  </div>
</nav>
';


include '_signup.php';
include '_signin.php';


if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> You have successfully registered.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false") {

  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> '.$_GET['showError'].'.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}



?>



