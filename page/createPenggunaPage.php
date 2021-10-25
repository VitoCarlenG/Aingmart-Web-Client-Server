<?php
    include '../component/sidebarAdmin.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #000000; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="title" style="justify-content: space-between; display: flex;">
        <h4 >Tambah Pengguna</h4>
        <img src="../resources/Slogan.png" alt="Harga Pas, Hati Senang" style="width: 225px;">
    </div>
        <hr>
        <form action="../process/createPenggunaProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
                <input class="form-control" id="nama" name="nama" placeholder="Nama Pengguna" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <div class="d-grid gap-2">
                <div class="button">
                    <center>
                    <button type="submit" class="btn btn-danger" name="create">Tambah Pengguna</button>
                    <center>
                </div>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>