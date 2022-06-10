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
                                <h1 class="fw-bolder mb-1">Oppo A16k ponsel ramping Rp2 Jutaan Diluncurkan di RI</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Mei 22, 2022</div>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded" src="../../assets/img/artikel3-more.jpg" alt="..." /></figure>
                            <!-- Post content-->
                            <section class="mb-5">
                                <p class="fs-5 mb-4">Penerus Oppo A16 itu disebut hadir dengan tampilan yang lebih stylish dan lebih ramping. OPPO A16 dan A16e memberikan kontribusi cukup tinggi selama momen Ramadan dan Idulfitri di tahun ini. Secara total dari kedua perangkat ini memberikan kontribusi hampir 40 persen. Berarti, sambutan dan ketertarikan konsumen terhadap perangkat ini sangat tinggi</p>
                                <p class="fs-5 mb-4">Oppo A16k memiliki dimensi 164mm × 75.4mm × 7.85mm dan berat 175 gram. Oppo A16k mengusung layar LCD 6,52 inci dengan resolusi HD+ atau 720 x 1600 piksel. Untuk fotografi, Oppo A16k mengusung kamera utama tunggal beresolusi 13MP di bagian belakang. Sementara kamera depan berukuran 5MP berdesain waterdrop notch atau poni tetesan air.
                                </p>
                                <p class="fs-5 mb-4">Tak ketinggalan, smartphone ini juga dilengkapi sejumlah fitur penunjang fotografi meliputi fitur HDR Backlight untuk menunjang pengambilan foto saat cahaya latar belakang kuat maupun saat cahaya pada objek foto cukup redup. Ada pula tiga filter malam baru, AI beautification, hingga AI Pallete yang mampu mengubah foto dengan gaya gambar referensi populer di media sosial dalam satu klik.
                                </p>
                                <p class="fs-5 mb-4">Oppo A16k mengusung chipset MediaTek Helio G35, RAM 4GB dan ROM 64GB serta menjalankan ColorOS 11.1 berbasis sistem operasi Android 11. HP itu memiliki baterainya berkapasitas 4.230mAh dengan charger 10W
                                </p>
                                <p class="fs-5 mb-4">Dibanding pendahulunya, Oppo A16K diklaim tampil dengan desain yang baru, stylish dan ramping. Selain itu, A16K juga menawarkan daya tahan yang mumpuni berkat sertifikasi IPX4 yang membuatnya tahan dari cipratan air.
                                </p>
                                <p class="fs-5 mb-4">Oppo A16K menawarkan fleksibilitas penggunaan smartphone dalam kondisi apapun berkat uji kualitas ketat dan juga kemampuannya terhadap ciptaran air melalui sertifikasi IPX4," imbuhnya.
                                </p>
                                <p class="fs-5 mb-4">Harga Oppo A16k mulai Rp 2.199.000 dan tersedia dalam varian warna Hitam dan Putih. Ponsel bisa didapatkan secara daring melalui aplikasi Oppo Store atau Oppo Official Store pada jaringan situs e-dagang seperti Shopee, Lazada, Tokopedia, Blibli, JDID, Akulaku, dan Tiktok Shop.
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
                        <a class="btn btn-primary me-2" href="../blog/blog.php">Kembali ke Blog</a>
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