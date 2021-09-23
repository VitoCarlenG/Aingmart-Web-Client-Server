<?php
    if(isset($_POST['edit'])){

        include('../db.php');

        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $npm = $_POST['npm'];
        $prodi = $_POST['prodi'];

        $query = mysqli_query($con, "UPDATE users SET username='$username', password='$password', name='$name', npm='$npm', prodi='$prodi' WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo
                '<script>alert("Edit Data Success"); window.location = "../page/listMahasiswaPage.php"</script>';
        }else{
            echo
                '<script>alert("Edit Data Failed");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>