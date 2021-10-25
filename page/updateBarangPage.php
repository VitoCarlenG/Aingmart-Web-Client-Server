<?php
 include '../component/sidebarAdmin.php';


$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * from barang where id='$id'");
$data = mysqli_fetch_assoc($query);


?>

<div id="dashboardTab" class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #000000; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div class="title" style="justify-content: space-between; display: flex;">
        <h4 >Edit Barang</h4>
        <img src="../resources/Slogan.png" alt="Harga Pas, Hati Senang" style="width: 225px;">
    </div>
    <hr>
        <form action="../process/updateBarangProcess.php" method="post">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                <div class="control">
                    <input name="nama" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Nama Barang" value="<?php echo $data['nama']; ?>">
                </div>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stok Barang</label>
                <div class="control">
                    <input name="stok" class="form-control" id="exampleFormControlInput1" type="number" placeholder="Jumlah Stok" value="<?php echo $data['stok']; ?>">
                </div>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga Barang</label>
                <div class="control">
                    <input name="harga" class="form-control" id="exampleFormControlInput1" type="number" placeholder="Harga Barang" value="<?php echo $data['harga']; ?>">
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-dark" name="update">Edit Barang</button>
            </div>

            <div class="visually-hidden">
                <label class="label">ID Barang</label>
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
