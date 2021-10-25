<?php
    if(isset($_POST['update'])){

        include('../db.php');

        $id = $_POST['id'];
        
        if(empty($_POST["nama"]) && empty($_POST["password"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama and Password is required');
            </script>
            <script>
            window.location = '../page/updatePenggunaPage.php?id=$id'
            </script>";
        }else if(empty($_POST["nama"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama is required');
            </script>
            <script>
            window.location = '../page/updatePenggunaPage.php?id=$id'
            </script>";
        }else if(empty($_POST["password"])) {
            echo"
            <script type='text/javascript'>
                alert('Password is required');
            </script>
            <script>
            window.location = '../page/updatePenggunaPage.php?id=$id'
            </script>";
        } else {
                $nama = $_POST['nama'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = mysqli_query($con, "UPDATE users SET nama='$nama', password='$password' WHERE id='$id'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Edit Pengguna Berhasil"); window.location = "../page/listPenggunaPage.php"</script>';
        }else{
            echo
                '<script>alert("Edit Pengguna Gagal"); window.location = "../page/listPenggunaPage.php"</script>';
        }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>