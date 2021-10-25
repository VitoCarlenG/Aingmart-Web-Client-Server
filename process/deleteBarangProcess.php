<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM barang WHERE id='$id'") or die(mysqli_error($con));
        if($queryDelete){
            echo
            '<script>
            alert("Hapus Barang Berhasil"); window.location = "../page/listBarangPage.php"
            </script>';

        }else{
            echo
            '<script>
            alert("Hapus Barang Gagal"); window.location = "../page/listBarangPage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>