<?php

$server = "localhost";
$username = "root";
$password = "";

$database = "hostelguru";

$con = mysqli_connect($server , $username , $password, $database);

if ($con) {
    // echo "connetion was successful";
}else {
    echo "There is a problem " . mysqli_errno($con);
}






?>