<?php
    require ('./verifemail/config.php');

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM users where verif_code = '$code'";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0){
            $user = mysqli_fetch_assoc($query);
            $id = $user['id'];
            $sql =  "UPDATE users set is_verified=1 where id=$id";
            $query = mysqli_query($con,$sql);
            if($query){
                echo
                '<script>alert("Email Verification Success"); window.location = "index.php"</script>';
            }else{
                echo
                '<script>alert("Email Verification Fail"); window.location = "index.php"</script>';
            }
        }else {
            echo "Verification Code Is Not VALID";
        }
    }else {
        echo
            '<script>alert("Unknown Error"); window.location = "index.php"</script>';
    }

?>