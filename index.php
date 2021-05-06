<?php

include '_connect_to_database.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Hostel Guru</title>
</head>

<body>

  <?php

  include '_navbar.php';

  ?>



<!-- slider starts here -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="cover4.jpg" height="500" width="600"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="hostel.jpg"  height="500" width="600" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="hostel2.jpg"  height="500" width="600" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






<div class="container my-3 text-center">

<h2>Browse Hostels | Boys | Islamabad</h2>

</div>

<div class="container-fluid row text-center align-items-center justify-content-center">



<?php

$sql = "SELECT * FROM `hostels` where hostel_city = 'Islamabad' and category='Male'";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
 
  $id = $row['hostel_id'];

  $hostelName = $row['hostel_name'];
  $hostelAddress = $row['hostel_address'];
  $hostelPrice = $row['price'];
echo '<div class="card my-3 mx-3 " style="width: 18rem;">
<img src="hostel.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><a href="_viewhostel.php?hostelid='. $id .' " >'.  $row['hostel_name'] .'</a></h5>
  
  <p>Hostel Address : '.$hostelAddress.' </p>
  <p>Hostel Price : '.$hostelPrice.' </p>
  <a href="_viewhostel.php?hostelid='.$id.'" " class="btn btn-primary">View Hostel</a>
</div>
</div>
';



}




?>












</div>


<div class="container my-3 text-center">

<h2>Browse Hostels | Boys | Rawalpindi</h2>



<div class="container-fluid row text-center align-items-center justify-content-center">



<?php

$sql = "SELECT * FROM `hostels` where hostel_city = 'Rawalpindi' and category='Male'";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
 
  $id = $row['hostel_id'];

  $hostelName = $row['hostel_name'];
  $hostelAddress = $row['hostel_address'];
  $hostelPrice = $row['price'];
echo '<div class="card my-3 mx-3 " style="width: 18rem;">
<img src="hostel2.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><a href="_viewhostel.php?hostelid='. $id .'" >'.  $row['hostel_name'] .'</a></h5>
  
  <p>Hostel Address : '.$hostelAddress.' </p>
  <p>Hostel Price : '.$hostelPrice.' </p>
  <a href="_viewhostel.php?hostelid='.$id.'" class="btn btn-primary">View Hostel</a>
</div>
</div>
';



}




?>












</div>








</div>


<div class="container my-3 text-center">

<h2>Browse Hostels | Girls | Islamabad</h2>


<div class="container-fluid row text-center align-items-center justify-content-center">



<?php
$sql = "SELECT * FROM `hostels` where hostel_city = 'Islamabad' and category='Female'";

$result = mysqli_query($con, $sql);

$hostelcat = 'rwp_boys_hostels';
while ($row = mysqli_fetch_assoc($result)) {
 
  $id = $row['hostel_id'];

  $hostelName = $row['hostel_name'];
  $hostelAddress = $row['hostel_address'];
  $hostelPrice = $row['price'];
echo '<div class="card my-3 mx-3 " style="width: 18rem;">
<img src="h3.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><a href="_viewhostel.php?hostelid='. $id .'" >'.  $row['hostel_name'] .'</a></h5>
  
  <p>Hostel Address : '.$hostelAddress.' </p>
  <p>Hostel Price : '.$hostelPrice.' </p>
  <a href="_viewhostel.php?hostelid='.$id.'" class="btn btn-primary">View Hostel</a>
</div>
</div>
';



}




?>












</div>








</div>


<div class="container my-3 text-center">

<h2>Browse Hostels | Girls | Rawalpindi</h2>

<div class="container-fluid row text-center align-items-center justify-content-center">



<?php

$sql = "SELECT * FROM `hostels` where hostel_city = 'Rawalpindi' and category='Female'";


$result = mysqli_query($con, $sql);

$hostelcat = 'rwp_boys_hostels';
while ($row = mysqli_fetch_assoc($result)) {
 
  $id = $row['hostel_id'];

  $hostelName = $row['hostel_name'];
  $hostelAddress = $row['hostel_address'];
  $hostelPrice = $row['price'];
echo '<div class="card my-3 mx-3 " style="width: 18rem;">
<img src="image.jpeg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><a href="_viewhostel.php?hostelid='. $id .'" >'.  $row['hostel_name'] .'</a></h5>
  
  <p>Hostel Address : '.$hostelAddress.' </p>
  <p>Hostel Price : '.$hostelPrice.' </p>
  <a href="_viewhostel.php?hostelid='.$id.'" class="btn btn-primary">View Hostel</a>
</div>
</div>
';



}




?>












</div>






</div>

  <?php

  include '_footer.php';

  ?>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>