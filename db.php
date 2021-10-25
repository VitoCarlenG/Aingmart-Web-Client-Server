<?php
    $host="localhost";
    $user="aingmart_aingmart";
    $pass="pandemi_789";
    $name="aingmart_aingmart";

    $con=mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>