<?php


if ($_POST['type'] == "Student" ) {
    


$method = $_SERVER['REQUEST_METHOD'];



$showError = "false";
if ($method == 'POST') {
// echo $method;
include '_connect_to_database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from `students` where  `username`='$username'";

$result = mysqli_query($con, $sql);

$numRows = mysqli_num_rows($result);



if ($numRows == 1) {
    

    $row = mysqli_fetch_assoc($result);

        $stdid = $row['std_id'];


            if (password_verify($password, $row['password'])) {
            
            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['stdid'] = $stdid;

            // echo $username. "  ". $stdid ." you are logged in";
            header("location:/hostelguru/index.php");
            
        }else {
            
            echo "Error";
            header("location:/hostelguru/index.php");
            
        }
         

        


    // echo "You are logged in successfully";
}else {
    
}







}

}else if ($_POST['type'] == "Hostel Owner" ) {
    


$method = $_SERVER['REQUEST_METHOD'];



$showError = "false";
if ($method == 'POST') {
// echo $method;
include '_connect_to_database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from `hostel_owner` where username='$username'";

$result = mysqli_query($con, $sql);

$numRows = mysqli_num_rows($result);



if ($numRows == 1) {
    

    $row = mysqli_fetch_assoc($result);

        $hostelownerid = $row['hostel_owner_id'];


            if (password_verify($password, $row['password'])) {
            
            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['hostel_owner_id'] = $hostelownerid;

            // echo $username. "  ". $hostelownerid ." you are logged in";
            header("location:/hostelguru/index.php");
            
        }else {
            
            
            header("location:/hostelguru/index.php");
            
        }
         

        


    // echo "You are logged in successfully";
}else {
    
}







}

}

?>