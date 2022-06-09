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

$id = $_SESSION['id'];

// // pagination
// // konfigurasi
// $jumlahDataPerHalaman = 5;
// $jumlahData = count(query("SELECT * FROM tbl_login NATURAL JOIN tbl_level WHERE level = 'admin'"));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$id = $_SESSION['id'];

$tbladmin = query("SELECT * FROM tbl_login NATURAL JOIN tbl_level WHERE id = '$id'")[0];


// jika tombol cari ditekan
if (isset($_POST["cari"]) && $_POST["keyword"] != "") {
    $keyword = $_POST["keyword"];
    $tabeladmin = cari($keyword);
} else {
    $tabeladmin = query("SELECT * FROM tbl_login NATURAL JOIN tbl_level WHERE level = 'admin'");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin</title>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="../../assets/img/logo.png" />

    <!-- Core CSS -->
    <link href="../css/app.css" rel="stylesheet" />

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Boostrap 5 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- Css saya -->
    <link rel="stylesheet" href="../css/print.css">


</head>

<body onload="window.print()">
    <div class="container">
        <button class="hidden btn btn-danger mt-3" onclick="window.print()">
            <i class="bi bi-journal-plus">Cetak PDF</i>
        </button>
        <h1 class="display-4 fw-bold mb-3">Data Admin</h1>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Level</th>
                    <th class="hidden" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($tabeladmin as $admin) : ?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $admin["nama"]; ?></td>
                        <td><?= $admin["username"]; ?></td>
                        <td><?= $admin["email"]; ?></td>
                        <td><img src="../img/<?= $admin['gambar']; ?>" width="75px" class="rounded-circle"></td>
                        <td><?= $admin["level"]; ?></td>
                        <td class="hidden">
                            <a href="ubahadmin.php?id=<?= $admin['id']; ?>" class="btn badge bg-primary">Ubah</a>
                            <a href="hapusadmin.php?id=<?= $admin["id"]; ?>" onclick="return confirm('Apakah data ini benar akan dihapus?')" class="btn badge bg-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="../js/app.js"></script>
    <script src="../js/ajax.js"></script>
</body>


</html>