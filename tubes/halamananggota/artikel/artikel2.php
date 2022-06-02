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
                            <a class="nav-link" href="../galeri/galeri.php">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../dashboardanggota/index.php">Dashboard</a>
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
                                <h1 class="fw-bolder mb-1">GPU Nvidia Gerforce RTX 3090</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Maret 20, 2022</div>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded" src="../assets/img/artikel2-more.jpg" alt="..." /></figure>
                            <!-- Post content-->
                            <section class="mb-5">
                                <p class="fs-5 mb-4">GeForce RTX 3090 Ti dan 3090 adalah big ferocious GPU (BFGPU) dengan performa kelas TITAN. Didukung oleh Ampere, arsitektur RTX generasi ke-2 NVIDIA, yang menggandakan performa ray tracing dan AI dengan Ray Tracing Core, Tensor Core, dan multiprosesor streaming baru yang disempurnakan. Selain itu, perangkat ini dilengkapi memori G6X 24 GB andal, semuanya untuk menghadirkan pengalaman terbaik bagi penggemar game dan pembuat konten.</p>
                                <h2 class="fw-bolder mb-4 mt-5">Game HDR 8K</h2>
                                <p class="fs-5 mb-4">Sambung, mainkan, rekam, dan tonton dalam HDR yang brilian dengan resolusi hingga 8K dengan GeForce RTX 3090 Ti atau RTX 3090. Ambil rekaman hingga 8K HDR dengan fitur GeForce Experience™ ShadowPlay™ dan putar kembali secara lancar dengan dekode AV1.
                                </p>
                                <h2 class="fw-bolder mb-4 mt-5">Kemenangan Ditentukan Dalam Hitungan Milidetik</h2>
                                <p class="fs-5 mb-4">NVIDIA Reflex menghadirkan keunggulan kompetitif terbaik. Latensi terendah. Responsivitas terbaik. Didukung oleh Seri GPU GeForce RTX 30 dan Monitor NVIDIA® G-SYNC® dengan Reflex. Kunci target lebih cepat, bereaksi secepat kilat, dan tingkatkan ketepatan bidikan melalui rangkaian teknologi revolusioner yang dibuat untuk mengurangi dan mengukur latensi sistem pada game kompetitif.
                                </p>
                                <h2 class="fw-bolder mb-4 mt-5">Driver Siap Game dan Pemngalam Terbaik Untuk Setiap Game</h2>
                                <p class="fs-5 mb-4">Driver Game Ready GeForce menghadirkan pengalaman terbaik untuk game favorit Anda. Driver ini disetel dengan baik dalam kolaborasi dengan pengembang dan diuji secara ekstensif di ribuan konfigurasi perangkat keras untuk performa dan keandalan maksimum. Driver Game Ready juga memungkinkan Anda mengoptimalkan pengaturan game dengan sekali klik dan memberdayakan Anda dengan teknologi NVIDIA terbaru. Itulah yang kami sebut Game Ready.
                                </p>
                            </section>
                        </article>
                    </div>
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