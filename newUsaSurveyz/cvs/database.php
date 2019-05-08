<?php
$host = "localhost";
$user = "hostingadmin_usacvs";
    $password = "Usacvs@123";
    $db_name = "hostingadmin_usacvs";
    $conn = mysqli_connect($host, $user, $password,$db_name);
    if(!$conn){
        die("could not connect : " . mysqli_error());
    }?>