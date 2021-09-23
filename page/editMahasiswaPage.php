<?php
    include '../component/sidebar.php'
    
?>

<?php
    if(isset($_GET['id'])) {
        include '../db.php';
        
        $id=$_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM users WHERE id=$id") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >EDIT MAHASISWA</h4>
        <hr>
        <form action="../process/editMahasiswaProcess.php" method="post">
            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $data['name']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NPM</label>
                <input class="form-control" id="npm" name="npm" aria-describedby="emailHelp" value="<?php echo $data['npm'] ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prodi</label>
                <select class="form-select" aria-label="Default select example" name="prodi" id="prodi">
                    <?php
                        if($data['prodi']=="Informatika") {
                            echo '<option selected value="Informatika">'.$data['prodi'].'</option>';
                            echo '<option value="Sistem Informasi">Sistem Informasi</option>';
                            echo '<option value="Industri">Industri</option>';
                        }
                        else if($data['prodi']=="Sistem Informasi") {
                            echo '<option value="Informatika">Informatika</option>';
                            echo '<option selected value="Sistem Informasi">'.$data['prodi'].'</option>';
                            echo '<option value="Industri">Industri</option>';
                        }
                        else {
                            echo '<option value="Informatika">Informatika</option>';
                            echo '<option value="Sistem Informasi">Sistem Informasi</option>';
                            echo '<option selected value="Industri">'.$data['prodi'].'</option>';
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?php echo $data['username'] ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="edit">Edit Mahasiswa</button>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>