<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM users WHERE id='$id'") or die(mysqli_error($con));
        if($queryDelete){
            echo
            '<script>
            alert("Hapus Pengguna Berhasil"); window.location = "../page/listPenggunaPage.php"
            </script>';

        }else{
            echo
            '<script>
            alert("Hapus Pengguna Gagal"); window.location = "../page/listPenggunaPage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>