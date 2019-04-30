<?php
$host = "localhost";
$user = "hostingadmin_suntek";
    $password = "Daily-Life-Tech@123";
    $db_name = "hostingadmin_globalsurveyscenter";
    $conn = mysqli_connect($host, $user, $password,$db_name);
    if(!$conn){
        die("could not connect : " . mysqli_error());
    }?>