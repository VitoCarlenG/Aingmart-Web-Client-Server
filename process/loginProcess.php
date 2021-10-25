<?php
    require ('../verifemail/config.php');
    
    if(empty($_POST["email"]) && empty($_POST["password"])) {
        echo"
            <script type='text/javascript'>
                alert('Email and Password is required');
            </script>
            <script>
            window.location = '../page/loginPage.php'
            </script>";
    }else if(empty($_POST["email"])) {
         echo"
            <script type='text/javascript'>
                alert('Email is required');
            </script>
            <script>
            window.location = '../page/loginPage.php'
            </script>";
    }else if(empty($_POST["password"])) {
        echo"
            <script type='text/javascript'>
                alert('Password is required');
            </script>
            <script>
            window.location = '../page/loginPage.php'
            </script>";
    } else {
            $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email = '$email'";
    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) == 0 ){
        echo
            '<script>alert("Email not found!"); window.location = "../page/loginPage.php"</script>';
    }else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){

            if($user['is_verified']==1){
                if($user['email']=="admin") {
                    session_start();
                    $_SESSION['isLoginAdmin'] = true;
                    $_SESSION['isLogin'] = false;
                    $_SESSION['user'] = $user;
                    $_SESSION['useremail'] = $email;
                    echo
                    '<script>alert("Login Success as admin"); window.location = "../page/dashboardAdminPage.php"</script>';
                }
                else {
                    session_start();
                    $_SESSION['isLogin'] = true;
                    $_SESSION['isLoginAdmin'] = false;
                    $_SESSION['user'] = $user;
                    $_SESSION['useremail'] = $email;
                    echo
                    '<script>alert("Login Success as '.$user['nama'].'"); window.location = "../page/dashboardPenggunaPage.php"</script> ';
                }
            }
            else {
                echo
                '<script>alert("Email Akun Ini Belum Terverifikasi"); window.location = "../page/loginPage.php"</script>'; 
            }
        }else {
            echo
            '<script>alert("Password Salah"); window.location = "../page/loginPage.php"</script>';
        }
    }
    }

?>