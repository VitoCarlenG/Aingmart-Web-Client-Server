<?php
 include '../component/sidebar.php';


$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * from users where id='$id'");
$data = mysqli_fetch_assoc($query);


?>

<div id="dashboardTab" class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #000000; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div class="title" style="justify-content: space-between; display: flex;">
        <h4 >Edit Profil Pengguna</h4>
        <img src="../resources/Slogan.png" alt="Harga Pas, Hati Senang" style="width: 225px;">
    </div>
    <hr>
        <form action="../process/updateProfilPenggunaProcess.php" method="post">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pengguna</label>
                <div class="control">
                    <input name="nama" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Nama Pengguna" value="<?php echo $data['nama']; ?>">
                </div>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
                <div class="control">
                    <input name="password" class="form-control" id="exampleFormControlInput1" type="password" placeholder="Password">
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-dark" name="update">Edit Profil Pengguna</button>
            </div>

            <div class="visually-hidden">
                <label class="label">ID Pengguna</label>
                <div class="control">
                    <input type="hidden" name="id" class="input" type="number" placeholder="ID" value="<?php echo $data['id']; ?>">
                </div>
            </div>
        </form>
    </div>
</div>
</section>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
