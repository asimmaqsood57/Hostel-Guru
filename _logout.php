<?php


session_start();




echo "loging you out please wait...";

session_destroy();

header("location:/hostelguru/index.php")


?>