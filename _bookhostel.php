<?php

$id = $_GET['hostelid'];
include '_connect_to_database.php';

// if (!isset($_SESSION['loggedin']) ) {
    
//     header("location:/hostelguru/_viewhostel.php?hostelid=$id");

// }


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

<style>

.next{
  text-decoration: none;
  color: white;
}

</style>
  
</head>

<body>

  <?php

  include '_navbar.php';

  ?>

<?php  

$sql = "SELECT * FROM `hostels` WHERE `hostel_id` = '$id'";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);

    ?>

<div class="container my-3">

<h2 class="text-center my-3">Registration for  "  <?php
echo $row['hostel_name'];

?> "</h2>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="fullname" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">CNIC</label>
    <input type="text" class="form-control" name="cnic" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" name="cnic" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Father Name</label>
    <input type="text" class="form-control" name="fname" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Father Mobile Number</label>
    <input type="text" class="form-control" name="fname" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Father CNIC</label>
    <input type="text" class="form-control" name="fcnic" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">Permenent Address</label>
    <textarea name="comment" class="form-control" id="" cols="30" rows="5"></textarea>
 
  </div>
  <div class="mb-3">
    <label for="example" class="form-label">University/College/School</label>
    <input type="text" class="form-control" name="paddress" id="name" aria-describedby="emailHelp">
  </div>



<div class="container text-center  ">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
 Next
</button>


</div>
<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hostel Aggreement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nisi accusamus repellat, soluta ex, beatae possimus fugiat, quam natus animi commodi! Suscipit consequuntur, rerum excepturi labore sit impedit non sequi, est veritatis officia, natus voluptates? Et ipsa, facilis quaerat ab eveniet perspiciatis consequatur harum culpa quos nihil, ratione rerum laborum illum velit labore, itaque libero? Consequatur quod, alias architecto dolorem officia facilis in voluptate sapiente veniam! Excepturi obcaecati aliquid amet veniam accusamus nulla inventore aperiam, iste, reprehenderit quam praesentium qui ipsum culpa, placeat pariatur quisquam dolores vitae voluptate eveniet corporis. Quos maxime nemo molestias eaque, ea autem cum incidunt sint dolorum nam ratione quasi deleniti qui adipisci ut odit assumenda itaque aliquam, dignissimos nobis natus accusantium ipsam! Sunt dolores aperiam blanditiis tenetur, itaque cupiditate asperiores iusto debitis nostrum sequi commodi ipsa doloremque doloribus alias animi soluta architecto ab consectetur dolor iure sapiente ut reiciendis v
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dis-Agree</button>
        <button type="button" class="btn btn-primary">Agree</button>
      </div>
    </div>
  </div>
</div>





</form>






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