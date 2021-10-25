<?php
    if(isset($_POST['create'])){

        include('../db.php');
        
        if(empty($_POST["nama"]) && empty($_POST["stok"]) && empty($_POST["harga"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama, Stok, and Harga is required');
            </script>
            <script>
            window.location = '../page/createBarangPage.php'
            </script>";
        } else if(empty($_POST["nama"]) && empty($_POST["stok"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama and Stok is required');
            </script>
            <script>
            window.location = '../page/createBarangPage.php'
            </script>";
        } else if(empty($_POST["nama"]) && empty($_POST["harga"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama and Harga is required');
            </script>
            <script>
            window.location = '../page/createBarangPage.php'
            </script>";
        }else if(empty($_POST["stok"]) && empty($_POST["harga"])) {
            echo"
            <script type='text/javascript'>
                alert('Stok and Harga is required');
            </script>
            <script>
            window.location = '../page/createBarangPage.php'
            </script>";
        }else if(empty($_POST["nama"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama is required');
            </script>
            <script>
            window.location = '../page/createBarangPage.php'
            </script>";
        }else if(empty($_POST["stok"])) {
            echo"
            <script type='text/javascript'>
                alert('Stok is required');
            </script>
            <script>
            window.location = '../page/createBarangPage.php'
            </script>";
        }else if(empty($_POST["harga"])) {
            echo"
            <script type='text/javascript'>
                alert('Harga is required');
            </script>
            <script>
            window.location = '../page/createBarangPage.php'
            </script>";
        }else {
                $nama = $_POST['nama'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        $query = mysqli_query($con, "INSERT INTO barang(nama, stok, harga) VALUES ('$nama', '$stok', '$harga')") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Tambah Barang Berhasil"); window.location = "../page/listBarangPage.php"</script>';
        }else{
            echo
                '<script>alert("Tambah Barang Gagal");</script>';
        }
        }


    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>