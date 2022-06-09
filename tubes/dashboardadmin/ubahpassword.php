<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Login Terlebih Dahulu');
            document.location.href = '../../login/login.php';
        </script>
        ";
    exit;
}

require '../config/functions.php';

// // ambil data di URL
// $id = $_GET["id"];

// query data login berdasarkan id
$adm = query("SELECT * FROM tbl_login NATURAL JOIN tbl_level WHERE level = 'admin'")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak

    if (ubahpassword($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'profileadmin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'profileadmin.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Admin - VAN TECH</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap Core-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Css saya -->
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Form Registrasi center  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <div class="card shadow-lg">
                    <div class="fw-bolder fs-4 card-header text-center bg-primary text-light">Form Ubah Password - VAN TECH</div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $_SESSION['id']; ?>">
                            <div class="form-group row mb-3">
                                <label for="password_lama" class="col-md-4 col-form-label text-md-right">Password Lama</label>
                                <div class="col-md-8">
                                    <input type="password" id="password_lama" class="form-control" name="password_lama" placeholder="masukkan password lama" required autofocus value="">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="password_baru" class="col-md-4 col-form-label text-md-right">Password Baru</label>
                                <div class="col-md-8">
                                    <input type="password" id="password_baru" class="form-control" name="password_baru" placeholder="masukkan password baru" required autofocus value="">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="konfirm_password" class="col-md-4 col-form-label text-md-right">Konfirmasi Password </label>
                                <div class="col-md-8">
                                    <input type="password" id="konfirm_password" class="form-control" name="konfirm_password" placeholder="masukkan konfirmasi password" required value="">
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto py-3">
                                <button class="btn btn-primary" name="ubah">Ubah Password Anggota</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/previewimg.js"></script>

</html>