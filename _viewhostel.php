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
<style>

.booknow{

    text-decoration: none;
    color: white;
}

.booknow:hover{

    color: white;
}
.feedback {
  background-color : #198754;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border:3px solid;
  animation-name: btn;
  animation-duration: 2s;

  animation-iteration-count: infinite;
}

@keyframes btn {

    0%{

       border-left-color:red;
       border-right-color:red;
       border-top-color:red;
       border-bottom-color:red;


    }

    25%{

        border-left-color:green;
       border-right-color:yellow;
       border-top-color:red;
       border-bottom-color:blue;


    }

    50%{

        border-left-color:red;
       border-right-color:green;
       border-top-color:blue;
       border-bottom-color:yellow;


    }

    
}

#mybutton {
  position: fixed;
  bottom: 16px;
  right: 25px;
  transition: 3s;
}

#mybutton:hover{

transform: rotate(360deg);
background-color: red;
}
</style>
    <title>Hostel Guru</title>
</head>

<body>

    <?php

    include '_navbar.php';

    ?>






    <?php
    $id = $_GET['hostelid'];



    echo '
                    <div class="container my-5">
                        <div class="row my-4">
                            <div class="col-sm">
                                <h3 class="text-center my-3">Images</h3>
                
                                <img src="https://source.unsplash.com/500x500/?hostel" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm ">
                                <h3 class="text-center my-3">Hostel Details</h3>
                
                
                                
                                ';
    // echo var_dump($result);
    $sql = "SELECT * FROM `hostels` WHERE `hostel_id` = '$id'";
    $result = mysqli_query($con, $sql);


    while ($row = mysqli_fetch_assoc($result)) {



        $hostelname = $row['hostel_name'];
        $hostelowner = $row['hostel_owner'];
        $hosteldesc = $row['description'];
        $hostelprice = $row['price'];
        $hosteladdress = $row['hostel_address'];
        $hostelphone = $row['hostel_phone'];



        echo '
                
                    
                    <p > <b>Hostel Name : </b> </p>
                     <p >  ' . $hostelname . '</p>  
                    <p > <b>Owned by : </b> </p>
                     <p >  ' . $hostelowner . '</p>  
                    <p > <b>Hostel Address : </b> </p>
                     <p >  ' . $hosteladdress . '</p>  
                    <p > <b>Hostel Contact : </b> </p>
                     <p >  ' . $hostelphone . '</p>  
                    <p > <b>Hostel Price : </b> </p>
                     <p >  ' . $hostelprice . '</p>  
                
                    
                    <p > <b>Hostel Description : </b> </p>
                     <p >  ' . $hosteldesc . '</p>  
                 
                    
                   
                    </div>
                    
                    <h3 class="text-center my-3">Comments</h3>
                    ';
    }





    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'POST') {
        //inserting thread into db

        $content = $_POST['comment'];
        $content = str_replace("<", "&lt;", $content);
        $content = str_replace(">", "&gt;", $content);
        $commentby = $_POST['stdid'];


        $stdid = $_POST['stdid'];

        $sql = "INSERT INTO `comments` ( `coment_content`, `hostel_id`, `comment_by`, `comment_time`) VALUES ('$content', '$id', '$commentby', current_timestamp());";

        $result = mysqli_query($con, $sql);

        $showAlert = true;
    }












    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {



        echo '
                
                
                            <div class="col-sm">
                
                
                
                                <form action="' . $_SERVER['REQUEST_URI'] . '" method="POST">
                
                                    <label for="" class="form-label">Post a Comment</label>
                                    <textarea name="comment" class="form-control" id="" cols="30" rows="5"></textarea>
                
                                    <input type="hidden" class="form-control" value="' . $_SESSION["stdid"] . '"  id="title" name="stdid" aria-describedby="emailHelp">                
                                    <button type="submit" class="btn btn-primary my-3">Post Comment</button>
                                </form>
                                </div>






                                </div>
                                  
                ';
    } else {

        echo '

  <h2 class="my-3 text-center">You are not logged in yet. Please login to write a comment</h2>
  

  </div>
    
    
  </div>







   ';
    }





    $sql = "SELECT * FROM `comments` WHERE `hostel_id` = $id";


    $results = mysqli_query($con, $sql);
    $noResult = true;

    while ($row = mysqli_fetch_assoc($results)) {
        $noResult = false;

        $commentid = $row['comment_id'];
        $content = $row['coment_content'];

        $time = $row['comment_time'];
        $commentby = $row['comment_by'];


        $sql2 = "SELECT * FROM `students` WHERE std_id = '$commentby'";
        $result2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_assoc($result2);




        echo '
                    <div class="media my-3 " style="display: flex;">
                        <img src="defaultuser.png" width="60px" height="60px" class="m-2 " alt="...">
                        <div class="media-body">
                            <h5 class="m-1"><b>' . $row2['username'] . '</b></h5> 
    
                            <p class="pl-2">
                                ' . $content . '
                            </p>
                        </div>
                    </div>
                </div>
                    
    
        
    
    
    
    
    
    
    
        
    ';
    }


    if ($noResult) {
        echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="display-6">No 
      Comments Found.</p>
      <p class="lead">Be the first person to write a comment.</p>
    </div>
    </div>
    
    
    </div>
            
    
    
    
    
    
    </div>
    ';
    }






    ?>


<?php

echo '<div id="mybutton">



<button class="feedback"><a class="booknow" href="_bookhostel.php?hostelid='.$id.'">Book Now</a> </button>
</div>
';

?>

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