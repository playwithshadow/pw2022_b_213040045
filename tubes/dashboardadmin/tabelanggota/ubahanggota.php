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

require '../../config/functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data login berdasarkan id
$adm = query("SELECT * FROM tbl_login WHERE id = $id")[0];
// print_r($adm);
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'tabelanggota.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'tabelanggota.php';
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
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Css saya -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Form Registrasi center  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <div class="card shadow-lg">
                    <div class="fw-bolder fs-4 card-header text-center bg-primary text-light">Form Ubah - VAN TECH</div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $adm["id"]; ?>">
                            <input type="hidden" name="gambarLama" value="<?= $adm["gambar"]; ?>">
                            <div class="form-group row mb-3">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                                <div class="col-md-8">
                                    <input type="text" id="nama" class="form-control" name="nama" placeholder="masukkan nama" required autofocus value="<?= $adm['nama']; ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-8">
                                    <input type="text" id="username" class="form-control" name="username" placeholder="masukkan username" required autofocus value="<?= $adm['username']; ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="masukkan email" required value="<?= $adm['email']; ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="gambar" class="col-md-4 col-form-label text-md-right">Gambar</label>
                                <div class="col-md-8">
                                    <img class="mb-2" src="../img/<?= $adm['gambar']; ?>" alt="" width="100px">
                                    <input type="file" id="gambar" class="form-control" name="gambar" value="<?= $adm['gambar']; ?>">
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto py-3">
                                <button class="btn btn-primary" name="ubah">Ubah Data Admin</button>
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
<script src="../../assets/js/scripts.js"></script>

</html>