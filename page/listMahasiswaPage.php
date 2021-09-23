<?php
    include '../component/sidebar.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >DAFTAR MAHASISWA</h4>
        <hr>
            <table class="table ">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM users") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['name'].'</td>
                            <td>'.$data['npm'].'</td>
                            <td>'.$data['prodi'].'</td>
                            <td>

                                <a href="./editMahasiswaPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                <a href="../process/deleteMahasiswaProcess.php?id='.$data['id'].'"
                                    onClick="return confirm ( \'Yakin?\')">
                                    <i style="color: red" class="fa fa-trash"></i>
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