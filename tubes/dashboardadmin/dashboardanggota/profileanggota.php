<?php
session_start();

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
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="../../assets/img/logo.png" />

  <title>Profile Anggota - Anggota</title>

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
        <a class="sidebar-brand" style="text-decoration: none" href="../../indexanggota.php">
          <span class="align-middle">Van Technology</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Pages</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="home"></i>
              <span class="align-middle">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="profileanggota.php">
              <i class="align-middle" data-feather="user"></i>
              <span class="align-middle">Profile</span>
            </a>
          </li>
          <!-- tombol kembali ke halaman index -->
          <div class="sidebar-footer">
            <a href="../../indexanggota.php" class="sidebar-link">
              <i class="align-middle" data-feather="skip-back"></i>
              <span class="align-middle">Kembali Ke VAN TECH</span>
            </a>
          </div>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
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

      <!-- Form Profile -->
      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3">Profile - <?= $tblanggota['nama']; ?></h1>
          <section class="padding-y bg-light">
            <div class="container">

              <div class="row">
                <aside class="col-lg-3 col-xl-3">
                  <!--  COMPONENT MENU LIST  -->
                  <nav class="nav flex-lg-column nav-pills mb-4">
                    <a class="nav-link active" href="profileanggota.php">Profil</a>
                    <a class="nav-link" href="../../login/logout.php">Keluar</a>
                  </nav>
                  <!--   COMPONENT MENU LIST END .//   -->
                </aside>
                <main class="col-lg-9">
                  <article class="card">
                    <div class="card-body">

                      <form>
                        <div class="row">
                          <div class="col-lg-8">
                            <div class="row gx-3">
                              <div class="col-lg-12  mb-3">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Admin" value="<?= $tblanggota['username']; ?>" readonly>
                              </div>

                              <div class="col-lg-12  mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" placeholder="Admin@gmail.com" value="<?= $tblanggota['email']; ?>" readonly>
                              </div>

                              <div class="col-lg-12  mb-3">
                                <label class="form-label">Level</label>
                                <input class="form-control" type="text" placeholder="Admin@gmail.com" value="<?= $tblanggota['level']; ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <aside class="col-lg-4">
                            <figure class="text-lg-center">
                              <h6>Foto</h6>
                              <img class="img-lg img-avatar" src="../img/<?= $tblanggota['gambar']; ?>" width="75px" alt="User Photo">
                            </figure>
                          </aside>
                        </div>
                      </form>

                      <hr class="my-4">

                      <div class="row" style="max-width:920px">
                        <div class="col-md">
                          <article class="box mb-3">
                            <a class="btn float-end btn btn-info btn-sm" href="ubahanggota.php">Ganti Disini</a>
                            <p class="title mb-0">Ubah Data</p>
                          </article>
                        </div>
                      </div>


                      <div class="row" style="max-width:920px">
                        <div class="col-md">
                          <article class="box mb-3">
                            <a class="btn float-end btn btn-warning btn-sm" href="ubahpassword.php">Ganti Disini</a>
                            <p class="title mb-0">Ubah Password</p>
                          </article>
                        </div>
                      </div>

                    </div>
                  </article>
                </main>
              </div>

              <br><br>

            </div>
          </section>
        </div>
      </main>

      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
              <div class="small m-0 text-dark">
                Copyright &copy; 2022 &middot; Tubes &middot; Muhamad Rivan
                Sahronie
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
</body>

</html>