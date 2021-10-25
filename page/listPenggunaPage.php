<?php
    include '../component/sidebarAdmin.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #000000; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="title" style="justify-content: space-between; display: flex;">
            <h4 >Daftar Pengguna</h4>
            <a href="./createPenggunaPage.php">
            <button type="button" class="btn btn-danger">Tambah</button>
            </a>
        </div>
        
        <hr>
            <table class="table">
            <thead>
                <tr>
                <th scope="col" style="padding-left: 70px">No</th>
                <th scope="col" style="padding-left: 100px">Nama</th>
                <th scope="col" style="padding-left: 100px">Email</th>
                <th scope="col" style="padding-left: 100px">Status</th>
                <th scope="col" style="padding-left: 70px">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM users WHERE id>0") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak Ada Data Pegawai </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row" style="padding-left: 70px">'.$no.'</th>
                            <td style="padding-left: 100px">'.$data['nama'].'</td>
                            <td style="padding-left: 100px">'.$data['email'].'</td>';
                            
                            if($data['is_verified']==0) {
                                echo '<td style="padding-left: 100px">Belum Terverifikasi</td>';
                            } else {
                                echo '<td style="padding-left: 100px">Terverifikasi</td>';
                            }
                            
                            echo '
                            <td>

                                <a href="./updatePenggunaPage.php?id='.$data['id'].'">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="../process/deletePenggunaProcess.php?id='.$data['id'].'"
                                    onClick="return confirm ( \'Apakah Anda Yakin Ingin Menghapus Data Pengguna Ini?\')">
                                    <button type="button" class="btn btn-secondary">Hapus</button>
                                </a>
                            </td>
                        </tr>';
                    $no++;
                    }
                }
            ?>
            </tbody>
            </table>
    </div>
    </aside>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>