

<?php


if ($_POST['type'] == "Student" ){
    


$method = $_SERVER['REQUEST_METHOD'];

echo $method;
$showError = "false";
if ($method == 'POST') {
// echo $method;
include '_connect_to_database.php';

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$emailExistsql = "select * from `students` where `email` = '$email'";

$result = mysqli_query($con, $emailExistsql);

$numRows = mysqli_num_rows($result);


if ($numRows > 0) {
    $showError = "This email already exist";

}else {
    if ($password == $cpassword) {
        
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `students` ( `first_name`, `last_name`, `gender` , `username`, `password`, `accound_type`, `email`, `phone`) VALUES ('$firstName ', '$lastName', '$gender' , '$username', '$hash', '$type', '$email', '$phone');";

        $results = mysqli_query($con , $sql);
        // echo $results;

        if ($results) {
            $showAlert = true;
            header("location:/hostelguru/index.php?signupsuccess=true");
            exit();
        }
        
        
        
        
    }else {
        $showError = "Password don't match";
        
    }
    header("location:/hostelguru/index.php?signupsuccess=false&showError=$showError");
}





}

}

if ($_POST['type'] == "Hostel Owner" ){
    


$method = $_SERVER['REQUEST_METHOD'];

// echo $method;
$showError = "false";
if ($method == 'POST') {
// echo $method;
include '_connect_to_database.php';

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$emailExistsql = "select * from `hostel_owner` where `email` = '$email'";

$result = mysqli_query($con, $emailExistsql);

$numRows = mysqli_num_rows($result);


if ($numRows > 0) {
    $showError = "This email already exist";

}else {
    if ($password == $cpassword) {
        
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `hostel_owner` ( `first_name`, `last_name`, `username`, `email`, `phone`, `password`, `type`, `created`) VALUES ('$firstName', '$lastName', '$username', '$email', '$phone', '$hash', '$type', current_timestamp());";

        $results = mysqli_query($con , $sql);
        // echo $results;

        if ($results) {
            $showAlert = true;
            header("location:/hostelguru/index.php?signupsuccess=true");
            exit();
        }
        
        
        
        
    }else {
        $showError = "Password don't match";
        
    }
    header("location:/hostelguru/index.php?signupsuccess=false&showError=$showError");
}





}

}

?>