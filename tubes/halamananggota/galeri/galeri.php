<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Anda harus login terlebih dahulu!');
            document.location.href = '../../index.php';
        </script>";
    exit;
} elseif ($_SESSION["login"] != true) {
    echo "<script>
            alert('Anda harus login terlebih dahulu!');
            document.location.href = '../../indexanggota.php';
        </script>";
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>VAN TECH</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap Core-->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Css saya -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="css/lightbox.css" rel="stylesheet" />

    <!-- Lighbox Fitur -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg">
            <div class="container px-5">
                <img src="../../assets/img/logo.png" alt="" width="40" height="40" />
                <a class="navbar-brand" href="../../indexanggota.php">VAN TECHNOLOGY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../../indexanggota.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../perpus/perpus.php">Perpustakaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../blog/blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../dashboardadmin/dashboardanggota/index.php">Dashboard</a>
                        </li>
                    </ul>
                    <div class=" col-md-3 text-end">
                        <a class="btn btn-outline-primary me-2" href="../../login/logout.php">Keluar</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Galeri -->
        <div class="photo-gallery">
            <div class="container py-5">
                <div class="intro pt-lg-5">
                    <h2 class="display-5 text-center">Galeri VanTech</h2>
                    <p class="text-center">Kumpulan foto -foto tentang teknologi. </p>
                </div>
                <div class="row photos">
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/laptop1.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/laptop1.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/laptop2.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/laptop2.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/laptop3.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/laptop3.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/laptop4.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/laptop4.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/hp1.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/hp1.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/hp2.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/hp2.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/hp3.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/hp3.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/hp4.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/hp4.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/keyboard1.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/keyboard1.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/keyboard2.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/keyboard2.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/keyboard3.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/keyboard3.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/keyboard4.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/keyboard4.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/cam1.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/cam1.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/cam2.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/cam2.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/cam3.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/cam3.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="img/cam4.jpg" data-lightbox="photos">
                            <img class="img-fluid shadow-lg" src="img/cam4.jpg">
                        </a>
                    </div>
                </div>
                <!-- tombol back top top -->
                <div class="col-12 text-end mt-3 pt-3">
                    <a href="#" class="btn btn-primary btn-lg" id="back-to-top">
                        <i class="bi bi-arrow-up-square-fill"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Akrhir Galeri -->

        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0 text-white">
                            Copyright &copy; 2022 &middot; Tubes &middot; Muhamad Rivan
                            Sahronie
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <a class="link-light btn btn-outline-secondary" href="https://www.instagram.com/rivaann_/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light btn btn-outline-secondary" href="https://github.com/rivaannn" target="_blank"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Script JS Lightbox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>