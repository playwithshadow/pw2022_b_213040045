<?php
session_start();

if (!isset($_SESSION["login"])) {
  echo "<script>
            alert('Loginlah Terlebih Dahulu!');
            document.location.href = 'login/login.php';
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
  <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />

  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Bootstrap Core-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Css saya -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-5-strong">
      <div class="container px-5">
        <img src="assets/img/logo.png" alt="" width="40" height="40" />
        <a class="navbar-brand" href="indexanggota.php">VAN TECHNOLOGY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="halamananggota/perpus/perpus.php">Perpustakaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="halamananggota/blog/blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="halamananggota/galeri/galeri.php">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboardadmin/dashboardanggota/index.php">Dashboard</a>
            </li>
          </ul>
          <div class="col-md-3 text-end">
            <a class="btn btn-outline-primary me-2" href="login/logout.php">Keluar</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
          <div class="col-lg-8 col-xl-7 col-xxl-6">
            <div class="my-5 text-center text-xl-start">
              <h1 class="display-5 fw-bolder text-white text-center mb-6">
                Selamat Datang di Van Technology
              </h1>
            </div>
          </div>
          <div class="col-xl-5 col-xxl-6 d-xl-block text-center">
            <img class="img-fluid rounded-3 my-5" src="assets/img/vantechblack.png" alt="..." />
          </div>
        </div>
      </div>
    </header>
  </main>
  <!-- End Header -->

  <!-- About-->
  <header class="py-5">
    <div class="container px-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xxl-6">
          <div class="text-start my-5">
            <h1 class="fw-bolder mb-3 text-center">Tentang Kami</h1>
            <img class="img-fluid rounded-3 my-5" src="assets/img/vantechwhite.png" alt="..." />
            <p class="lead fw-normal text-muted align-items-center ms-3 mb-4">
              Van Technology adalah sebuah website perpustakaan online yang
              menyediakan buku tentang perkembangan teknologi, dan menyediakan
              beberapa artikel tentang teknologi yang dikemas melalui blog,
              dan beberapa foto - foto tentang teknologi contohya seperti
              smartphone, komputer, laptop dan sebagainya.
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End About -->

  <!-- About section one-->
  <section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
      <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-5 mb-lg-0 shadow-lg" src="assets/img/header.jpg" alt="..." />
        </div>
        <div class="col-lg-6">
          <h2 class="fw-bolder">Perpustkaan Online</h2>
          <p class="lead fw-normal text-muted mb-0">
            Menyediakan beberapa buku tentang dunia teknologi, dan disediakan juga berdasarkan kategorinya.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About section one -->

  <!-- About section two-->
  <section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
      <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-5 mb-lg-0 shadow-lg" src="assets/img/header2.jpg" alt="..." />
        </div>
        <div class="col-lg-6">
          <h2 class="fw-bolder">Blog</h2>
          <p class="lead fw-normal text-muted mb-0">
            Menyediakan beberapa artikel terkait berita tentang perkembangan teknologi seperti smartphone, komputer, laptop dan sebagainya.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About section two -->

  <!-- About section three-->
  <section class="py-5 bg-light">
    <div class="container px-5 my-5">
      <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-5 mb-lg-0 shadow-lg" src="assets/img/header3.jpg" alt="..." />
        </div>
        <div class="col-lg-6">
          <h2 class="fw-bolder">Galeri</h2>
          <p class="lead fw-normal text-muted mb-0">
            Menyediakan beberapa foto - foto tentang dunia teknologi seperti smartphone, komputer, laptop dan sebagainya.
          </p>
        </div>
        <!-- tombol back top top -->
        <div class="col-12 text-end mt-5 pt-5">
          <a href="#" class="btn btn-primary btn-lg" id="back-to-top">
            <i class="bi bi-arrow-up-square-fill"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End About section three -->

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

  <!-- Core theme JS-->
  <script src="assets/js/scripts.js"></script>
</body>

</html>