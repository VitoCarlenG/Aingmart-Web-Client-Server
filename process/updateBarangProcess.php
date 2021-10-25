<?php
    if(isset($_POST['update'])){

        include('../db.php');

        $id = $_POST['id'];
        
        if(empty($_POST["nama"]) && empty($_POST["stok"]) && empty($_POST["harga"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama, Stok, and Harga is required');
            </script>
            <script>
            window.location = '../page/updateBarangPage.php?id=$id'
            </script>";
        } else if(empty($_POST["nama"]) && empty($_POST["stok"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama and Stok is required');
            </script>
            <script>
            window.location = '../page/updateBarangPage.php?id=$id'
            </script>";
        } else if(empty($_POST["nama"]) && empty($_POST["harga"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama and Harga is required');
            </script>
            <script>
            window.location = '../page/updateBarangPage.php?id=$id'
            </script>";
        }else if(empty($_POST["stok"]) && empty($_POST["harga"])) {
            echo"
            <script type='text/javascript'>
                alert('Stok and Harga is required');
            </script>
            <script>
            window.location = '../page/updateBarangPage.php?id=$id'
            </script>";
        }else if(empty($_POST["nama"])) {
            echo"
            <script type='text/javascript'>
                alert('Nama is required');
            </script>
            <script>
            window.location = '../page/updateBarangPage.php?id=$id'
            </script>";
        }else if(empty($_POST["stok"])) {
            echo"
            <script type='text/javascript'>
                alert('Stok is required');
            </script>
            <script>
            window.location = '../page/updateBarangPage.php?id=$id'
            </script>";
        }else if(empty($_POST["harga"])) {
            echo"
            <script type='text/javascript'>
                alert('Harga is required');
            </script>
            <script>
            window.location = '../page/updateBarangPage.php?id=$id'
            </script>";
        }else {
                $nama = $_POST['nama'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        $query = mysqli_query($con, "UPDATE barang SET nama='$nama', stok='$stok', harga='$harga' WHERE id='$id'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Edit Barang Berhasil"); window.location = "../page/listBarangPage.php"</script>';
        }else{
            echo
                '<script>alert("Edit Barang Gagal"); window.location = "../page/listBarangPage.php"</script>';
        }
        }
        
    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>