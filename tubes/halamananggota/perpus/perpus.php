<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Anda login terlebih dahulu!');
            document.location.href = '../../index.php';
        </script>";
    exit;
}

require '../../config/functions.php';

$kategori = query("SELECT * FROM tbl_kategori");

$id = $_SESSION['id'];

// jika tombol kategori ditekan
if (isset($_GET['id']) != "") {
    $jumlahDataPerHalaman = 2;
    $jumlahData = count(query("SELECT * FROM tbl_buku NATURAL JOIN tbl_kategori WHERE id_kategori = '$_GET[id]'"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    $tabelbuku = query("SELECT * FROM tbl_buku NATURAL JOIN tbl_kategori WHERE id_kategori = '$_GET[id]' LIMIT $awalData, $jumlahDataPerHalaman");
} else {
    $jumlahDataPerHalaman = 3;
    $jumlahData = count(query("SELECT * FROM tbl_buku NATURAL JOIN tbl_kategori"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    $tabelbuku = query("SELECT * FROM tbl_buku NATURAL JOIN tbl_kategori LIMIT $awalData, $jumlahDataPerHalaman");
}



$id = $_SESSION['id'];

// jika tombol cari ditekan
if (isset($_POST["cari"]) && $_POST["keyword"] != "") {
    $keyword = $_POST["keyword"];
    $tabelbuku = caribuku($keyword);
}
// else {
//     $tabelbuku = query("SELECT * FROM tbl_buku NATURAL JOIN tbl_kategori LIMIT $awalData, $jumlahDataPerHalaman");
// }


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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Core-->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Css saya -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/search.css">
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
                            <a class="nav-link" href="#">Perpustakaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../blog/blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../galeri/galeri.php">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../dashboardadmin/dashboardanggota/index.php">Dashboard</a>
                        </li>
                    </ul>
                    <div class="col-md-3 text-end">
                        <a class="btn btn-outline-primary me-2" href="../../login/logout.php">Keluar</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Perpus-->
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Perpustakan Online VAN TECH</h1>
                    <p class="lead mb-0">Menyediakan Kumpulan Buku - Buku Terkait Dunia Teknologi.</p>
                </div>
                <!-- Search widget-->
                <form action="" method="post">
                    <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-5">
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control" placeholder="mau cari buku apa ?..." id="keyword" name="keyword">
                                <button class="btn btn-primary" type="submit" name="cari" id="tombol-cari">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Blog post-->
                            <?php foreach ($tabelbuku as $buku) : ?>
                                <div class="card mb-3" style="max-width: 750px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../../dashboardadmin/img/<?= $buku['gambar']; ?>" class="img-fluid mt-4" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bold"><?= $buku['nama_buku']; ?></h5>
                                                <p class="card-text"><?= $buku['body_buku']; ?></p>
                                                <a href="https://drive.google.com/drive/folders/15bYjqnemUzXtagUC7oiFirtCmfktPQc-?usp=sharing" target="blank" class="btn btn-primary badge">Unduh PDF disini</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Pagination-->
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
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Kategori</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-auto">
                                    <ul class="list-unstyled mb-0">
                                        <li class="badge bg-primary bg-gradient rounded-pill mb-2"><a href="perpus.php" class="text-light text-decoration-none">Semua</a></li>
                                        <?php foreach ($kategori as $k) : ?>
                                            <li class="badge bg-primary bg-gradient rounded-pill mb-2"><a href="perpus.php?id=<?= $k['id_kategori']; ?>" class="text-light text-decoration-none"><?= $k['nama_kategori']; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tombol back top top -->
                <div class="col-12 text-end mb-3 pb-3">
                    <a href="#" class="btn btn-primary btn-lg" id="back-to-top">
                        <i class="bi bi-arrow-up-square-fill"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Akhir Perpus -->

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Core theme JS-->
        <script src="../../assets/js/scripts.js"></script>
</body>

</html>