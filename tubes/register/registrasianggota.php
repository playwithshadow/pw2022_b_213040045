<?php
require '../config/functions.php';

$level = query("SELECT * FROM tbl_level");

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('Anggota baru berhasil ditambahkan');
                document.location.href = '../login/login.php';
            </script>
        ";
    } else {
        echo mysqli_error(koneksi());
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi - VAN TECH</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap Core-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Css saya -->
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Form login center  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <div class="card shadow-lg">
                    <div class="fw-bolder fs-4 card-header text-center bg-primary text-light">Form Registrasi - VAN TECH</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row mb-3">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                                <div class="col-md-8">
                                    <input type="text" id="nama" class="form-control" name="nama" placeholder="masukkan nama" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-8">
                                    <input type="text" id="username" class="form-control" name="username" placeholder="masukkan username" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="masukkan password" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="password" class="form-control" name="password2" placeholder="masukkan password" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="masukkan email" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="gambar" class="col-md-4 col-form-label text-md-right">Gambar</label>
                                <div class="col-md-8">
                                    <input type="file" id="gambar" class="form-control" name="gambar">
                                </div>
                            </div>
                            <input type="hidden" name="level" value="2">
                            <div class="form-check">
                                <div class="d-grid gap-2 col-6 mx-auto py-3">
                                    <button class="btn btn-primary" name="register">Registrasi</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="assets/js/scripts.js"></script>

</html>