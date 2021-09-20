<?php
    $host="localhost";
    $user="root";
    $pass="";
    $name="GD4_10181_B";

    $con=mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>