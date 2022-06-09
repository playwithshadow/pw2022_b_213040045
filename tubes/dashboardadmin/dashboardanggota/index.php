<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Login Terlebih Dahulu');
            document.location.href = '../login/login.php';
        </script>
        ";
    exit;
}

require '../../config/functions.php';


$id = $_SESSION['id_level'];
$tblanggota = query("SELECT * FROM tbl_login NATURAL JOIN tbl_level WHERE id_level   = '$id'")[0];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="../assets/img/logo.png" />

    <title>Dashboard Anggota</title>

    <!-- Core CSS -->
    <link href="css/app.css" rel="stylesheet" />

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Boostrap 5 -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
    <!-- Navbar Sebelah Kiri -->
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" style="text-decoration: none" href="../indexanggota.php">
                    <span class="align-middle">Van Technology</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">Pages</li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="home"></i>
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="profileanggota.php">
                            <i class="align-middle" data-feather="user"></i>
                            <span class="align-middle">Profile</span>
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
                                <img src="../img/<?= $tblanggota['gambar']; ?>" class="avatar img-fluid rounded-circle me-1 mx-1" />
                                <span class="text-dark"><?= $tblanggota['nama']; ?></span>
                                <i class="align-end" data-feather="settings"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="profileanggota.php">
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
                    <h1 class="h3 mb-3">Selamat Datang, <?= $tblanggota['nama']; ?></h1>
                </div>
            </main>

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

    <script src="js/app.js"></script>
    <!-- Feather Icon JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.js" integrity="sha512-0hV9FhQc44B5NIfBhQFNBTXrrasLwG6SVxbRiaO7g6962sZV/As4btFdLxXn+brwH7feEg3+AoyQxZQaArEjVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>