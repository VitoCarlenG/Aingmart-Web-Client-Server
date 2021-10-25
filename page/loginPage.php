<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">

    <link rel="icon" href="../resources/A.png" type="image/ico">

    <title>Login - Aingmart</title>

</head>
<body>
        <nav class="navbar navbar-dark bg-white fixed-top">
            <div class="container">
                <a href="../index.php">
                    <img src="../resources/Aingmart.png" alt="Aingmart" style="width: 150px;">
                </a>

                <img src="../resources/Slogan.png" alt="Harga Pas, Hati Senang" style="width: 225px;">
            </div>
        </nav>

    <div class="bg-secondary text-white">
        <div class="container min-vh-100 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                <div class="card-header fw-bold">Login</div>
                <div class="card-body">
                <form action="../process/loginProcess.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input class="form-control" id="email" name="email" placeholder="Email Pengguna" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>

                    <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark" name="login">Login</button>
                            </div>
                    </form>
                    <p class="mt-2 mb-0">Belum punya akun ? <a href="./registrationPage.php" class="text-secondary">Klik Disini!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
</html>