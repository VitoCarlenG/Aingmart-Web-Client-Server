<?php
    include '../component/sidebar.php'

?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #000000; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
<?php
    include('../db.php');

    $email=$_SESSION['useremail'];

    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $query = mysqli_query($con,$sql);

    while($data = mysqli_fetch_assoc($query)) {
        echo'
        <div class="title" style="justify-content: space-between; display: flex;">
        <h4 >Profil Pengguna</h4>
        <a href="./updateProfilPenggunaPage.php?id='.$data['id'].'">
            <button type="button" class="btn btn-danger">Edit</button>
        </a>
        </div>';
    }
?>
    <div class = "pengguna">

    </div>
        <hr>
            <?php   
                include('../db.php');

                $email=$_SESSION['useremail'];
                
                $sql = "SELECT * FROM users WHERE email = '$email' ";
                $query = mysqli_query($con,$sql);

                while($data = mysqli_fetch_assoc($query)) {  
                    echo'
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Pengguna</strong>
                            <div>
                            '.$data['nama'].'
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email Pengguna</strong>
                            <div>
                            '.$data['email'].'
                            </div>
                        </div>
                    </div>
                </div>';
                }
            ?>
            
            </div>


            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>