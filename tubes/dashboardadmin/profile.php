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
  <link rel="shortcut icon" href="../assets/img/logo.png" />

  <title>Profile - Admin</title>

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
        <a class="sidebar-brand" style="text-decoration: none" href="#">
          <span class="align-middle">Van Technology</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Pages</li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="dashboard.php">
              <i class="align-middle" data-feather="home"></i>
              <span class="align-middle">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="profile.php">
              <i class="align-middle" data-feather="user"></i>
              <span class="align-middle">Profile</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="book"></i>
              <span class="align-middle">Blank</span>
            </a>
          </li>

          <li class="sidebar-header">Tabel</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="tabeladmin/tabeladmin.php">
              <i class="align-middle" data-feather="database"></i>
              <span class="align-middle">Tabel Admin</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="tabelanggota.php">
              <i class="align-middle" data-feather="database"></i>
              <span class="align-middle">Tabel Anggota</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="database"></i>
              <span class="align-middle">Tabel Buku</span>
            </a>
          </li>
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
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                <span class="text-dark">Charles Hall</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="profile.php">
                  <i class="align-middle me-1" data-feather="user"></i>Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Form Profile -->
      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3">Profile</h1>
          <div class="row justify-content-center">
            <div class="col-md-6 py-2">
              <div class="card shadow-lg">
                <div class="fw-bolder fs-4 card-header text-center bg-primary text-light">
                  Form - Profile
                </div>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group row mb-3">
                      <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                      <div class="col-md-8">
                        <input type="text" id="nama" class="form-control" name="nama" placeholder="masukkan nama" required autofocus />
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                      <div class="col-md-8">
                        <input type="text" id="username" class="form-control" name="username" placeholder="masukkan username" required autofocus />
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                      <div class="col-md-8">
                        <input type="password" id="password" class="form-control" name="password" placeholder="masukkan password" required />
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                      <div class="col-md-8">
                        <input type="password" id="password" class="form-control" name="password2" placeholder="masukkan password" required />
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                      <div class="col-md-8">
                        <input type="email" id="email" class="form-control" name="email" placeholder="masukkan email" required />
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="gambar" class="col-md-4 col-form-label text-md-right">Gambar</label>
                      <div class="col-md-8">
                        <input type="file" id="gambar" class="form-control" name="gambar" />
                      </div>
                    </div>
                    <input type="hidden" name="level" value="1" />
                    <div class="d-grid gap-2 col-6 mx-auto py-3">
                      <button class="btn btn-primary" name="ubah">
                        Ubah Data
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
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