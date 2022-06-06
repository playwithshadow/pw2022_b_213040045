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

// pagination
// konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM tbl_login NATURAL JOIN tbl_level WHERE level = 'admin'"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="../../assets/img/logo.png" />

    <title>Tabel Admin - Admin</title>

    <!-- Core CSS -->
    <link href="../css/app.css" rel="stylesheet" />

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Boostrap 5 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
</head>

<body>
    <!-- Navbar Sebelah Kiri -->
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" style="text-decoration: none" href="#">
                    <span class="align-middle">Van Technology</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">Pages</li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../index.php">
                            <i class="align-middle" data-feather="home"></i>
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../profileadmin.php">
                            <i class="align-middle" data-feather="user"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-header">Tabel</li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="tabeladmin.php">
                            <i class="align-middle" data-feather="database"></i>
                            <span class="align-middle">Tabel Admin</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../tabelanggota/tabelanggota.php">
                            <i class="align-middle" data-feather="database"></i>
                            <span class="align-middle">Tabel Anggota</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../tabelbuku/tabelbuku.php">
                            <i class="align-middle" data-feather="database"></i>
                            <span class="align-middle">Tabel Buku</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Navbar Ujung kanan -->
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-sm-inline-block " href="#" data-bs-toggle="dropdown">
                                <img src="../img/<?= $tbladmin['gambar']; ?>" class="avatar img-fluid rounded-circle me-1 mx-1" />
                                <span class="text-dark"><?= $tbladmin['nama']; ?></span>
                                <i class="align-end" data-feather="settings"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="../profileadmin.php">
                                    <i class="align-middle me-1" data-feather="user"></i>Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../login/logout.php">
                                    <i class="align-middle me-1" data-feather="log-out"></i>Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">Tabel Admin - <?= $tbladmin['nama']; ?></h1>
                    <a href="tambahadmin.php" class="btn btn-primary mb-3">[+]Tambah Data Admin</a>
                </div>

                <!-- Search widget-->
                <div class="card col-5">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="keyword" id="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="cari" id="tombol-cari">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>

                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Level</th>
                            <th scope="col">Aksi</th>
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
                                <td>
                                    <a href="ubahadmin.php?id=<?= $admin['id']; ?>" class="btn badge bg-primary">Ubah</a>
                                    <a href="hapusadmin.php?id=<?= $admin["id"]; ?>" onclick="return confirm('Apakah data ini benar akan dihapus?')" class="btn badge bg-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </main>

            <!-- navigasi pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center pb-5">
                    <?php if ($halamanAktif > 1) : ?>
                        <li class="page-item">
                            <a class="page-link text-decoration-none" href="?halaman=<?= $halamanAktif - 1; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if ($i == $halamanAktif) : ?>
                            <li class="page-item active"><a class="page-link text-decoration-none" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                        <?php else : ?>
                            <li class="page-item"><a class="page-link text-decoration-none" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                        <li class="page-item">
                            <a class="page-link text-decoration-none" href="?halaman=<?= $halamanAktif + 1; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto">
                            <div class="small m-0 text-dark">
                                Copyright &copy; 2022 &middot; Tubes &middot; Muhamad Rivan Sahronie
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <a class="link-dark btn btn-secondary" href="https://www.instagram.com/rivaann_/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-dark btn btn-secondary" href="https://github.com/rivaannn" target="_blank"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="../js/app.js"></script>
    <script src="../js/ajax2.js"></script>
</body>

</html>