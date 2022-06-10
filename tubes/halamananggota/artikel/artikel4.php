<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Anda login terlebih dahulu!');
            document.location.href = '../../index.php';
        </script>";
    exit;
} elseif ($_SESSION["login"] != true) {
    echo "<script>
            alert('Anda login terlebih dahulu!');
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
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg">
            <div class="container px-5">
                <img src="../assets/img/logo.png" alt="" width="40" height="40" />
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
        <!-- Post Blog -->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-9">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Apple Dikabarkan Uji Coba Iphone dengan port USB-C</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Mei 16, 2022</div>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded" src="../../assets/img/artikel4-more.jpg" alt="..." /></figure>
                            <!-- Post content-->
                            <section class="mb-5">
                                <p class="fs-5 mb-4">Kabar gembira buat kalian yang malas membawa lebih dari satu kabel pengisian daya untuk perangkat Apple dan power bank. Sebab, Apple kemungkinan besar akan meninggalkan konektor lighting yang eksklusif dan beralih ke konektor umum USB Type-C.</p>
                                <p class="fs-5 mb-4">Melansir The Verge pada Senin 16/5/2022, kabar tersebut datang dari jurnalis Bloomberg Mark Gurman dan analis industri Ming-Chi Kuo. Mereka menyebut iPhone dengan colokan USB-C paling cepat hadir pada 2023. Namun, Apple kemungkinan akan meninggalkan konektor lighting yang eksklusif dan beralih ke konektor umum USB Type-C.</p>
                                </p>
                                <p class="fs-5 mb-4">Menurut Gurman, faktor utama Apple beralih menggunakan USB Type-C adalah regulasi di Uni Eropa. Kawasan tersebut sedang menyiapkan aturan undang-undang yang mewajibkan perangkat seluler yang beredar di sana hanya menggunakan satu jenis konektor untuk pengisian daya.
                                </p>
                                <p class="fs-5 mb-4">Oleh karena itu, kabar tersebut sebenarnya tak terlalu mengejutkan. Terlebih sejak beberapa tahun belakangan, Apple sudah menggunakan USB Type-C di beberapa perangkatnya, sebut saja iPad Air, iPad Pro dan iPad Mini.
                                </p>
                                <p class="fs-5 mb-4">Sebagai catatan, konektor lightning digunakan sejak 2012, tepatnya saat Apple meluncurkan iPhone 5. Sebelumnya, Apple menggunakan konektor panjang atau konektor 30 pin yang sudah digunakan sejak 2007.
                                </p>
                                <p class="fs-5 mb-4">Di sisi lain, Apple juga dikabarkan sedang mengembangkan iPhone yang tidak memiliki colokan pengisian daya. Apple diketahui sudah beberapa tahun mengembangkan teknologi tersebut, akan tetapi belum diketahui kapan perusahaan tersebut akan meluncurkannya.
                                </p>
                                <p class="fs-5 mb-4">Adapun, untuk iPhone yang akan meluncur dalam waktu dekat atau iPhone 14 kemungkinan akan hadir pada musim gugur. Seperti kebiasaan Apple setiap tahunnya saat meluncurkan iPhone terbaru.
                                </p>
                            </section>
                        </article>
                    </div>
                </div>
            </div>
            <!-- tombol kembali ke halaman blog-->
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-9">
                        <a class="btn btn-primary me-2" href="../blog/blog2.php">Kembali ke Blog</a>
                    </div>
                </div>
        </section>

        <!-- End Post Blog -->

        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0 text-white">
                            Copyright &copy; 2022 &middot; Tubes &middot; Muhamad Rivan Sahronie
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

        <!-- Core theme JS-->
        <script src="../../assets/js/scripts.js"></script>
</body>

</html>